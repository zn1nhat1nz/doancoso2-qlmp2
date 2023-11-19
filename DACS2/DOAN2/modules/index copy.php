<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./modules/style.css">
</head>
<body>
    <h3>Welcome to admincp</h3>
   <div class="wraper">
    <?php
            include './modules/header.php';
            include './modules/menu.php'; echo '<br>';
            include './modules/main.php'; echo '<br>';
            include './modules/footer.php';
        ?>
   </div>
</body>
</html>