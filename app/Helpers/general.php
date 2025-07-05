<?php
// Constants
define('PAGINATION_COUNT', 10);
/*
|-------------------------------------------------------------------------------
|   Helper Function To Confert En numbers to Ar numbers and Convert Am Pm To ص م
|-------------------------------------------------------------------------------       
*/
function formatDateLocalized($datetime)
{
    $date = $datetime->format('j/n/Y');
    $time = $datetime->format('h:i A');

    if (app()->getLocale() === 'ar') {
        $time = str_replace(['AM', 'PM'], ['ص', 'م'], $time);
        $nums = ['0','1','2','3','4','5','6','7','8','9'];
        $arabic = ['٠','١','٢','٣','٤','٥','٦','٧','٨','٩'];
        $date = str_replace($nums, $arabic, $date);
        $time = str_replace($nums, $arabic, $time);
    }

    return "$date - $time";
}


