<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trekking</title>

    <link rel="stylesheet" href="trystyle.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>T</span>rekking</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#book">booking</a>
        <a href="#packages">packages</a>
        <a href="#gallery">gallery</a>
        <a href="#contact">contact</a>
    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>adventure is worthwhile</h3>
        <p>dicover new places with us, adventure awaits</p>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="images/video3.mp4"></span>
        <span class="vid-btn" data-src="images/video2.mp4"></span>
        <span class="vid-btn" data-src="images/video1.mp4"></span>
    </div>

    <div class="video-container">
        <video src="images/video3.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- book section starts  -->

<section class="book" id="book">

    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="https://thumbs.dreamstime.com/b/basic-rgb-186970717.jpg" alt="">
        </div>

        <form action="success.php" method="POST">
            <div class="inputBox">
                <h3>where to</h3>
                <input type="text" placeholder="place name">
            </div>
            <div class="inputBox">
                <h3>how many</h3>
                <input type="number" placeholder="number of guests">
            </div>
            <div class="inputBox">
                <h3>departure</h3>
                <input type="date">
            </div>
            <div class="inputBox">
                <h3>return</h3>
                <input type="date">
            </div>
            <input type="submit" class="btn" value="Book Now"></a>
     </form>
        </form>

    </div>

</section>

<!-- book section ends -->

<!-- packages section starts  -->

<section class="packages" id="packages">

    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="https://travel.home.sndimg.com/content/dam/images/travel/stock/2017/3/30/0/GettyImages-507260626-inca-trail-macchu-picchu.jpg.rend.hgtvcom.966.725.suffix/1491594770149.jpeg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Annapurna Circuit </h3>
                <p>The total length of the route varies between 100 and145 miles, and takes anywhere from 15 to 25 days <br><br></p>
                <div class="price"> $90.00 </div>
                <a href="success.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="https://d3aux7tjp119y2.cloudfront.net/images/small_duncan-kungsleden-150906-338-CMSTemp.max-1500x1000_ayUhjii.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Kungsleden (King's Trail) </h3>
                <p> hiking trail in northern Sweden, approximately 440 kilometres (270 mi) long
                    <br><br><br>
                </p>
                <div class="price"> $120.00  </div>
                <a href="success.php" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="https://images.english.elpais.com/resizer/EX3V4F_o7mQkvQM4PlCKZ7OnJMo=/1960x0/cloudfront-eu-central-1.images.arcpublishing.com/prisa/7D65CMSZY6PUL33AFSFBITK34U.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Camino de Santiago </h3>
                <p>pilgrims complete the trail in as few as 20 days, most walk it in four to six weeks,passing by budget-friendly accommodations nearly every five miles.</p>
                <div class="price"> $160.00 </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="https://www.chamonix.net/sites/default/files/nodeimages/HauteRoute3.jpg?itok=EXwg86OM" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i>Haute Route  </h3>
                <p>In a word, it is difficult. It is 188 km of rough Alpine terrain , some almost 10,000 feet in elevation. Unstable trail conditions and afternoon storms</p>
                <div class="price"> $200.00 </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="https://img.traveltriangle.com/blog/wp-content/uploads/2019/01/shutterstock_398443843.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Dogon country  </h3>
                <p>Very Intresting and sandy trek, A greta place for exploring ypurself and knowing your limitation and pushing out ypur boundaries.</p>
                <div class="price"> $50.00  </div>
                <a href="#" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="https://www.incinqueterre.com/photo/photo_azzurro1_b1.jpg" alt="">
            <div class="content">
                <h3> <i class="fas fa-map-marker-alt"></i> Blue Path </h3>
                <p>the easiest, the most famous and the most popular path in the entire Cinque Terre.Total length: 12 km<br><br> </p>
                <div class="price"> $80.00 </div>
                <a href="success.php" class="btn">book now</a>
            </div>
        </div>

    </div>

</section>

<!-- packages section ends -->

<!-- gallery section starts  -->

<section class="gallery" id="gallery">

    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>

    <div class="box-container">

        <div class="box">
            <img src="https://www.greatplacestovisit.com/userfiles/images/Best%20Annapurna%20Region%20treks%20in%20spring/1_%20Intrepid%20Travel.jpg" alt="Annapurna Base">
            <div class="content">
                <h3>Annapurna Base</h3>
                <p>The Annapurna base camp trek is one of the most popular treks in the world. It literally brings you face to face with an eight-thousander – for a moderate-difficult trek, this is incredible! The fascinating Annapurna massif includes the world’s tenth highest peak. </p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="https://www.australiangeographic.com.au/wp-content/uploads/2018/06/Routeburn_Track-New-Zealand.jpg" alt="Routeburn_Track-New-Zealand">
            <div class="content">
                <h3>Routeburn New Zealamd</h3>
                <p>THE WELL-KNOWN Milford Track is right next door, but for those looking to jam in the most of New Zealand’s Southern Alps landscape – whether mountains, fast-flowing alpine rivers or beautiful beech forests of multiple shades of green – then the Routeburn Track is the best of the nine NZ Great Walks.</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="https://bit.ly/3o9BjnC" alt="Adam's Peak">
            <div class="content">
                <h3>Adam's Peak</h3>
                <p>In the middle of Sri Lanka stands a holy mountain: Adam’s Peak. On this mountain all religions seem to come together: according to Christians and Muslims this is the place where Adam took his first step on earth, the Buddhists believe Buddha’s first footstep was set here and for the Hindus, it was Shiva who stepped via this peak on earth. </p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="https://www.backroads.com/sites/default/files/styles/trip_page_hero_landscape/public/2020/WSTIZ-camino-de-santiago-easy-walking-tour-3.jpg?h=289976fd&itok=F5Pg1RI-" alt="el camino de santiago">
            <div class="content">
                <h3>el camino de santiago</h3>
                <p>Walking the Camino de Santiago is one of the most highly-sought pilgrimages in the history of humanity. Today, nearly 350,000 trekkers from around the world continue to complete the Camino each year—and for good reason</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="https://d1hirb55zrpywb.cloudfront.net/macs-adventure-tours/routes/WSSWHW/routeimagegallery/SuperbviewsoverLochLomond-rsz-20092019080433965.jpg" alt="">
            <div class="content">
                <h3>West Highland Way</h3>
                <p>he West Highland Way hike is a moderate to difficult trail</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        <div class="box">
            <img src="https://www.doc.govt.nz/thumbs/hero/globalassets/images/places/fiordland/routeburn-track/routeburn-1920.jpg" alt="">
            <div class="content">
                <h3>The Routeburn Track</h3>
                <p> The track is reasonably smooth, with some steep rocky sections. Your adventure begins with a coach ride from Queenstown to the Divide on the scenic Milford Road, stopping at Te Anau for morning tea..</p>
                <a href="#" class="btn">see more</a>
            </div>
        </div>
        

    </div>

</section>

<!-- gallery section ends -->


<!-- contact section starts  -->

<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>

        <form action="contacttry.php" method="post">
            <div class="inputBox">
                <input type="text" placeholder="name" name="FirstName">
                <input type="email" placeholder="email" name="Email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number" name="number">
                <input type="text" placeholder="subject" name="subject">
            </div>
            <textarea input placeholder="message" name="Message" id="" cols="30" rows="10" ></textarea>
            <input type="submit" class="btn btn-primary"  value="Submit">
        </form>

    </div>
    
</section>

<!-- contact section ends -->


<!-- custom js file link  -->
<script src="fixing.js"></script>

</body>
</html>