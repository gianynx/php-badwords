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
    <title>PHP Badwords</title>
</head>
<body>
<header>
    <h1 class="text-center pt-4">enter a text and the word to censor!</h1>
</header>

<main>
    <form action="second_page.php" method="POST" class="pt-5 mx-5">
        <div class="form-floating">
            <textarea class="form-control" name="text" id="text" style="height: 100px"></textarea>
            <label for="text">enter your text!</label>
        </div>
        <div class="mt-5">
            <label for="word" class="form-label">enter the word to be censored!</label>
            <input type="text" class="form-control" name="word" id="word" placeholder="word censored">
        </div>
        <button type="submit" class="btn btn-outline-dark mt-5 fs-2">click me!</button>
    </form>
</main>
    
</body>
</html>