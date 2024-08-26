<?php
    declare(strict_types=1);
    function formatDollarAmount(float $amount): string
    {
        $isNegative = $amount < 0;
        return ($isNegative ? '-' : '') .'$'. number_format(abs($amount), 2);
    }

function formatDate(string $date): string
{
    $months = [
        1 => 'Ocak', 2 => 'Şubat', 3 => 'Mart', 4 => 'Nisan', 5 => 'Mayıs', 6 => 'Haziran',
        7 => 'Temmuz', 8 => 'Ağustos', 9 => 'Eylül', 10 => 'Ekim', 11 => 'Kasım', 12 => 'Aralık'
    ];

    $timestamp = strtotime($date);
    $day = date('j', $timestamp);
    $month = (int)date('n', $timestamp); // Ay numarasını al
    $year = date('Y', $timestamp);

    return $day . ' ' . $months[$month] . ' ' . $year;
}
?>


