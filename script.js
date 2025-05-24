document.addEventListener("DOMContentLoaded", function () {
    const scrollTopBtn = document.getElementById("scrollTopBtn");
    
    window.addEventListener("scroll", function () {
        if (window.scrollY > window.innerHeight) {
            scrollTopBtn.style.display = "block";
        } else {
            scrollTopBtn.style.display = "none";
        }
    });

    scrollTopBtn.addEventListener("click", function () {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });
});
document.addEventListener("DOMContentLoaded", () => {
    const elements = document.querySelectorAll(".slide-in");
  
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");
          observer.unobserve(entry.target); // Verwijder als je animatie maar 1x moet afspelen
        }
      });
    }, {
      threshold: 0.1
    });
  
    elements.forEach(el => observer.observe(el));
  });