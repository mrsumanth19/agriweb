<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - AGRIWEB</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #21d439;
            --text-color: #ffffff;
            --bg-color: #000000;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            background-color: var(--bg-color);
            color: var(--text-color);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: auto;
            padding: 0 20px;
        }

        header {
            padding: 2rem 0;
            position: relative;
            overflow: hidden;
        }

        header::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--primary-color), transparent);
        }

        header h1 {
            text-align: center;
            font-size: 3rem;
            text-transform: uppercase;
            margin: 0;
            background: linear-gradient(45deg, #fff, var(--primary-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: glow 2s ease-in-out infinite alternate;
        }

        .main-content {
            padding: 3rem 0;
        }

        .section {
            margin-bottom: 4rem;
            padding: 2rem;
            border-radius: 15px;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .section:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(33, 212, 57, 0.2);
        }

        .hero-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 15px;
            margin-bottom: 2rem;
            transition: transform 0.3s ease;
        }

        .hero-image:hover {
            transform: scale(1.02);
        }

        h2 {
            color: var(--primary-color);
            font-size: 2rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-left: 1rem;
        }

        h2::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 4px;
            background: var(--primary-color);
            border-radius: 2px;
        }

        p {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 1.5rem;
            color: rgba(255, 255, 255, 0.9);
        }

        footer {
            text-align: center;
            padding: 2rem 0;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 10px rgba(33, 212, 57, 0.5),
                           0 0 20px rgba(33, 212, 57, 0.3),
                           0 0 30px rgba(33, 212, 57, 0.2);
            }
            to {
                text-shadow: 0 0 20px rgba(33, 212, 57, 0.8),
                           0 0 30px rgba(33, 212, 57, 0.5),
                           0 0 40px rgba(33, 212, 57, 0.3);
            }
        }

        @media (max-width: 768px) {
            .container {
                width: 95%;
            }

            header h1 {
                font-size: 2rem;
            }

            .hero-image {
                height: 300px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>About Us</h1>
        </div>
    </header>

    <div class="container main-content">
        <img src="/api/placeholder/1200/400" alt="Agricultural landscape" class="hero-image" data-aos="fade-up">

        <div class="section" data-aos="fade-up">
            <h2>Who We Are</h2>
            <p>Agri Web is a team of dedicated data scientists, agronomists, and software engineers passionate about agriculture and technology. 
            With expertise in machine learning, data analytics, and agronomy, we create solutions that address real-world agricultural challenges and enhance productivity.</p>
        </div>

        <div class="section" data-aos="fade-up">
            <h2>Our Mission</h2>
            <p>At Agri Web, our mission is to empower farmers and agricultural professionals with innovative tools and comprehensive information for accurate crop yield predictions.
            We are dedicated to improving agricultural efficiency, reducing risks, and promoting sustainable farming practices through the use of cutting-edge technology and data analysis.</p>
        </div>

        <div class="section" data-aos="fade-up">
            <h2>Join Us</h2>
            <p>Whether you're a farmer looking to improve crop yields, a researcher exploring agricultural data, or a stakeholder committed to sustainable agriculture, Agri Web is your trusted partner.
            Join us in driving the future of agriculture forward, leveraging technology to create smarter and more resilient farming practices.</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 AGRI WEB. All rights reserved.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
    </script>
</body>
</html>