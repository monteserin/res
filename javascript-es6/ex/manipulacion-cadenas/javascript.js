const nombre = "Ramona";
console.log("Las dos primeras letras son: " + nombre.substring(0, 2)); // Ra
console.log("Las letras que van desde la tercera hasta la última posición son: " + nombre.substring(2)); //mona
console.log("La palabra tiene " + nombre.length + " letras"); // 5
console.log("La palabra en mayúsculas es: " + nombre.toUpperCase()); // RAMONA
console.log("La palabra en minúsculas es: " + nombre.toLowerCase()); // ramona
console.log("La posición de la primera 'a' de la palabra es: " + nombre.indexOf("a")); // 1
console.log("La posición de la última 'm' de la palabra es: " + nombre.lastIndexOf("a")); // 5
console.log("La primera letra de la palabra es: " + nombre.charAt(0)); // R
console.log("La primera letra de la palabra es: " + nombre[0]); // R