$(document).ready(function() {
	$('#formulario').bootstrapValidator({
		feedbackIcons: {
			valid: 'glyphicon glyphicon-ok',
			invalid: 'glyphicon glyphicon-remove',
			validating: 'glyphicon glyphicon-refresh'
		},
		fields: {
            nombre: {
                validators: {
                        stringLength: {
                        min: 8,
                        message: 'Ingrese su nombre completo'
                    },
                        notEmpty: {
                        message: 'Por favor ingrese su nombre completo'
                    }
                }
            },
            ci: {
                validators:{
                    stringLength:{
                        min: 5,
                        message: 'Ingrese su numero de CI completo'
                    },
                    numeric:{
                        message:'Ingrese solo los números de su CI'
                    },
                    notEmpty:{
                        message: 'Ingrese su numero de carnet de identidad'
                    }
                }
            },
            expedido:{
                validators: {
                    notEmpty: {
                        message: 'En que ciudad fue expedido su CI'
                    }
                }
            },
            mail: {
                validators: {
                    notEmpty: {
                        message: 'Por favor ingrese su correo electrónico'
                    },
                    emailAddress: {
                        message: 'Por favor ingrese un correo electrónico valido'
                    }
                }
            },
            telefono: {
                validators: {
					 stringLength: {
                        min: 7,
                    },
                    numeric:{
                        message: 'Ingrese un número de teléfono válido'
                    },
                    notEmpty: {
                        message: 'Porfavor ingrese su número de teléfono'
                    },
                }
            },
            integrantes: {
                validators:{
                    notEmpty: {
                        message: 'Seleccione la cantidad de familiares directos'
                    }
                }
            },
            ciudad: {
                validators: {
                stringLength: {
                        min: 5,
                        message: 'Por favor ingrese su ciudad en la que radíca'
                    },
                        notEmpty: {
                        message: 'Por favor ingrese su ciudad en la que radíca'
                    }
                }              
            },
            direccion: {
                validators:{
                    stringLength:{
                        min:5,
                        message: 'Por favor ingrese su dirección completa',
                    },
                    notEmpty: {
                        message: 'Ingrese su dirección actual'
                    }
                }
            }, 
            amaszonas: {
                validators:{
                    notEmpty: {
                        message: 'Selecciones su destino AMASZONAS favorito'
                    }
                }
            },
            pat: {
                validators:{
                    notEmpty: {
                        message: 'Selecciones su programa favorito de la Red PAT'
                    }
                }
            },
            acepto: {
                validators: {
                        notEmpty: {
                            message: 'Debe leer las bases del concurso'
                        }
                    }

                }
            }
        })

	.on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});