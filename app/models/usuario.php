<?php 
class Usuario extends Eloquent { 
    protected $table = 'usuarios';
    protected $fillable = array('nombre', 'apellido');
}
?>