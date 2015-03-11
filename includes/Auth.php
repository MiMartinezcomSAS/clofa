<?php
session_start();
require_once 'Connection.php';

class Auth {

    private $post;
    private $auth = false;

    function __construct($post){
        $this->post = $post;
        $this->check();
    }
    private function check(){
        $connectionPass = Connection::getInstance();
        $pass = (empty( $_POST['password'] ) )?'':$_POST['password'];
        $sqlPass = 'select  COUNT(*) as c from user where password = ' . '"' . $pass . '"' . 'limit 1';
        $countPass = $connectionPass->query($connectionPass->run($sqlPass));

        if( $countPass[0]['c'] > 0 ){
            $this->auth = true;
        }
    }
    function __toString()
    {
        $arrayMsj['success'] = $this->auth;
        if ($this->auth) {
            $_SESSION['login'] = true;
        }
        return (json_encode($arrayMsj));

    }
}
echo new Auth($_POST);