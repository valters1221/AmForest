// smooth scroling
// Initialize Lenis
const lenis = new Lenis({
  lerp: 0.3, // Adjust smoothness
  smooth: true, // Enable smooth scrolling
  duration: 0.7, // Slow down the scroll
  easing: (t) => 1 - Math.pow(1 - t, 3), // Custom easing for smooth scroll
});

// Animation frame loop
function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}

requestAnimationFrame(raf);

document.addEventListener("DOMContentLoaded", function () {
  const images = document.getElementsByTagName("img");
  for (let img of images) {
    img.setAttribute("loading", "lazy");
  }
});
