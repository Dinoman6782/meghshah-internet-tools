var acc = document.querySelector(".accordionButton");
var card = document.querySelector(".card");

// Define your media query
var mediaQueryList = window.matchMedia("(min-width: 700px)");

acc.addEventListener("click", function () {
  this.classList.toggle("active");
  var panel = this.nextElementSibling;
  if (panel.style.maxHeight) {
    panel.style.maxHeight = null;
    // Check if the media query is true
    if (mediaQueryList.matches) {
      // If the screen is wider than 700px
      card.style.height = "2800px"; // original height
    } else {
      // If the screen is narrower than 700px
      card.style.height = "1800px"; // original height
    }
  } else {
    panel.style.maxHeight = panel.scrollHeight + "px";
    // Check if the media query is true
    if (mediaQueryList.matches) {
      // If the screen is wider than 700px
      card.style.height = "4200px"; // increased height
    } else {
      // If the screen is narrower than 700px
      card.style.height = "2400px"; // increased height
    }
  }
});
