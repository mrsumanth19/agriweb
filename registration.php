<?php
include('dbcon.php');

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $phonenumber = $_POST['phonenumber'];
    $cityname = $_POST['cityname'];

    $query = "INSERT INTO registration (username, password, phonenumber, cityname) VALUES (?, ?, ?, ?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param('ssss', $username, $password, $phonenumber, $cityname);

    if ($stmt->execute()) {
        echo "<script>alert('Registered successfully'); window.location.href='login.php';</script>";
    } else {
        echo "<script>alert('Registration failed');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: sans-serif;
    color: white;
}

body{
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background: url("images/bg.jpg");
    background-size: cover;
    background-repeat: no-repeat;
    /* background: linear-gradient(to right, #db1a60, #ff9966); */
}


form{
    display: flex;
    flex-direction: column;
    gap: 2rem;
    padding: 3rem 2rem;

    background: rgba(0, 0, 0, 0.607);
    backdrop-filter: blur(3px);
    border-radius: 1rem;
}

form h2{
    text-align: center;
    text-transform: uppercase;
    letter-spacing: 5px;
    font-size: 45px;
    font-weight: bold;
}

label{
    font-size: 18px;
}

form div div{
    display: flex;
    flex-direction: row-reverse;
    align-items: center;

    line-height: 30px;

    background: transparent;
    border: none;outline: none;
    border-bottom: 1px solid white;
}

form i{
    margin-right: 1rem;
    font-size: 20px;
}

input{
    all:unset;
    
    transition: .1s ease-in-out;
    font-size: 17px;
}

input, button{
    height: 50px;
    width: 300px;

    margin-top: .2rem;
}

button{
    background: #ff884d;
    color: white;
    font-weight: bold;
    font-size: 20px;
    width: 100%;

    border: none;outline: none;
    border-radius: 5rem;
    

    cursor: pointer;
    transition: .1s ease-in;
}

button:hover{
    transform: scale(1.05);
}


@media screen and (max-width: 550px) {
    input, button{
        width: 100%;
    }
}
    </style>

</head>
<body>
    <form method="post">
        <h2>Registration</h2>
        <div>
            <label for="username">Username:</label>
            <div>
                <input type="text" name="username" placeholder="username" required><i class="fa-solid fa-user"></i>
            </div>
        </div>
        
        <div>
            <label for="password">Password</label>
            <div>
                <input type="password" name="password" placeholder="password" required><i class="fa-solid fa-key"></i>
            </div>
        </div>
        <div>
            <label for="username">Phone Number:</label>
            <div>
                <input type="text" name="phonenumber" placeholder="phonenumber" required><i class="fa-solid fa-phone"></i>
            </div>
        </div>
        
        <div>
            <label for="password">City Name:</label>
            <div>
                <input type="text" name="cityname" placeholder="cityname" required><i class="fa-solid fa-city"></i>
            </div>
        </div>

        <button type="submit" name="submit" id="submitBtn">Register</button>
    </form>
</body>
</html>