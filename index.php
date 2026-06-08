<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1 style='color:blue'>งานที่ 1 พิชญะ อันทะโคตร BIT.2/4 เลขที่ 31 </h1>";
    
    ?>
<form action="">
    <label for="">เลขแม่สูตรคูณ</label> <br>
    <input type="number" name="Num" id="">
    <input type="submit" value="คำนวณ">
</form>

<?php
   if(isset($_GET["Num"])){
    $Num = $_GET["Num"];

    echo "สูตรคูณแม่" . $Num. "br";

    for($i=1; $i<=12; $i++){
        echo $Num . " x " . $i . " = " . $Num * $i . "<br>";
    }

    

   }

 
?>

</body>
</html>