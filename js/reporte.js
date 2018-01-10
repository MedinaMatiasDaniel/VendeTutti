$(document).on('ready', function () {
    listarReporte();
    consultaRep();
});
var listarReporte = function () {
    var tableReporte = $('#tablaReporte').DataTable({
        autoWidth: true,
        destroy: true,
        responsive: true,
        scrollX: false,
        columnDefs: [
            {responsivePriority: 2, targets: 0},
            {responsivePriority: -1, targets: -1}
        ],
        dom: "<'row'<'form-inline' <'col-sm-offset-5'B>>>"
                + "<'row'<'form-inline' <'col-md-offset-2'f>>>"
                + "<rt>"
                + "<'row'<'form-inline'"
                + "<'col-sm-6 col-md-6 col-lg-6'l>"
                + "<'col-sm-6 col-md-6 col-lg-6'p>>>", //Bfrtip
        ajax: {
            method: 'POST',
            url: 'http://localhost/labProg2017/app/reporte/listar'
        },
        columns: [
            {data: 'IDORDEN'},
            {data: 'IDCLIENTE'},
            {data: 'IDCAMION'},
            {data: 'IDZONA'},
            {data: 'ESTADO'},
            {data: 'FECHAINGRESO'},
            {data: 'FECHAENTREGA'},
            {data: 'HORARIO'},
            {data: 'OBSERVACIONES'}
        ],
        language: espa,
        buttons: [
            {
                extend: 'excelHtml5',
                text: '<i class="fa fa-file-excel-o"></i>',
                className: 'btn btn-info',
                titleAttr: 'Excel'
            },
            {
                extend: 'pdfHtml5',
                text: '<i class="fa fa-file-pdf-o"></i>',
                className: 'btn btn-info',
                titleAttr: 'PDF'
            },
            {
                extend: 'print',
                customize: function (win) {
                    $(win.document.body)
                            .css('font-size', '10pt')
                            .prepend(
                                    '<img src="http://datatables.net/media/images/logo-fade.png" style="position:absolute; top:0; left:0;" />'
                                    );

                    $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                },
                text: '<i class="fa fa-print"></i>',
                className: 'btn btn-info',
                titleAttr: 'Imprimir'
            }
        ]
    });
};

function limpiarRep() {
    $('#impArea').val('');
}

var consultaRep = function () {
    $('#btnBuscar').on('click', function () {
        var idcamion = $('#impNumero').val();
        var idzona = $('#impNumero').val();
        var estado = $('#impNumero').val();
        var fechaingreso = $('#impArea').val();
        var fechaentrega = $('#impArea').val();
            $.ajax({
                data: 'idcamion=' + idcamion + '&idzona=' + idzona + '&estado=' + estado + '&fechaingreso=' + fechaingreso + '&fechaentrega=' + fechaentrega,
                type: 'POST',
                url: 'reporte/editar'
            }).done(function () {
                listarReporte();
                limpiarRep();

            });
    });
};

var espa = {
    sProcessing: 'Procesando...',
    sLengthMenu: 'Mostrar _MENU_ registros',
    sZeroRecords: 'No se encontraron resultados',
    sEmptyTable: 'Ningun dato disponible en esta tabla',
    sInfo: 'Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros',
    sInfoEmpty: 'Mostrando registros del 0 al 0 de un total de 0 registros',
    sInfoFiltered: '(filtrado de un total de _MAX_ registros)',
    sInfoPostFix: '',
    sSearch: 'Buscar:',
    sUrl: '',
    sInfoThousands: ',',
    sLoadingRecords: 'Cargando...',
    oPaginate: {
        sFirst: 'Primero',
        sLast: '�ltimo',
        sNext: 'Siguiente',
        sPrevious: 'Anterior'
    },
    oAria: {
        sSortAscending: ': Activar para ordenar la columna de manera ascendente',
        sSortDescending: ': Activar para ordenar la columna de manera descendente'
    }
};