let slideIndex = 0;

function showSlides() {
    let slides = document.getElementsByClassName("slides");
    for (let slide of slides) { slide.style.display = "none"; }
    slideIndex = (slideIndex + 1) % slides.length;
    slides[slideIndex].style.display = "block";
    setTimeout(showSlides, 3000);
}

showSlides();
