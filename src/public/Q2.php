<?php
$examScoreLists = [
    ["japanese" => 30, "math" => 30, "english" => 30],
    ["japanese" => 35, "math" => 41, "english" => 90],
    ["japanese" => 89, "math" => 40, "english" => 60],
    ["japanese" => 70, "math" => 70, "english" => 30]
];

$resultList = [];

$passingScores = [
    "japanese" => 35,
    "math" => 40,
    "english" => 31
];


foreach ($examScoreLists as $examineeNum => $examScoreList) {
  $isPass = true;

  foreach ($examScoreList as $subject => $score) {
      if ($score < $passingScores[$subject]) {
          $isPass = false;
          break;
      }
  }

  if ($isPass) {
      $resultList[] = ($examineeNum + 1) . "番目の受験者は合格";
  } else {
      $resultList[] = ($examineeNum + 1) . "番目の受験者は不合格";
  }
}

echo implode("<br>", $resultList);

// 4番目の出力がおかしい気がするとプルリクに記載
// [**各教科の基準点]　
// japanese: 35点,　math: 40点,　english: 31点**
// 1番目の受験者は不合格
// 2番目の受験者は合格
// 3番目の受験者は合格
// 4番目の受験者は合格