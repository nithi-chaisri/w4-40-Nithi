<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500&family=Inter:wght@400;500;600&family=Noto+Sans+Thai:wght@400;500;600&display=swap');

        * {
            box-sizing: border-box;
        }

        html {
            min-height: 100%;
            background: #F6F6F3;
            background-image:
                radial-gradient(circle at 12% 8%, rgba(47, 111, 94, 0.07), transparent 40%),
                radial-gradient(circle at 88% 92%, rgba(47, 111, 94, 0.05), transparent 45%);
        }

        body {
            max-width: 380px;
            margin: 48px auto;
            padding: 40px 32px;
            background: #FFFFFF;
            border: 1px solid #E4E3DD;
            border-radius: 20px;
            box-shadow: 0 1px 2px rgba(20, 20, 20, 0.03), 0 20px 40px -24px rgba(20, 20, 20, 0.12);
            text-align: center;
            font-family: 'Fraunces', 'Noto Sans Thai', serif;
            font-weight: 500;
            font-size: 20px;
            color: #1B1E1C;
        }

        a {
            display: inline-block;
            margin-top: 20px;
            font-size: 14px;
            font-family: 'Inter', 'Noto Sans Thai', sans-serif;
            color: #6B7069;
            text-decoration: none;
            padding: 10px 18px;
            border: 1px solid #E4E3DD;
            border-radius: 10px;
            transition: border-color 0.15s ease, color 0.15s ease;
        }

        a:hover {
            border-color: #2F6F5E;
            color: #2F6F5E;
        }
    </style>
</head>
<body>
    
    <?php
    session_start();

    if(!isset($_SESSION["username"])){
        header("location: login.php");
        exit;
        }
    ?>

    สวัสดี <?= $_SESSION["username"] ?>

    <a href="logout.php">logout</a>
    
</body>
</html>