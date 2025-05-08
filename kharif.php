<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KHARIF SEASON</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
body{
    font-family: Poppins;
    margin: 0;
    background-color: #010101;
    color: #eee;
}
svg{
    width: 25px;
}
header{
    width: 1200px;
    max-width: 90%;
    margin: auto;
    display: grid;
    grid-template-columns: 50px 1fr 50px;
    grid-template-rows: 50px;
    justify-content: center;
    align-items: center;
    position: relative;
    z-index: 100;
}
header .logo{
    font-weight: bold;
}
header .menu{
    padding: 0;
    margin: 0;
    list-style: none;
    display: flex;
    justify-content: center;
    gap: 20px;
    font-weight: 500;
}
/* css slider */
.slider{
    height: 100vh;
    margin-top: -50px;
    position: relative;
}
.slider .list .item{
    position: absolute;
    inset: 0 0 0 0;
    overflow: hidden;
    opacity: 0;
    transition: .5s;
}
.slider .list .item img{
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.slider .list .item::after{
    content: '';
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    bottom: 0;
    background-image: linear-gradient(
        to top, #000 40%, transparent
    );
}
.slider .list .item .content{
    position: absolute;
    left: 10%;
    top: 20%;
    width: 500px;
    max-width: 80%;
    z-index: 1;
}
.slider .list .item .content p:nth-child(1){
    text-transform: uppercase;
    letter-spacing: 10px;
}
.slider .list .item .content h2{
    font-size: 100px;
    margin: 0;
}
.slider .list .item.active{
    opacity: 1;
    z-index: 10;
}
@keyframes showContent {
    to{
        transform: translateY(0);
        filter: blur(0);
        opacity: 1;
    }
}
.slider .list .item.active p:nth-child(1),
.slider .list .item.active h2,
.slider .list .item.active p:nth-child(3){
    transform: translateY(30px);
    filter: blur(20px);
    opacity: 0;
    animation: showContent .5s .7s ease-in-out 1 forwards;
}
.slider .list .item.active h2{
    animation-delay: 1s;
}
.slider .list .item.active p:nth-child(3){
    animation-duration: 1.3s;
}
.arrows{
    position: absolute;
    top: 30%;
    right: 50px;
    z-index: 100;
}
.arrows button{
    background-color: #eee5;
    border: none;
    font-family: monospace;
    width: 40px;
    height: 40px;
    border-radius: 5px;
    font-size: x-large;
    color: #eee;
    transition: .5s;
}
.arrows button:hover{
    background-color: #eee;
    color: black;
}
.thumbnail {
    position: absolute;
    bottom: 50px;
    right: 50px; /* Add this line to align the thumbnail to the right side */
    z-index: 11;
    display: flex;
    gap: 10px;
    width: auto; /* Change from 100% to auto */
    height: 250px;
    padding: 0;
    box-sizing: border-box;
    overflow: auto;
    justify-content: flex-end; /* Align the thumbnails to the right */
}

.thumbnail .item {
    width: 150px;
    height: 220px;
    filter: brightness(.5);
    transition: .5s;
    flex-shrink: 0;
}

.thumbnail .item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: 10px;
}

.thumbnail .item.active {
    filter: brightness(1.5);
}

.thumbnail .item .content {
    position: absolute;
    inset: auto 10px 10px 10px;
}

@media screen and (max-width: 678px) {
    .thumbnail {
        justify-content: flex-start;
        right: auto; /* Override the right position for smaller screens */
    }
    .slider .list .item .content h2 {
        font-size: 60px;
    }
    .arrows {
        top: 10%;
    }
}

    </style>
</head>
<body>
        <!-- header -->
    <header>
        <div class="logo">AGRI<span>WEB</span></div>
        <ul class="menu">
            <li><a href="index.php" style="--i: 0.05s">Home</a></li>
            <li>Blog</li>
            <li>Info</li>
        </ul>
        <div class="search">
            <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
    </header>

    <!-- slider -->

    <div class="slider">
        <!-- list Items -->
        <div class="list">
            <div class="item active">
                <img src="https://i0.wp.com/asombarta.com/wp-content/uploads/2022/06/paddy-1-e1654169940925.jpg?resize=1140%2C544&ssl=1">
                <div class="content">
                    <p>KHARIF SEASON</p>
                    <h2>PADDY</h2>
                    <p>
