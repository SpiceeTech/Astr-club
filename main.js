//HEADER
function imgSlider(anything){
  document.querySelector('.images').src = anything;
  }
  function changeCircleColor(color){
    const circle = document.querySelector('.circle');
    circle.style.background = color;
  }

  window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
  });