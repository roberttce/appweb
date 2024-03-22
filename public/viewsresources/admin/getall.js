 $(document).ready(function() {
    var table = $('#person').DataTable({
        "language": {
            url: '//cdn.datatables.net/plug-ins/2.0.2/i18n/es-ES.json',
        }
    });

    $('#role-filter').on('change', function() {
        var selectedRole = $(this).val();
        table.column(4) // Columna del rol
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