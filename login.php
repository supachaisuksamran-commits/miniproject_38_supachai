<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            font-family: 'Poppins', sans-serif;
            background:
                radial-gradient(ellipse at 20% 0%, rgba(30,60,120,0.35), transparent 55%),
                radial-gradient(ellipse at 100% 100%, rgba(10,20,45,0.6), transparent 60%),
                linear-gradient(180deg, #05070d 0%, #0a0e18 50%, #05070d 100%);
            color: #c9d6ea;
            padding: 0 0 40px 0;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 20px 40px;
            background: #0d1220;
            border-bottom: 1px solid #1e2a45;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5);
            margin-bottom: 30px;
        }

        header h1 {
            font-size: 1.3rem;
            font-weight: 600;
            color: #4d8bff;
            margin: 0;
            letter-spacing: 0.02em;
        }

        header a {
            font-size: 0.85rem;
            font-weight: 500;
            color: #7d92b8;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 8px;
            border: 1.5px solid #223252;
            transition: background 0.2s ease, color 0.2s ease, border-color 0.2s ease;
        }

        header a:hover {
            background: #131b30;
            border-color: #4d8bff;
            color: #8fb4ff;
        }

        table {
            width: calc(100% - 80px);
            margin: 0 40px 24px 40px;
            border-collapse: collapse;
            background: #0d1220;
            border: 1px solid #1e2a45;
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.55);
        }

        thead th {
            font-size: 0.8rem;
            font-weight: 600;
            letter-spacing: 0.03em;
            text-transform: uppercase;
            color: #eaf1ff;
            text-align: left;
            padding: 14px 18px;
            background: linear-gradient(135deg, #1a2b4d, #0e1729);
            border-bottom: 2px solid #2f5fd6;
        }

        tbody tr {
            border-bottom: 1px solid #16203a;
            transition: background 0.2s ease;
        }

        tbody tr:last-child {
            border-bottom: none;
        }

        tbody tr:nth-child(even) {
            background: rgba(255, 255, 255, 0.015);
        }

        tbody tr:hover {
            background: rgba(45, 95, 214, 0.14);
        }

        td {
            padding: 13px 18px;
            font-size: 0.92rem;
            color: #c9d6ea;
        }

        a[href="connect.php"],
        a[href="manage_model.php"] {
            display: inline-block;
            margin: 0 8px 0 40px;
            padding: 10px 20px;
            font-size: 0.88rem;
            font-weight: 500;
            color: #eaf1ff;
            background: linear-gradient(135deg, #2f5fd6, #16244a);
            border: 1px solid #3a6ae0;
            border-radius: 8px;
            text-decoration: none;
            box-shadow: 0 6px 18px rgba(47, 95, 214, 0.35);
            transition: filter 0.2s ease, transform 0.15s ease;
        }

        a[href="connect.php"]:hover,
        a[href="manage_model.php"]:hover {
            filter: brightness(1.15);
            transform: translateY(-1px);
        }
    </style>
<body>
    <form action="check_login.php" method="post">
        <label for="">username</label>
        <input type="text" name="username" > <br>

        <label for="">password</label>
        <input type="text" name="password" > <br>

        <button>login</button>

</form>
</body>
</html>