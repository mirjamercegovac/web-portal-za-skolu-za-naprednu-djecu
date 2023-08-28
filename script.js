let menu = document.querySelector('#menu');
let header = document.querySelector('.header');
let navbar = document.querySelector('.navbar'); 
let profileMenu = document.getElementById("profileMenu");
const homeBox = document.querySelector(".home-box");
const quizBox = document.querySelector(".quiz-box");
menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}


//
window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}


//UČITAVANJE NOVOSTI
$(".news-box").slice(0, 3).show();       //slice(start, end)

$("#load-more").click(function(){
$(".news-box:hidden").slice(0, 3).slideDown(0);
if($(".news-box:hidden").length == 0) {
    $(this).fadeOut(0);
}
});

// transparent navbar
// window.addEventListener("scroll", function(){
//     if(window.scrollY > 50){
//         header.style.background="#333";
//         header.style.boxShadow="0 .1rem .3rem black";
//     } else if(window.screenY <= 50){
//         header.style.background="transparent";
//         header.style.boxShadow="none";
//     }
// });


//OTVARANJE PROFILA I GUMBA ZA ODJAVU
function toggleMenu(){
    profileMenu.classList.toggle("open-menu");
}


//SLIDER NA POČETNOJ STRANICI
var swiper = new Swiper(".home-slider", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
       clickable: true,
    },
    loop:true,
    grabCursor:true,
    keyboard: true,
});


//OTVARANJE I ZATVARANJE ODGOVORA NA PITANJA
const qa = document.querySelectorAll('.qa');

qa.forEach(qa => {
    qa.addEventListener('click', () => {
        qa.classList.toggle('open');
    
        const icon = qa.querySelector('.qa-icon i');
        if(icon.className === 'fa-solid fa-plus'){
            icon.className = "fa-solid fa-minus";
            qa.classList.add('active');
        }else{
            icon.className = "fa-solid fa-plus";
            qa.classList.remove('active');
        }
    })
});



lightGallery(document.querySelector('.gallery .box-container'));


var path = document.querySelector('path')
var pathLenght = path.getTotalLength()

path.style.strokeDasharray = pathLenght + ' ' + pathLenght;

path.style.strokeDashoffset = pathLenght;

window.addEventListener("scroll", myFunction)
function myFunction() {
    var scrollPercentage = (document.documentElement.scrollTop + document.body.scrollTop) / (document.documentElement.scrollHeight - document.documentElement.clientHeight);
    var drawLength = pathLenght * scrollPercentage;
    path.style.strokeDashoffset = pathLenght - drawLength;

};









    
    
