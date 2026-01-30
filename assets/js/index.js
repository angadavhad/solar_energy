document.addEventListener("DOMContentLoaded", function () {

  const images = [
    BASE_URL + "assets/image/ind1.jpg",
    BASE_URL + "assets/image/ind2.jpg",
    BASE_URL + "assets/image/ind3.jpg"
  ];

  let index = 0;
  const slider = document.getElementById("sliderImage");

  function changeImage() {
    slider.style.opacity = 0;

    setTimeout(() => {
      index = (index + 1) % images.length;
      slider.src = images[index];
      slider.style.opacity = 1;
    }, 500);
  }

  setInterval(changeImage, 3000);

});




document.addEventListener("DOMContentLoaded", () => {

  const faqQuestions = document.querySelectorAll(".faq-question");

  faqQuestions.forEach((btn) => {

    btn.addEventListener("click", () => {

      const parent = btn.parentElement; // faq-item
      const icon = btn.querySelector("span");

      // ✅ Close all other FAQs
      document.querySelectorAll(".faq-item").forEach((item) => {
        if (item !== parent) {
          item.classList.remove("active");
          item.querySelector("span").innerHTML = "+";
        }
      });

      // ✅ Toggle current FAQ
      parent.classList.toggle("active");

      // ✅ Icon Change + to ×
      if (parent.classList.contains("active")) {
        icon.innerHTML = "×";
      } else {
        icon.innerHTML = "+";
      }

    });

  });

});





document.addEventListener("DOMContentLoaded", function () {

  const counters = document.querySelectorAll(".counter");
  let started = false;

  function startCounting() {

    counters.forEach(counter => {

      const target = parseFloat(counter.dataset.target);
      const suffix = counter.dataset.suffix || "";

      let count = 0;
      const speed = 80; // ✅ Slower + Smooth

      function update() {
        const increment = target / speed;
        count += increment;

        if (count < target) {

          let value =
            target % 1 !== 0
              ? count.toFixed(1)
              : Math.floor(count);

          counter.innerText = value + suffix;

          requestAnimationFrame(update);

        } else {
          counter.innerText = target + suffix;
        }
      }

      update();
    });

  }

  window.addEventListener("scroll", () => {

    const section = document.querySelector(".stats-wave-section");
    const top = section.getBoundingClientRect().top;

    if (!started && top < window.innerHeight - 150) {
      started = true;
      startCounting();
    }

  });

});
