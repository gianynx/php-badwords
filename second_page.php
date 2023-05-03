<?php
$length = 0;
if (isset($_POST['text'])) {
    $paragraph = trim($_POST['text']);
    $word = trim($_POST['word']);
    $length = strlen($paragraph);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Second Page</title>
</head>
<body>
<h1>
    <p>
        <?php echo $paragraph ?>
        <span>text length: <?php echo $length ?></span>
    </p>
    <p>
        <?php  echo str_replace($word, '***', $paragraph) ?>
        <span>text length: <?php echo $length ?></span>
    </p>
</h1>
    
</body>
</html>