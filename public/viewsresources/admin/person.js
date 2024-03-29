'use strict';
$(() => {
    $('#frmPersonInsert').formValidation({
        framework: 'bootstrap',
        excluded: [':disabled', ':hidden', ':not(:visible)', '[class*="notValidate"]'],
        live: 'enabled',
        message: '<b style="color: #9d9d9d;">Asegúrese que realmente no necesita este valor.</b>',
        trigger: null,
        fields: {
            firstName: {
                validators: {
                    notEmpty: {
                        message: '<b style="color: red;">El campo "Nombre" es requerido.</b>'
                    }
                }
            },
            surName: {
                validators: {
                    notEmpty: {
                        message: '<b style="color: red;">El campo "Apellido" es requerido.</b>'
                    }
                }
            },
            dni: {
                validators: {
                    notEmpty: {
                        message: '<b style="color: red;">El campo "DNI" es requerido.</b>'
                    }
                }
            },
            edad: {
                validators: {
                    notEmpty: {
                        message: '<b style="color: red;">El campo "Edad" es requerido.</b>'
                    },
                    numeric: {
                        message: '<b style="color: red;">El campo "Edad" debe ser numérico.</b>'
                    },
                    greaterThan: {
                        value: 5,
                        inclusive: true,
                        message: '<b style="color: red;">El valor mínimo para el campo "Edad" es 6.</b>'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: '<b style="color: red;">El campo "Teléfono" es requerido.</b>'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: '<b style="color: red;">El campo "Correo electrónico" es requerido.</b>'
                    },
                    emailAddress: {
                        message: '<b style="color: red;">Por favor, ingrese un correo electrónico válido.</b>'
                    }
                }
            },
            role: {
                validators: {
                    notEmpty: {
                        message: '<b style="color: red;">El campo "Rol" es requerido.</b>'
                    }
                }
            }
        }
    });
});
function personInsert() {
	
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
			$('#frmPersonInsert')[0].submit();
		}
	});
}