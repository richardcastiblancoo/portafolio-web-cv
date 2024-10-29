// Número de copos de nieve
const snowflakeCount = 100;

// Crear y animar los copos de nieve
for (let i = 0; i < snowflakeCount; i++) {
    const snowflake = document.createElement("div");
    snowflake.classList.add("snowflake");

    // Posición y tamaño aleatorios
    snowflake.style.left = `${Math.random() * 100}vw`;
    snowflake.style.animationDuration = `${3 + Math.random() * 5}s`;
    snowflake.style.opacity = Math.random();

    document.body.appendChild(snowflake);
}
