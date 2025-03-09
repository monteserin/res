const options = ["piedra", "papel", "tijera"];

let random;

const reset = () => {
  random = options[Math.floor(Math.random() * 3)];
  document.querySelector(
    ".solution img"
  ).src = `https://pablomonteserin.com/res/javascript-es6/ex/piedra-papel-o-tijera/assets/question.jpeg`;
};

reset();
document.querySelectorAll(".images img").forEach((obj) => {
  obj.addEventListener("click", (e) => {
    const value = obj.getAttribute("data-value");
    document.querySelector(
      ".solution img"
    ).src = `https://pablomonteserin.com/res/javascript-es6/ex/piedra-papel-o-tijera/assets/${random}.jpeg`;
    console.log("11111", random, value);
    if (value === random) {
      alert("Empate");
    } else if (value === "piedra" && random === "tijera") {
      alert("Ganaste");
    } else if (value === "papel" && random === "piedra") {
      alert("Ganaste");
    } else if (value === "tijera" && random === "papel") {
      alert("Ganaste");
    } else {
      alert("Perdiste");
    }
    setTimeout(reset, 3000);
  });
});
