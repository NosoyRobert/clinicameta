<?php
// Estableciendo la conexion a la base de datos
include("config/db.php");//Contienen las variables, el servidor, usuario, contraseña y nombre  de la base de datos
include("config/conexion.php");//Contiene de conexion a la base de datos
 
session_start();// Sesion iniciada

include "sty.php";


echo '<a href="profile.php?action=administrar"  class="but">Volver</a>';

?>
<style>

*{
	padding:0;
	margin:0;
	font-family: : century gothic;
	text-align: center;
}
body{
padding:0;
margin:0;
width:100%; 
background: #00c6ff;  /* fallback for old browsers */
background:  url("img/fd.jpg");  /* Chrome 10-25, Safari 5.1-6 */
background:  url("img/fd.jpg"); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
height: 800px;
background-position: center;

position: relative;
font-family: 'Signika', sans-serif;
}

. ok {
	text-align: center;
	width: 100% ;
	padding:  12px ;
	background-color: #4e8;
	color : #fff
}
. bad {
	text-align: center;
	width: 100% ;
	padding: 12px ;
	background-color:  #a22 ;
	color: #fff
}
    
h5 {
  font-family: 'Oswald', sans-serif;
  color: #black;
  font-weight: normal;
  font-size: 30pt;
  text-align: center;
}

th{
  font-size: 15pt;
  border: 1px solid black;
}

h2{
  font-size: 18pt;
}

.button1{
  font-family: 'Oswald', sans-serif;
  border: none;
  color: white;
  padding: 12px 22px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 14px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button1:hover {
  background-color: #008CBA;
  color: white;
}

a:hover.button1 {
  background: gray;
}

.button1.active {
  background: black;
  color: white;
}

table, th, td, caption {
  font-family: 'Oswald', sans-serif;
 	margin-left: auto; 
 	margin-right: auto;
	border: 2px solid black;
	border-collapse: collapse;
}

input{
  font-family: 'Oswald', sans-serif;
}

.label {
  color: black;
  padding: 8px;
  font-family: Arial;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); 
}

.label:hover{
  background-color: #008CBA;
  color: white;
  }
</style>