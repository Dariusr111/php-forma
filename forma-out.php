<?php 

$name1=$_POST['name'];
$surname1=$_POST['surname'];
$gender1=$_POST['gender'];
$town1=$_POST['towns'];
$about1=$_POST['about'];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mano puslapis</title>
</head>

<body>
    <h3>Gaunam duomenis čia:</h3>
    <br>
    <p>Vardas: <?php echo $name1; ?></p>
    <br>
    <p>Pavardė: <?php echo $surname1; ?></p>
    <br>
    <p>Lytis: <?php echo $gender1; ?></p>
    <br>
    <p>Transportas: <?php if(isset($_POST['submit1'])){

if(!empty($_POST['vehicle'])) {

    foreach($_POST['vehicle'] as $transport1){
        echo $transport1.' ';
    }

}

}
?></p>
    <br>
    <p>Miestas: <?php echo $town1; ?></p>
    <br>
    <p>Apie save: <?php echo $about1; ?></p>
    <br>




    <div>
        <a href="/php/forma/forma.php"> Atgal </a>
    </div>
</body>

</html>