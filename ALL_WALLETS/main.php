<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultimate Wallet Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap');

        body {
            background: radial-gradient(circle at center, #0d0d0d, #000000);
            color: #00ffea;
            font-family: 'Orbitron', sans-serif;
            text-align: center;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .container {
            background: rgba(10, 10, 10, 0.9);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 0px 20px rgba(0, 255, 234, 0.6);
            max-width: 600px;
        }

        h1 {
            color: #ff00ff;
            text-shadow: 0 0 10px #ff00ff, 0 0 20px #ff00ff;
        }

        .lead {
            font-size: 18px;
            color: #00ffea;
            text-shadow: 0 0 10px #00ffea;
        }

        .btn-cyber {
            display: inline-block;
            padding: 12px 25px;
            font-size: 16px;
            font-weight: bold;
            text-transform: uppercase;
            border-radius: 5px;
            text-decoration: none;
            transition: 0.3s ease-in-out;
            box-shadow: 0 0 10px rgba(0, 255, 234, 0.8);
        }

        .btn-star {
            background: #00ffea;
            color: #000;
            box-shadow: 0 0 20px #00ffea;
        }

        .btn-donate {
            background: #ff00ff;
            color: #000;
            box-shadow: 0 0 20px #ff00ff;
        }

        .btn-cyber:hover {
            transform: scale(1.1);
            filter: brightness(1.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ultimate Wallet Generator</h1>
        <p class="lead">
            <?php
                $name = "MeoMunDep";
                echo "Hello, I'm <strong>$name</strong>. Here is the ultimate wallet generator I made myself. ";
                echo "I put a lot of effort into it, so please respect it and support me by starring the repo or donating!";
            ?>
        </p>
        <a href="https://github.com/your-repo" class="btn-cyber btn-star" target="_blank">⭐ Star the Repo</a>
        <a href="https://your-donation-link.com" class="btn-cyber btn-donate" target="_blank">💰 Donate</a>
    </div>
</body>
</html>
