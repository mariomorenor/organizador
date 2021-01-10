var $table_clientes = $("#table_clientes");
var $DataTable_clientes ; //Variable para setear el datatable


// AUTOLOAD

$(function(){

    $DataTable_clientes = $table_clientes.DataTable({
        responsive: true,
        scrollY:"50vh"
    });

})





