<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Návštěvní kniha</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/stylesheet.css">
</head>
<body>
<br>

<div class="container">

    <?php
    if (!isset($_SESSION['novyPrispevek'])) {
        echo '

    <form action="vlozit.php" method="POST">    
        <div class="form-group">
            <label for="exampleInputEmail1">Jméno</label>
            <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Vzkaz</label>
            <textarea type="text" name="vzkaz" class="form-control" id="exampleInputVzkaz"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Přidat vzkaz</button> 
        
        <br>';

        echo '<p>Žádné přípěvky</p>';
        } else {
        echo 'Vzkaz byl uložen.' . '<a href ="navstevni-kniha.php">"Vrátit se zpět na návštěvní knihu."</a>';
    }
        ?>

    </form>

</div>


</body>
</html>


