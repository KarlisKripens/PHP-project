<html>
<head>

</head>
<body>
    <?php
        echo "Laiks: ".time();
        ?>
    Datums:
    <?php
    echo date( "d.m.Y. H:i:s");
    echo "<br>";
    echo 2+2;
    $o1= $_POST['o1'] ?? 0;
    $o2= $_POST['o2'] ?? 0;
    $o3= $_POST['o3'] ?? '+';
    ?>
<form method="post" action="index.php">
    <input type="text" name="o1" value="<?= $o1?>">
    <input type="text" name="o2">
    <input type="text" name="o3">
    <input type="submit">
</form>
    <?php


       /* if ($o3 == '+'){
            echo $o1+$o2;
        } else if ($o3 == '-'){
            echo $o1-$o2;
        }*/
       $result = 0;
       switch ($o3){
           case '+':
               $result = $o1+$o2;
               break;
           case '-':
               $result = $o1-$o2;
               break;
           case '*':
               $result = $o1*$o2;
               break;
           case '/':
               $result = $o1/$o2;
               break;
       }

    ?>
<div><?= $result ?></div>
<?php

    function printarr($masivs){
        $masivs = ['pirmais' => 1, 'otrais' => 2, ' trešais' =>3, 'ceturtais' => 4];
        foreach ($masivs as $key => $elem){
            echo $key.' ir '. $elem.' ';
        }
        echo "<br>";
    }

    echo "<br>";

    foreach ($arr as $elem){
        echo $elem.' ';
    }
    echo "<br>";
    $arr = [1,2,3,4];


        for ($i=0; $i<4; $i++){
            echo $arr[$i]." ";
        }
   echo "<br>";



        $assarr = ['pirmais' => 1, 'otrais' => 2, ' trešais' =>3, 'ceturtais' => 4];
        printarr($assarr);

    var_dump($assarr);

    ?>
    ata, master
</body>
</html>