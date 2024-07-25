let feedimgElement = document.querySelector(".feedimg");

let images = [
  'url("./Images/pexels-fotios-photos-1107717.jpg")',
  'url("./Images/Museum-of-Natural-History-dinosaur.jpg")',
];

let currentImageIndex = 0;

// Set the background image to the first image initially
feedimgElement.style.backgroundImage = images[currentImageIndex];

setInterval(() => {
  currentImageIndex = (currentImageIndex + 1) % images.length;
  feedimgElement.style.backgroundImage = images[currentImageIndex];
}, 5000);
