$(document).on('ready', function () {
    listarOrden();
    guardarOrd();
});
var listarOrden = function () {
    var tableOrden = $('#tablaOrden').DataTable({
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
            {data: 'IDORDEN'},
            {data: 'IDCLIENTE'},
            {data: 'IDCAMION'},
            {data: 'IDZONA'},
            {data: 'ESTADO'},
            {data: 'FECHAINGRESO'},
            {data: 'FECHAENTREGA'},
            {data: 'HORARIO'},
            {data: 'DIRECCION'},
            {data: 'LOCALIDAD'},
            {data: 'OBSERVACIONES'},
            {defaultContent: '<button type "button" class="eliminarOrd btn btn-danger" data-toggle="modal" data-keyboard="true" id="eliminarOrd" data-target="#confirmarEliminarOrd"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button> <button type="button" class="editarOrd btn btn-warning" data-toggle="modal" data-keyboard="true" id="editarOrd" data-target="#modalOrdenEnvio"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>'}
        ],
        language: espa,
        buttons: [
            {
                text: '<i class="fa fa-plus-circle"></i>',
                titleAttr: 'Nueva Orden',
                className: 'btn btn-success',
                action: function () {
                    pruebaOrd();
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
    editarOrd('#tablaOrden tbody', tableOrden);
    eliminarOrd('#tablaOrden tbody', tableOrden);
};

function pruebaOrd() {
    limpiarOrd();
    $('#modalOrdenEnvio').modal();
}

function limpiarOrd() {
    $('#impIdOrd').val('');
    $('#inpCliente').val('');
    $('#impCamion').val('');
    $('#inpZona').val('');
    $('#selEstado').val('');
    $('#impFechaIngreso').val('');
    $('#impFechaEntrega').val('');
    $('#impHorario').val('');
    $('#impObser').val('');
}

var guardarOrd = function () {
    $('#btnGuardarOrd').on('click', function () {
        var idorden = $('#impIdOrd').val();
        var idcliente = $('#inpCliente').val();
        var idcamion = $('#impCamion').val();
        var idzona = $('#inpZona').val();
        var estado = $('#selEstado').val();
        var fechaingreso = $('#impFechaIngreso').val();
        var fechaentrega = $('#impFechaEntrega').val();
        var hora = $('#impHorario').val();
        var observacion = $('#impObser').val();
        if (idORDEN > 0) {
            $.ajax({
                data: 'idorden=' + idorden + '&idcliente=' + idcliente + '&idcamion=' + idcamion + '&idzona=' + idzona + '&estado=' + estado + '&fechaingreso=' + fechaingreso + '&fechaentrega=' + fechaentrega + '&horario=' + horario + '&observaciones=' + observaciones,
                type: 'POST',
                url: 'ordenEnvio/editar'
            }).done(function () {
                listarOrden();
                limpiarOrd();
            });
        } else {
            $.ajax({
                data: '&idcliente=' + idcliente + '&idcamion=' + idcamion + '&idzona=' + idzona + '&estado=' + estado + '&fechaingreso=' + fechaingreso + '&fechaentrega=' + fechaentrega + '&horario=' + horario + '&observaciones=' + observaciones,
                type: 'POST',
                url: 'ordenEnvio/guardar'
            }).done(function () {
                listarOrden();
                limpiarOrd();
            });
        }
    });
};

var editarOrd = function (tbody, table) {
    $(tbody).on('click', 'button.editarOrd', function () {
        var data = table.row($(this).parents('tr')).data();
        var idorden = $('#impIdOrd').val(data.IDORDEN);
        var idcliente = $('#inpCliente').val(data.IDCLIENTE);
        var idcamion = $('#impCamion').val(data.IDCAMION);
        var idzona = $('#inpZona').val(data.IDZONA);
        var estado = $('#selEstado').val(data.ESTADO);
        var fechaingreso = $('#impFechaIngreso').val(data.FECHAINGRESO);
        var fechaentrega = $('#impFechaEntrega').val(data.FECHAENTREGA);
        var hora = $('#impHorario').val(data.HORARIO);
        var observacion = $('#impObser').val(data.OBSERVACIONES);
    });
};

var eliminarOrd = function (tbody, table) {
    $(tbody).on('click', 'button.eliminarOrd', function () {
        var data = table.row($(this).parents('tr')).data();
        var idOrden = $('#impIdElOrd').val(data.IDORDEN);
    });
    $('#btnEliminarOrd').on('click', function () {
        var idOrden = $('#impIdElOrd').val();
        $.ajax({
            data: 'idOrden=' + idOrden,
            type: 'POST',
            url: 'ordenEnvio/baja'
        }).done(function () {
            listarOrden();
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
