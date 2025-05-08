<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RABI SEASON</title>
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
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a3/Vehn%C3%A4pelto_6.jpg">
                <div class="content">
                    <p>RABI SEASON</p>
                    <h2>WHEAT</h2>
                    <p>
Scientific classification: Triticum aestivum (most common), family Poaceae,<br>
Origin: Ancient Mesopotamia, cultivated for over 10,000 years<br>
Plant type: Herbaceous annual plant with long narrow leaves<br>
Growing season: 120-150 days from planting to harvest<br>
Climate requirements: Cool temperatures during growth, but requires warm temperatures during ripening<br>
Soil needs: Well-draining loam soil with pH 6.0-7.5<br>
Planting: Sowing in well-prepared soil at the onset of the winter season<br>
Spacing: 6-9 inches apart<br>
Watering: 2-3 irrigations during the growing period<br>
Fertilization: Balanced NPK fertilizer, with emphasis on nitrogen for better growth<br>


                    </p>
                </div>
            </div>
            <div class="item">
                <img src="https://cdn.britannica.com/31/75931-050-FED41F1F/Barley.jpg">
                <div class="content">
                    <p>RABI SEASON</p>
                    <h2>BARLEY</h2>
                    <p>
Scientific classification: Hordeum vulgare, family Poaceae<br>
Origin: Fertile Crescent region, cultivated for over 8,000 years<br>
Plant type: Annual grass with narrow leaves and spikes of grains<br>
Growing season: 120-140 days from planting to harvest<br>
Climate requirements: Cool, dry conditions<br>
Soil needs: Sandy or loamy soil with pH 6.0-7.0<br>
Planting: Direct seeding in the fall when soil temperatures are cool<br>
Spacing: 6-8 inches apart<br>
Watering: Minimal watering required; drought-tolerant<br>
Fertilization: Low nitrogen needs, phosphorus-rich fertilizers for root development<br>

                    </p>
                </div>
            </div>
            <div class="item">
                <img src="https://www.thespruce.com/thmb/zOF8li_lnDRkxC7l04ARmYt_JPg=/4000x0/filters:no_upscale():max_bytes(150000):strip_icc()/mustard-plant-growing-guide-7377609_01-7dd11987305340b7a79f41d359514096.jpg">
                <div class="content">
                    <p>RABI SEASON</p>
                    <h2>MUSTARD</h2>
                    <p>
                         Origin: Mediterranean region, cultivated for over 5,000 years<br>
                         Scientific classification: Brassica juncea (most common), family Brassicaceae<br>
                         Plant type: Annual herb with erect stems and yellow flowers<br>
                         Soil needs: Well-draining loamy soil with pH 6.0-7.5; tolerates slightly alkaline soil<br>
                         Planting: Direct seeding in late autumn, typically sown as a Rabi crop<br>
                         Climate requirements: Cool temperatures; frost-tolerant; thrives in dry and cool conditions<br>
                         Spacing: 1-2 feet between plants, 2-3 feet between rows<br>
                         Watering: Requires light irrigation, especially during flowering and pod formation<br>
                         Fertilization: Requires nitrogen-rich fertilizer early in growth; phosphorus and potash promote flowering and seed development<br>
                         Growing season: 90-120 days from planting to harvest<br>
                        
                    </p>
                    
                </div>
            </div>
            <div class="item">
                <img src="https://media.istockphoto.com/id/1298291139/photo/field-with-yellow-sunflowers-at-sunset-in-summer.webp?b=1&s=612x612&w=0&k=20&c=k_CJKxNsgFjiZ6Bc2Cv4klL2H2TMKLpNzwWcbUBBfoY=">
                <div class="content">
                    <p>RABI SEASON</p>
                    <h2>SUNFLOWER</h2>
                    <p>
Scientific classification: Helianthus annuus, family Asteraceae<br>
Origin: North America, domesticated over 4,000 years ago<br>
Plant type: Annual plant with a tall, erect stem and large, yellow flower heads<br>
Growing season: 90-120 days from planting to harvest<br>
Climate requirements: Requires warm temperatures with plenty of sunlight, moderately drought-tolerant<br>
Soil needs: Well-draining loamy or sandy-loam soil with pH 6.0-7.5<br>
Planting: Direct seeding in rows during late autumn, when temperatures are warm<br>
Spacing: 1-1.5 feet between plants, 2-3 feet between rows<br>
Watering: 1 inch of water per week; drought-tolerant, but requires regular moisture during flowering<br>
Fertilization: Requires a balanced NPK fertilizer, with additional nitrogen for healthy growth and potassium for oil content development in seeds<br>


                    </p>
                </div>
            </div>
            <div class="item">
                <img src="https://plantix.net/en/community/assets/custom/crop-images/gram.jpeg">
                <div class="content">
                    <p>RABI SEASON</p>
                    <h2>BLACKGRAM</h2>
                    <p>
                        Scientific classification: Vigna mungo, family Fabaceae<br>
Origin: South Asia, cultivated for over 4,500 years<br>
Plant type: Annual legume with hairy leaves and small yellowish flowers<br>
Growing season: 90-120 days from planting to harvest<br>
Planting: Direct seeding, usually sown in autumn during the Rabi season<br>
Climate requirements: Warm, humid conditions; thrives in tropical and subtropical climates<br>
Soil needs: Well-draining loamy soil with pH 6.0-7.5; tolerant of slightly alkaline soil<br>
Watering: Requires light irrigation, especially during flowering and pod formation stages<br>
Spacing: 1 foot between plants, 1-2 feet between rows<br>
Fertilization: Requires moderate nitrogen; phosphorus-rich fertilizers enhance pod production, as the plant is a nitrogen-fixer<br>


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
                <img src="https://goodineverygrain.ca/wp-content/uploads/2021/06/wheat-berries-bowl.png">
                <div class="content">
                    WHEAT
                </div>
            </div>
            <div class="item">
                <img src="https://biobasics.org/cdn/shop/articles/barley.jpg?v=1658819719">
                <div class="content">
                    BARLEY
                </div>
            </div>
            <div class="item">
                <img src="https://cdn.mos.cms.futurecdn.net/SniTkNhSfVxpHAqhfFu6Ld-1200-80.jpg">
                <div class="content">
                    MUSTARD
                </div>
            </div>
            <div class="item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfRaO3bQSTSQF-fYWYL1X84dA3naOFmFVJDg&s">
                <div class="content">
                    SUNFLOWER
                </div>
            </div>
            <div class="item">
                <img src="https://www.stylecraze.com/wp-content/uploads/2022/02/7-Benefits-Of-Including-Black-Gram-In-Your-Diet-Banner.jpg">
                <div class="content">
                    BLACKGRAM
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