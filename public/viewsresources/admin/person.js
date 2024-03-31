var modal = document.getElementById('personInsert');

modal.addEventListener('hidden.bs.modal', function () {
    var errorMessages = document.querySelectorAll('.error-message');
    errorMessages.forEach(function (errorMessage) {
        errorMessage.textContent = '';  
    });

    var inputFields = document.querySelectorAll('.form-control');
    inputFields.forEach(function (inputField) {
        inputField.classList.remove('error-input');  
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('frmPersonInsert');
    const inputs = form.querySelectorAll('.form-control');

    inputs.forEach(input => {
        input.addEventListener('input', function () {
            validateInput(input);
        });
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const forms = document.querySelectorAll('.form-personUpdate');

    forms.forEach(form => {
        const inputs = form.querySelectorAll('.form-control');

        inputs.forEach(input => {
            input.addEventListener('input', function () {
                validateInput(input);
            });
        });
    });
});

function personUpdate() {
    const form = document.getElementById('form-personUpdate'); // Corregir el ID del formulario
    const inputs = form.querySelectorAll('.form-control');

    let formIsValid = true;

    inputs.forEach(input => {
        validateInput(input);
        if (input.nextElementSibling.textContent !== '') {
            formIsValid = false;
        }
    });

    if (formIsValid) {
        swal({
            title: 'Confirmar operación',
            text: '¿Realmente desea proceder?',
            icon: 'warning',
            buttons: ['No, cancelar.', 'Sí, proceder.']
        }).then((proceed) => {
            if (proceed) {
                // Si el usuario confirma, enviar el formulario
                form.submit();
            }
        });
    }
}
function validateInput(input) {
    const errorSpan = input.nextElementSibling;
    const inputValue = input.value.trim();
    const inputName = input.getAttribute('name');

    // Validación específica según el nombre del campo
    switch (inputName) {
        case 'firstName':
            if (inputValue === '') {
                errorSpan.textContent = 'Este campo es obligatorio';
            } else {
                errorSpan.textContent = '';
            }
            break;
        case 'surName':
            if (inputValue === '') {
                errorSpan.textContent = 'Este campo es obligatorio';
            } else {
                errorSpan.textContent = '';
            }
            break;
        case 'dni':
            if (inputValue === '') {
                errorSpan.textContent = 'Este campo es obligatorio';
            } else if (!/^\d{8}$/.test(inputValue)) {
                errorSpan.textContent = 'El DNI debe tener exactamente 8 dígitos';
            } else {
                errorSpan.textContent = '';
            }
            break;
        case 'phone':
            if (inputValue === '') {
                errorSpan.textContent = 'Este campo es obligatorio';
            } else if (!/^\d{9}$/.test(inputValue)) {
                errorSpan.textContent = 'El telefono debe tener exactamente 9 dígitos';
            } else {
                errorSpan.textContent = '';
            }
            break;
        case 'birthDate':
            if(inputValue===''){
                errorSpan.textContent = 'Este campo es obligatorio';
            }
            else {
                errorSpan.textContent = '';
            }
            break;
        case 'email':
            if(inputValue===''){
                errorSpan.textContent = 'Este campo es obligatorio';
            }
            else if(!/^(([^<>()\[\]\\.,;:\s@”]+(\.[^<>()\[\]\\.,;:\s@”]+)*)|(“.+”))@((\[[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}\.[0–9]{1,3}])|(([a-zA-Z\-0–9]+\.)+[a-zA-Z]{2,}))$/.test(inputValue)){
                errorSpan.textContent = 'Este campo deve tener el formato de correo electronico';
            }
            else {
                errorSpan.textContent = '';
            }
            break;
        case 'role':
            if(inputValue===''){
                errorSpan.textContent = 'Este campo es obligatorio';
            }
            else {
                errorSpan.textContent = '';
            }
            break;
    }
}
 

function validateForm() {
    const form = document.getElementById('frmPersonInsert');
    const inputs = form.querySelectorAll('.form-control');

    let formIsValid = true;

    inputs.forEach(input => {
        validateInput(input);
        if (input.nextElementSibling.textContent !== '') {
            formIsValid = false;
        }
    });

    if (formIsValid) {
        swal({
            title: 'Confirmar operación',
            text: '¿Realmente desea proceder?',
            icon: 'warning',
            buttons: ['No, cancelar.', 'Sí, proceder.']
        }).then((proceed) => {
            if (proceed) {
                // Si el usuario confirma, enviar el formulario
                form.submit();
            }
        });
    }
}
// Obtener el modal

