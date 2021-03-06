<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/ventas.controlador.php";
require_once "controladores/tecnicos.controlador.php";
require_once "controladores/servicios.controlador.php";
require_once "controladores/equipos.controlador.php";
require_once "controladores/pedidos.controlador.php";
require_once "controladores/soporte.controlador.php";


require_once "modelos/usuarios.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/clientes.modelo.php";
require_once "modelos/ventas.modelo.php";
require_once "modelos/tecnicos.modelo.php";
require_once "modelos/servicios.modelo.php";
require_once "modelos/equipos.modelo.php";
require_once "modelos/pedidos.modelo.php";
require_once "modelos/soporte.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();