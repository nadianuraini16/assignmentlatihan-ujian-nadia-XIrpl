<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form class="btn" method="POST" action="">
        <input type="submit" name="image" value="ImageButton" style="width:120px;height:60px;">
        <input type="submit" name="shape" value="ShapeButton" style="width:150px;height:75px;">
    </form>
</body>
</html>
<?php
class Button{
    public $x;
    public $y;
    public $width;
    public $height;
}
class ImageButton extends Button{
    public $ukuran;
    public function cekUkuran(){
        echo"lebarnya adalah".$this ->ukuran;
        echo"<br>";
        echo"tingginya adalah".$this ->tinggi;

    }
}
class ShapeButton extends Button{
    public $klik;
    public function cekKlik(){
        echo"lebarnya adalah".$this ->ukuran;
        echo"<br>";
        echo"tingginya adalah".$this ->tinggi;

    }
} 
function satu(){
    $Button = new ImageButton();
    $ukuran = $Button ->ukuran=120.5;
    $tinggi = $Button ->tinggi=60.5;
    echo $Button->cekUkuran();
}

function dua(){
    $Button = new ShapeButton();
    $ukuran = $Button ->ukuran=150.5;
    $tinggi = $Button ->tinggi=75.5;
    echo $Button->cekKlik();
}
if(isset($_POST['image'])){
    echo satu();
}else if(isset($_POST['shape'])){
        echo dua();
    }

?>
