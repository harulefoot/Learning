<?php
    // Level:C 使用回数の調査
    $num = (int)fgets(STDIN);
    $useAry = explode(" ", fgets(STDIN));

    $idAry=Array();
    $countAry=Array();
    for($ic=0;$ic<$num;$ic++){
        $hit=0;
        for ($jc=0;$jc<count($idAry);$jc++){
            if($idAry[$jc]==$useAry[$ic]){
                // 既出IDの場合はインクリメント
                $countAry[$jc]++;
                $hit=1;
            }
        }
        if ($hit==0){
            // 新出IDの場合はリストの末尾に追加
            $idAry[count($idAry)]=$useAry[$ic];
            $countAry[count($countAry)]=1;
        }
    }

    // 一番多いIDを取得
    $maxM=PHP_INT_MIN;
    $idx=0;
    for($ic=0;$ic<count($countAry);$ic++){
        if($countAry[$ic]>$maxM){
            $maxM=$countAry[$ic];
            $idx=$ic;
        }
    }

    $check=Array();
    $check[0]=$idAry[$idx];
    for ($ic=0;$ic<count($countAry);$ic++){
        if($idx==$ic) continue;
        if($countAry[$idx]==$countAry[$ic]){
            $check[count($check)]=$idAry[$ic];
        }
    }
    // 複数いる場合があるため、改行して出力
    sort($check);
    for($ic=0;$ic<count($check);$ic++){
        if ($ic==0){
            echo $check[$ic];
        } else {
            echo " ".$check[$ic];
        }
    }
    
?>
