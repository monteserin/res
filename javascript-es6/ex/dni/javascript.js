const calculateDNILetter = (dniNumber) => {
  if (dniNumber.length !== 8 || isNaN(dniNumber)) {
    return "";
  } else {
    const rest = dniNumber % 23;
    const letter = "TRWAGMYFPDXBNJZSQVHLCKE".charAt(rest);
    return letter;
  }
};

document.querySelector("button").addEventListener("click", () => {
  const number = document.querySelector("#dniNumber").value;
  const letter = calculateDNILetter(number);
  document.querySelector("output").value = letter;
});
