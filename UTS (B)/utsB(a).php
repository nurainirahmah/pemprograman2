<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Barang</title>
</head>
<body>

    <br>Tabel Harga barang</br>
    <br>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Produk</th>
            <th>Stok</th>
            <th>Harga</th>
            <th>Jumlah</th>
        </tr>

	<?php 

		$barang = array(
            array("1", "Pepsodent", 30, 10000),
            array("2", "Sunlight", 15, 11000),
            array("3", "Baygon", 10, 16000),
            array("4", "Dove", 20, 22000),
            array("5", "Rinso", 20, 20000),
            array("6", "Downy", 15, 12000),
            array("7", "Le Mineral", 25, 5000)
        );

		$total = 0;
        foreach ($barang as $data) {
            $id = $data[0];
            $produk = $data[1];
            $stok = $data[2];
            $harga = $data[3];
            $jumlah = $stok * $harga;
            $total += $jumlah;

            echo "<tr>";
            echo "<td>$id</td>";
            echo "<td>$produk</td>";
            echo "<td>$stok</td>";
            echo "<td>Rp $harga</td>";
            echo "<td>Rp $jumlah</td>";
            echo "<td>Total = $total</td>";
            echo "</tr>";
        }

 	?>
	</table>
</body>
</html>
