<?php


class Question {
    private $text;
    private $tu;
    private $td;
    private $creatorName;
    private $creatorID;
    private $date;
    private $answers;
    private $questionID;


    public function __construct($questionID, $text, $tu, $td, $creatorName, $date, $creatorID, $answers) {
        $this->questionID = $questionID;
        $this->text = $text;
        $this->tu = $tu;
        $this->td = $td;
        $this->creatorName = $creatorName;
        $this->creatorID = $creatorID;
        $this->date = $date;
        $this->answers = $answers;
    }


    public function getText() {
        return $this->text;
    }


    public function getQuestionID()
    {
        return $this->questionID;
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


    public function getDate() {
        return $this->date;
    }


    public function getCreatorID() {
        return $this->creatorID;
    }


    public function getAnswers() {
        return $this->answers;
    }
}