<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cover</title>
    <style>
        body {
            font-family: "Roboto", sans-serif;
            background-color: #2d2d2d;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        header {
            text-align: center;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 2em;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 1em;
            text-decoration: none;
            color: #fff;
            background-color: #444;
            border: 2px solid #fff;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        .button:hover {
            background-color: #fff;
            color: #222;
        }

        footer {
            margin-top: 20px;
            text-align: center;
        }

        footer p {
            font-size: 0.8em;
        }
    </style>
</head>

<body>
    <header>
        <h1>Belajar Laravel</h1>
        <p>Tidak ada yang benar benar susah, hanya tidak mau mencoba dan tidak mau berusaha.</p>
    </header>

    <a href="{{ route('home') }}" class="button">GASS</a>

    <footer>
        <p>&copy; Muhammad Adam Jhansi - 2023.</p>
    </footer>
</body>

</html>
