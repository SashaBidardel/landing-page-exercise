<?php
include("conDB.php");

if (isset($_POST["btn"])){
    if (strlen($_POST["nombre"])>=1 && strlen($_POST["apellidos"])>=1 && strlen($_POST["correo"])>=1 ){
        $name=trim($_POST["nombre"]);
        $surname=trim($_POST["apellidos"]);
        $email=trim($_POST["correo"]);
        $consulta="INSERT INTO datos( nombre, apellidos, email) VALUES ('$name','$surname','$email')";
        $result=mysqli_query($conect,$consulta);
        if ($result){
            ?>
            <h3>Se ha inscrito correctamente</h3>
            <?php
        }
        else{
            ?>
            <h3>Ha habido un problema</h3>
            <?php
         }
        
         
    }
    else{
        ?>
        <h3>Rellene todos los campos</h3>
        <?php
     }
}
?>
