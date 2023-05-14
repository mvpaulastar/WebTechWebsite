function calculate() {
  const num1 = parseInt(document.getElementById("num1").value);
  const num2 = parseInt(document.getElementById("num2").value);
  const operation = document.getElementById("operation").value;
  let result;
  const output = document.getElementById("output");

  if (operation === "add") {
    result = num1 + num2;
  } else if (operation === "sub") {
    result = num1 - num2;
  } else if (operation === "mul") {
    result = num1 * num2;
  } else if (operation === "div") {
    result = num1 / num2;
  }

  output.innerHTML = "<h3> Your result is: " + result + " </h3>";
}

const submit = document.getElementById("submit");
submit.addEventListener("click", calculate, false);
