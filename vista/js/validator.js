//EJERCICIO 1 - TP1
$(document).ready(function() {
    $('#eje1tp1').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            enteredNumber: {
                message: ' Número no valido',
                validators: {
                    notEmpty: {
                        message: ' Ingrese un número por favor'
                    }
                }
            }
        },
    });
});

//EJERCICIO 4 - TP 4
$(document).ready(function() {
    $('#tp4ej4').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            patente: {
                validators: {
                    notEmpty: {
                        message: ' Debe ingresar una patente'
                    },
                    regexp: {
                        regexp: /^[A-ZÑ]{3}\s\d{3}$/,
                        message: 'Debe ser con este formato: LLL NNN.'
                    }
                }
            }
        },
    });
});

//EJERCICIO 5 - TP 4
$(document).ready(function() {
    $('#tp4ej5').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nroDni: {
                message: 'Este valor no es valido',
                validators: {
                    notEmpty: {
                        message: 'El DNI es obligatorio'
                    },
                    regexp: {
                        regexp: /^\d{8}$/,
                        message: 'Debe ingresar 8 dígitos.'
                    }
                }
            }
        }
    })
});

//EJERCICIO 6 - TP 4
$(document).ready(function() {
    $('#tp4ej6').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                message: 'Nombre no valido',
                validators: {
                    notEmpty: {
                        message: 'El nombre es obligatorio'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: 'La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            apellido: {
                message: 'Apellido no valido',
                validators: {
                    notEmpty: {
                        message: 'El apellido es obligatorio'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: 'La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            nroDni: {
                message: 'DNI no valido',
                validators: {
                    notEmpty: {
                        message: 'El Dni es obligatorio'
                    },
                    regexp: {
                        regexp: /^\d{8}$/,
                        message: 'Debe ingresar 8 dígitos.'
                    }
                }
            },
            domicilio: {
                message: 'Domicilio invalido',
                validators: {
                    notEmpty: {
                        message: 'Se requiere un domicilio'
                    }
                }
            },
            fechaNac: {
                validators: {
                    notEmpty: {
                        message: 'Debe ingresar una fecha'
                    }
                }
            },
            telefono: {
                validators: {
                    notEmpty: {
                        message: 'Ingrese nro de teléfono'
                    }
                }
            }
        },
    });
});

//EJERCICIO 7 - TP 4
$(document).ready(function() {
    $('#tp4ej7').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            patente: {
                validators: {
                    notEmpty: {
                        message: ' Debe ingresar una patente'
                    },
                    regexp: {
                        regexp: /^[A-ZÑ]{3}\s\d{3}$/,
                        message: 'Debe ser con este formato: LLL NNN.'
                    }
                }
            },
            marca: {
                validators: {
                    notEmpty: {
                        message: 'Debe ingresar una marca'
                    },
                    regexp: {
                        regexp: /[A-Za-z]+/,
                        message: 'Debe ser una marca valida'
                    }
                }
            },
            modelo: {
                validators: {
                    notEmpty: {
                        message: 'Debe ingresar un modelo'
                    },
                    regexp: {
                        regexp: /\d{4}/,
                        message: 'Debe ser con el formato: AAAA'
                    }
                }
            },
            dniDuenio: {
                validators: {
                    notEmpty: {
                        message: 'Debe ingresar un DNI'
                    },
                    regexp: {
                        regexp: /^\d{8}$/,
                        message: 'Debe ingresar 8 dígitos.'
                    }
                }
            }
        },
    });
});

//EJERCICIO 8 - TP 4
$(document).ready(function() {
    $('#tp4ej8').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nroDni: {
                validators: {
                    notEmpty: {
                        message: 'Debe ingresar un DNI'
                    },
                    regexp: {
                        regexp: /^\d{8}$/,
                        message: 'Debe ingresar 8 dígitos.'
                    }
                }
            },
            patente: {
                validators: {
                    notEmpty: {
                        message: ' Debe ingresar una patente'
                    },
                    regexp: {
                        regexp: /^[A-ZÑ]{3}\s\d{3}$/,
                        message: 'Debe ser con este formato: LLL NNN.'
                    }
                }
            }
        }
    });
});

//EJERCICIO 9 - TP4
$(document).ready(function() {
    $('#tp4ej9').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nroDni: {
                validators: {
                    notEmpty: {
                        message: 'Debe ingresar un DNI'
                    },
                    regexp: {
                        regexp: /^\d{8}$/,
                        message: 'Debe ingresar 8 dígitos.'
                    }
                }
            }
        }
    });
});

//ACCION EJERCICIO 9 - TP 4
$(document).ready(function() {
    $('#tp4ej9action').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nombre: {
                message: 'Nombre no valido',
                validators: {
                    notEmpty: {
                        message: 'El nombre es obligatorio'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: 'La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            apellido: {
                message: 'Apellido no valido',
                validators: {
                    notEmpty: {
                        message: 'El apellido es obligatorio'
                    },
                    regexp: {
                        regexp: /^([A-ZÁÉÍÓÚ]{1}[a-zñáéíóú]+[\s]*)+$/,
                        message: 'La primer letra en mayúscula. Solo letras.'
                    }
                }
            },
            domicilio: {
                message: 'Domicilio invalido',
                validators: {
                    notEmpty: {
                        message: 'Se requiere un domicilio'
                    }
                }
            },
            fechaNac: {
                validators: {
                    notEmpty: {
                        message: 'Debe ingresar una fecha'
                    }
                }
            },
            telefono: {
                validators: {
                    notEmpty: {
                        message: 'Ingrese nro de teléfono'
                    }
                }
            }
        },
    });
});

$(document).ready(function() {
    $('#tp5ej4-2').bootstrapValidator({
        message: 'Este valor no es valido',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            username: {
                validators: {
                    notEmpty: {
                        message: 'Debe ingresar un nombre de usuario'
                    },
                    regexp: {
                        regexp: /^(?=[a-zA-Z0-9._]{8,20}$)(?!.*[_.]{2})[^_.].*[^_.]$/,
                        message: ''
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Debe ingresar una contraseña'
                    },
                    regexp: {
                        regexp: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/,
                        message: 'Longitud minima de 8 caracteres. Al menos una mayúscula. Al menos una minúscula.'
                    },
                    different: {
                        field: 'username',
                        message: 'El nombre de usuario y la contraseña no pueden ser iguales'
                    }
                }
            }
        }
    });
});