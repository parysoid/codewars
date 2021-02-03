<?php

function subtractSum($n) {

    $newN = $n - array_sum(str_split((string)$n));
    $text = '1-kiwi2-pear3-kiwi4-banana5-melon6-banana7-melon8-pineapple9-apple10-pineapple11-cucumber12-pineapple13-cucumber14-orange15-grape16-orange17-grape18-apple19-grape20-cherry21-pear22-cherry23-pear24-kiwi25-banana26-kiwi27-apple28-melon29-banana30-melon31-pineapple32-melon33-pineapple34-cucumber35-orange36-apple37-orange38-grape39-orange40-grape41-cherry42-pear43-cherry44-pear45-apple46-pear47-kiwi48-banana49-kiwi50-banana51-melon52-pineapple53-melon54-apple55-cucumber56-pineapple57-cucumber58-orange59-cucumber60-orange61-grape62-cherry63-apple64-cherry65-pear66-cherry67-pear68-kiwi69-pear70-kiwi71-banana72-apple73-banana74-melon75-pineapple76-melon77-pineapple78-cucumber79-pineapple80-cucumber81-apple82-grape83-orange84-grape85-cherry86-grape87-cherry88-pear89-cherry90-apple91-kiwi92-banana93-kiwi94-banana95-melon96-banana97-melon98-pineapple99-apple100-pineapple';
    $arr = explode('-',$text);
    if (!empty($arr[$newN -1]))
    {
        $len = strlen((string)$n);
        $result = (string)$arr[$newN];
        return substr($result,0,-$len);
    }
    else
        return subtractSum($newN);
}

echo (subtractSum(10));