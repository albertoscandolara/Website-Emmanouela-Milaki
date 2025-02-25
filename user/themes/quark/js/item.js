document.addEventListener("DOMContentLoaded", function () {
  const modules = document.querySelectorAll(".module-content");

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("appear");
        } else {
          entry.target.classList.remove("appear"); // Remove class when scrolling out
        }
      });
    },
    { threshold: 0.2 }
  );

  modules.forEach((module) => observer.observe(module));
});
