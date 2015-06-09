<?php


class Answer {
    private $text;
    private $tu;
    private $td;
    private $creatorName;
    private $creatorID;
    private $date;
    private $comments;


    public function __construct($text, $tu, $td, $creatorName, $date, $creatorID, $comments) {
        $this->text = $text;
        $this->tu = $tu;
        $this->td = $td;
        $this->creatorName = $creatorName;
        $this->creatorID = $creatorID;
        $this->date = $date;
        $this->comments = $comments;
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


    public function getCreator() {
        return $this->creator;
    }


    public function getDate() {
        return $this->date;
    }


    public function getCreatorID() {
        return $this->creatorID;
    }


    public function getComments() {
        return $this->comments;
    }
}