Scientific classification: Oryza sativa, family Poaceae<br>
Origin: South Asia, cultivated for over 9,000 years<br>
Plant type: Annual grass with slender stalks and grains<br>
Growing season: 90-150 days from planting to harvest<br>
Climate requirements: Warm, humid conditions, 20-35°C<br>
Soil needs: Clay or loamy soil, pH 5.0-6.5<br>
Planting: Direct seeding or transplanting in monsoon (June-July)<br>
Spacing: 8-12 inches apart<br>
Watering: Requires consistent irrigation, thrives in flooded conditions<br>
On average, rice crops need around 10 mm of water per day.<br>
Fertilization: Nitrogen-rich fertilizers with phosphorus and potassium<br>

                    </p>
                </div>
            </div>
            <div class="item">
                <img src="https://content.woolovers.com/img/o/cotton3.jpg?mobileinline">
                <div class="content">
                    <p>KHARIF SEASON</p>
                    <h2>COTTON</h2>
                    <p>
                        Scientific classification: Gossypium hirsutum, family Malvaceae<br>
                        Origin: Central America, cultivated for over 5,000 years<br>
                        Plant type: Perennial shrub grown as an annual<br>
                        Growing season: 150-180 days from planting to harvest<br>
                        Climate requirements: Warm, dry conditions, 25-35°C<br>
                        Soil needs: Well-drained loamy soil, pH 6.0-7.5<br>
                        Planting: Direct seeding in monsoon (June-July)<br>
                        Spacing: 1.5-2 feet apart<br>
                        Watering: Moderate, requires irrigation in dry periods<br>
                        Fertilization: Requires nitrogen and potassium-rich fertilizers for better yield<br>

                    </p>
                </div>
            </div>
            <div class="item">
                <img src="https://www.zettafarms.com/wp-content/uploads/2024/01/blog-3.jpg">
                <div class="content">
                    <p>KHARIF SEASON</p>
                    <h2>GROUNDNUT</h2>
                    <p>
Scientific classification: Arachis hypogaea, family Fabaceae<br>
Origin: South America, cultivated for over 3,500 years<br>
Plant type: Annual herbaceous legume with low-growing vines and yellow flowers<br>
Growing season: 120-150 days from planting to harvest<br>
Climate requirements: Warm temperatures, sensitive to frost, requires dry conditions for harvest<br>
Soil needs: Well-draining sandy or sandy-loam soil with pH 5.5-7.0<br>
Planting: Direct seeding when soil temperature is warm<br>
Spacing: 1-1.5 feet between plants, 2 feet between rows<br>
Watering: 1-2 inches of water per week, reduced near harvest<br>
Fertilization: Balanced NPK fertilizer with higher phosphorus and potassium, moderate nitrogen needs due to nitrogen-fixing abilities<br>
                        
                    </p>
                    
                </div>
            </div>
            <div class="item">
                <img src="https://i0.wp.com/rythurajyam.com/wp-content/uploads/2021/04/Featured-photo-size-1.jpg?fit=1200%2C628&ssl=1">
                <div class="content">
                    <p>KHARIF SEASON</p>
                    <h2>JOWAR</h2>
                    <p> 
