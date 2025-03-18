<html>

<form method="post">
    <h1>Consular</h1>
    <input type="text" name="noConsulta"/>
    <input type="submit">
</form>
<form method="post">
    <h1>Eliminar</h1>
    <input type="text" name="noEliminar"/>
    <input type="submit">

</form>
<form method="post">
    <h1>crear</h1>
    <input type="text" name="noCrear"/>
    <input type="text" name="noPin"/>
    <input type="text" name="noDin"/>
    <input type="submit"/>



</form>



<?php
require "/home/nightdragon/proyecto_react/phpCrud/vendor/autoload.php";
use WpOrg\Requests\Requests;#libreria 
if(isset($_POST["noConsulta"])){
    $request = Requests::get(url: "http://localhost:8004/consulta?no=".$_POST["noConsulta"]);
    echo $request->body;
}
if(isset($_POST["noEliminar"])){
    $request = Requests::get(url: "http://localhost:8004/eliminar?no=".$_POST["noEliminar"]);
    echo $request->body;
}
if(isset($_POST["noEliminar"]) && isset($_POST["noDin"]) && isset($_POST["noPin"])){
    $request = Requests::get(url: "http://localhost:8004/crear?no=".$_POST["noCrear"] . "&din=".$_POST["noDin"] . "&pin=". $_POST["noPin"]);
    echo $request->body;
}


?>
</html>


