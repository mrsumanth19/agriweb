<?php
// Initialize any PHP variables here
$currentDate = date('M d Y');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "poppins", sans-serif;
        }

        body {
            background: url(images/bg.png) no-repeat;
            background-size: cover;
        }

        body::after {
            content: '';
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .5);
            z-index: -1;
        }

        body > a {
            position: absolute;
            left: 1rem;
            top: 1rem;
            text-decoration: none;
            color: aqua;
            font-size: 40px;
            font-weight: bold;
            letter-spacing: 7px;
            font-family: monospace;
            transition: .3s ease-in;
        }

        body > a:hover {
            color: white;
        }

        .container {
            color: white;
            font-size: 2rem;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 100%;
            text-align: center;
        }

        header {
            line-height: 100%;
        }

        header h5:nth-child(1) {
            text-transform: uppercase;
            letter-spacing: 5px;
        }

        .search-grp {
            display: flex;
            align-items: center;
        }

        #search-input {
            width: 400px;
            height: 50px;
            padding-left: 10px;
            font-size: 1.3rem;
            border-radius: 5rem;
            border: none;
            outline: none;
            background: rgba(0, 0, 0, .5);
            color: white;
            transition: .3s;
            margin: 1rem;
        }

        #search-input:focus {
            background: rgba(0, 0, 0, 0.7);
        }

        button {
            background: rgba(255, 255, 255, .1);
            border-radius: 5rem;
            height: 50px;
            padding: 0 1.1rem;
            color: white;
            cursor: pointer;
            border: none;
            outline: none;
            transition: .2s;
        }

        button:hover {
            background: rgba(255, 255, 255, .2);
        }

        #date {
            font-weight: 200;
        }

        .temperature {
            font-size: 100px;
            text-shadow: 5px 5px 10px black;
            color: aqua;
        }

        #temperature-degree {
            font-size: 200px;
            position: relative;
            line-height: 150%;
            text-shadow: 5px 5px 10px black;
            color: aqua;
        }

        .details {
            font-size: 25px;
            display: flex;
            justify-content: space-between;
            width: 500px;
        }

        #description-text {
            margin-bottom: 2rem;
            text-transform: capitalize;
            letter-spacing: 1px;
            font-weight: 300;
            font-size: 1.5rem;
        }

        #description-img {
            width: 3em;
        }

        #city {
            text-transform: capitalize;
        }

        section, #city {
            display: none;
        }

        #loc-btn {
            background: #17c473;
            font-size: 1rem;
            margin: 0 auto;
            margin-top: 1rem;
            padding: .5rem 1rem;
            border-radius: 5rem;
            border: 2px solid transparent;
            font-weight: bold;
        }

        #loc-btn:hover {
            background: rgba(0, 0, 0, .4);
            border: 2px solid #17c473;
        }

        button i {
            margin: 0 .5rem;
        }

        @media screen and (max-width: 600px) {
            body > a {
                left: 50%;
                top: 2rem;
                transform: translateX(-50%);
            }
            
            .container {
                width: 90%;
                margin: 0 auto;
            }

            #search-input, .loading {
                width: 65%;
            }

            .details {
                width: 100%;
                margin: 0 auto;
            }

            #temperature-degree {
                font-size: 20vw;
            }

            .temperature {
                font-size: 15vw;
            }
        }
    </style>
</head>
<body>
    <a href="#">WeatherApp</a>
    <div class="container">
        <header>
            <h5>weather in</h5>
            <form class="search-grp" id="search-form">
                <input type="text" id="search-input" placeholder="Enter city name">
                <button type="submit">Search</button>
            </form>
            <h3 id="city"></h3>
            <h6 id="date"><?php echo $currentDate; ?></h6>
        </header>

        <section>
            <div class="temperature">
                <span id="temperature-degree"></span>
            </div>

            <div class="description">
                <img id="description-img" src="" alt="weather icon">
                <div id="description-text"></div>
            </div>

            <div class="details">
                <div id="humidity" class="grp">
                    Humidity
                    <h3 id="humidity-degree"></h3>
                </div>

                <div id="feelslike" class="grp">
                    feels like
                    <h3 id="feelslike-degree"></h3>
                </div>
            </div>
        </section>

        <button id="loc-btn">Get Current Location Weather</button>
    </div>

    <script>
        const input = document.getElementById("search-input");
        const description = document.getElementById("description-text");
        const img = document.getElementById("description-img");
        const locBtn = document.getElementById("loc-btn");
        const section = document.querySelector("section");
        const form = document.querySelector("form");

        function getData(e) {
            e.preventDefault();

            if (!input.value) {
                alert("Please Enter a city name");
                return;
            }

            fetch(`https://api.openweathermap.org/data/2.5/weather?q=${input.value}&appid=ca695dcbc66c5fa3d0cb955033fd918f`)
                .then((res) => res.json())
                .then((data) => {
                    displayWeather(data);
                    document.getElementById("city").style.display = "block";
                });
        }

        function getLocationData() {
            if (!navigator.geolocation) {
                alert("geolocation is not supported!");
                return;
            }

            navigator.geolocation.getCurrentPosition((position) => {
                fetch(`https://api.openweathermap.org/data/2.5/weather?lat=${position.coords.latitude}&lon=${position.coords.longitude}&appid=ca695dcbc66c5fa3d0cb955033fd918f`)
                    .then((res) => res.json())
                    .then((data) => {
                        displayWeather(data);
                        document.querySelector("header h5").style.display = "none";
                        document.getElementById("city").textContent = "current location";
                    });
            });
        }

        function displayWeather(data) {
            document.querySelector("header h5").style.display = "block";

            const temp = (data.main.temp - 273.15).toFixed(1);

            document.getElementById("temperature-degree").textContent = temp + "°";
            document.getElementById("city").textContent = input.value;

            document.getElementById("humidity-degree").textContent = data.main.humidity + " %";
            document.getElementById("feelslike-degree").textContent = (data.main.feels_like - 273.15).toFixed(1) + " °";

            description.textContent = data.weather[0].description;
            img.src = `http://openweathermap.org/img/wn/${data.weather[0].icon}.png`;

            section.style.display = "block";
            section.classList.add("test");
            document.getElementById("city").style.display = "block";
            locBtn.style.display = "none";
        }

        form.addEventListener("submit", getData);
        locBtn.addEventListener("click", getLocationData);
    </script>
</body>
</html>