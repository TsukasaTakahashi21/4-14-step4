<?php

class ExamResultChecker {
  private $examScoreList;
  private $resultList;

  public function __construct($examScoreList) {
    $this->examScoreList = $examScoreList;
    $this->resultList = [];
  }

  public function checkResults() {
    foreach ($this->examScoreList as $subject => $score) {
      if ($score >= 30) {
          $this->resultList[] = $subject. "は合格"."\n";
      } else {
          $this->resultList[] = $subject. "は不合格"."\n";
      }
    }
  }

    public function displayResults() {
      echo implode("\n", $this->resultList);
    }    
}

$examScoreList = [
  "国語" => 70,
  "算数" => 31,
  "理科" => 45,
  "社会" => 29,
  "英語" => 30,
];
$resultList = [];

$examChecker = new ExamResultChecker($examScoreList);
$examChecker->checkResults();
$examChecker->displayResults();
?>