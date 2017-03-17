<?php
class Push {
    private $title;
    private $message;
    private $image;
    private $data;
    private $is_background;

    /* constructor de la clase */
    function __construct(){

    }

    /* función para asignar el titulo del mensaje */
    public function setTitle($title){
        $this->title = $title;
    }

    /* función para asignar el texto del mensaje */
    public function setMessage($message){
        $this->message = $message;
    }

    /* función para asignar una imagen en el mensaje */
    public function setImage($imageUrl){
        $this->image = $imageUrl;
    }

    public function setPayload($data){
        $this->data = $data;
    }

    public function setIsBackground($is_background){
        $this->is_background = $is_background;
    }

    /* función que regresa el arreglo con todos los valores del mensaje */
    public function getPush(){
        $res = array();
        $res['data']['title'] = $this->title;
        $res['data']['is_background'] = $this->is_background;
        $res['data']['message'] = $this->message;
        $res['data']['image'] = $this->image;
        $res['data']['payload'] = $this->data;
        $res['data']['timestamp'] = date('Y-m-d G:i:s');
        return $res;
    }

}
?>