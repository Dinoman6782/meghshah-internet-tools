let searchBar = document.getElementById("searchBar");
let myImage = document.getElementById("spartin");

searchBar.addEventListener("input", function (e) {
  let userInput = e.target.value.toLowerCase();

  if (userInput === "greece") {
    myImage.src = "./Images/Spartian_Test4.png";
  } else if (userInput === "norse" || userInput === "viking") {
    myImage.src = "./Images/Viking_Test4.png";
  } else {
    myImage.src = "./Images/Spartian_Test4.png";
  }
});
