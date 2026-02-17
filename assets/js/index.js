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



(function () {
  const slider = document.getElementById('slider'),
        cards = [...document.querySelectorAll('.testimonial-card')],
        dotsContainer = document.getElementById('dots'),
        nextBtn = document.querySelector('.next'),
        prevBtn = document.querySelector('.prev'),
        container = document.querySelector('.slider-container');

  const totalCards = cards.length;
  let currentIndex = 0,
      currentVisible = getVisible(),
      totalSlides = calcSlides();

  function getVisible() {
    return window.innerWidth <= 600 ? 1 :
           window.innerWidth <= 950 ? 2 : 3;
  }

  function calcSlides() {
    return Math.max(1, totalCards - currentVisible + 1);
  }

  function renderDots() {
    dotsContainer.innerHTML = '';
    for (let i = 0; i < totalSlides; i++) {
      const dot = document.createElement('span');
      dot.className = 'dot' + (i === currentIndex ? ' active' : '');
      dot.dataset.index = i;
      dot.onclick = e => goTo(+e.target.dataset.index);
      dotsContainer.appendChild(dot);
    }
  }

  function update() {
    if (window.innerWidth > 600)
      slider.style.transform =
        `translateX(-${currentIndex * (100 / currentVisible)}%)`;
    else slider.style.transform = 'none';

    document.querySelectorAll('.dot')
      .forEach((d, i) => d.classList.toggle('active', i === currentIndex));
  }

  function goTo(i) {
    currentIndex = (i + totalSlides) % totalSlides;
    update();
  }

  const next = () => goTo(currentIndex + 1),
        prev = () => goTo(currentIndex - 1);

  function refresh() {
    currentVisible = getVisible();
    totalSlides = calcSlides();
    currentIndex = Math.min(currentIndex, totalSlides - 1);
    renderDots();
    update();
  }

  window.addEventListener('resize', refresh);

  if (nextBtn) nextBtn.onclick = e => { e.preventDefault(); next(); };
  if (prevBtn) prevBtn.onclick = e => { e.preventDefault(); prev(); };

  let auto = setInterval(next, 4200);
  if (container) {
    container.onmouseenter = () => clearInterval(auto);
    container.onmouseleave = () => auto = setInterval(next, 4200);
  }

  renderDots();
  update();
})();




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
