//el menu hamburguesa
const menuBtn = document.getElementById('menu-btn');
const sideMenu = document.getElementById('side-menu');

menuBtn.addEventListener('click', () => {
  sideMenu.classList.toggle('active');
});

//cada año
document.getElementById('year').textContent = new Date().getFullYear();

//formulario
const form = document.getElementById('personalForm');
const dataCard = document.getElementById('dataCard');
const cardContent = document.getElementById('cardContent');
const submissionCount = document.getElementById('submissionCount');
const submissions = [];

form.addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Reset error messages
    document.querySelectorAll('.error').forEach(el => el.textContent = '');
    
    // Validate form
    let isValid = true;
    const formData = new FormData(form);
    for (let [key, value] of formData.entries()) {
        if (!value) {
            document.getElementById(`${key}Error`).textContent = 'Este campo es requerido';
            isValid = false;
        }
    }
    
    if (!formData.get('genero')) {
        document.getElementById('generoError').textContent = 'Por favor seleccione un género';
        isValid = false;
    }

    if (isValid) {
        // Collect form data
        const data = Object.fromEntries(formData.entries());
        submissions.push(data);

        // Update card content
        cardContent.innerHTML = `
            <p><strong>Nombre:</strong> ${data.nombre}</p>
            <p><strong>Apellido:</strong> ${data.apellido}</p>
            <p><strong>Teléfono:</strong> ${data.telefono}</p>
            <p><strong>Correo:</strong> ${data.correo}</p>
            <p><strong>Dirección:</strong> ${data.direccion}</p>
            <p><strong>Edad:</strong> ${data.edad}</p>
            <p><strong>Género:</strong> ${data.genero}</p>
        `;

        // Show data card
        dataCard.style.display = 'block';

        // Update submission count
        submissionCount.textContent = `Total de envíos: ${submissions.length}`;

        // Reset form
        form.reset();
    }
});