<?php
/**
 * Created by PhpStorm.
 * User: lzq
 * Date: 2018/11/10
 * Time: 9:18
 */
//数组的组合
$array = array();
for($i=1;$i<=8;$i++){

    for($j=1;$j<=8;$j++){
        if($j == $i) continue;
        $br1 = 0;
        foreach($array as $val){
            if(preg_match('/'.$i.'/',$val) && preg_match('/'.$j.'/',$val)){
                $br1 = 1;
                break;
            }
        }
        if($br1 == 1) continue;

        for($k=1;$k<=8;$k++){
            if($k == $i || $k == $j) continue;
            $br2 = 0;
            foreach($array as $val){
                if(preg_match('/'.$i.'/',$val) && preg_match('/'.$j.'/',$val)){
                    $br2 = 1;
                    break;
                }
                if(preg_match('/'.$i.'/',$val) && preg_match('/'.$k.'/',$val)){
                    $br2 = 1;
                    break;
                }
                if(preg_match('/'.$j.'/',$val) && preg_match('/'.$k.'/',$val)){
                    $br2 = 1;
                    break;
                }
            }
            if($br2 == 1) continue;
            $tmp = $i.$j.$k;
            $array[] = $tmp;
        }
    }
}
print_r($array);
