//el menu hamburguesa
const menuBtn = document.getElementById('menu-btn');
const sideMenu = document.getElementById('side-menu');

menuBtn.addEventListener('click', () => {
  sideMenu.classList.toggle('active');
});

//cada año
document.getElementById('year').textContent = new Date().getFullYear();