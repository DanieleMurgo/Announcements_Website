let navbar = document.querySelector('.navbar');

if (window.location.pathname === '/') {
  window.addEventListener('scroll',()=>{
    if(window.scrollY > 5){
      navbar.classList.add('nav_bg');
    } else {
      navbar.classList.remove('nav_bg');
    }
  });
}

const menuIcon = document.querySelector('.menu-icon');
const searchForm = document.querySelector('.search-form');

menuIcon.addEventListener('click', () => {
  searchForm.classList.toggle('hidden');
});

