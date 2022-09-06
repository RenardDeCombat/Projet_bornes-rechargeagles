
const menuHamburger = document.querySelector(".menu")
const navLinks = document.querySelector(".navbar_links")

menuHamburger.addEventListener('click',()=>{
navLinks.classList.toggle('mobile-menu')
})
