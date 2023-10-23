<!DOCTYPE html>
<html>
<head>
    <title>Contoh Mengubah Style Teks</title>
    <style>
        .highlight {
            color: #1A0547; /* Ganti dengan gaya CSS sesuai kebutuhan Anda */
            font-weight: Bolder;
            font-style: italic;
        }
    </style>
</head>
<body>
    <?php
    function ubahStyle($string, $kelasCSS) {
        // Mengembalikan string dengan kelas CSS yang ditambahkan
        return '<span class="' . $kelasCSS . '">' . $string . '</span>';
    }

    // Mengisi variabel
    $tulisan = "Hello World! Here I come!";
    $csskelas= "highlight"; // Gantilah "highlight" dengan nama kelas CSS yang sesuai dengan proyek Anda.

    // Memanggil fungsi dan mencetak hasilnya
    $styledText = ubahStyle($tulisan, $csskelas);
    echo $styledText;
    ?>
</body>
</html>