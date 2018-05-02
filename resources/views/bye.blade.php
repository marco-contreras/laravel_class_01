<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bye</title>
</head>
<body>
{!! $html !!}

<h1>Bye <?php echo $name ?></h1>
<h1>Bye {{ $name }}</h1>

{!! $js !!}

<a href="<?php echo route('home') ?>">Home</a>
</body>
</html>