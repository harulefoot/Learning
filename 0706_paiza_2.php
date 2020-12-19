<?php
    // Level: タダ飲みコーヒー
    $input_line = explode(" ", fgets(STDIN));
    $price=$input_line[0];
    $rate=$input_line[1];
    $totalCost=$price;
    $flg=false;
    // ループをまわす
    while(!$flg){
        // 割引後の値段を更新
        $price = floor($price*(1-($rate*0.01)));
        //  値段チェック    
        if($price<1) {
            // １円未満ならループを抜ける
            $flg=true;
        }
        // 合計金額を更新
        $totalCost+=$price;
    }
    // 合計金額を出力
    echo $totalCost;
?>
