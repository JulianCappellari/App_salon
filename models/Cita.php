<?php

namespace Model;

class Cita extends ActiveRecord {
    // Base de datos
    protected static $tabla = 'citas';
    protected static $columnasDB = ['id','fecha' , 'hora', 'usuariosid' ];

    public $id;
    public $fecha;
    public $hora;
    public $usuariosid;

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? null;
        $this->fecha = $args['fecha'] ?? '';
        $this->hora = $args['hora'] ?? '';
        $this->usuariosid = $args['usuariosid'] ?? '';
    }
}