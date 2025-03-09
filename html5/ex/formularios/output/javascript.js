function calculation() {
    var o = document.getElementById("result");
    var num1 = document.getElementById("num1");
    var num2 = document.getElementById("num2");

    o.value = parseFloat(num1.value) + parseFloat(num2.value);
}