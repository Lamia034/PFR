



//navbar

const navbar = document.getElementById('navbar');

window.addEventListener('scroll', () => {
  if (window.scrollY > 10) {
    navbar.classList.add('bg-pink-600');
    navbar.classList.remove('bg-transparent');
  } else {
    navbar.classList.remove('bg-pink-600');
    navbar.classList.add('bg-transparent');
  }
});

//menu
const btn = document.querySelector('button.mobile-menu-button');
const menu = document.querySelector('.mobile-menu');
btn.addEventListener("click", ()=> {
menu.classList.toggle("hidden");
});



  
  

 




