$(function () {
    // uso de jquery validate con nuestro formulario html
    $("#formulario").validate({
        /*reglas de validaciones
         nombre y apellido obligatorios
         */

        rules: {
            'apellido1': 'required',
            'apellido2': 'required',
            'pais': 'required',
            'fecha_nacimiento': 'required',
            
            'nombre2': 'required',

            'nombre': 'required',
            'codigo_postal': {required: true, number: true},
            'telefono': {required: true, number: true},

            'email': {required: true, email: true},
           
            'password1': 'required',
            'password2': 'required'


        },
        // mensajes asociados a las reglas
        messages: {
            'apellido1': 'Obligatorio',
            'nombre': 'Obligatorio',
            'nombre2': 'Obligatorio',

            'password1': 'Obligatorio',
            'password2': 'Obligatorio',
            'codigo_postal': 'Obligatorio y sólo números',
            'email': 'Obligatorio y formato correcto',
            'telefono': 'Obligatorio y sólo números',
            'pais': 'Obligatorio'

        },
        debug: true,
        //código a ejecutar cuando el formulario está ya correctamente validado
      
    });

});