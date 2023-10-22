<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Latihan 1 c</title>
  Tampilan Tabel 
</head>

<body>

    <div class="square">

    <div class="wrapper">
        <div class="kotakA1"> <?php $a1 ="A" ?>
            <?php echo "$a1 <br>" ?>   
        </div>

        <div class="kotakA2"> <?php $a2 ="A" ?>
            <?php echo "$a2 <br>" ?>
        </div>

        <div class="kotakA3"> <?php $a3 ="A" ?>
            <?php echo "$a3 <br>" ?>
        </div>

        <div class="kotakB1"> <?php $b1 ="B" ?>
            <?php echo "$b1 <br>" ?>
        </div>

        <div class="kotakB2"> <?php $b2 ="B" ?>
            <?php echo "$b2 <br>" ?>
        </div>

        <div class="kotakC"> <?php $c ="C" ?>
            <?php echo "$c <br>" ?>
        </div>
        
</div>   
</body>
<style>
        .square {
            border: 5px solid black;
            padding: 10px;
            margin: 5px;
            width: 40%;
        }


        .clear {
            border: 4px solid black;
            padding: 10px;
            width: 24px;
            height: 24px;
            font-size: 20px;
            text-align: center;
            display: inline-block;
            margin-right: 5px;
            margin-bottom: 10px;
        }
    .body{
        background-color: white;
        margin: 5px;
    }
    
 
    .kotakA1{
        width: 90px;
        height: 100px;
        text-align: center;
        border: 3px solid black;
        margin-top: 30px;
        margin-left: 1px;
        color: black;
        font-size: 60px;
    }

    .kotakA2{
        width: 90px;
        height:  100px;
        text-align: center;
        border: 3px solid black;
        margin-top: 30px;
        margin-left: 1px;
        color: black;
        font-size: 60px;
    }

    .kotakA3{
        width: 90px;
        height: 100px;
        text-align: center;
        border: 3px solid black;
        margin-top: 30px;
        margin-left: 1px;
        color: black;
        font-size: 60px;
    }

    .kotakB1{
        width: 90px;
        height: 100px;
        text-align: center;
        border: 3px solid black;
        margin-top: -245px;
        margin-left: 150px;
        margin-bottom: 40px;
        color: black;
        font-size: 60px;
    }
    
    .kotakB2{
        width: 90px;
        height: 100px;
        text-align: center;
        border: 3px solid black;
        margin-top: -10px;
        margin-left: 150px;
        color: black;
        font-size: 60px;
    }

    .kotakC{
        width: 90px;
        height: 100px;
        text-align: center;
        border: 3px solid black;
        margin-top: -108px;
        margin-left: 300px;
        color: black;
        font-size: 60px;
    }
    
    </style>

</html>