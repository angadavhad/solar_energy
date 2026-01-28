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
