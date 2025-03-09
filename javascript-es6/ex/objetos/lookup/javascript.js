function phoneticLookup(val) {
    let result = "";

    // Sólo cambia el código por debajo de esta línea
    const obj = {
        "alpha": "Adams",
        "bravo": "Boston",
        "charlie": "Chicago",
        "delta": "Denver",
        "echo": "Easy",
        "foxtrot": "Frank"
    }
    result = obj[val];

    // Sólo cambia el código por encima de esta línea
    return result;
}

const value = phoneticLookup("charlie")
console.log(value); // Chicago