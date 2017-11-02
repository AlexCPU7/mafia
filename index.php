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
    
    Здравствуйте, <?php echo (int)$_POST['human']; ?>.
    Вам <?php echo (int)$_POST['mafia']; ?> лет.
    <?php echo (int)$_POST['mistress']; ?>.
    <?php echo (int)$_POST['doc']?>.
    <?php echo (int)$_POST['detective'] ?>.
</body>
</html>