$(document).on('ready', function () {
    listarPanelCl();
    guardarPCl();
});
var listarPanelCl = function () {
    var tablePanelCl = $('#tablaPanelCliente').DataTable({
        autoWidth: true,
        destroy: true,
        responsive: true,
        scrollX: false,
        columnDefs: [
            {responsivePriority: 2, targets: 0},
            {responsivePriority: -1, targets: -1}
        ],
        dom: "<'row'<'form-inline' <'col-sm-offset-5'B>>>"
                + "<'row'<'form-inline' <'col-sm-offset-1'f>>>"
                + "<rt>"
                + "<'row'<'form-inline'"
                + "<'col-sm-6 col-md-6 col-lg-6'l>"
                + "<'col-sm-6 col-md-6 col-lg-6'p>>>", //Bfrtip
        ajax: {
            method: 'POST',
            url: 'http://localhost/labProg2017/app/panelcliente/listar'
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
            {data: 'OBSERVACIONES'},
            {defaultContent: '<button type="button" class="modificar btn btn-warning" data-toggle="modal" data-keyboard="true" id="modificar" data-target="#confirmarAceptarPCl"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>'}
            //{defaultContent: '<button type "button" class="eliminar btn btn-primary" data-toggle="modal" data-keyboard="true" id="eliminar" data-target="#confirmarEliminar"><span class="glyphicon glyphicon-expand" aria-hidden="true"></span></button>'}
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
    editarPCl('#tablaPanelCl tbody', tablePanelCl);
};

function limpiarPCl() {
    $('#idClienteCl').val('');
    $('#idOrdenCl').val('');
    $('#idCamionCl').val('');
    $('#idZonaCl').val('');
    $('#inpFecha').val('');
    $('#inpHorario').val('');
    $('#inpDir').val('');
    $('#inpLoc').val('');
}

var guardarPCl = function () {
    $('#btnEnviarModif').on('click', function () {
        var idorden = $('#idOrdenCl').val();
        var idcliente = $('#idClienteCl').val();
        var idcamion = $('#idCamionCl').val();
        var idzona = $('#idZonaCl').val();
        var nuevafecha = $('#inpFecha').val();
        var nuevohorario = $('#inpHorario').val();
        var nuevadireccion = $('#inpDir').val();
        var nuevalocalidad = $('#inpLoc').val();
        $.ajax({
            data: 'idorden=' + idorden + '&idcliente=' + idcliente +  '&idcamion=' + idcamion + '&idzona=' + idzona + '&nuevafecha=' + nuevafecha + '&nuevohorario=' + nuevohorario + '&nuevadireccion=' + nuevadireccion + '&nuevalocalidad=' + nuevalocalidad,
            type: 'POST',
            url: 'zona/guardar'
        }).done(function () {
            listarPanelCl();
            limpiarPCl();
        });
    });
};

var editarPCl = function (tbody, table) {
    $(tbody).on('click', 'button.editar', function () {
        var data = table.row($(this).parents('tr')).data();
        var IDORDEN = $('#idOrdenCl').val(data.IDORDEN);
        var IDCLIENTE = $('#idClienteCl').val(data.IDCLIENTE);
        var IDCAMION = $('#idCamionCl').val(data.IDCAMION);
        var IDZONA = $('#idZonaCl').val(data.IDZONA);
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
        sLast: 'Último',
        sNext: 'Siguiente',
        sPrevious: 'Anterior'
    },
    oAria: {
        sSortAscending: ': Activar para ordenar la columna de manera ascendente',
        sSortDescending: ': Activar para ordenar la columna de manera descendente'
    }
};