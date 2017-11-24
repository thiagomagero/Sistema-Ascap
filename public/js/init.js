function ajaxFireDados(rota, callback){
    $.ajax({
      url: rota,
      type: "GET",
      data : "",
      beforeSend: function() {
        $('.loading').show();
      },
      complete: function() {
        $('.loading').hide();
      },
      success: callback,
      error: function() {
          toastr.error("Ocorreu um erro inesperado. Contate o suporte técnico da plataforma.",'Erro!');
      }
    });
}
function ajaxFire(idFormulario,regras){
  $.validator.setDefaults({ ignore: ":hidden:not(select)" });
  $("#"+idFormulario).validate({
    rules: regras,
    submitHandler: function(form) {
      $.ajax({
        url: form.action,
        type: form.method,
        data : $("#"+idFormulario).serialize(),
        beforeSend: function() {
          $('.loading').show();
        },
        success: function(data) {
          var retorno = data.retorno;
          var redirect = data.redirect;

          if(retorno==1){
            var mensagem = data.mensagem
            toastr.error(data.mensagem,'Erro!');
          }
          if(retorno==0){
            if(redirect){
              window.location = redirect;
            }else{
              $("#"+idFormulario)[0].reset();
              location.reload();
            }

          }
        },
        complete: function() {
          $('.loading').hide();
        }
      });
      return false;
    }
  });
}
if ($.isFunction($.fn.select2)) {

    $("#s2example-1").select2({
        placeholder: 'Select your country...',
        allowClear: true
    }).on('select2-open', function() {
        // Adding Custom Scrollbar
        $(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
    });


    $("#s2example-2").select2({
        placeholder: 'Choose your favorite US Countries',
        allowClear: true
    }).on('select2-open', function() {
        // Adding Custom Scrollbar
        $(this).data('select2').results.addClass('overflow-hidden').perfectScrollbar();
    });


    $("#s2example-4").select2({
        minimumInputLength: 1,
        placeholder: 'Search',
        ajax: {
            url: "data/select2-remote-data.php",
            dataType: 'json',
            quietMillis: 100,
            data: function(term, page) {
                return {
                    limit: -1,
                    q: term
                };
            },
            results: function(data, page) {
                return {
                    results: data
                }
            }
        },
        formatResult: function(student) {
            return "<div class='select2-user-result'>" + student.name + "</div>";
        },
        formatSelection: function(student) {
            return student.name;
        }

    });
}
function limpaElementos(){
  $(this)
  .find("input,textarea,select")
  .val('')
  .end()
  .find("input[type=checkbox], input[type=radio]")
  .prop("checked", "")
  .end();
}
$(document).ready(function(){
  $(".loading").hide();
  toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": true,
    "progressBar": true,
    "positionClass": "toast-top-right",
    "preventDuplicates": true,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
});
$( ".btnAddUsuario" ).on( "click", function() {
  limpaElementos();
  $("#modalAddUsuario").modal("show");
});

$( ".btnSalvaUsuario" ).on( "click", function() {
  var name = $("#name").val();
  var email = $("#email").val();
  var password = $("#password").val();
  $.ajax({
    url: "usuarios/salvar",
    type: "POST",
    data: {name:name,email:email,password:password},
    beforeSend: function() {
      $('.loading').show();
    },
    success : function(data){
      var retorno = data.retorno;
      if(retorno==0){
        location.reload();
      }
      if(retorno==1){
        toastr.error('Usuário já existe.','Erro!');
      }
    },
    error: function(){

    },
    complete: function() {
      $('.loading').hide();
    },

  });
});


function deletarUsuario(id){
  window.location.href = "/usuarios/deletar/"+id;
}
