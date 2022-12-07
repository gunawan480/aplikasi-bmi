<?php
$bb = 60;
$tb = 1.6;

$BMI = $bb / ($tb * $tb);
echo "BMI = $BMI" . "<br>";

if ($BMI < 17.0) {
    echo "Kurus, kekurangan berat badan berat";
} elseif ($BMI <= 18.4) {
    echo "Kurus, kekurangan berat badan ringan";
} elseif ($BMI <= 25.0) {
    echo "Normal";
} elseif ($BMI <= 27.0) {
    echo "Gemuk, kelebihan berat badan tingkat ringan";
} elseif ($BMI > 27.0) {
    echo "Gemuk, kelebihan berat badan tingkat berat";
}
