<?php
class chat {
    public $text;
    public function openChat(){
        echo "openChat <br>";
        return $this;
    }
    public function sendMassage(){
        return $this->text ."<br>";
    }
    public function printMassage(){
        echo $this->sendMassage();
        return $this;
    }
    public function closeChat(){
        echo "closeChat <br>";
    }
    
}

$massage = new chat;
// $massage->openChat()->printMassage()->closeChat();
// $massage->text ="Hello Ahmed";
// $massage->printMassage();
// $massage->closeChat();

//chinning method
$massage->text ="Hello Ahmed";
$massage->openChat()->printMassage()->closeChat();