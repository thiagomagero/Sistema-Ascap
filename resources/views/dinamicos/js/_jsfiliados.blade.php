<script type="text/javascript">
    $("#filiados").DataTable({
      processing:true,
      serverSide: true,
      "language": {
        
        "sEmptyTable": "Nenhum registro encontrado",
        "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
        "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
        "sInfoFiltered": "(Filtrados de _MAX_ registros)",
        "sInfoPostFix": "",
        "sInfoThousands": ".",
        "sLengthMenu": "_MENU_ resultados por página",
        "sLoadingRecords": "Carregando...",
        "sProcessing": '<div class="progress"> <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%"> </div> </div>',
        "sZeroRecords": "Nenhum registro encontrado",
        "sSearch": "Pesquisar",
        "oPaginate": {
          "sNext": "Próximo",
          "sPrevious": "Anterior",
          "sFirst": "Primeiro",
          "sLast": "Último"
        },
        "oAria": {
          "sSortAscending": ": Ordenar colunas de forma ascendente",
          "sSortDescending": ": Ordenar colunas de forma descendente"
        }
      },
      ajax: "{{ route('getFiliados') }}",
      
      columns:[
      {data: 'cpf', name: 'cpf'},
      {data: 'nome', name: 'nome'},
      {data: 'email', name: 'email'},
      {data: 'matricula', name: 'matricula'},
      {data: 'filiacao', name: 'filiacao'},
      {data: 'dt_nascimento', name: 'dt_nascimento'},
      {data: 'rg', name: 'rg'},
      {data: 'action', name: 'action', orderable: false, searchable:false}
      ]
    });
  </script>