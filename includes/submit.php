<?php
include 'CheckForm.php';
include 'Connection.php';
include 'phpMailer/PHPMailerAutoload.php';

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
        $checkForm = new CheckForm($this->_post);
        if (!$checkForm->errors()) {
            $this->_errorMessages = $checkForm->getErrorMessage();
            $this->_send = false;
            return;
        }

        $this->sendMail();
        $this->persistence();
        $this->_send = true;

    }

    private function sendMail()
    {
        $mail = new PHPMailer;

        $mail->isSMTP();
        $mail->Host = 'mail.clofa.com.co';
        $mail->SMTPAuth = true;
        $mail->Username = 'encuesta@clofa.com.co';
        $mail->Password = 'Encuesta2015';
        $mail->Port = 26;

        $mail->From = 'encuesta@clofa.com.co';
        $mail->FromName = 'Formulario Encuesta';
        $mail->addAddress('soporte.clofa@gmail.com');
        $mail->addAddress('juan2ramos@mi-martinez.com');
	$mail->IsHTML(true);
        $mail->Subject = 'Encuesta';
        $message  = '<h1>Respuestas</h1></br>';
        foreach ($this->_post as $key => $post) {
        	$message  .= $key . ' : ' . $post . ' </br> </br>';	
        }
	$mail->Body = $message;
	
        $mail->send();


    }

    private function persistence()
    {
        $connection = Connection::getInstance();
        $connection->run($this->sqlConstruct());
    }

    private function sqlConstruct()
    {
        $sql = "insert into quiz ";
        $fields = '(';
        $values = '(';
        $i = 0;
        $len = count($this->_post);
        foreach ($this->_post as $key => $post) {
            if ($i == $len - 1) {
                $fields .= $key;
                $values .= ' " ' . $post . '" ';
            } else {
                $fields .= $key . ', ';
                $values .= ' " ' . $post . '", ';
            }
            $i++;
        }
        $fields .= ')';
        $values .= ')';
        return $sql . $fields . ' values ' . $values;
    }

    function __toString()
    {
        $arrayMsj['success'] = $this->_send;
        if ($this->_send) {
            $arrayMsj['message'] = 'Felicitaciones, su mensaje a sido enviado con éxito!!';
        } else {
            $arrayMsj['message'] = $this->_errorMessages;
        }
        return (json_encode($arrayMsj));

    }
}
echo new submit();