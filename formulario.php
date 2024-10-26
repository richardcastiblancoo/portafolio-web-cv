<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#243642">
    <meta name="description" content="🔭 Actualmente estoy trabajando en Colombia.
    🌱 Actualmente estoy aprendiendo desarrollo para Android y para escritorio.
    ❓ Pregúntame sobre cualquier cosa relacionada con la tecnologías relacionadas con la programación.">
    <meta name="keywords" content="About me, Technology, Projects, Certificates.">
    <meta name="author" content="richard castiblanco">
    <meta name="robots" content="index, follow">
    <meta name="create-data" content="6/8/2023">
    <meta property="og:title" content="Richard Castiblanco" />
    <meta property="og:type" content="video.movie" />
    <meta property="og:url" content="https://48da541a.richardcastiblanco.pages.dev/" />
    <meta property="og:image" content="/img/perfil/codigo.webp" />
    <meta property="og:description" content="🔭 Actualmente estoy trabajando en Colombia.
    🌱 Actualmente estoy aprendiendo desarrollo para Android y para escritorio.
    ❓ Pregúntame sobre cualquier cosa relacionada con la tecnologías relacionadas con la programación.." />
    <link rel="stylesheet" href="css/formulario.css">
    <link rel="manifest" href="manifest.json">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/img/perfil/codigo.webp" type="image/x-icon">
    <title>FORMULARIO | PERSONALIZACION DE SERVICIOS</title>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Información Personal</h2>
            <form id="personalForm" action="submit.php" method="POST">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" >
                    <div class="error" id="nombreError"></div>
                </div>
                <div class="form-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellido" >
                    <div class="error" id="apellidoError"></div>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" name="telefono" >
                    <div class="error" id="telefonoError"></div>
                </div>
                <div class="form-group">
                    <label for="correo">Correo electrónico</label>
                    <input type="email" id="correo" name="correo" >
                    <div class="error" id="correoError"></div>
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" id="direccion" name="direccion" >
                    <div class="error" id="direccionError"></div>
                </div>
                <div class="form-group">
                    <label for="edad">Edad</label>
                    <input type="number" id="edad" name="edad" >
                    <div class="error" id="edadError"></div>
                </div>
                <div class="form-group">
                    <label>Género</label>
                    <div class="radio-group">
                        <label>
                            <input type="radio" name="genero" value="masculino" > Masculino
                        </label>
                        <label>
                            <input type="radio" name="genero" value="femenino"> Femenino
                        </label>
                        <label>
                            <input type="radio" name="genero" value="otro"> Otro
                        </label>
                    </div>
                    <div class="error" id="generoError"></div>
                </div>
                <button type="submit">Enviar</button>
            </form>
        </div>
        <div class="card-container" id="dataCard">
            <h2>Datos Ingresados</h2>
            <div id="cardContent"></div>
            <div id="submissionCount"></div>
        </div>
    </div>

    <script src="/js/app.js"></script>
    <script src="/js/main.js"></script>
   
</body>
</html>