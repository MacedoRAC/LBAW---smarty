<?php

class Comment {
    private $text;
    private $tu;
    private $td;
    private $creatorName;
    private $creatorID;
    private $date;


    public function __construct($text, $tu, $td, $creatorName, $creatorID, $date) {
        $this->text = $text;
        $this->tu = $tu;
        $this->td = $td;
        $this->creatorName = $creatorName;
        $this->creatorID = $creatorID;
        $this->date = $date;
    }


    public function getText() {
        return $this->text;
    }


    public function getTu() {
        return $this->tu;
    }


    public function getTd() {
        return $this->td;
    }


    public function getCreatorName() {
        return $this->creatorName;
    }


    public function getCreatorID() {
        return $this->creatorID;
    }
}