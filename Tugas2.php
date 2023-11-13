<!DOCTYPE html>
<html>
<head>
    <title>Tugas 2</title>
</head>
<body>

<?php
// Daftar data dengan minimal 10 entri
$data = array(
    array(
        'NIM' => '101217001',
        'Nama' => 'John Doe',
        'Gambar' => 'jhon Doe.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Perusahaan Teknologi yang mengkhususkan diri dalam pengembangan perangkat lunak inovatif.'
    ),
    array(
        'NIM' => '101217002',
        'Nama' => 'Jane Smith',
        'Gambar' => 'jane smith.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Perusahaan teknologi terkemuka yang fokus pada riset dan pengembangan teknologi terbaru.'
    ),
    array(
        'NIM' => '101217003',
        'Nama' => 'Alice Johnson',
        'Gambar' => 'alice.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Startup teknologi yang berfokus pada pengembangan aplikasi mobile inovatif.'
    ),
    array(
        'NIM' => '101217004',
        'Nama' => 'Bob Brown',
        'Gambar' => 'bob.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Perusahaan besar dalam industri teknologi yang memiliki beragam produk dan layanan.'
    ),
    array(
        'NIM' => '101217005',
        'Nama' => 'Eva White',
        'Gambar' => 'eva.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Perusahaan yang mengkhususkan diri dalam pengembangan perangkat keras komputer.'
    ),
    // Tambahkan 5 entri lagi
    array(
        'NIM' => '101217006',
        'Nama' => 'David Lee',
        'Gambar' => 'david.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Perusahaan teknologi yang mengembangkan aplikasi e-commerce terkemuka.'
    ),
    array(
        'NIM' => '101217007',
        'Nama' => 'Sarah Adams',
        'Gambar' => 'sarah.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Startup teknologi yang berfokus pada keamanan siber dan perangkat lunak antivirus.'
    ),
    array(
        'NIM' => '101217008',
        'Nama' => 'Michael Wilson',
        'Gambar' => 'michael.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Perusahaan yang mengkhususkan diri dalam pengembangan perangkat keras dan jaringan komunikasi.'
    ),
    array(
        'NIM' => '101217009',
        'Nama' => 'Emily Clark',
        'Gambar' => '1.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Perusahaan teknologi yang fokus pada pengembangan aplikasi mobile untuk pendidikan.'
    ),
    array(
        'NIM' => '101217010',
        'Nama' => 'Daniel Turner',
        'Gambar' => '2.jpg',
        'Kategori' => 'Perusahaan Teknologi',
        'Deskripsi' => 'Perusahaan yang mengkhususkan diri dalam riset dan pengembangan kecerdasan buatan.'
    ),
);

echo '<table border="1">';
echo '<tr>';
echo '<th>NIM</th>';
echo '<th>Nama</th>';
echo '<th>Gambar</th>';
echo '<th>Kategori</th>';
echo '<th>Deskripsi</th>';
echo '</tr>';

foreach ($data as $entry) {
    echo '<tr>';
    echo '<td>' . $entry['NIM'] . '</td>';
    echo '<td>' . $entry['Nama'] . '</td>';
    echo '<td><img src="' . $entry['Gambar'] . '" width="100" height="100"></td>';
    echo '<td>' . $entry['Kategori'] . '</td>';
    echo '<td>' . $entry['Deskripsi'] . '</td>';
    echo '</tr>';
}

echo '</table>';
?>

</body>
</html>