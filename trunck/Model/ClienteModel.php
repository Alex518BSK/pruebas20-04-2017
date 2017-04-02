<?php
include_once "PersonaModel.php";
class Cliente extends Persona{
    private $Tipo_cliente;

    public function __construct($Tipo_cliente)
    {
        parent::__construct();
        //$this->Tipo_cliente=$Tipo_cliente;
    }
public function get_Tipo_cliente()
{
    return $this->Tipo_cliente;
}
public function set_Tipo_cliente($Tipo_cliente)
{
    $this->Tipo_cliente->$Tipo_cliente;
}
}

$cliente= new Cliente(1);

$cliente->Nombre="Alejandro";
$cliente->Direccion="calle";
$cliente->Telefono="999999";
echo $cliente->Nombre;
echo $cliente->Direccion;
echo $cliente->Telefono;
echo $cliente-> get_Tipo_cliente();