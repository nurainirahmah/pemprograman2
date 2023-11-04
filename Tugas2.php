<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 0 auto;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
          background-color: #ccc;
        }
    </style>
</head>
<body>
    <?php
    $NIM = 701220113;
    $tigaDigitTerakhir = substr($NIM, -3);
    $kategori = $tigaDigitTerakhir % 5;
$data = array(
    array(
        'nama' => 'Harimau Sumatera',
        'deskripsi' => 'Harimau Sumatera adalah spesies harimau yang terancam punah.',
        'gambar' => 'harimau.jpg',
        'lokasi' => 'Sumatera',
        'populasi' => 'Kritis',
        'kategori' => 'Flora dan Fauna terancam punah'
    ),
    array(
        'nama' => 'Soekarno',
        'deskripsi' => 'Soekarno adalah Pahlawan Nasional Indonesia yang memproklamirkan kemerdekaan Indonesia.',
        'gambar' => 'soekarno.jpg',
        'tanggal_lahir' => '6 Juni 1901',
        'tempat_lahir' => 'Blitar, Jawa Timur',
        'kategori' => 'Pahlawan Nasional Indonesia'
    ),
    array(
        'nama' => 'Google',
        'deskripsi' => 'Google adalah perusahaan teknologi raksasa yang terkenal di seluruh dunia.',
        'gambar' => 'google.jpg',
        'didirikan' => '4 September 1998',
        'kantor_pusat' => 'Mountain View, California, Amerika Serikat',
        'kategori' => 'Perusahaan Teknologi'
    ),
    array(
        'nama' => 'Tari Saman',
        'deskripsi' => 'Tari Saman adalah tarian tradisional Aceh yang kaya akan budaya daerah.',
        'gambar' => 'saman.jpg',
        'asal' => 'Aceh, Indonesia',
        'gerakan' => 'Dilakukan dalam kelompok',
        'kategori' => 'Budaya Daerah di Indonesia'
    ),
    array(
        'nama' => 'Albert Einstein',
        'deskripsi' => 'Albert Einstein adalah fisikawan terkenal yang merumuskan teori relativitas.',
        'gambar' => 'einstein.jpg',
        'tanggal_lahir' => '14 Maret 1879',
        'tempat_lahir' => 'Ulm, Kerajaan Württemberg, Kekaisaran Jerman',
        'kategori' => 'Penemu-penemu terkenal di dunia'
    ),
    // Tambahkan entri lainnya sesuai dengan aturan kategori
);

echo '<table border="1">';
echo '<tr><th>Nama</th><th>Deskripsi</th><th>Gambar</th><th>Detail</th><th>Kategori</th></tr>';
foreach ($data as $entry) {
    echo '<tr>';
    echo '<td>' . $entry['nama'] . '</td>';
    echo '<td>' . $entry['deskripsi'] . '</td>';
    echo '<td><img src="' . $entry['gambar'] . '" alt="' . $entry['nama'] . '"></td>';
    echo '<td>';
    foreach ($entry as $key => $value) {
        if ($key != 'nama' && $key != 'deskripsi' && $key != 'gambar' && $key != 'kategori') {
            echo '<b>' . $key . ':</b> ' . $value . '<br>';
        }
    }
    echo '</td>';
    echo '<td>' . $entry['kategori'] . '</td>';
    echo '</tr>';
}
echo '</table>';
?>
