<?php
// Inicializar la sesión.
	session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  	<meta charset="utf-8">
	<title>Datos</title>
</head>
<body>
<header>
</header>
<section id="main">

<?php 
$_SESSION['usuario'] = $_POST['Usuario'];
echo "Administracion  ";
echo "Bienvenido Admin " .$_SESSION['usuario'];


//print_r($_REQUEST);
?>
<a href="destruyesesion.php"> Salir</a>
</section>


<form action ="demoindex.php" method ="post">
	  <fielset>
	  	<button type ="submit"> Becario </button>
        <button type ="submit"> Programa </button>
        <button type ="submit"> Reporte </button>
        
	  </fielset>

</body>
</html>








