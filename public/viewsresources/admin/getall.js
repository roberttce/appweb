'use strict';
 $(document).ready(function() {
    var table = $('#person').DataTable();/*{
        /*"language": {
            url: '//cdn.datatables.net/plug-ins/2.0.2/i18n/es-ES.json'
        }
    });*/
    $('#role-filter').on('change', function() {
        var selectedRole = $(this).val();
        table.column(5) // Columna del rol
             .search(selectedRole)
             .draw();
    });

    $('#dni-filter').on('keyup', function() {
        var dni = $(this).val();
        table.column(1) // Columna del DNI
             .search(dni)
             .draw();
    });
});
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

function verUsuario() {
    window.location.href = "viewperson";
}

function deletePerson(idPeron) {
	swal(
	{
		title : 'Confirmar operación',
		text : '¿Realmente desea proceder?',
		icon : 'warning',
		buttons : ['No, cancelar.', 'Si, proceder.']
	})
	.then((proceed) =>
	{
		if(proceed)
		{
			window.location.href ='person/delete/'+idPeron;
		}
	});
}
$('#modal-personUpdate').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget);
    var index = button.data('index');

    // Ocultar todos los conjuntos de campos
    $(this).find('.form-group').hide();

    // Mostrar el conjunto de campos correspondiente a la persona seleccionada
    $(this).find('.form-group[data-index="' + index + '"]').show();
});