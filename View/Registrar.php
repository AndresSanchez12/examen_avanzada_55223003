<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <h1> Registrar notas</h1>

   <form action="index.php?action=registrar" method="POST">
        <label for="nombre">Nombre del Estudiante:</label>
        <input type="text" id="nombre" name="estudiante" required/>
        <br><br>

        <label for="descripcion">Descripción:</label>
        <input type="text" id="descripcion" name="descripcion" required/>
        <br><br>

        <label for="valor">Nota:</label>
        <input type="number" id="valor" name="nota"  required/>
        <br><br>

        <button type="submit">Registrar</button>
    </form>
    
    <br>
     <a href="../View/index.php">Volver</a>


</body>
</html>