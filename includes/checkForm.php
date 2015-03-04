<?php

class checkForm
{

    private $_post;
    private $_errorMessage;
    private $_fields;

    function __construct($post)
    {
        $this->_post = $post;
        $this->_fields = [
            'direccion' => 'required',
            'trabajadores' => 'required',
            'servicios' => 'required',
            'eventos' => 'required',
            'desarrollo' => 'required',
            'observaciones' => 'required',
            'nombre' => 'required',
            'grado' => 'required',
            'celular' => 'required',
            'e-mail' => 'required',
            'unidad' => 'required'
        ];
    }

    public function errors()
    {
        if (empty($this->_post)) {
            $this->errorMessage = ['m' => 'Todos los campos son obligatorios'];
            return false;
        }

    }

    public function getErrorMessage()
    {
        return $this->_errorMessage;
    }
}