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
    
    Здравствуйте, <?php echo $human = (int)$_POST['human']; ?>.
    Вам <?php echo $mafia = (int)$_POST['mafia']; ?> лет.
    <?php echo (int)$_POST['mistress']; ?>.
    <?php echo (int)$_POST['doc']?>.
    <?php echo (int)$_POST['detective'] ?>.
    <br>
    
    <?php
    $mas =[];
        $num = 0;
        for($i = 0; i < $human; $i++){
            $mas[$num] = "Мирный житель";
            $num++;            
        }
        for($i = 0; i < $mafia; $i++){
                $mas[$num] = "Мафия";
                $num++;
            }
    //foreach($mas as $m){
        echo $mas[0] . "<br>";
    echo $mas[1] . "<br>";
    echo $mas[2] . "<br>";
    echo $mas[3] . "<br>";
    echo $mas[4] . "<br>";
    echo $mas[5] . "<br>";
    echo $mas[6] . "<br>";
    //}
        
    ?>
</body>
</html>