<?php
include('../conec.php');
$codigo= $_GET['id'];
$eliminarFabricante="CALL sp_eliminarProducto('$codigo')";;
$resultado=mysqli_query($conexion,$eliminarFabricante);
header('Location: ../productos.php');
?>