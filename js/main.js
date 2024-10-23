// Seleccionar elementos
const menuBtn = document.getElementById('menu-btn');
const sideMenu = document.getElementById('side-menu');

// Añadir evento al botón de hamburguesa
menuBtn.addEventListener('click', () => {
  sideMenu.classList.toggle('active');
});
