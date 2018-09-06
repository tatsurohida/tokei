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

        canvas {
            z-index: 1;
        }

        p {
            position: fixed;
            bottom: 5px;
            left: 5px;
            color: grey;
            z-index: 2;
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
    <p>"Japanese_School_Bell04" by <a href="http://musicisvfr.com/">Music is VFR</a> is licensed under CC BY 4.0</p>
</body>
</html>