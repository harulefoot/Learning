<?php
// フォームからデータが送信されているか？
if (isset($_GET["w"]) && isset($_GET["h"])){
    // データが送信されていればBMIを計算
    $w = floatval($_GET["w"]);
    $h = floatval($_GET["h"]);      // 身長
    $bmi = $w / pow($h / 100, 2);   // bmiの計算
    $per = floor(($bmi / 22) * 100);
    // 結果を表示
    echo "体重{$w}kg,身長{$h}cm<br/>";
    echo "bmiは{$bmi}<br/>";
    echo "肥満度は{$per}%です。";
} else {
    echo "<form>";
    echo "身長：<input type='text' name='h'> cm <br/>";
    echo "身長：<input type='text' name='w'> kg <br/>";
    echo "<input type='submit' value='BMI判定'>";
    echo "</form>";
}
?>