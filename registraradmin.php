<?php
 if(empty($_POST["nombre"]) || empty($_POST["apellidos"]) || empty($_POST["email"]) || empty($_POST["password"])){
    header('Location: /cft/view/admin/admin/crear.php?mensaje=falta');
    exit(); //Sale del IF
 }

 include_once('model/conexion.php');
 $nombre = $_POST['nombre'];
 $apellidos = $_POST['apellidos'];
 $email = $_POST['email'];
 $password_simple = $_POST['password'];
 $password = password_hash($password_simple,PASSWORD_DEFAULT);
 
$sentencia_email = $bd->prepare("select id_usuario from usuarios WHERE email = ? limit 1");
$sentencia_email->execute([$email]);
$usuario = $sentencia_email->rowCount();
if($usuario != null ){
  header('Location: /cft/view/admin/admin/crear.php?mensaje=error');
  exit(); //Sale del IF 
}else{
  $sentencia = $bd->prepare('INSERT INTO usuarios(email,password,nombre,apellidos,vistas,id_roles,id_planes) values (?,?,?,?,?,?,?)');
  $resultado = $sentencia->execute([$email,$password,$nombre,$apellidos,10000,1,3]);
 
  if($resultado == true){
     header('Location: /cft/view/admin/admin/crear.php?mensaje=registrado');
  }else{
     header('Location: /cft/view/admin/admin/crear.php?mensaje=error');
     exit(); //Sale del IF 
  }
}


?>