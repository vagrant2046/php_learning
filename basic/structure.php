<?php
//顺序结构
//选择结构
//单分支结构
$studentId = '1';
$score = $data[$studentId][YUWEN];
if ($score >= 80 && $score < 90) {
    printf("学生 %d 的语文分数: %0.1f, 对应等级是: %s\n", $studentId, $score, A);
}
//双分支机构
$studentId = '2';
$score = $data[$studentId][YUWEN];
if ($score >= 80 && $score < 90) {
    printf("学生 %d 的语文分数: %0.1f, 对应等级: %s\n", $studentId, $score, A);
} else {
    printf("学生 %d 的语文分数: %0.1f, 对应等级: %s\n", $studentId, $score, "其他等级");
}
//多分支结构
$studentId = '2';
$score = $data[$studentId][YUWEN];
if ($score >= 90) {
    printf("学生 %d 的语文分数: %0.1f, 对应等级: %s\n", $studentId, $score, A);
} else if ($score >= 80 && $score < 90) {
    printf("学生 %d 的语文分数: %0.1f, 对应等级: %s\n", $studentId, $score, B);
} else if ($score >= 60 && $score < 80) {
    printf("学生 %d 的语文分数: %0.1f, 对应等级: %s\n", $studentId, $score, C);
} else if ($score < 60) {
    printf("学生 %d 的语文分数: %0.1f, 对应等级: %s\n", $studentId, $score, D);
} else {
    printf("学生 %d 的语文分数: %0.1f, 对应等级: %s\n", $studentId, $score, "其他等级");
}
//switch分支语句
switch ($score) {
    case $score >= 90:
        $level = 'A';
        break;
    case $score >= 80 && $score < 90:
        $level = 'B';
        break;
    case $score >= 60 && $score < 80:
        $level = 'C';
        break;
    case $score < 60:
        $level = 'D';
        break;
    default:
        $level = "其他等级";
        break;
}
//循环结构
$total = count($data);
$i = 1;
while ($i <= $total) {
    echo "第 $i 个学生的成绩信息：\n";
    print_r($data[$i]);
    $i++;
}
//do...while
do {
    echo "第 $i 个学生的成绩信息：\n";
    print_r($data[$i]);
    $i++;
} while($i <= $total);
//for
for ($i = 1; $i <= $total; $i++) {
    echo "第 $i 个学生的成绩信息：\n";
    print_r($data[$i]);
}
//foreach
foreach ($data as $key => $val) {

}
//break vs. continue
foreach ($data as $id => $score) {
    echo "第 {$id} 个学生的成绩信息：\n";
    print_r($score);
    if ($id == 2) {
        break;
    }
}
//跳转结构goto