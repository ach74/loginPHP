<?php

include_once "config/core.php";
$page_title = "Vecinos En Red";
$require_login = true;
//include_once "login_checker.php";
include_once 'layout_head.php';



$action = isset($_GET['action']) ? $_GET['action'] : "";

if ($action == 'login_success') {
    echo '<div class="container" style="margin-top: 10px;">';
    echo "<div class='alert alert-info alert-dismissible fade show'>";
    echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
    echo "<strong>Hi " . $_SESSION['name'] . ", welcome back!</strong>";
    echo "</div>";
    echo "</div>";
}

// if user is already logged in, shown when user tries to access the login page
else if ($action == 'already_logged_in') {
    echo '<div class="container" style="margin-top: 10px;">';
    echo "<div class='alert alert-info alert-dismissible fade show'>";
    echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
    echo "<strong>You are already logged in.</strong>";
    echo "</div>";
    echo "</div>";
}
echo '<div style="background-color: #009b94;" class="col-md-12">';
echo '<div class="container">';
echo '<img src="http://localhost/loginPHP/libs/img/C01.jpg" width="100%" height="236">';
echo '</div>';

echo '</div>';
echo ' <div class="c1 container"> ';
echo '<div class="container">';
echo '<br>';
echo '<p><span style="font-size: 10pt;">Programa <strong><em>“Comunidades en Red” </em></strong>es una herramienta de difusión y circulación del conocimiento producido desde la Universidad Nacional de la Patagonia San Juan Bosco (UNPSJB), desde donde se ofrecen instancias de capacitación, de formación, de promoción de actividades culturales y de divulgación científica, a partir de pensar la optimización de recursos tecnológicos que permiten llegar a las localidades de la región.</span></p>';
echo '<p><span style="font-size: 10pt;">El Programa <strong><em>“Comunidades en Red”</em></strong> es una herramientas de&nbsp; desarrollo comunitario, pensado sobre la base del&nbsp; trabajo colaborativo entre Universidad, Municipios, Comunas, entidades públicas y privadas que se adhieran al programa, creando así un espacio de intercambio con las comunidades, a partir de la definición y priorización de temáticas de interés comunitario.</span></p>';
echo '<p><span style="font-size: 10pt;">Los convenios celebrados en este proceso entre la Universidad/Municipios/Comunas y entidades que se adhieran, permitirán avanzar en la disposición de un aula virtual -generada en la Plataforma de la UNPSJB- para el cursado de las Cátedras Libres, de programas de capacitación y de acceso a la formación en la modalidad a distancia. En el Aula Abierta <em>¨Comunidades en Red¨</em> se dispondrá de un acervo de materiales tanto bibliográficos como documentales.</span></p>';
echo '</div>';

echo '<div class="container">
    
        <h3>Ventajas</h3>
	<div class="row">
	<!--team-1-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
        <span style="font-size: 5em; color: #009b94;">
        <i class="fas fa-thumbs-up"></i>
        </span>
	<h3>Comodo</h3>
	</div>
	
	<div class="team-back">
	<span>
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque penatibus et magnis dis parturient montes,
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque.
	</span>
	</div>
	
	</div>
	</div>
	<!--team-1-->
	
	<!--team-2-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
        <span style="font-size: 5em; color: #009b94;">
        <i class="fas fa-user-lock"></i>
        </span>
	<h3>Seguro</h3>
	</div>
	
	<div class="team-back">
	<span>
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque penatibus et magnis dis parturient montes,
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque.
	</span>
	</div>
	
	</div>
	</div>
	<!--team-2-->
	
	<!--team-3-->
	<div class="col-lg-4">
	<div class="our-team-main">
	
	<div class="team-front">
        <span style="font-size: 5em; color: #009b94;">
        <i class="fas fa-mobile-alt"></i>
        </span>
	<h3>Útil</h3>
	</div>
	
	<div class="team-back">
	<span>
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque penatibus et magnis dis parturient montes,
	Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis 
	natoque.
	</span>
	</div>
	
	</div>
	</div>
	<!--team-3-->
	
	</div>
	</div>
        

        <div class="container">
        <h3>Ubicacion</h3>
        <img class="img-r" src="https://d19rpgkrjeba2z.cloudfront.net/static/gen/nux/signup/home/map-bg@2x_8cc536d3d30d058364e4511ead47b0bf.png" width="100%" height="300px">
        </div>
        </div>';
?>

