<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Toko</title>
    <style>
        body {
            background-color: #ADD8E6;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .logo {
            margin-bottom: 20px;
            text-align: center;
        }

        .logo h1 {
            font-size: 36px;
            color: #660066;
            text-shadow: 2px 2px 4px #993399;
        }

        .logo img {
            width: 200px;
        }

        .signin-btn {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .signin-btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <h1>TOKO BAJU</h1>
            <img src="logo.png" alt="Logo Toko">
        </div>
        <form action="login/index.html">
            <input type="submit" class="signin-btn" value="Sign In">
        </form>
    </div>
</body>
</html>
