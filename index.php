<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriweb</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300&display=swap');


*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}


.container{
    min-height: 100vh;
    width: 100%;

    background-color: #217c24;
    background-image: linear-gradient(62deg, #217c24 22%, #0b4e0c 100%);

    overflow-x: hidden;
    transform-style: preserve-3d;
}

.navbar{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 10;
    height: 3rem;
}

.menu{
    max-width: 72rem;
    width: 100%;
    margin: 0 auto;
    padding: 0 2rem;

    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #fff;

    /* border: 1px solid white; */
}

.logo{
    font-size: 1.1rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 2px;
    line-height: 4rem;
}

.logo span{
    font-weight: 300;
}

.hamburger-menu{
    height: 4rem;
    width: 3rem;
    cursor: pointer;

    display: flex;
    align-items: center;
    justify-content: flex-end;

}

.bar{
    width: 1.9rem;
    height: 1.5px;

    border-radius: 2px;
    background-color: #eee;
    transition: .5s ;
    position: relative;
}

.bar::before, .bar::after{
    content: "";

    position: absolute;
    width: inherit;
    height: inherit;
    background: #eee;
    transition: .5s;
}

.bar::before{
    transform: translateY(-9px);
}

.bar::after{
    transform: translateY(9px);
}

.container.active .bar{
    transform: rotate(360deg);
    background-color: transparent;
}

.main{
    position: relative;

    width: 100%;
    left: 0;
    z-index: 5;
    overflow: hidden;
    transform-origin: left;
    transition: .5s;
}

header{
    min-height: 100vh;
    width: 100%;
    background: url("images/bg.jpg") no-repeat top center / cover;
    position: relative;
}

.overlay{
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: #0000006b;

    display: flex;
    justify-content: center;
    align-items: center;
}

.inner{
    max-width: 45rem;
    text-align: center;
    color: #fff;

    padding: 0 2rem;
}

.title{
    font-size: 4rem;
}

.btn{
    margin-top: 1rem;
    padding: .6rem 1.8rem;
    background-color: #29b546;
    border: none;outline: none;
    border-radius: 25px;

    color: #fff;
    text-transform: uppercase;
    cursor: pointer;
    text-decoration: none;
    font-size: 1rem;
}

.container.active .bar::before{
    transform: translateY(0) rotate(45deg);
}
.container.active .bar::after{
    transform: translateY(0) rotate(-45deg);
}

.container.active .main{
    cursor: pointer;
    transform: perspective(1300px) rotateY(20deg) translateZ(310px) scale(.5);
}

.links{
    position: absolute;
    width: 30%;
    right: 0;
    top: 0;
    height: 100vh;

    z-index: 2;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul{
    list-style: none;
}

.links a{
    text-decoration: none;
    color: #eee;

    padding: .7rem 0;

    display: inline-block;
    font-size: 1rem;
    font-weight: 300;
    text-transform: uppercase;

    letter-spacing: 1px;
    transition: .3s;
    transform: translateY(10px);

    animation: hide .5s forwards ease;
}

.links a:hover{
    transform: scale(1.05);
}

.container.active .links a{
    animation: appear .5s forwards ease var(--i);
}

@keyframes appear{
    from{
        opacity: 0;
        transform: translateY(10px);
    }to{
        opacity: 1;
        transform: translateY(0px);
    }
}

@keyframes hide{
    from{
        opacity: 1;
        transform: translateY(0px);
    }
    to{
        opacity: 0;
        transform: translateY(10px);
    }
}

.shadow{
    position: absolute;
    width: 100%;
    height: 100vh;
    top: 0;
    left: 0;
    background: black;
    transform-style: preserve-3d;
    transform-origin: left;
    transition: .5s;
    z-index: -1;

    border: 2px solid black;
}

.shadow.one{
    z-index: -1;
    opacity: 0.15;
}

.shadow.two{
    z-index: -2;
    opacity: .1;
}

.container.active .shadow.one{
    transform: perspective(1300px)
                rotateY(20deg)
                translateZ(215px)
                scale(.5);
}

.container.active .shadow.two{
    transform: perspective(1300px)
                rotateY(20deg)
                translateZ(120px)
                scale(.5);
}

.container.active .main:hover + .shadow.one{
    transform: perspective(1300px)
                rotateY(20deg)
                translateZ(230px)
                scale(.5);
}
.container.active .main:hover + .shadow.two{
    transform: perspective(1300px)
                rotateY(20deg)
                translateZ(230px)
                scale(.5);
}

.container.active .main:hover{
    transform: perspective(1300px)
                rotateY(20deg)
                translateZ(340px)
                scale(.5)
    ;
}
</style>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <div class="menu">
                <h3 class="logo">
                    AGRI <span>WEB</span>
                </h3>
                <div class="hamburger-menu">
                    <div class="bar"></div>
                </div>
            </div>
        </div>

        <div class="main-container">
            <div class="main">
                <header>
                    <div class="overlay">
                        <div class="inner">
                            <h2 class="title">Experience The Metadata Like Never Before</h2>
                            <p>
                                Enjoy comprehensive seasonal crop information and advanced tools.
                            </p>
                            <a href="explore.php">Explore</a>
                        </div>
                    </div>
                </header>
            </div>
            <div class="shadow one"></div>
            <div class="shadow two"></div>
        </div>

        <div class="links">
            <ul>
                <li><a href="index.php" style="--i: 0.05s">Home</a></li>
                <li><a href="registration.php" style="--i: 0.05s">Register</a></li>
                <li><a href="login.php" style="--i: 0.05s">Login</a></li>
                <li><a href="about.php" style="--i: 0.15s">About</a></li>
                <li><a href="weather.php" style="--i: 0.2s">weather</a></li>
                <li><a href="team.php" style="--i: 0.2s">My Team</a></li>
            </ul>
        </div>
    </div>
</body>
<script>
    const hamburger_menu= document.querySelector(".hamburger-menu");
const container= document.querySelector(".container")

hamburger_menu.addEventListener("click", () => {
    container.classList.toggle("active")
})
</script>
</html>