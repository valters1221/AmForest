document.addEventListener("DOMContentLoaded", () => {
  const animatedElements = document.querySelectorAll(".animate");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const element = entry.target;

          // Reset the animation
          element.style.animation = "none";
          element.offsetHeight; // Trigger reflow
          element.style.animation = null;

          // Start the animation
          element.classList.add("in-viewport");

          // For text-reveal, add delays to child elements
          if (element.classList.contains("text-reveal")) {
            const fastClass = Array.from(element.classList).find((cls) =>
              cls.startsWith("fast-")
            );
            const duration = fastClass
              ? parseFloat(fastClass.split("-")[1]) * 0.3
              : 2;
            Array.from(element.children).forEach((child, index) => {
              child.style.animationDuration = `${duration}s`;
              child.style.animationDelay = `${
                (index * duration) / element.children.length
              }s`;
            });
          }

          observer.unobserve(element);
        }
      });
    },
    {
      threshold: 0.4, // 40% visibility
      rootMargin: "0px 0px -100px 0px", // Slightly reduce the effective viewport
    }
  );

  animatedElements.forEach((element) => {
    observer.observe(element);
  });
});
