const burger = document.querySelector(".burger");
const navLinksContainer = document.querySelector(".navLinksContainer");
const navLinks = document.querySelectorAll(".navLinks li");


burger.addEventListener("click", function(){
    navLinksContainer.classList.toggle("navActive");

    navLinks.forEach(function(link, index){
        if(link.style.animation){
            link.style.animation = "";
        } else {
            link.style.animation = `navLinksFade 0.5s ease forwards ${index / 7 + 0.7}s`;
        }
    });

    burger.classList.toggle("toggle");

});

// メニューバー上部固定
const navigation = document.querySelector(".menunavigation");
const headerClientRect = document.querySelector("header");
const navOffsetTop = navigation.getBoundingClientRect().top + window.scrollY;

window.addEventListener('scroll',function(){
    console.log(window.pageYOffset);
    console.log(navigation.offsetTop);
    if( window.scrollY >= navOffsetTop ){
        navigation.classList.add("navFixed");
    } else {
        navigation.classList.remove("navFixed");
    }
});