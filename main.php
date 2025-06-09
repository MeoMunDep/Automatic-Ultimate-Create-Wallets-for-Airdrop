<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ultimate Wallet Generator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap');

        body {
            background: radial-gradient(circle at center, #0d0d0d, #000000);
            color: #00ffea;
            font-family: 'Orbitron', sans-serif;
            text-align: center;
            min-height: 100vh;
            padding: 40px 0;
        }

        .container {
            background: rgba(10, 10, 10, 0.9);
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 0px 20px rgba(0, 255, 234, 0.6);
            max-width: 900px;
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
            margin: 8px;
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

        .custom-badge {
            display: inline-flex;
            align-items: center;
            background: #111;
            color: #00ffff;
            font-family: 'Orbitron', sans-serif;
            padding: 10px 18px;
            border-radius: 999px;
            margin: 6px;
            text-decoration: none;
            font-size: 14px;
            border: 1px solid #00ffff55;
            transition: background 0.3s, transform 0.2s;
        }

        .custom-badge i {
            margin-right: 8px;
        }

        .custom-badge:hover {
            background: #00ffff22;
            box-shadow: 0 0 10px #00ffff99;
            transform: scale(1.05);
        }

        .crypto-table {
            color: #fff;
            margin-top: 15px;
            border-collapse: collapse;
            width: 100%;
        }

        .crypto-table th,
        .crypto-table td {
            padding: 10px;
            border: 1px solid #00ffea;
        }

        table {
            margin-top: 15px;
            margin-bottom: 15px;
            width: 100%;
            max-width: 100%;
            overflow-x: auto;
            word-break: break-word;
            table-layout: fixed;
        }

        td,
        th {
            word-break: break-word;
            white-space: normal;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Ultimate Wallet Generator</h1>
        <p class="lead">
            <?php
            $name = "MeoMunDep";
            echo "👋 Meowdy, fellow Airdrop Hunters! I'm <strong>$name</strong> 🐾<br><br>";
            echo "🚀 Purr-fectly crafted <strong>free scripts, tools</strong>, and <strong>resources</strong> to <em>streamline your airdrop journey</em> and help you <strong>maximize your gains</strong>!<br>";
            echo "📌 <strong>First-time here?</strong> Read the instructions before using any script!";
            ?>
        </p>

        <div class="social-badges">
            <a class="custom-badge" href="https://www.youtube.com/@keoairdropfreene" target="_blank"><i class="fab fa-youtube"></i>YouTube</a>
            <a class="custom-badge" href="https://www.tiktok.com/@meomundep" target="_blank"><i class="fab fa-tiktok"></i>TikTok</a>
            <a class="custom-badge" href="https://t.me/MeoMunDep" target="_blank"><i class="fab fa-telegram"></i>Telegram</a>
            <a class="custom-badge" href="https://t.me/keoairdropfreene" target="_blank"><i class="fab fa-telegram-plane"></i>Channel</a>
            <a class="custom-badge" href="https://www.instagram.com/meom.undep/" target="_blank"><i class="fab fa-instagram"></i>Instagram</a>
            <a class="custom-badge" href="https://x.com/MeoMeo0009" target="_blank"><i class="fab fa-x-twitter"></i>X</a>
            <a class="custom-badge" href="https://discord.gg/5aHuaGdu" target="_blank"><i class="fab fa-discord"></i>Discord</a>
        </div>

        <br>

        <a href="https://github.com/meomundep/meomundep" class="btn-cyber btn-star" target="_blank">⭐ Star the Repo</a>

        <h3 class="mt-4">💖 Fuel My Catnip Fund</h3>
        <p>Your donations help me dedicate more time to code and research!</p>

        <table class="crypto-table">
            <thead>
                <tr>
                    <th>Cryptocurrency</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>BTC</td>
                    <td>31oPBVBFR8WpVdRJD3ssE3J3XFWYiLdbpq</td>
                </tr>
                <tr>
                    <td>TRON</td>
                    <td>TE8UJ8PDtomioXgTNmV93j3zj4WpSxQPJk</td>
                </tr>
                <tr>
                    <td>EVM</td>
                    <td>0xe81E898F01Bc49B4A567628A6876A68ab1Bc4646</td>
                </tr>
                <tr>
                    <td>SOL</td>
                    <td>9sDgCRmWSjXNKj6hGZ9iCQPTac6XP6F1RxnkztWfc4Js</td>
                </tr>
                <tr>
                    <td>TON</td>
                    <td>UQCri3sqv93a6jM87DLCjXZSIEgyqgumIH7U75p_EhWszvwy</td>
                </tr>
                <tr>
                    <td>SUI</td>
                    <td>0xe1ce1ff28b88078ad9e9d97a395307e5689a944d00aa2a899fd82c73c531b5b1</td>
                </tr>
                <tr>
                    <td>VENOM</td>
                    <td>0:e96fe6b5a1bf6768f2d0ece1f4e2dd1c171ad79b728aabf53fb3ea983bb9eafe</td>
                </tr>
                <tr>
                    <td>CASPER</td>
                    <td>02030605510a7044a0edcaed5af021562710c940f22bcc533d3f5f120f29cf4b6e21</td>
                </tr>
            </tbody>
        </table>

        <p class="mt-3">🐾 Thank you for being part of the BlackCat crew! May your airdrops be plentiful and your crypto wallets ever-growing! 🚀</p>
    </div>
</body>

</html>
