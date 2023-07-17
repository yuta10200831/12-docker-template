<?php
$examScoreList = [
	"国語" => 70,
	"算数" => 31,
	"理科" => 45,
	"社会" => 29,
	"英語" => 30,
];

$resultList = [];

foreach ($examScoreList as $subject => $score) {
  if ($score >= 30) {
    $resultList[] = $subject . "は合格";
  }else {
    $resultList[] = $subject . "は不合格";
  }
}

echo implode("<br>", $resultList);