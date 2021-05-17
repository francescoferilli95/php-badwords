<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>

<?php
$text = 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum cupiditate totam enim id libero sequi temporibus veniam, consectetur, obcaecati recusandae quisquam voluptatum officiis labore repellat non itaque voluptatibus laboriosam sed.'
?>

<header>
    <h1>Welcome PHP</h1>
</header>

<main>
    <p><?php echo $text ?></p>
    <p>The length of the previous paragraph is <strong><?php echo strlen($text) ?></strong></p>
</main>
</body>
</html>