$(document).on('ready', function () {
    listarCamion();
    guardarCam();
});
var listarCamion = function () {
    var tableCamion = $('#tablaCamion').DataTable({
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
            url: 'http://localhost/labProg2017/app/ordenEnvio/listar'
        },
        columns: [

            {data: 'IDCAMION'},
            {data: 'MODELO'},
            {data: 'MARCA'},
            {data: 'PATENTE'},
            {data: 'CHOFER'},
            {defaultContent: '<button type "button" class="eliminarCam btn btn-danger" data-toggle="modal" data-keyboard="true" id="eliminarCam" data-target="#confirmarEliminarCam"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button> <button type="button" class="editarCam btn btn-warning" data-toggle="modal" data-keyboard="true" id="editarCam" data-target="#modalCamion"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>'}
        ],
        language: espa,
        buttons: [
            {
                text: '<i class="fa fa-plus-circle"></i>',
                titleAttr: 'Nuevo Camion',
                className: 'btn btn-success',
                action: function () {
                    pruebaCam();
                }
            },
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
    editarCam('#tablaCamion tbody', tableCamion);
    eliminarCam('#tablaCamion tbody', tableCamion);
};

function pruebaCam() {
    limpiarCam();
    $('#modalCamion').modal();
}

function limpiarCam() {
    $('#impIdCam').val('');
    $('#inpModelo').val('');
    $('#inpMarca').val('');
    $('#inpPatente').val('');
    $('#inpChofer').val('');
}

var guardarCam = function () {
    $('#btnGuardarCam').on('click', function () {
        var idcamion = $('#impIdCam').val();
        var modelo = $('#inpModelo').val();
        var marca = $('#inpMarca').val();
        var patente = $('#inpPatente').val();
        var chofer = $('#inpChofer').val();
        if (idcamion > 0) {
            $.ajax({
                data: 'idcamion=' + idcamion + '&modelo=' + modelo + '&marca=' + marca + '&patente=' + patente + '&chofer=' + chofer,
                type: 'POST',
                url: 'camion/editar'
            }).done(function () {
                listarCamion();
                limpiarCam();
            });
        } else {
            $.ajax({
                data: '&modelo=' + modelo + '&marca=' + marca + '&patente=' + patente + '&chofer=' + chofer,
                type: 'POST',
                url: 'camion/guardar'
            }).done(function () {
                listarCamion();
                limpiarCam();
            });
        }
    });
};

var editarCam = function (tbody, table) {
    $(tbody).on('click', 'button.editarCam', function () {
        var data = table.row($(this).parents('tr')).data();
        var idcamion = $('#impIdCam').val(data.IDCAMION);
        var modelo = $('#inpModelo').val(data.MODELO);
        var marca = $('#inpMarca').val(data.MARCA);
        var patente = $('#inpPatente').val(data.PATENTE);
        var chofer = $('#inpChofer').val(data.CHOFER);
    });
};

var eliminarCam = function (tbody, table) {
    $(tbody).on('click', 'button.eliminarCam', function () {
        var data = table.row($(this).parents('tr')).data();
        var idcamion = $('#impIdElCam').val(data.IDCAMION);
    });
    $('#btnEliminarCam').on('click', function () {
        var idcamion = $('#impIdElCam').val();
        $.ajax({
            data: 'idcamion=' + idcamion,
            type: 'POST',
            url: 'camion/baja'
        }).done(function () {
            listarCamion();
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
