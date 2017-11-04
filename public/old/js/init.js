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
  
  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
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