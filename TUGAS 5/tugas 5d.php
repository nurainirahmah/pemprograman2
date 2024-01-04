<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["n"])) {
    $n = $_POST["n"];
    
    function display_number_pattern($n) {
        for ($i = $n; $i > 0; $i--) {
            for ($j = 1; $j <= $i; $j++) {
                echo $j . " ";
            }
            echo "<br>";
        }
    }

    // Memanggil fungsi untuk menampilkan pola angka
    display_number_pattern($n);
}
?>

<!-- Formulir HTML untuk menerima input dari pengguna -->
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Masukkan jumlah angka/baris: <input type="text" name="n">
    <input type="submit" value="Tampilkan Pola">
</form>