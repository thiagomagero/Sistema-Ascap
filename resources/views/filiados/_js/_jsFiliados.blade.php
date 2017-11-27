<script type="text/javascript">

$(document).on("click", ".deletar", function(event){
  var rota = $(this).data("rota");
  swal({
    title: "Tem certeza?",
    text: "Você não poderá desfazer esta ação",
    type: "warning",
    cancelButtonText: "Cancelar",
    showCancelButton: true,
    confirmButtonColor: '#ff0000',
    cancelButtonColor: '#ff0000',
    confirmButtonClass: "btn-danger",
    confirmButtonText: "Sim, deletar!",
    closeOnConfirm: false
  },
  function(){

    ajaxFireDados(rota, function(data){
        if(data.retorno==0){
          window.location = data.redirect;
        }
    });
  });
});

</script>
