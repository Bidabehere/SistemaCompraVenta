var tabla;

//funcion que se ejecuta al inicio

function init(){

mostrarform(false);
listar();

}

//Funcion limpiar
function limpiar(){

    $("#idcategoria").val("");
    $("#nombre").val("");
    $("#descripcion").val("");
}

//funcion mostrar formulario
function mostrarform(flag)
{
    limpiar();
    if(flag){
        $("#listadoregistros").hide();
        $("#formularioregistros").show();
        $("#btnGuardar").prop("disabled",false);
    }else{
        $("#listadoregistros").show();
        $("#formularioregistros").hide();
    }

}

//funcion cancelar form
function cancelarform(){
    limpiar();
    mostrarform(false);
}

//funcion listar
/*
function listar(){

    tabla = $('#tbllistado').Datatable({
        "aProcessing":true, //activamos el procesamiento del datatables
        "aServerSide":true,//Paginacion y filtrado realizados por el servidor
        dom:'Bfrtip',//Definimos los elementos del control de tabla
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdf'
        ],
    "ajax":
    {
        url: '../ajax/categoria.php?op=listar',
        type: "get",
        dataType: "json",
        error: function(e){
            console.log(e.responseText);
        }
    },
    "bDestroy": true,
    "iDisplaylength":5,//Paginacion
    "order":[[0,"desc"]]//ordenar (columna, orden)
}).Datatable();
}*/

//funcion listar



        $('document').ready(function () {
                    $('#tbllistado').DataTable({


        "aProcessing":true, //activamos el procesamiento del datatables
        "aServerSide":true,//Paginacion y filtrado realizados por el servidor
        dom:'Bfrtip',//Definimos los elementos del control de tabla
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdf'
        ],
    "ajax":
    {
        url: '../ajax/categoria.php?op=listar',
        type: "get",
        dataType: "json",
        error: function(e){
            console.log(e.responseText);
        }
    },
    "bDestroy": true,
    "iDisplaylength":5,//Paginacion
    "order":[[0,"desc"]]//ordenar (columna, orden)
}).Datatable();
})

init();



