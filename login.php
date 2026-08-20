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

        form {
            text-align: left;
            font-family: 'Inter', 'Noto Sans Thai', sans-serif;
            font-size: 16px;
        }

        label {
            display: block;
            font-size: 13px;
            color: #6B7069;
            margin: 16px 0 6px;
        }

        label:first-of-type {
            margin-top: 0;
        }

        input {
            width: 100%;
            padding: 12px 14px;
            font-size: 15px;
            font-family: 'Inter', 'Noto Sans Thai', sans-serif;
            color: #1B1E1C;
            background: #F6F6F3;
            border: 1px solid #E4E3DD;
            border-radius: 10px;
            outline: none;
            transition: border-color 0.15s ease, background 0.15s ease;
        }

        input:hover {
            border-color: #C9C7BE;
        }

        input:focus {
            border-color: #2F6F5E;
            background: #fff;
        }

        form br {
            display: block;
            content: "";
            margin-bottom: 6px;
        }

        button {
            display: block;
            width: 100%;
            margin-top: 22px;
            padding: 13px 16px;
            font-size: 15px;
            font-weight: 500;
            font-family: 'Inter', 'Noto Sans Thai', sans-serif;
            color: #fff;
            background: #2F6F5E;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.12s ease, background 0.15s ease, box-shadow 0.15s ease;
        }

        button:hover {
            background: #285e50;
            box-shadow: 0 8px 20px -8px rgba(47, 111, 94, 0.55);
        }

        button:active {
            transform: translateY(1px);
        }
    </style>
</head>
<body>
    
    <form action="check_login.php" method="post">

        <label for="">username</label>
    <input type="text" name="username"> <br>

        <label for="">password</label>
    <input type="text" name="password"> <br>

    <button>login</button>

    </form>

</body>
</html>