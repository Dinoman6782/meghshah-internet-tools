document.getElementById("enterButton").addEventListener("click", function () {
  var input = document.getElementById("numberInput").value;
  var result = factorialize(input);
  document.getElementById("result").innerText = "Result: " + result;
});

function factorialze(number) {
  if (num === 0 || num === 1) return 1;
  for (var i = num - 1; i >= 1; i--) {
    num = num * i;
  }
  return num;
}
