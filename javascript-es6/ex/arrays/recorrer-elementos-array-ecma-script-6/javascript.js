const days = ["domingo", "lunes", "martes", "miercoles", "jueves", "viernes", "sabado"];

const recorrerDays = day => {
    console.log("Hoy es " + day);
}

days.forEach(recorrerDays);

/* output:

Hoy es domingo
Hoy es lunes
Hoy es martes
Hoy es miercoles
Hoy es jueves
Hoy es viernes
Hoy es sabado

*/