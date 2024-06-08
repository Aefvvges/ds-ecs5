<?php
require_once 'modelo/cliente.php';
require_once 'modelo/marca.php';
require_once 'modelo/producto.php';
require_once 'modelo/proveedor.php';

$Cliente = new Cliente();
$Cliente->Id = 1;
$Cliente->NombreApellido = 'Jose Perez';
$Cliente->NumeroDocumento = 24892099;

$Cliente->MostrarDatos();

$Marca = new Marca();
$Marca-> Id = 4;
$Marca-> Descripcion = "Merenguitas";
$Marca-> Codigo = 67;

$Producto = new Producto();
$Producto-> Id = 3;
$Producto-> Codigo = 15;
$Producto-> Descripcion = 'Galletitas';
$Producto-> Marca = $Marca;

$Proveedor = new Proveedor();
$Proveedor-> Id = 2;
$Proveedor-> NombreApellido = 'Manuel Lopez';
$Proveedor-> NumeroDocumento = 18394775;
$Proveedor-> Producto = $Producto;

$Proveedor->MostrarDatos();