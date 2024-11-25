<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>greeting</title>
</head>
<body>
    <h1>{{$greeting}}</h1>

    @if ($time < 13)
        <p>Good morning!</p>
    @elseif($time < 18)
        <p>Good afternoon</p>    
    @else
        <p>Good Evening</p>
    @endif

    <ul>
        @foreach ($fruits as $fruit)
            <li>{{$fruit}}</li>
        @endforeach
    </ul>
</body>
</html>