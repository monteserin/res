let days = ["domingo", "lunes", "martes", "miercoles", "jueves", "viernes", "sabado"];

const recorrerDays = (day, key) => {
    console.log(key + ": Hoy es " + day);
}

days.forEach(recorrerDays);

/*
output:

0: Hoy es domingo
Hoy es lunes
Hoy es martes
Hoy es miercoles
Hoy es jueves
Hoy es viernes
Hoy es sabado
*/