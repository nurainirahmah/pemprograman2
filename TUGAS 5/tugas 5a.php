<?php
function display_number_pattern($n) {
    for ($i = $n; $i > 0; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo "<br>";
    }
}

// Memanggil fungsi untuk menampilkan pola angka
display_number_pattern(10);
?>
