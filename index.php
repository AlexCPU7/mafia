<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Мафия</title>
</head>
<body>
    <form method="post">
        <p>Мирные жители: <input type="text" name="human" /></p>
        <p>Мафия: <input type="text" name="mafia" /></p>
        <p>Любовница: <input type="text" name="mistress" /></p>
        <p>Доктор: <input type="text" name="doc" /></p>
        <p>Детектив: <input type="text" name="detective" /></p>
        <p><input type="submit" /></p>
    </form>
    <br>
    
    <?php
    $human = (int)$_POST['human'];
    $mafia = (int)$_POST['mafia'];
    $mistress = (int)$_POST['mistress'];
    $doc = (int)$_POST['doc'];
    $detective = (int)$_POST['detective'];

    $mas =[];
    $num = 0;
    for($i = 0; $i < $human; $i++){
        $mas[$num] = "Мирный житель";
        $num++;
    }
    for($i = 0; $i < $mafia; $i++){
        $mas[$num] = "Мафия";
        $num++;
    }
    for($i = 0; $i < $mistress; $i++){
        $mas[$num] = "Любовница";
        $num++;
    }
    for($i = 0; $i < $doc; $i++){
        $mas[$num] = "Доктор";
        $num++;
    }
    for($i = 0; $i < $detective; $i++){
        $mas[$num] = "Детектив";
        $num++;
    }
    shuffle($mas);
        foreach ($mas as $m){

            echo "<button>     ".$m." </button></p>"."<br>";
    };

    ?>
</body>
</html>