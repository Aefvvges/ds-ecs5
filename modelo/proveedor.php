<?php

class Proveedor{
    public $Id;
    public $NombreApellido;
    public $NumeroDocumento;
    public $Producto;

    public function MostrarDatos(){
        echo 'Id: ' . $this->Id . '<br>';
        echo 'Nombre y Apellido: ' . $this->NombreApellido . '<br>';
        echo 'Numero de Documento: ' . $this->NumeroDocumento . '<br>';
        echo 'Id producto: ' . $this->Producto->Id . '<br>';
        echo 'Código: ' . $this->Producto->Codigo . '<br>';
        echo 'Descripción: ' . $this->Producto->Descripcion . '<br>';
        echo 'Id Marca: ' . $this->Producto->Marca->Id . '<br>';
        echo 'Descripción: ' . $this->Producto->Marca->Descripcion . '<br>';
        echo 'Código: ' . $this->Producto->Marca->Codigo . '<br>';
    }
}