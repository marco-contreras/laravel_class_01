<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hi</title>
</head>
<body>
<h1>Hi <?php echo $name ?></h1>

<ul>
    @foreach($consoles as $console)
    <li>{{ $console }}</li>
    @endforeach
</ul>

@if(count($consoles) === 1)
    <p>There is a console</p>
@elseif(count($consoles) === 2)
    <p>There are two consoles</p>
@else
    <p>There is a lot of consoles</p>
@endif

<ul>
    @forelse($devices as $device)
        <li>{{ $device }}</li>
    @empty
        <p>There is not devices</p>
    @endforelse
</ul>

<a href="<?php echo route('home') ?>">Home</a>
</body>
</html>