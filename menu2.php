<?php



if (isset($_SESSION['usuario']) == true) {

?>
    <div class="card" style="width: 98rem;">
        <img src="./img/p.jpg" class="card-img-top" alt="...">
        <div class="card-body">
            <a href="?modulo=producto&accion=ver" class="btn btn-primary">Ir a productos</a>
        </div>
    </div>

<ul class="nav nav-pills">
    <li class="nav-item dropdown" id="inv">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Inventario</a>
        <ul class="dropdown-menu">
         
                <li><a class="dropdown-item" href="?modulo=categoria&accion=ver">Categorias</a></li>
        
           
                <li><a class="dropdown-item" href="?modulo=proveedores&accion=ver">Proveedores</a></li>
     

                <li><a class="dropdown-item" href="?modulo=marca&accion=ver">Marcas</a></li>
         
                <li><a class="dropdown-item" href="?modulo=entrega&accion=ver">Entregas</a></li>
          
                <li><a class="dropdown-item" href="?modulo=devolucion&accion=ver">Devoluciones</a></li>
       
               
        </ul>
    </li>
    <?php 
    if (isset($_SESSION['usuario']) == true && $_SESSION['id_rol'] == 10 ) {
?>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Persona</a>
        <ul class="dropdown-menu">
        
                <li><a class="dropdown-item" href="?modulo=persona&accion=ver">Usuarios</a></li>
         
               
            
                <li><a class="dropdown-item" href="?modulo=personarol&accion=ver">Persona Rol</a></li>
          
               
         
                <li><a class="dropdown-item" href="?modulo=permisorol&accion=ver">Permiso Rol</a></li>
           
                <li><a class="dropdown-item" href="?modulo=rol&accion=ver">Rol</a></li>

               
        </ul>
    </li>
</ul>
<?php } ?>

<?php } ?>

<?php

if (isset($_SESSION['usuario']) == true && $_SESSION['id_rol'] == 10 ) {
?>

    <li class="nav-item">
        <a class="nav-link" href="?modulo=rproducto&accion=ver">
            <h6>Reportes </h6>
        </a>
    </li>
<?php } ?>


<br>
<br>
<br>
<br>