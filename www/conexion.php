<?php

$conexion=mysqli_connect("mysql","jdvpl","jdvpl","crud_docker_php","3306");

if(mysqli_connect_errno()){
    echo "conexion fallida".mysqli_connect_errno();
}else{
    echo "conexion exitosa";
}

mysqli_query($conexion,"SET NAMES 'utf8'");

?>