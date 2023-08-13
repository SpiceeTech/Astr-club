//HEADER
function imgSlider(anything){
  document.querySelector('.astronaut').src = anything;
  }

  window.addEventListener("scroll", function(){
    var header = document.querySelector("header");
    header.classList.toggle("sticky", window.scrollY > 0);
  });

  function toggleMenu(){
    var menuToggle = document.querySelector('.toggle');
    var navigation = document.querySelector('.navigation')
    menuToggle.classList.toggle('active')
    navigation.classList.toggle('active')
  }

  // AOS ANIMATION
 /*  AOS.init({
    duration: 1100,
    once: true,
  }); */


  const showErrorButton = document.getElementById('subm');
  const closeErrorButton = document.getElementById('closeErrorButton');
  const errorPopup = document.getElementById('errorPopup');
  
  showErrorButton.addEventListener('click', () => {
    errorPopup.style.display = 'flex';
  });
  
  closeErrorButton.addEventListener('click', () => {
    errorPopup.style.display = 'none';
  });
  
