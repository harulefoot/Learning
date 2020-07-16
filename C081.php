<?php
    // C081:靴下の整理
    $soxNum = fgets(STDIN);
    $hitCnt=0;
    $typeAry = array();
    $LRAry = array();
    $hitAry = array();

    // 入力値を取得
    for($ic=0;$ic<$soxNum;$ic++){
        $wkAry = explode(" ",fgets(STDIN));
        $typeAry[] = $wkAry[0];
        $LRAry[] = $wkAry[1];
        $hitAry[]=0;
    }

    // 見つかった靴下のペアを探していくループ
    for($ic=0;$ic<$soxNum;$ic++){
        if($hitAry[$ic]==1)continue;        // 見つかったものは飛ばす
        for($jc=$ic;$jc<$soxNum;$jc++){ 
            if($ic==$jc) continue;
            if($hitAry[$jc]==1)continue;    // 見つかったものは飛ばす
            if($typeAry[$ic]==$typeAry[$jc]){
                if($LRAry[$ic]!=$LRAry[$jc]){
                    // タイプが同じで左右異なる場合、１つ追加し、それぞれのフラグを立てておく
                    $hitCnt++;
                    $hitAry[$ic]=1;
                    $hitAry[$jc]=1;
                    break;
                }
            }
        }    
    }
    // ペアが見つかった靴下の数を出力
    echo $hitCnt;
?>