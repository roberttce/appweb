<div class="modal fade" id="personModal" tabindex="-1" role="dialog" aria-labelledby="personModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="personModalLabel">Información del Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!--Modal for insert person -->
<div class="modal fade" id="personInsert" tabindex="-1" role="dialog" aria-labelledby="personModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="personModalLabel">Registro de Usuarios</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="frmPersonInsert" action="{{url('admin/getall/insert')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="firstName">Nombre</label>
                        <input type="text" class="form-control" name="firstName" id="firstName" placeholder="Ingrese su nombre">
                    </div>
                    <div class="form-group">
                        <label for="surName">Apellido</label>
                        <input type="text" class="form-control" name="surName" id="surName" placeholder="Ingrese su apellido">
                    </div>
                    <div class="form-group">
                        <label for="dni">DNI</label>
                        <input type="text" class="form-control" name="dni" id="dni" placeholder="Ingrese su DNI">
                    </div>
                    <div class="form-group">
                        <label for="edad">Edad</label>
                        <input type="date" class="form-control" name="birthDate" id="birthDate" placeholder="Ingrese su edad">
                    </div>
                    <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Ingrese su teléfono">
                    </div>
                    <div class="form-group">
                        <label for="email">Correo electrónico</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese su correo electrónico">
                    </div>
                    <div class="form-group">
                        <label for="role">Rol</label>
                        <select class="form-control" name="role" id="role" required>
                            <option value="">Seleccione un rol</option>
                            <option value="student">Estudiante</option>
                            <option value="admin">Administración</option>
                            <option value="teacher">Profesor</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-info" onclick="personInsert();">Registrar</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
<!--Modal for update person --> 
<div class="modal fade" id="modal-personUpdate" tabindex="-1" role="dialog" aria-labelledby="modal-personUpdateLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-personUpdateLabel">Editar Persona</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario para editar persona -->
                <form id="form-updatePerson" >
                    @foreach ($listTPerson as $index => $person)
                        <div class="form-group" data-index="{{ $index }}" style="display: none;">
                            <input type="hidden" id="idPerson" value="{{ $person->idPerson }}">
                            <label for="firstName">Nombre</label>
                            <input type="text" class="form-control" id="firstName" value="{{ $person->firstName }}" required>
                            <label for="surName">Apellido</label>
                            <input type="text" class="form-control" id="surName" value="{{ $person->surName }}" required>
                            <label for="dni">DNI</label>
                            <input type="text" class="form-control" id="dni" maxlength="8" value="{{ $person->dni }}" required>
                            <label for="birthDate">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" id="birthDate" value="{{ $person->birthDate }}" required>
                            <label for="phone">Teléfono</label>
                            <input type="text" class="form-control" id="phone" value="{{ $person->phone }}" required>
                            <label for="email">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" value="{{ $person->email }}" required>
                            <label for="role">Rol</label>
                            <select class="form-control" id="role" required>
                                <option value="admin" {{ $person->role == 'admin' ? 'selected' : '' }}>Administrador</option>
                                <option value="teacher" {{ $person->role == 'teacher' ? 'selected' : '' }}>Profesor</option>
                                <option value="student" {{ $person->role == 'student' ? 'selected' : '' }}>Estudiante</option>
                                <option value="invitado" {{ $person->role == 'invitado' ? 'selected' : '' }}>Invitado</option>
                            </select>
                        </div>
                    @endforeach
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="btn-updatePerson">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>