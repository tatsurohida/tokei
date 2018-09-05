<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Clock</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <canvas id="canvas"></canvas>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="tokei.js"></script>
    <audio id="chime" preload="auto" muted>
        <source src="sound/chime.mp3" type="audio/mp3">
    </audio>
</body>
</html>