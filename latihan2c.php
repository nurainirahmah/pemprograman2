<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Latihan 2 C </title>
   
</head>

<body>

    <div class="luarnya">

        <?php
        for ($ai = 1; $ai <= 5; $ai++) {
             
            $nih = ($ai % 2 == 0) ? 'genap' : 'ganjil';
        
            for ($A = 1; $A <= $ai; $A++) {
                echo "<div class='pinggirnya $nih'>" . $A. "</div>";
            }
            echo "<br>";
        }
        ?>

    </div>


    
</body>
<style>
      .ganjil {
          background-color: black;
          color: white;
 
        }

        .genap {
            background-color: aqua;
         
        }
       

        .pinggirnya {
            border: 3px solid black;
            padding: 10px;
            width: 24px;
            height: 24px;
            font-size: 20px;
            text-align: center;
            display: inline-block;
            margin-right: 5px;
            margin-bottom: 10px;
        }
    </style>

</html>