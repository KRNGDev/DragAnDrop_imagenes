<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concurso | Carga la imagen</title>

    <link rel="stylesheet" type="text/css" href="estilos.css" />
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
    
    

</head>
<header>
    
    

        <h1 align="center">Carga tu imagen</h1>

    </header>
<body>
    
    <div class="container">

        <h1 align="center">Hola gente que tal</h1>

        <form action="Guardar.php" class="dropzone" id="dropzoneFrom">

        </form>

        <div class="boton">
            <button type="submit" class="btn btn-info" id="submit-all">Cargar</button>
        </div>

        <div id="preview"></div>

    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <script src="app.js"></script>
    
   

</body>

</html>

