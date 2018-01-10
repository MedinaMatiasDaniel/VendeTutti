$(document).on('ready', function () {
    listarCliente();
    guardarCl();
});
var listarCliente = function () {
    var tableCliente = $('#tablaCliente').DataTable({
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
            url: 'http://localhost/labProg2017/app/cliente/listar'
        },
        columns: [

            {data: 'IDCLIENTE'},
            {data: 'RAZONSOCIAL'},
            {data: 'EMAIL'},
            {data: 'TIPOIVA'},
            {data: 'CUIT'},
            {data: 'NOMBRE'},
            {data: 'DIRECCION'},
            {data: 'CP'},
            {data: 'LOCALIDAD'},
            {defaultContent: '<button type "button" class="eliminarCl btn btn-danger" data-toggle="modal" data-keyboard="true" id="eliminarCl" data-target="#confirmarEliminarCl"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button> <button type="button" class="editarCl btn btn-warning" data-toggle="modal" data-keyboard="true" id="editarCl" data-target="#modalCliente"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>'}
            //{defaultContent: '<button type "button" class="eliminar btn btn-primary" data-toggle="modal" data-keyboard="true" id="eliminar" data-target="#confirmarEliminar"><span class="glyphicon glyphicon-expand" aria-hidden="true"></span></button>'}
        ],
        language: espa,
        buttons: [
            {
                text: '<i class="fa fa-plus-circle"></i>',
                titleAttr: 'Nuevo Cliente',
                className: 'btn btn-success',
                action: function () {
                    pruebaCl();
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
    editarCl('#tablaCliente tbody', tableCliente);
    eliminarCl('#tablaCliente tbody', tableCliente);
};

function pruebaCl() {
    limpiarCl();
    $('#modalCliente').modal();
}

function limpiarCl() {
    $('#impIdCl').val('');
    $('#inpRazon').val('');
    $('#inpEmail').val('');
    $('#impIva').val('');
    $('#inpCuit').val('');
    $('#inpNombre').val('');
    $('#inpDir').val('');
    $('#inpCod').val('');
    $('#inpLoc').val('');
}

var guardarCl = function () {
    $('#btnAgregarCl').on('click', function () {
        var idcliente = $('#impIdCl').val();
        var razonSoc = $('#inpRazon').val();
        var email = $('#inpEmail').val();
        var iva = $('#impIva').val();
        var cuit = $('#inpCuit').val();
        var nombre = $('#inpNombre').val();
        var direccion = $('#inpDir').val();
        var cp = $('#inpCod').val();
        var localidad = $('#inpLoc').val();
        if (idcliente > 0) {
            $.ajax({
                data: 'idcliente=' + idcliente + '&razonsocial=' + razonSoc + '&email=' + email + '&tipoiva=' + iva + '&cuit=' + cuit + '&cp=' + cp + '&localidad=' + localidad  + '&direccion=' + direccion + '&nombre=' + nombre,
                type: 'POST',
                url: 'cliente/editar'
            }).done(function () {
                listarCliente();
                limpiarCl();
            });
        } else {
            $.ajax({
                data: '&razonsocial=' + razonSoc + '&email=' + email + '&tipoiva=' + iva + '&cuit=' + cuit + '&cp=' + cp + '&localidad=' + localidad +'&direccion=' + direccion + '&nombre=' + nombre,
                type: 'POST',
                url: 'cliente/guardar'
            }).done(function () {
                listarCliente();
                limpiarCl();
            });
        }
    });
};

var editarCl = function (tbody, table) {
    $(tbody).on('click', 'button.editarCl', function () {
        var data = table.row($(this).parents('tr')).data();
        var idcliente = $('#impIdCl').val(data.IDCLIENTE);
        var razonSoc = $('#inpRazon').val(data.RAZONSOCIAL);
        var email = $('#inpEmail').val(data.EMAIL);
        var iva = $('#impIva').val(data.TIPOIVA);
        console.log($('#impIva').val());
        console.log(iva);
        console.log(iva.val());
        var cuit = $('#inpCuit').val(data.CUIT);
        var nombre = $('#inpNombre').val(data.NOMBRE);
        var direccion = $('#inpDir').val(data.DIRECCION);
        var cp = $('#inpCod').val(data.CP);
        var localidad = $('#inpLoc').val(data.LOCALIDAD);
    });
};

function select() {
    $('select#iva').on('change', function () {
        var valor = $(this).val();
        alert(valor);
    });
}

var eliminarCl = function (tbody, table) {
    $(tbody).on('click', 'button.eliminarCl', function () {
        var data = table.row($(this).parents('tr')).data();
        var idcliente = $('#impElIdCl').val(data.IDCLIENTE);
    });
    $('#btnEliminarCl').on('click', function () {
        var idcliente = $('#impElIdCl').val();
        $.ajax({
            data: 'idcliente=' + idcliente,
            type: 'POST',
            url: 'cliente/baja'
        }).done(function () {
            listarCliente();
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