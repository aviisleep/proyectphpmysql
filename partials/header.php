<?php 
require 'database.php';
session_start();

$_SECCION;



?>

<header>
    <div class="container-home">
        <nav class="nav-principal">
            <ul class="list-nav">
                <a href="./index.php">
                    <li>Inicio</li>
                </a>                
                <a href="./somos.php">
                    <li>Quiénes somos</li>
                </a>                
                <a href="./ubicanos.php">
                    <li>Ubícanos</li>
                </a>                
                <a href="./agendar.php">
                    <li>Agenda con nosotros</li>
                </a>  
                <a href="./combos.php">
                    <li>Combos</li>
                </a> 
                              
            </ul>  
            <div class="login-out">
                <a class="text-logout" href="./login.php">Cerrar sesión</a>
            </div> 
                    
        </nav>
    </header>