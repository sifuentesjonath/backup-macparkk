$(document).ready( function () {
    //$('#tblClients').DataTable();

    $('#tblClients').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"},
        "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "Todo"]],
        'paging': true,
        'info': true,
        'filter': true,
        'stateSave': true,
        'ajax': {
        "url":baseurl+"CClient/getClients",
        "type":"POST",
        dataSrc : ''
        },
        'columns':
        [
            {data: 'idCliente'},
            {data: 'cliente_nombre'},
            {data: 'cliente_apellido'},
            {data: 'cliente_correo'},
            {data: 'cliente_celular'}
        ],
    });

});