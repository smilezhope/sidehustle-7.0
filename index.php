
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    include 'header.php';
    ?>
    <p> welcome to task 3 </p>
    <?php
    $connect = mysqli_connect("localhost", "root", "", "function_db");
    if ($connect){
        echo "connected";
    }
    ?>

</body>
</html>