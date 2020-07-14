<?php
    // Level:B 演説のPG
    $input_line = fgets(STDIN);
    $input_line = explode(" ", $input_line); 
    $m=$input_line[0];
    $n=$input_line[1];
    $k=$input_line[2];
    
    $people=array();
    $pop=array();
    // 初期化
    for($ic=0;$ic<$m;$ic++){
        $people[$ic]=$ic+1;
        $pop[$ic]=0;
    }
    
    // その他
    $people[$m]=$m+1;
    $pop[$m]=$n;

    // 演説回数分ループ
    for($ic=0;$ic<$k;$ic++){
        $wk=fgets(STDIN);
        $dum=0;
        for($jc=0;$jc<$m+1;$jc++){    // 立候補者の数
            if($wk==$people[$jc]){
                // 一致
                for($kc=0;$kc<$m+1;$kc++){
                    if($kc==$jc) continue;
                    if($pop[$kc]>0){
                        $pop[$kc]--;
                        $dum++;
                    }
                }
                $pop[$jc]=$pop[$jc]+$dum;
            } 
        }
    }

    $maxM=0;
    $idx=-1;
    for($ic=0;$ic<$m;$ic++){
        if($pop[$ic]>$maxM){
            $maxM=$pop[$ic];
            $idx=$ic;
        }
    }
    
    $check=array();
    $check[0]=$people[$idx];
    $wk=1;
    for ($ic=0;$ic<$m;$ic++){
        if($idx==$ic) continue;
        if($pop[$idx]==$pop[$ic]){
            $check[$wk]=$pop[$ic];
            $wk++;
        }
    }
    // 複数いる場合があるため、改行して出力
    for($ic=0;$ic<count($check);$ic++){
        echo $check[$ic]."\n";
    }
?>