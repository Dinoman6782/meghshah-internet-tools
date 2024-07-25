let feed1Elements = document.querySelectorAll(".feed1");
let feed2Elements = document.querySelectorAll(".feed2");

// Hide feed2 elements initially
for (let el of feed2Elements) {
  el.style.visibility = "hidden";
  el.style.position = "absolute";
}

let feed1Visible = true;

setInterval(() => {
  feed1Visible = !feed1Visible;
  for (let el of feed1Elements) {
    el.style.visibility = feed1Visible ? "visible" : "hidden";
    el.style.position = feed1Visible ? "static" : "absolute";
  }
  for (let el of feed2Elements) {
    el.style.visibility = feed1Visible ? "hidden" : "visible";
    el.style.position = feed1Visible ? "absolute" : "static";
  }
}, 5000);
