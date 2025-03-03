// bg.js
(function () {
  const background = document.getElementById("background");
  const circlegs = [];
  const maxcirclegs = 6; // Maximum number of circles
  const colors = ["#47ff8d"]; // Light blue and dark blue colors

  function isOverlapping(newcircleg, existingcirclegs) {
    const newRect = newcircleg.getBoundingClientRect();
    for (let circleg of existingcirclegs) {
      const rect = circleg.getBoundingClientRect();
      const distance = Math.sqrt(
        Math.pow(
          newRect.left + newRect.width / 2 - (rect.left + rect.width / 2),
          2
        ) +
          Math.pow(
            newRect.top + newRect.height / 2 - (rect.top + rect.height / 2),
            2
          )
      );
      if (distance < newRect.width / 2 + rect.width / 2) {
        return true;
      }
    }
    return false;
  }

  function createcircleg() {
    const circleg = document.createElement("div");
    circleg.classList.add("circleg");

    const size = Math.random() * 500 + 200;
    let x;
    const spawnArea = Math.random();
    if (spawnArea < 0.4) {
      x = Math.random() * (window.innerWidth * 0.5);
    } else if (spawnArea < 0.4) {
      x = window.innerWidth - Math.random() * (window.innerWidth * 0.4);
    } else {
      x = Math.random() * window.innerWidth;
    }
    const y = Math.random() * window.innerHeight;
    const color = colors[Math.floor(Math.random() * colors.length)];
    const blur = Math.random() * 70 + 50;
    const opacity = Math.random() * 0.2;

    circleg.style.width = `${size}px`;
    circleg.style.height = `${size}px`;
    circleg.style.left = `${x}px`;
    circleg.style.top = `${y}px`;
    circleg.style.backgroundColor = color;
    circleg.style.opacity = "0";
    circleg.style.filter = `blur(${blur}px)`;

    if (isOverlapping(circleg, circlegs)) {
      return null;
    }

    const animationDuration = Math.random() * 15 + 20;
    circleg.style.animation = `breathe ${animationDuration}s infinite ease-in-out`;

    background.appendChild(circleg);
    circlegs.push(circleg);

    setTimeout(() => {
      circleg.style.opacity = opacity;
    }, 50);

    const duration = Math.random() * 10000;
    setTimeout(() => {
      removecircleg(circleg, circlegs.indexOf(circleg));
    }, duration);

    return circleg;
  }

  function removecircleg(circleg, index) {
    circleg.style.opacity = "0";
    setTimeout(() => {
      circleg.remove();
      circlegs.splice(index, 1);
    }, 5000);
  }

  function updatecirclegs() {
    if (circlegs.length < maxcirclegs && Math.random() < 0.1) {
      const newcircleg = createcircleg();
      if (newcircleg === null) {
        console.log("Failed to create circleg due to overlap");
      }
    }

    requestAnimationFrame(updatecirclegs);
  }

  updatecirclegs();
})();
