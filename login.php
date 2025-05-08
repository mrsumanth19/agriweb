<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agricultural Login Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            background: #184e0c;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .container {
            position: relative;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #184e0c, #2d7a0f);
        }

        /* Farm Scene Elements */
        .scene {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .sun {
            position: absolute;
            top: 50px;
            right: 100px;
            width: 80px;
            height: 80px;
            background: #FFD700;
            border-radius: 50%;
            box-shadow: 0 0 50px #FFD700;
            animation: sunGlow 3s ease-in-out infinite;
        }

        @keyframes sunGlow {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.1); opacity: 0.9; }
        }

        .mountain {
            position: absolute;
            bottom: 0;
            width: 0;
            height: 0;
            border-left: 150px solid transparent;
            border-right: 150px solid transparent;
            border-bottom: 200px solid #2d5a1b;
        }

        .mountain:nth-child(1) { left: 0; }
        .mountain:nth-child(2) { left: 20%; }
        .mountain:nth-child(3) { right: 20%; }

        .tree {
            position: absolute;
            bottom: 50px;
            font-size: 60px;
            animation: treeWave 3s ease-in-out infinite;
        }

        @keyframes treeWave {
            0%, 100% { transform: rotate(0deg); }
            50% { transform: rotate(5deg); }
        }

        .tree:nth-child(1) { left: 10%; animation-delay: 0.2s; }
        .tree:nth-child(2) { left: 30%; animation-delay: 0.4s; }
        .tree:nth-child(3) { right: 30%; animation-delay: 0.6s; }
        .tree:nth-child(4) { right: 10%; animation-delay: 0.8s; }

        .cloud {
            position: absolute;
            font-size: 50px;
            color: white;
            animation: cloudFloat 20s linear infinite;
            opacity: 0.8;
        }

        @keyframes cloudFloat {
            from { transform: translateX(-100%); }
            to { transform: translateX(100vw); }
        }

        .cloud:nth-child(1) { top: 20%; animation-duration: 30s; }
        .cloud:nth-child(2) { top: 30%; animation-duration: 35s; animation-delay: 5s; }
        .cloud:nth-child(3) { top: 15%; animation-duration: 40s; animation-delay: 10s; }

        .bird {
            position: absolute;
            font-size: 20px;
            animation: birdFly 15s linear infinite;
        }

        @keyframes birdFly {
            0% { transform: translateX(-100vw) translateY(0); }
            50% { transform: translateX(50vw) translateY(-50px); }
            100% { transform: translateX(100vw) translateY(0); }
        }

        /* Login Form Styles */
        .login-container {
            position: relative;
            width: 400px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            z-index: 10;
            animation: formAppear 1s ease-out;
        }

        @keyframes formAppear {
            from { 
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h2 {
            color: white;
            text-align: center;
            font-size: 2.5em;
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 3px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .input-group {
            position: relative;
            margin-bottom: 30px;
        }

        input {
            width: 100%;
            padding: 15px 20px;
            background: rgba(255, 255, 255, 0.1);
            border: none;
            border-radius: 35px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: white;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        input:focus {
            background: rgba(255, 255, 255, 0.15);
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.1);
            outline: none;
        }

        button {
            width: 100%;
            padding: 15px;
            background: linear-gradient(45deg, #4CAF50, #45a049);
            border: none;
            border-radius: 35px;
            color: white;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 2px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        button:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        button::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: rgba(255, 255, 255, 0.2);
            transform: rotate(45deg);
            transition: 0.5s;
        }

        button:hover::after {
            left: 100%;
        }

        .decorative-leaf {
            position: absolute;
            font-size: 24px;
            animation: leafFloat 3s ease-in-out infinite;
        }

        @keyframes leafFloat {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(5deg); }
        }

        .leaf-1 { top: -20px; left: 20px; }
        .leaf-2 { bottom: -20px; right: 20px; }

        @media (max-width: 480px) {
            .login-container {
                width: 90%;
                padding: 30px;
            }

            h2 {
                font-size: 2em;
            }
        }
    </style>
</head>
<body>
    <?php 
    include 'dbcon.php';

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM registration WHERE username=? AND password=?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $_SESSION['username'] = $username;
            echo "<script>alert('Login successful!'); window.location.href='services.php';</script>";
        } else {
            echo "<script>alert('Invalid username or password!');</script>";
        }
    }
    ?>

    <div class="container">
        <!-- Farm Scene -->
        <div class="scene">
            <div class="sun"></div>
            <div class="cloud">☁️</div>
            <div class="cloud">☁️</div>
            <div class="cloud">☁️</div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="mountain"></div>
            <div class="tree">🌳</div>
            <div class="tree">🌲</div>
            <div class="tree">🌳</div>
            <div class="tree">🌲</div>
            <div class="bird">🦅</div>
            <div class="bird" style="top: 25%; animation-delay: 5s;">🦅</div>
        </div>

        <!-- Login Form -->
        <div class="login-container">
            <div class="decorative-leaf leaf-1">🌿</div>
            <div class="decorative-leaf leaf-2">🌿</div>
            <h2>Welcome</h2>
            <form action="login.php" method="post">
                <div class="input-group">
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" name="login">Login</button>
            </form>
        </div>
    </div>

    <script>
        // Add random movement to birds
        document.querySelectorAll('.bird').forEach(bird => {
            bird.style.top = Math.random() * 30 + 10 + '%';
        });
    </script>
</body>
</html>