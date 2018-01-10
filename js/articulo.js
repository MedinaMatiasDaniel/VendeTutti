$(document).on('ready', function () {
    listarArticulo();
    guardarArt();
});
var listarArticulo = function () {
    var tableArticulo = $('#tablaArticulo').DataTable({
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
            url: 'http://localhost/labProg2017/app/articulo/listar'
        },
        columns: [

            {data: 'IDARTICULO'},
            {data: 'NOMBRE'},
            {data: 'MARCA'},
            {data: 'DESCRIPCION'},
            {defaultContent: '<button type "button" class="btnEliminarArt btn btn-danger" data-toggle="modal" data-keyboard="true" id="btnEliminarArt" data-target="#confirmarEliminarArt"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button> <button type="button" class="editarArt btn btn-warning" data-toggle="modal" data-keyboard="true" id="editarArt" data-target="#modalArticulo"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>'}
            //{defaultContent: '<button type "button" class="eliminar btn btn-primary" data-toggle="modal" data-keyboard="true" id="eliminar" data-target="#confirmarEliminar"><span class="glyphicon glyphicon-expand" aria-hidden="true"></span></button>'}
        ],
        language: espa,
        buttons: [
            {
                text: '<i class="fa fa-plus-circle"></i>',
                titleAttr: 'Nuevo Articulo',
                className: 'btn btn-success',
                action: function () {
                    pruebaArt();
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
    editarArt('#tablaArticulo tbody', tableArticulo);
    eliminarArt('#tablaArticulo tbody', tableArticulo);
};

function pruebaArt() {
    limpiarArt();
    $('#modalArticulo').modal();
}

function limpiarArt() {
        $('#impIdArt').val('');
        $('#inpNomb').val('');
        $('#impMarca').val('');
        $('#impDesc').val('');
}

var guardarArt = function () {
    $('#btnEnviarArt').on('click', function () {
        var idarticulo = $('#impIdArt').val();
        var nombre = $('#inpNomb').val();
        var marca = $('#impMarca').val();
        var descripcion = $('#impDesc').val();
        if (idarticulo > 0) {
            $.ajax({
                data: 'idarticulo=' + idarticulo + '&nombre=' + nombre + '&marca=' + marca + '&descripcion=' + descripcion,
                type: 'POST',
                url: 'articulo/editar'
            }).done(function () {
                listarArticulo();
                limpiarArt();
            });
        } else {
            $.ajax({
                data: '&nombre=' + nombre + '&marca=' + marca + '&descripcion=' + descripcion,
                type: 'POST',
                url: 'articulo/guardar'
            }).done(function () {
                listarArticulo();
                limpiarArt();
            });
        }
    });
};

var editarArt = function (tbody, table) {
    $(tbody).on('click', 'button.editarArt', function () {
        var data = table.row($(this).parents('tr')).data();
        var idarticulo = $('#impIdArt').val(data.IDARTICULO);
        var nombre = $('#inpNomb').val(data.NOMBRE);
        var marca = $('#impMarca').val(data.MARCA);
        var descripcion = $('#impDesc').val(data.DESCRIPCION);
    });
};

var eliminarArt = function (tbody, table) {
    $(tbody).on('click', 'button.btnEliminarArt', function () {
        var data = table.row($(this).parents('tr')).data();
        var idarticulo = $('#impIdElArt').val(data.IDARTICULO);
    });
    $('#btnEliminarArt').on('click', function () {
        var idarticulo = $('#impIdElArt').val();
        $.ajax({
            data: 'idarticulo=' + idarticulo,
            type: 'POST',
            url: 'articulo/baja'
        }).done(function () {
            listarArticulo();
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
