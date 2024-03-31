
 
<!--Modal for insert person -->
<div class="modal fade" id="personInsert" tabindex="-1" role="dialog" aria-labelledby="personModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header text-white">
                <h5 class="modal-title" id="personModalLabel">Registro de Usuarios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="frmPersonInsert" action="{{url('admin/getall/insert')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="firstName" class="mb-0">Nombre</label>
                        <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Ingrese su nombre">
                        <span class="error-message" id="firstName-error"></span>
                    </div>
                    <div class="form-group">
                        <label for="surName" class="mb-0">Apellido</label>
                        <input type="text" class="form-control" name="surName" id="surName" placeholder="Ingrese su apellido">
                        <span class="error-message" id="surName-error"></span>
                    </div>
                    <div class="form-group">
                        <label for="dni" class="mb-0">DNI</label>
                        <input type="text" class="form-control" name="dni" id="dni" placeholder="Ingrese su DNI">
                        <span class="error-message" id="dni-error"></span>
                    </div>
                    <div class="form-group">
                        <label for="birthDate" class="mb-0">Fecha de nacimiento</label>
                        <input type="date" class="form-control" name="birthDate" id="birthDate" placeholder="Ingrese su fecha de nacimiento" required max="{{ date('Y-m-d') }}">
                        <span class="error-message" id="birthDate-error"></span>
                    </div>                    
                    <div class="form-group">
                        <label for="phone" class="mb-0">Teléfono</label>
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Ingrese su teléfono">
                        <span class="error-message" id="phone-error"></span>
                    </div>
                    <div class="form-group">
                        <label for="email" class="mb-0">Correo electrónico</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese su correo electrónico">
                        <span class="error-message" id="email-error"></span>
                    </div>
                    <div class="form-group">
                        <label for="role" class="mb-0">Rol</label>
                        <select class="form-control" name="role" id="role">
                            <option value="">Seleccione un rol</option>
                            <option value="student">Estudiante</option>
                            <option value="admin">Administración</option>
                            <option value="teacher">Profesor</option>
                        </select>
                        <span class="error-message" id="role-error"></span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-info" onclick="validateForm()">Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!--Modal for update person --> 
