<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="procesar.php" method="POST" enctype="multipart/form-data">
        <label for="name"> Nombre: </label>
        <input id= "name" name="name" type="text">
        
        <br>
<br>
        <label>
            Edad:
            <input type="number" name="edad" >
        </label>
        <br>
        <p>Sexo: </p>
         <select name="sexo" >
            <option value="Femenino">Femenino</option>
            <option value="Masculino" selected>Masculino</option>
         </select>

      <!--  <label>
            Femenino:
            <input type="radio" name="sexo" value="Femenino">
        </label>
        <br>
        <br>
        <label>
            Masculino:
            <input type="radio" name="sexo" value="Masculino">
        </label> -->
        <br>
        <br>
        <p>Roles: </p>
        <label>
            Administrador:
            <input type="checkbox" name="roles[]" value="Admin">
        </label>

        <label>
            Editor:
            <input type="checkbox" name="roles[]" value="Editor">
        </label>

        <label>
            Moderador:
            <input type="checkbox" name="roles[]" value="Moderador">
        </label>
        <br>
        <br>

        <label>
            Imagen:
        <br>
        <br>
            <input type="file" name="image" >
        </label>
        <br>
        <br>
        <label for="">Mensaje: </label>
         <br>
        <textarea name="mensaje" cols="30" rows="10"></textarea>
        <br>
        <br>
        <button type="submit"> Enviar </button>
        
        <br>

    </form>
</body>
</html>