<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>BadWords</title>
</head>
<body>

<?php
// TEXT
$text = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum cupiditate totam enim id libero sequi temporibus veniam, consectetur, obcaecati recusandae quisquam voluptatum officiis labore repellat non itaque voluptatibus laboriosam sed.'
?>

<?php
// BADWORD
$bad = $_GET['badword'];
$replaced = str_replace($bad, '<mark>***</mark>', $text);
?>

<header class="container">
    <h1 class="title">Welcome <mark>PHP</mark></h1>
</header>

<main>
    <div class="container">
        <p><?php echo $text ?></p>
        <p class="length">The length of the previous paragraph is: <strong><?php echo strlen($text) ?></strong></p>
    </div>
    <div class="container">
        <p class="censor">Here is a censored version of the previous paragraph.</p>
        <p><?php echo $replaced ?></p>
    </div>
</main>

</body>
</html>