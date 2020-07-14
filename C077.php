<?php
    // Level:C 【30万人記念問題】レポートの評価
    $input_line = fgets(STDIN);
    $strAry = explode(" ", $input_line);
    $stuNum=$strAry[0];         // 生徒数
    $quesNum=$strAry[1];        // 問題数
    $score = 100 / $quesNum;    // １問あたりの配点

    for($ic=0;$ic<$stuNum;$ic++){
        $input_line = fgets(STDIN);
        $strAry = explode(" ", $input_line);
        $date=$strAry[0];         // 提出期限までの日数
        $ansNum=$strAry[1];       // 正答数
        // 比率を決める
        $rate=1.0;
        if($date<=0) {
        }elseif($date<=9){
            $rate=0.8;
        }else{
            $rate=0.0;
        }
        // 点数に応じて判定を決める
        $totalScore=$score*$ansNum*$rate;
        if(80<=$totalScore) {
            echo "A\n";
        }elseif(70<=$totalScore&&$totalScore<=79){
            echo "B\n";
        }elseif(60<=$totalScore&&$totalScore<=69){
            echo "C\n";
        }else{
            echo "D\n";
        }
    }
?>
