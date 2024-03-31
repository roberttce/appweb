$(document).ready(function() {
    var table = $('#course').DataTable({/*
        "language": {
            url: '//cdn.datatables.net/plug-ins/2.0.2/i18n/es-ES.json'
        }*/
    });
});
function deleteCourse(idCourse) {
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
			window.location.href ='course/delete/'+idCourse;
		}
	});
}