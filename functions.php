<?php

// 各ファイルでhtmlspecialcharsを短く
// 共通用関数

function h($string){
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

function calculate_average_rating($data) {
    $total_rating = 0;
    $count = 0;
    foreach ($data as $row) {
        if (isset($row[6]) && is_numeric($row[6])) {
            $total_rating += $row[6];
            $count++;
        }
    }
    return $count > 0 ? $total_rating / $count : 0;
}


?>