<?php
include 'checkForm.php';

class submit
{

    private $_post;
    private $_errorMessages;
    private $_send;

    function __construct()
    {
        $this->_post = $_POST;
        $this->checkForm();
    }

    private function checkForm()
    {
        $checkForm = new checkForm($this->_post);
        if (!$checkForm->errors()) {
            $this->_errorMessages = $checkForm->getErrorMessage();
            $this->_send = false;
            return;
        }
        $this->sendMail();
        $this->_send = true;

    }
    function sendMail(){

    }
    function __toString()
    {
        $arrayMsj['success'] = $this->_send;
        if($this->_send){
            $arrayMsj['message'] = 'Felicitaciones, su mensaje a sido enviado con éxito!!';
        }
        else{
            $arrayMsj['message'] = $this->_errorMessages;
        }
        return (json_encode($arrayMsj));

    }
}

echo new submit();