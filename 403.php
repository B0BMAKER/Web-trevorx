<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>404 Not Found - ISCI Team</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&display=swap");

        body {
            font-family: "Roboto Mono", monospace;
            background-color: #0c1220;
        }

        h1 {
            color: aqua;
            text-shadow: 0 0 7px #fff, 0 0 10px #fff, 0 0 21px #fff, 0 0 42px aqua, 0 0 82px aqua, 0 0 92px aqua, 0 0 102px aqua, 0 0 151px aqua;
            color: white;
            font-weight: bold;
        }

        .nf {
            margin-top: 10%;
        }

        .not-found {
            font-size: 6em;
            animation: blink 1s steps(1) infinite;
        }

        @keyframes blink {

            0%,
            100% {
                opacity: 0;
            }

            50% {
                opacity: 1;
            }
        }

        .line {
            height: 5px;
            width: 10em;
            background-color: aqua;
            border-radius: 20px;
            filter: drop-shadow(0 0 8px #3fefef) drop-shadow(0 0 63px #3fefef);
        }

        p {
            color: aqua;
        }

        .maker {
            color: gray;
            text-align: center;
            font-size: 16px;
        }

        .button {
            transition: 0.3s;
            border: 1px solid aqua;
            background-color: #0c1220;
            padding: 12px;
            color: aqua;
            font-weight: bolder;
            border-radius: 20px;
            text-shadow: 0 0 5px aqua, 0 0 10px aqua, 0 0 20px aqua, 0 0 30px aqua, 0 0 40px aqua;
            filter: drop-shadow(0 0 8px #3fefef) drop-shadow(0 0 63px #3fefef);
        }

        .button:hover {
            background-color: aqua;
            color: #0c1220;
        }

        .anim-typewriter b {
            border-right: 0.15em solid aqua;
            animation: blinkn 0.75s step-end infinite;
            text-shadow: 0 0 5px aqua, 0 0 10px aqua, 0 0 20px aqua, 0 0 30px aqua, 0 0 40px aqua;
        }

        @keyframes blinkn {

            from,
            to {
                border-color: transparent;
            }

            50% {
                border-color: aqua;
            }
        }
    </style>
</head>

<body>
    <div class="nf">
        <h1 class="text-center"><span class="not-found">403</span></h1>
    </div>
    <div class="line mx-auto"></div>
    <br />
    <p class="line-1 anim-typewriter text-center"><b id="type"></b></p>
    <center>
        <button class="button" onclick="typeWriter()" id="button">Show Message</button>
    </center>
    <br />
    <p class="maker">Rahmadani.Code ~ ISCI Leader</p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script>
        var i = 0;
        var txt = "This page was forbidden";
        var speed = 50;

        function typeWriter() {
            if (i < txt.length) {
                document.getElementById("type").innerHTML += txt.charAt(i);
                i++;
                setTimeout(typeWriter, speed);
            }
            document.getElementById("button").innerHTML = '<i class="fa-solid fa-check"></i>';
            document.getElementById("button").style.backgroundColor = "aqua";
            document.getElementById("button").style.color = "#0c1220";
        }
    </script>
</body>

</html>
