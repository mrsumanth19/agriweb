<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crop Seasons</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        h1 {
            color: white;
            text-align: center;
            margin-bottom: 2.5rem;
            font-size: 2.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            letter-spacing: 2px;
        }

        .button-container {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
            justify-content: center;
        }

        button {
            padding: 1.2rem 2.5rem;
            font-size: 1.3rem;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: bold;
            position: relative;
            overflow: hidden;
            color: white;
        }

        button::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.1);
            transform: translateX(-100%);
            transition: transform 0.3s ease;
        }

        button:hover::before {
            transform: translateX(0);
        }

        button:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        #kharif {
            background: linear-gradient(45deg, #00b09b, #96c93d);
            box-shadow: 0 4px 15px rgba(0, 176, 155, 0.4);
        }

        #zaid {
            background: linear-gradient(45deg, #2193b0, #6dd5ed);
            box-shadow: 0 4px 15px rgba(33, 147, 176, 0.4);
        }

        #rabi {
            background: linear-gradient(45deg, #ff4e50, #f9d423);
            box-shadow: 0 4px 15px rgba(255, 78, 80, 0.4);
        }

        @media (max-width: 600px) {
            .container {
                padding: 2rem;
                margin: 1rem;
            }

            button {
                width: 100%;
                margin-bottom: 1rem;
            }

            h1 {
                font-size: 2rem;
            }
        }

        /* Add subtle pulse animation to buttons */
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.02); }
            100% { transform: scale(1); }
        }

        button {
            animation: pulse 2s infinite;
        }

        button:hover {
            animation: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Indian Crop Seasons</h1>
        <div class="button-container">
            <button id="kharif" onclick="location.href='kharif.php'">Kharif</button>
            <button id="zaid" onclick="location.href='zaid.php'">Zaid</button>
            <button id="rabi" onclick="location.href='rabi.php'">Rabi</button>
        </div>
    </div>
</body>
</html>