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
    <div class="container">
        <div class="fs-1 mt-5">
            <h2>text :</h2>
            <p class="fw-bold"><?php echo $paragraph ?></p>
            <div class="small">text length: <?php echo $length ?></div>
        </div>
        <div class="fs-1 mt-5">
            <h2>word censored :</h2>
            <p class="fw-bold"><?php echo str_replace($word, '***', $paragraph) ?></p>
            <div class="small">text length: <?php echo $length ?></div>
        </div>
    </div>
</body>
</html>