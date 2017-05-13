
<script>
$(document).ready(function() {
    // Ligamos para você
    $('#formCall').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            tel: {

                validators: {
                	phone:{
                		country: 'BR',
                		message: 'Insira um número no padrão telefônico'
                	},
                    notEmpty: {
                        message: 'O campo não poder ser vazio'
                    }
                }
            },
            name:{
            	validators: {
		             notEmpty: {
		                message: 'Nos informe seu nome'
		             }
		         }
            },
            messenger:{
            	validators: {
		             notEmpty: {
		                message: 'Diga algo sobre o motivo da ligação'
		             }
		         }
            }
        }
    });
  
});


</script>

{{-- CONTATO FALECONOSCO --}}
<script>
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }

    function generateCaptcha() {
        $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));
    }

    generateCaptcha();

    $('#contactForm')
        .formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                firstName: {
                    validators: {
                        notEmpty: {
                            message: 'É necessário informar seu nome '
                        }
                    }
                },
                phoneNumber: {
                    validators: {

                        phone:{
                            country: 'BR',
                             message: 'Informe um número válido'
                        },
                        notEmpty: {
                            message: 'Informe seu telefone'
                            
                        },
                        regexp: {
                            textmessage: 'O número de telefone só pode conter dígitos, espaços ou um dos seguintes caracteeres: -, (,), +',
                            regexp: /^[0-9\s\-()+\.]+$/
                        },
                         stringLength: {
                            max: 16,
                            message: 'Seu telefone não poder conter mais que 11 caracteres'
                        }
                    }
                },
                email: {
                    validators: {
                        notEmpty: {
                            message: 'Email é um campo obrigatório'
                        },
                        emailAddress: {
                            message: 'Email inválido'
                        }
                    }
                },
                message: {
                    validators: {
                        notEmpty: {
                            message: 'A mensagem é um campo obrigatório'
                        },
                        stringLength: {
                            max: 300,
                            message: 'A mensagem não pode conter mais que 300 caracteres'
                        }
                    }
                },

            }
        });
});
</script>
{{-- CONTATO FALECONOSCO --}}