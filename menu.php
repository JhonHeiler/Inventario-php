<?php

if (isset($_SESSION['nombre_usuario'])) {
    echo $_SESSION['nombre_usuario'];
}
if (isset($_SESSION['usuario']) == false) {
?>

    <li class="nav-item">
        <a class="nav-link" href="?modulo=iniciar-sesion&accion=ver">Iniciar sesión</a>
    </li>
<?php } ?>


<?php
if (isset($_SESSION['usuario']) == true) {
?>

<?php } ?> -->


<li class="nav-item">
    <a class="nav-link" href="?modulo=modi&accion=ver">
        <?php
        if (isset($_SESSION['nombre_usuario'])) {
            echo $_SESSION['nombre_usuario'];
        }
        ?>
    </a>
    <?php
    if (isset($_SESSION['usuario']) == true) {
    ?>

<li class="nav-item">
    <a class="nav-link" href="?modulo=cerrar-sesion&accion=cerrar">Cerrar sesión</a>
</li>

<?php } ?>


</li>






<!-- 
<li class="nav-item">
    <a class="nav-link active" href="?modulo=inicio&accion=ver">Inicio</a>
</li>

<?php
if (isset($_SESSION['usuario']) == true) {
?>
    <li class="nav-item">
        <a class="nav-link" href="?modulo=persona&accion=ver">Persona</a>
    </li>
<?php } ?>
<li class="nav-item">
    <a class="nav-link" href="?modulo=persona2&accion=ver">Persona 2</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="?modulo=municipio&accion=ver">Municipio</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#">Menu 3</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#">Menu 4</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="#">Menu 5</a>
</li>

<li class="nav-item">
    <a class="nav-link" href="?modulo=contenido&accion=ver">Contenido</a>
</li>

<?php
if (isset($_SESSION['usuario']) == false) {
?>
    <li class="nav-item">
        <a class="nav-link" href="?modulo=iniciar-sesion&accion=ver">Iniciar sesión</a>
    </li>
<?php } ?>


<?php
if (isset($_SESSION['usuario']) == true) {
?>
    <li class="nav-item">
        <a class="nav-link" href="?modulo=cerrar-sesion&accion=cerrar">Cerrar sesión</a>
    </li>
<?php } ?>

<li class="nav-item">
    <a class="nav-link" href="javascript:;">
        <?php
        if (isset($_SESSION['nombre_usuario'])) {
            echo $_SESSION['nombre_usuario'];
        }
        ?>
    </a>
</li> -->