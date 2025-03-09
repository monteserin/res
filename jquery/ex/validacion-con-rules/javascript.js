$(document).ready(function () {
    $("#myform").validate({
        rules: {
            //los name de los elementos
            fieldNombre: {
                required: true
            },
            fieldApellidos: {
                required: true
            },
            fieldEdad: {
                required: true,
                digits: true
            },
            fieldDireccion: {
                required: true
            },
            fieldCP: {
                required: true,
                digits: true,
                minlength: 5,
                maxlength: 5
            },
            fieldCorreo: {
                email: true,
                required: true
            },
            fieldPagina: {
                url: true,
                required: true
            },
            fieldPassword: {
                required: true
            },
            fieldPasswordb: {
                required: true,
                equalTo: "#idPassword"
            },

        },
        messages: {
            fieldNombre: "Por favor, inserte su nombre",
            fieldApellidos: "Por favor, inserte sus apellidos",
            fieldEdad: {
                required: "Por favor, inserte la edad",
                number: "Sólo puedes introducir números"
            },
            fieldPassword: {
                required: "Por favor, inserte su password",
            },
            fieldPasswordb: {
                required: "Por favor, repita su password",
                equalTo: "Debe introducir el password introducido previamente"
            },
            fieldCorreo: "Por inserte un mail válido",
            fieldDireccion: "Debe introducir su direccion",
            fieldCP: {
                required: "Debe introducir su CP",
                number: "Sólo puede escribir números",
                minlength: "Debe introducir al menos 5 dígitos"
            },
            fieldPagina: "Debe introducir una url válida"
        },
        submitHandler: function () {
            alert("rqr");
        }
    });
});