Scientific classification: Sorghum bicolor, family Poaceae<br> 
Origin: Northeastern Africa, cultivated for over 5,000 years<br> 
Plant type: Annual cereal with tall stalks and compact grain heads<br>
Growing season: 100-120 days from planting to harvest<br>
Climate requirements: Hot, dry conditions, 25-35°C<br> 
Soil needs: Well-drained sandy or loamy soil, pH 5.5-7.5<br> 
Planting: Direct seeding in monsoon (June-July)<br> 
Spacing: 10-12 inches apart<br>
Watering: Drought-tolerant, minimal irrigation required<br> 
Fertilization: Requires moderate nitrogen, with phosphorus for root development<br>


                    </p>
                </div>
            </div>
            <div class="item">
                <img src="https://gardenerspath.com/wp-content/uploads/2022/02/How-to-Grow-Pigeon-Peas-Feature.jpg">
                <div class="content">
                    <p>KHARIF SEASON</p>
                    <h2>PIGEONPEA</h2>
                    <p>
                        
Scientific classification: Cajanus cajan, family Fabaceae<br>
Origin: South Asia, cultivated for over 3,500 years<br> 
Plant type: Perennial legume grown as an annual<br>  
Growing season: 120-150 days from planting to harvest<br>  
Climate requirements: Warm, semi-arid conditions, 18-30°C<br>  
Soil needs: Well-drained loamy or sandy soil, pH 5.5-7.0<br> 
Planting: Direct seeding in monsoon (June-July)<br> 
Spacing: 18-24 inches apart<br> 
Watering: Drought-tolerant, minimal watering required<br>
Fertilization: Requires phosphorus-rich fertilizers, fixes nitrogen naturally<br>

                    </p>
                </div>
            </div>
        </div>
        <!-- button arrows -->
        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <!-- thumbnail -->
        <div class="thumbnail">
            <div class="item active">
                <img src="https://blog.agribazaar.com/wp-content/uploads/2019/07/paddy-Farming.jpg">
                <div class="content">
                    PADDY
                </div>
            </div>
            <div class="item">
                <img src="https://images.ctfassets.net/3s5io6mnxfqz/4TV7YTCO1DJuMhhn7RD1Ol/b5a6c12340e6529a86bc1b557ed2d8f8/AdobeStock_136921602.jpeg">
                <div class="content">
                    COTTON
                </div>
            </div>
            <div class="item">
                <img src="https://aceola.com/wp-content/uploads/2022/12/raw-groundnut-.png">
                <div class="content">
                    GROUNDNUT
                </div>
            </div>
            <div class="item">
                <img src="https://cdn.dotpe.in/longtail/store-items/1087846/S4MduMrL.jpeg">
                <div class="content">
                    JOWAR
                </div>
            </div>
            <div class="item">
                <img src="https://5.imimg.com/data5/SELLER/Default/2022/2/PR/NP/VT/47919708/arhar-pegion-pea-seeds.jpg">
                <div class="content">
                    PIGEONPEA
                </div>
            </div>
        </div>
    </div>


    <script>
        
let items = document.querySelectorAll('.slider .list .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let thumbnails = document.querySelectorAll('.thumbnail .item');

// config param
let countItem = items.length;
let itemActive = 0;
// event next click
next.onclick = function(){
    itemActive = itemActive + 1;
    if(itemActive >= countItem){
        itemActive = 0;
    }
    showSlider();
}
//event prev click
prev.onclick = function(){
    itemActive = itemActive - 1;
    if(itemActive < 0){
        itemActive = countItem - 1;
    }
    showSlider();
}
// auto run slider
let refreshInterval = setInterval(() => {
    next.click();
}, 5000)
function showSlider(){
    // remove item active old
    let itemActiveOld = document.querySelector('.slider .list .item.active');
    let thumbnailActiveOld = document.querySelector('.thumbnail .item.active');
    itemActiveOld.classList.remove('active');
    thumbnailActiveOld.classList.remove('active');

    // active new item
    items[itemActive].classList.add('active');
    thumbnails[itemActive].classList.add('active');

    // clear auto time run slider
    clearInterval(refreshInterval);
    refreshInterval = setInterval(() => {
        next.click();
    }, 5000)
}

// click thumbnail
thumbnails.forEach((thumbnail, index) => {
    thumbnail.addEventListener('click', () => {
        itemActive = index;
        showSlider();
    })
})

    </script>
</body>
</html>