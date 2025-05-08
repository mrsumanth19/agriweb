<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                <img src="https://t4.ftcdn.net/jpg/08/30/03/01/240_F_830030180_cEelVVqJm1RRjjYmNxqMpRe5yVUQlXbW.jpg">
                <div class="content">
                    <p>ZAID SEASON</p>
                    <h2>WATERMELON</h2>
                    <p>
                        Scientific classification: Citrullus lanatus, family Cucurbitaceae<br>

Origin: Native to Africa, cultivated for over 4,000 years<br>

Plant type: Annual vine with large, lobed leaves and yellow flowers<br>

Growing season: 70-100 days from planting to harvest<br>

Climate requirements: Warm temperatures, full sun exposure<br>

Soil needs: Well-draining, fertile soil with pH 6.0-7.0<br>

Planting: Direct seeding or transplanting when soil reaches 70°F<br>

Spacing: 3-4 feet between plants, 6-8 feet between rows<br>

Watering: 1-2 inches per week, consistent moisture crucial<br>


                    </p>
                </div>
            </div>
            <div class="item">
                <img src="https://t4.ftcdn.net/jpg/07/69/02/47/240_F_769024790_9FCbOj1oWP5hrPf9UDvAWZJ5WaE3IAnl.jpg">
                <div class="content">
                    <p>ZAID SEASON</p>
                    <h2>SUGARCANE</h2>
                    <p>
                        1.scientific classification: Saccharum officinarum, family Poaceae<br>

2. Origin: Native to tropical South and Southeast Asia<br>

3. Plant type: Perennial grass growing 10-20 feet tall<br>

4. Growing cycle: 12-18 months from planting to first harvest<br>

5. Climate requirements: Tropical to subtropical, high sunlight, warm temperatures<br>

6. Soil needs: Well-draining, fertile soil with pH 6.0-7.5<br>

7. Planting: Stem cuttings (setts) planted horizontally in furrows<br>

8. Spacing: 2-3 feet between rows, continuous planting within rows<br>

9. Water requirements: 1500-2500 mm annual rainfall or irrigation equivalent<br>

10. Fertilization: High nitrogen demand, also requires potassium and phosphorus<br>

11. Propagation: Vegetative reproduction through stem cuttings<br>


                    </p>
                </div>
            </div>
            <div class="item">
                <img src="https://thumbs.dreamstime.com/b/modern-clean-japan-musk-melon-plant-selective-focus-left-units-ai-generative-design-background-instagram-facebook-wall-327476317.jpg">
                <div class="content">
                    <p>ZAID SEASON</p>
                    <h2>MUSKMELON</h2>
                    <p>
                        
                    </p>1. Scientific classification: Cucumis melo, family Cucurbitaceae<br>

                    2. Origin: Native to Persia and adjacent regions, cultivated for thousands of years<br>
                    
                    3. Plant type: Annual vine with large, lobed leaves and yellow flowers<br>
                    
                    4. Growing season: 70-100 days from planting to harvest<br>
                    
                    5. Climate requirements: Warm temperatures, full sun exposure<br>
                    
                    6. Soil needs: Well-draining, sandy loam with pH 6.0-6.8<br>
                    
                    7. Planting: Direct seeding or transplanting when soil reaches 65°F<br>
                    
                    8. Spacing: 18-24 inches between plants, 4-6 feet between rows<br>
                    
                    9. Watering: 1-2 inches per week, reduce as fruits mature<br>
                    
                    10. Fertilization: Balanced NPK fertilizer, with higher potassium during fruiting<br>
                    
                </div>
            </div>
            <div class="item">
                <img src="https://images.unsplash.com/photo-1568584711271-6c929fb49b60?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <div class="content">
                    <p>ZAID SEASON</p>
                    <h2>CUCUMBER</h2>
                    <p>
                        1. Scientific classification: Cucumis sativus, family Cucurbitaceae<br>

2. Origin: Native to South Asia, cultivated for over 3,000 years<br>

3. Plant type: Annual vine with large leaves and yellow flowers<br>

4. Growing season: 50-70 days from planting to harvest<br>

5. Climate requirements: Warm temperatures, full sun exposure<br>

6. Soil needs: Well-draining, fertile soil with pH 6.0-7.0<br>

7. Planting: Direct seeding or transplanting when soil reaches 60°F<br>

8. Spacing: 12-18 inches between plants, 3-5 feet between rows<br>

9. Watering: 1-2 inches per week, consistent moisture crucial<br>

10. Fertilization: Balanced NPK fertilizer, with higher nitrogen early in growth<br>


                    </p>
                </div>
            </div>
            <div class="item">
                <img src="https://t3.ftcdn.net/jpg/01/36/86/52/360_F_136865210_DGkHnzvmssn5ENG0vAX0LejTiefOqo8u.jpg">
                <div class="content">
                    <p>ZAID SEASON</p>
                    <h2>PUMPKIN</h2>
                    <p>
                        1. Scientific classification: Cucurbita pepo (most common), family Cucurbitaceae<br>

2. Origin: Native to North America, cultivated for over 5,000 years<br>

3. Plant type: Annual vine with large, lobed leaves and yellow flowers<br>

4. Growing season: 90-120 days from planting to harvest<br>

5. Climate requirements: Warm temperatures, full sun exposure<br>

6. Soil needs: Well-draining, fertile soil with pH 6.0-6.8<br>

7. Planting: Direct seeding when soil temperature reaches 60°F<br>

8. Spacing: 3-4 feet between plants, 6-8 feet between rows<br>

9. Watering: 1-2 inches per week, reduced as fruits mature<br>

10. Fertilization: Balanced NPK fertilizer, with higher phosphorus for fruit development<br>

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
                <img src="https://t4.ftcdn.net/jpg/08/30/03/01/240_F_830030180_cEelVVqJm1RRjjYmNxqMpRe5yVUQlXbW.jpg">
                <div class="content">
                    WATERMELON
                </div>
            </div>
            <div class="item">
                <img src="https://t3.ftcdn.net/jpg/09/07/46/66/240_F_907466607_qa3oVBsGBcdVMVr22sfMxbnZvTaMofIf.jpg">
                <div class="content">
                    SUGARCANE
                </div>
            </div>
            <div class="item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSXZINXjELld0lxzcnDJCZPjDvjhQGGabl4IA&s">
                <div class="content">
                    MUSKMELON
                </div>
            </div>
            <div class="item">
                <img src="https://images.unsplash.com/photo-1676043966926-c575c1ef320a?q=80&w=1854&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
                <div class="content">
                    CUCUMBER
                </div>
            </div>
            <div class="item">
                <img src="https://cdn.pixabay.com/photo/2019/09/05/18/20/harvest-4454745_1280.jpg">
                <div class="content">
                    PUMPKIN
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