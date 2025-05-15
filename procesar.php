
<?php 
$nombre = $_REQUEST['name'];
$edad = $_REQUEST['edad'];
$sexo = $_REQUEST['sexo'];
$roles = $_REQUEST['roles'];

$image = $_FILES["image"];
$path = $_SERVER['DOCUMENT_ROOT'] . '/PROYECTOS/formularios_prueba/images/' . $image['name'];

//var_dump($_GET);
echo "<p> El nombre del usuario es: $nombre </p>";
echo "<p> La edad del usuario es: $edad </p>";
echo "<p> El sexo del usuario es: $sexo </p>";
echo "<ul>";
foreach ($roles as $key => $rol) {
    echo "<li>$rol</li>";
}
echo "</ul>";

//var_dump($path);

move_uploaded_file($image['tmp_name'], $path);