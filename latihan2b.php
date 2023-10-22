<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Latihan 2 B </title>
   
</head>

<body>

    <div class="square">

        <?php
        for ($ai = 1; $ai <= 5; $ai++) {
            for ($A = 1; $A <= $ai; $A++) {
                echo "<div class='clear'>" . $A. "</div>";
            }
            echo "<br>";
        }
        ?>

    </div>


    
</body>
<style>

        .clear {
            border: 4px solid black;
            padding: 10px;
            width: 20px;
            height: 24px;
            font-size: 20px;
            text-align: center;
            display: inline-block;
            margin-right: 5px;
            margin-bottom: 10px;
        }
    </style>

</html>