$(document).on('ready', function () {
    listarModif();
    guardarZn();
});
var listarModif = function () {
    var tableModif = $('#tablaModif').DataTable({
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
            url: 'http://localhost/labProg2017/app/Modif/listar'
        },
        columns: [

            {data: 'IDMODIFICACION'},
            {data: 'IDCLIENTE'},
            {data: 'IDORDEN'},
            {data: 'ESTADO'},
            {data: 'FECHAPREVISTA'},
            {data: 'NUEVAFECHA'},
            {data: 'DIRECCIONPREVISTA'},
            {defaultContent: '<button type "button" class="eliminarMod btn btn-danger" data-toggle="modal" data-keyboard="true" id="eliminarMod" data-target="#confirmarEliminarMod"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>  <button type="button" class="aceptar btn btn-warning" data-toggle="modal" data-keyboard="true" id="aceptar" data-target="#confirmarAceptar"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></button>'},
            {defaultContent: '<button type "button" class="masInfo btn btn-primary" data-toggle="modal" data-keyboard="true" id="masInfo" data-target="#confirmarEliminar"><span class="glyphicon glyphicon-expand" aria-hidden="true"></span></button>'}
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
    aceptarMod('#tablaModif tbody', tableModif);
    eliminarMod('#tablaModif tbody', tableModif);
};

function limpiarZn() {
    $('#impArea').val('');
}

var guardarZn = function () {
    $('#btnAgregar').on('click', function () {
        var idModif = $('#impNumero').val();
        var area = $('#impArea').val();
        if (idModif > 0) {
            $.ajax({
                data: 'idModif=' + idModif + '&area=' + area,
                type: 'POST',
                url: 'modificacion/editar'
            }).done(function () {
                listarModif();
                limpiarZn();

            });
        } else {
            $.ajax({
                data: 'area=' + area,
                type: 'POST',
                url: 'modificacion/guardar'
            }).done(function () {
                listarModif();
                limpiarZn();
            });
        }
    });
};

var aceptarMod = function (tbody, table) {
    $(tbody).on('click', 'button.acceptar', function () {
        var data = table.row($(this).parents('tr')).data();
        var IDMODIFICACION = $('#aceptarModif').val(data.IDMODIFICACION);
        var IDCLIENTE = $('#impArea').val(data.IDCLIENTE);
        var ESTADO= $('#impArea').val(data.ESTADO);
        var FECHAPREVISTA = $('#impArea').val(data.FECHAPREVISTA);
        var NUEVAFECHA = $('#impArea').val(data.NUEVAFECHA);
        var DIRECCIONPREVISTA = $('#impArea').val(data.DIRECCIONPREVISTA);
    });
    $('#btnAceptar').on('click', function () {
        var idmodifAcep = $('#aceptarModif').val();
        $.ajax({
            data: 'idmodifAcep=' + idmodifAcep,
            type: 'POST',
            url: 'ordenEnvio/editar'
        }).done(function () {
            $.ajax({
            data: 'idmodifAcep=' + idmodifAcep,
            type: 'POST',
            url: 'modificacion/baja'
        }).done(function () {
            listarModif();
        });
        });
    });
};

var eliminarMod = function (tbody, table) {
    $(tbody).on('click', 'button.eliminarMod', function () {
        var data = table.row($(this).parents('tr')).data();
        var IDMODIFICACION = $('#impIdModif').val(data.IDMODIFICACION);
    });
    $('#btnEliminar').on('click', function () {
        var idmodif = $('#impIdModif').val();
        $.ajax({
            data: 'idmodif=' + idmodif,
            type: 'POST',
            url: 'modificacion/baja'
        }).done(function () {
            listarModif();
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