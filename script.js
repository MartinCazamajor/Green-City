var slides = document.querySelectorAll('#slides .slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide,5000);
var playing = true;
var pauseButton = document.getElementById('pause');
var next = document.getElementById('next');
var previous = document.getElementById('previous');


function nextSlide() {
    goToSlide(currentSlide+1);
}

function previousSlide() {
    goToSlide(currentSlide-1);
}

function goToSlide(n) {
    slides[currentSlide].className = 'slide';
    currentSlide = (n+slides.length)%slides.length;
    slides[currentSlide].className = 'slide showing';
}

function pauseSlideshow() {
    pauseButton.innerHTML = 'Play';
    playing = false;
    clearInterval(slideInterval);
}

function playSlideshow() {
    pauseButton.innerHTML = 'Pause';
    playing = true;
    slideInterval = setInterval(nextSlide,2000);
}

pauseButton.onclick = function() {
    if(playing) {
    pauseSlideshow();
  } else {
    playSlideshow();
  }
};

next.onclick = function() {
    pauseSlideshow();
    nextSlide();
}

previous.onclick = function() {
    pauseSlideshow();
    previousSlide();
}


// Selection of HTML objects
const burger = document.querySelector('.burger i');
const nav = document.querySelector('.nav');
// Defining a function
function toggleNav() {
burger.classList.toggle('fa-bars');
burger.classList.toggle('fa-times');
nav.classList.toggle('nav-active');
}
// Calling the function after click event occurs
burger.addEventListener('click', function() {
toggleNav();
});