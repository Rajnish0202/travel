let menu = document.querySelector('#menu-btn');
let navBar = document.querySelector('.navbar');

menu.addEventListener('click', ()=>{
    menu.classList.toggle('fa-times');
    navBar.classList.toggle('active');
});

window.addEventListener('scroll', ()=>{
    menu.classList.remove('fa-times');
    navBar.classList.remove('active');
})

// Home Swiper Slide JS

let swiper = new Swiper(".home-slider", {
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    loop:true,
});

// Reviews Swiper Slide JS

let reviewSwiper = new Swiper(".reviews-slider", {
    spaceBetween: 20,
    grabCursor:true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
    loop: true,
});

// Package Section Load more

let loadMoreBtn = document.querySelector(".packages .load-more .btn");
let currentItem = 3;

loadMoreBtn.addEventListener('click', () =>{
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for (let i = currentItem; i < currentItem + 3; i++){
        boxes[i].style.display = 'initial';
    }
    currentItem += 3;
    if(currentItem >= boxes.length){
        loadMoreBtn.style.display ='none';
    }
})