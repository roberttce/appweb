@extends('template.layaut')
@section('sectionGeneral','Ver cursos')
@section('userName')
{{ session('firstName') }} {{ session('surName') }}
@endsection
@section('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap5.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('viewsresources/admin/getall.css') }}">  
@endsection
@section("dashboard")
<li class="nav-item">
  <a href="{{url('admin/getall')}}" class="nav-link active">
    <i class="far fa-circle nav-icon"></i>
    <p>ver Usuarios</p>
  </a>
  <a href="{{url('admin/course')}}" class="nav-link active">
    <i class="far fa-circle nav-icon"></i>
    <p>ver cursos</p>
  </a>
  <a href="{{url('admin/enrolled')}}" class="nav-link active">
    <i class="far fa-circle nav-icon"></i>
    <p>ver matriculas</p>
  </a>		
</li>
@endsection
@section('content')
<div id="page-content">
  <div class="row">
      <div class="col-md-12">
          <div class="widget">
              <div class="widget-extra themed-background-dark">
                  <div>
                      <h3 class="widget-content-light">
                          Relacion de Cursos
                      </h3>
                  </div>
                  <div class="widget-options">
                      <div class="btn-group">
                          <a class="btn btn-default" data-toggle="modal" data-target="#modal-courseInsert">
                              <i class="fa fa-plus"></i>
                          </a>
                      </div>
                  </div>
              </div>
              <div class="widget-extra">
                  <div class="div_table_user"></div>
              </div>
          </div>
      </div>							
  </div>
</div>
<table id="course" class="table table-striped">
  <thead>
      <tr>
          <th>Nombre</th>
          <th>Codigo</th>
          <th>Categoria</th>
          <th>Requisitos</th>
          <th>Descripcion</th>
          <th>Modalidad</th>
          <th>Acciones</th>
      </tr>
  </thead>
  <tbody>
      @foreach($listTCourse as $index => $value)
          <tr>
              <td>{{$value->name}}</td>
              <td>{{$value->code}}</td>
              <td>{{$value->category}}</td>
              <td>{{$value->requisites}}</td>
              <td>{{$value->description}}</td>  
              <td>{{$value->modality}}</td>
              <td class="text-right" >
                  <div class="btn-group" role="group">
                      <button type="button" data-toggle="modal" data-target="#personModal" class="btn btn-sm btn-primary mr-1" data-toggle="tooltip" title="Ver Usuario">
                          <i class="fas fa-eye"></i>
                      </button> 
                      <button type="button" class="btn btn-sm btn-warning mr-1" data-toggle="tooltip" title="Desactivar Usuario">
                          <i class="fas fa-ban"></i>
                      </button>
                      <button type="button" data-toggle="modal" data-target="#modal-personUpdate" class="btn btn-sm btn-success mr-1" data-toggle="tooltip" title="Actualizar Usuario">
                          <i class="fas fa-sync-alt"></i>
                      </button>
                      <button type="button" onclick="deleteCourse('{{ $value->idCourse }}');" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Eliminar">
                          <i class="fas fa-trash-alt"></i>
                      </button>
                  </div>
              </td>
          </tr>
      @endforeach
  </tbody>
</table>
<div class="modal fade" id="modal-courseInsert" tabindex="-1" role="dialog" aria-labelledby="courseModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #007bff; color: #fff;">
                <h5 class="modal-title" id="courseModalLabel">Registro de cursos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="courseForm" method="POST" action="{{ url('admin/teacher/course/insert') }}" style="padding: 20px;">
                @csrf
                <div class="form-group">
                    <label for="code">Código:</label>
                    <input type="text" name="code" id="code" class="form-control">
                    <span id="codeError" class="error-message" style="display: none;"></span>
                </div>
            
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" name="name" id="name" class="form-control">
                    <span id="nameError" class="error-message" style="display: none;"></span>
                </div>

                <div class="form-group">
                    <label for="category">Categoría:</label>
                    <input type="text" name="category" id="category" class="form-control">
                    <span id="categoryError" class="error-message" style="display: none;"></span>
                </div>
                <div class="form-group">
                    <label for="description">Descripción:</label>
                    <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                    <span id="descriptionError" class="error-message" style="display: none;"></span>
                </div>

                <div class="form-group">
                    <label for="modality">Modalidad:</label>
                    <select name="modality" id="modality" class="form-control">
                        <option value="Presencial">Presencial</option>
                        <option value="Online">Online</option>
                        <!-- Agrega más opciones según sea necesario -->
                    </select>
                    <span id="modalityError" class="error-message" style="display: none;"></span>
                </div>
            
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="courseInsert();" >Guardar Curso</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    function courseInsert() {
        let formIsValid = true;

        if (formIsValid) {
            swal({
                title: 'Confirmar operación',
                text: '¿Realmente desea proceder?',
                icon: 'warning',
                buttons: ['No, cancelar.', 'Sí, proceder.']
            }).then((proceed) => {
                if (proceed) {
                    const form = document.getElementById('courseForm'); // Corregir aquí
                    form.submit();
                }
            });
        }
    }
</script>
<script>
    function validateInput(input) {
        const errorSpan = input.nextElementSibling;
        const inputValue = input.value.trim();
        const inputName = input.getAttribute('name');

        // Validación específica según el nombre del campo
        switch (inputName) {
            case 'code':
                errorSpan.textContent = inputValue === '' ? 'Por favor, introduce un código válido.' : '';
                break;
            case 'name':
                errorSpan.textContent = inputValue === '' ? 'Por favor, introduce un nombre válido.' : '';
                break;
            case 'category':
                errorSpan.textContent = inputValue === '' ? 'Por favor, introduce una categoría válida.' : '';
                break;
            case 'description':
                errorSpan.textContent = inputValue === '' ? 'Por favor, introduce una descripción válida.' : '';
                break;
            case 'modality':
                errorSpan.textContent = inputValue === '' ? 'Por favor, selecciona una modalidad válida.' : '';
                break;
        }

        // Mostrar u ocultar el mensaje de error según el valor del campo
        input.classList.toggle('is-invalid', errorSpan.textContent !== '');
        errorSpan.style.display = errorSpan.textContent !== '' ? 'block' : 'none';
    }

    const inputs = document.querySelectorAll('#courseForm input, #courseForm textarea, #courseForm select');

    inputs.forEach(input => {
        input.addEventListener('input', function() {
            validateInput(this);
        });
    });
</script>

<style>
    .is-invalid {
        border-color: #dc3545 !important;
    }

    .error-message {
        color: #dc3545;
        display: none;
    }
</style>

<style>
    .modal-header {
        padding: 1rem;
        border-bottom: none;
    }

    .modal-footer {
        padding: 1rem;
        border-top: none;
    }

    .modal-content {
        border-radius: 0.5rem;
    }

    .modal-content form {
        margin-bottom: 0;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    label {
        font-weight: bold;
    }
</style>



@endsection
@section('js')
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{asset('viewsresources/admin/course/course.js')}}"></script>
@endsection