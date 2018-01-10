$(document).on('ready', function () {
    listarZona();
});
var listarZona = function () {
    var tableZona = $('#tablaZona').DataTable({
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
            url: 'http://localhost/labProg2017/app/zona/listar'
        },
        columns: [

            {data: 'IDZONA'},
            {data: 'AREA'},
            {defaultContent: '<button type "button" class="eliminar btn btn-danger" data-toggle="modal" data-keyboard="true" id="eliminar" data-target="#confirmarEliminar"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>  <button type="button" class="editar btn btn-warning" data-toggle="modal" data-keyboard="true" id="editar" data-target="#nuevaZona"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>'}
            //{defaultContent: '<button type "button" class="eliminar btn btn-primary" data-toggle="modal" data-keyboard="true" id="eliminar" data-target="#confirmarEliminar"><span class="glyphicon glyphicon-expand" aria-hidden="true"></span></button>'}
        ],
        language: espa,
        buttons: [
            {
                text: '<i class="fa fa-plus-circle"></i>',
                titleAttr: 'Nueva Zona',
                className: 'btn btn-success',
                action: function () {
                    pruebaZn();
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
    editarZn('#tablaZona tbody', tableZona);
    eliminarZn('#tablaZona tbody', tableZona);
    guardarZn();
};

function pruebaZn() {
    limpiarZn();
    $('#nuevaZona').modal();
}

function limpiarZn() {
    $('#impArea').val('');
}

var guardarZn = function () {
    $('#btnAgregar').on('click', function () {
        var idzona = $('#impNumero').val();
        var area = $('#impArea').val();
        console.log('iniciadas variables zona editar/guardar');
        if (idzona > 0) {
            $.ajax({
                data: 'idzona=' + idzona + '&area=' + area,
                type: 'POST',
                url: 'zona/editar'
            }).done(function () {
                listarZona();
                limpiarZn();
                console.log('zona editada');

            });
        } else {
            $.ajax({
                data: 'area=' + area,
                type: 'POST',
                url: 'zona/guardar'
            }).done(function () {
                listarZona();
                limpiarZn();
                console.log('zona guardada');
            });
        }
    });
};

var editarZn = function (tbody, table) {
    $(tbody).on('click', 'button.editar', function () {
        var data = table.row($(this).parents('tr')).data();
        var IDZONA = $('#impNumero').val(data.IDZONA);
        var AREA = $('#impArea').val(data.AREA);
        console.log('inicializa variables zona');
    });
};

var eliminarZn = function (tbody, table) {
    $(tbody).on('click', 'button.eliminar', function () {
        var data = table.row($(this).parents('tr')).data();
        var IDZONA = $('#impId').val(data.IDZONA);
    });
    $('#btnEliminar').on('click', function () {
        var idzona = $('#impId').val();
        $.ajax({
            data: 'idzona=' + idzona,
            type: 'POST',
            url: 'zona/baja'
        }).done(function () {
            listarZona();
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
        sLast: 'Último',
        sNext: 'Siguiente',
        sPrevious: 'Anterior'
    },
    oAria: {
        sSortAscending: ': Activar para ordenar la columna de manera ascendente',
        sSortDescending: ': Activar para ordenar la columna de manera descendente'
    }
};