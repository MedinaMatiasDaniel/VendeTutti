$(document).on('ready', function () {
    listarEmpleado();
    guardarEmp();
});
var listarEmpleado = function () {
    var tableUsuarios = $('#tablaUsuarios').DataTable({
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
            url: 'http://localhost/labProg2017/app/administrador/listar'
        },
        columns: [

            {data: 'IDEMPLEADO'},
            {data: 'NOMBRE'},
            {data: 'DIRECCION'},
            {data: 'LOCALIDAD'},
            {data: 'CP'},
            {data: 'EMAIL'},
            {data: 'TIPO'},
            {defaultContent: '<button type "button" class="eliminarAdmin btn btn-danger" data-toggle="modal" data-keyboard="true" id="eliminarAdmin" data-target="#confirmarEliminarAdmin"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button> <button type="button" class="editarAdmin btn btn-warning" data-toggle="modal" data-keyboard="true" id="editarAdmin" data-target="#modalAgregarUsuarioAdmin"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>'}
            //{defaultContent: '<button type "button" class="eliminar btn btn-primary" data-toggle="modal" data-keyboard="true" id="eliminar" data-target="#confirmarEliminar"><span class="glyphicon glyphicon-expand" aria-hidden="true"></span></button>'}
        ],
        language: espa,
        buttons: [
            {
                text: '<i class="fa fa-plus-circle"></i>',
                titleAttr: 'Nuevo Usuario',
                className: 'btn btn-success',
                action: function () {
                    pruebaEmp();
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
    editarEmp('#tablaUsuarios tbody', tableUsuarios);
    eliminarEmp('#tablaUsuarios tbody', tableUsuarios);
};

function pruebaEmp() {
    limpiarEmp();
    $('#modalAgregarUsuarioAdmin').modal();
}

function limpiarEmp() {
    $('#impIdAdm').val('');
    $('#impEmail').val('');
    $('#selTipo').val('');
    $('#impNombre').val('');
    $('#impDir').val('');
    $('#impLoc').val('');
    $('#impCod').val('');
}

var guardarEmp = function () {
    $('#btnAceptarAdm').on('click', function () {
        var idempleado = $('#impIdAdm').val();
        var email = $('#impEmail').val();
        var tipo = $('#selTipo').val();
        var nombre = $('#impNombre').val();
        var direccion = $('#impDir').val();
        var localidad = $('#impLoc').val();
        var cp = $('#impCod').val();
        if (idempleado > 0) {
            $.ajax({
                data: 'idempleado=' + idempleado +'&nombre=' + nombre + '&email=' + email + '&tipo=' + tipo + '&cp=' + cp + '&direccion=' + direccion + '&localidad=' + localidad,
                type: 'POST',
                url: 'administrador/editar'
            }).done(function () {
                listarEmpleado();
                limpiarEmp();
            });
        } else {
            $.ajax({
                data:  'nombre=' + nombre + '&email=' + email + '&tipo=' + tipo + '&cp=' + cp + '&direccion=' + direccion + '&localidad=' + localidad,
                type: 'POST',
                url: 'administrador/guardar'
            }).done(function () {
                listarEmpleado();
                limpiarEmp();
            });
        }
    });
};

var editarEmp = function (tbody, table) {
    $(tbody).on('click', 'button.editarAdmin', function () {
        var data = table.row($(this).parents('tr')).data();
        var idempleado = $('#impIdAdm').val(data.IDEMPLEADO);
        var email = $('#impEmail').val(data.EMAIL);
        var tipo = $('#selTipo').val(data.TIPO);
        console.log(tipo.val());
        var nombre = $('#impNombre').val(data.NOMBRE);
        var direccion = $('#impDir').val(data.DIRECCION);
        var localidad = $('#impLoc').val(data.LOCALIDAD);
        var cp = $('#impCod').val(data.CP);
    });
};

function select() {
    $('select#iva').on('change', function () {
        var valor = $(this).val();
        alert(valor);
    });
}

var eliminarEmp = function (tbody, table) {
    $(tbody).on('click', 'button.eliminarAdmin', function () {
        var data = table.row($(this).parents('tr')).data();
        var idempleado = $('#impIdElAdm').val(data.IDEMPLEADO);
        var nombre = $('#inpNombreEl').val(data.NOMBRE);
        var email = $('#inpEmailEl').val(data.EMAIL);
        var tipo = $('#inpTipoEl').val(data.TIPO);
    });
    $('#btnEliminarAdmin').on('click', function () {
        var idempleado = $('#impIdElAdm').val();
        $.ajax({
            data: 'idempleado=' + idempleado,
            type: 'POST',
            url: 'administrador/baja'
        }).done(function () {
            listarEmpleado();
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