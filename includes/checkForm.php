<?php

class CheckForm
{

    private $_post;
    private $_errorMessage;
    private $_fields;

    function __construct($post)
    {
        $this->_post = $post;
        
        $this->_fields = array(
            'direccion' => 'required',
            'trabajadores' => 'required',
            'servicios' => 'required',
            'eventos' => 'required',
            'desarrollo' => 'required',
            'observaciones' => 'required',
            'nombre' => 'required',
            'grado' => 'required',
            'celular' => 'required,numeric',
            'email' => 'required,email',
            'unidad' => 'required'
        );
    }

    public function errors()
    {
        foreach($this->_fields as $field => $validations){
            $val = explode(',',$validations);
            foreach($val as $function){
                if(!is_null($message = call_user_func(array($this, $function),$field)) ){
                    $this->_errorMessage[] = $message;
                }
            }
        }
        return (empty($this->_errorMessage))? true : false;
    }
    private function numeric($field){
        if (!is_numeric($this->_post[$field])) {
            return array($field => ' debe contener solo números');
        }
        return;
    }
    private function required($field){
        if (empty($this->_post[$field])) {
            return array($field => ' es requerido');
        }
        return;
    }
    private function email($field){
        if (!filter_var($this->_post[$field], FILTER_VALIDATE_EMAIL)) {
            return array($field => ' debe ser un mail valido');
        }
        return;
    }
    public function getErrorMessage()
    {
        return $this->_errorMessage;
    }
}