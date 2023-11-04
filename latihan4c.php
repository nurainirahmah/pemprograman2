<?php

$aseanCountries = array(
    "Indonesia" => "D.K.I. Jakarta",
    "Singapura" => "Singapura",
    "Malaysia" => "Kuala Lumpur",
    "Brunei" => "Bandar Seri Begawan",
    "Thailand" => "Bangkok",
    "Laos" => "Vientiane",
    "Filipina" => "Manila",
    "Myanmar" => "Naypyidaw"
);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Negara ASEAN dan Ibukotanya</title>
</head>
<body>

<h1>Daftar Negara ASEAN dan Ibukotanya</h1>

<ul>
    <?php
    foreach ($aseanCountries as $country => $capital) {
        echo "<li>$country: $capital</li>";
    }
    ?>
</ul>

</body>
</html>
