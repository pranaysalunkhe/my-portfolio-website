<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pranay Portfolio website</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet">
    <style>
        *{
    margin: 0;
    padding: 0;
}
body{
    background-color:#a5b0cf ;
    color: #465035;
    font-family: 'Poppins', sans-serif;
}
nav{
    display: flex;
    justify-content: space-around;
    align-items: center;
    height: 70px;
    background-color: #b8a4da;
}
nav ul{
    display: flex;
    justify-content: center;
}
nav ul li{
    list-style: none;
    margin: 0 10px;
}
nav ul li a{
    text-decoration: none;
    color:#b3ff6b;
}
nav ul li a:hover{
    color: #6bc5ff;
    font size: 1.04em;
}
main hr{
    border:0;
    background:red;
    height:1.2px;
    margin:60px 84px;
}
.left{
    font-size: 1.5rem;
}
.firstsection{
    display: flex;
    align-items:center;
    justify-content: space-around;
    margin:80px 0;
}
.firstsection > div{
    width: 30%;
    
}
.leftsection{
    width: 34px;
    font-size: 2rem;
}
.rightsection img{
    width: 115%;
    height: 100%;
}
.purple{
    color: #a0eb5e;
}
.text-gray
{
    color:gray;
}
#element{
    color: #a0eb5e; 
}
.secondsection{
    max-width:80vw;
    margin:auto;
    height: 80vh;
}
.secondsection h1{
  font-size:1.6rem;
}
.secondsection .box{
  background:white;
  width: 150vh;
  height:2px;
  margin:50px 0;
  display: flex;
}
.secondsection .vertical{
    height: 93px;
    width: 1px;
    background-color: #5714b4;
    margin:0 100px;
}
.image-top{
        width: 23px;
        position: relative;
        top:-32px;
        left:-9px;
}
.vartical-title{
    position: relative;
    top: 75px;
    width: 150px;
}
.vartical-desc{
    position: relative;
    top:75px;
    color:gray;
    width: 193px;
    font-size: 9px;
}
footer{
    background: #d988a7;
    height: 233px;
}
.footer{
    display: flex;
    padding:23px 100px;
    justify-content:space-evenly;
}
.footer ul{
    list-style:none;
}

    </style>
</head>
<body class="">
   <header>
    <nav>
        <div class="left">Pranay Portfolio</div>
        <div class="right">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="/">Server</a></li>
                <li><a href="/">Project</a></li>
                <li><a href="/">contact us</a></li>
                <li><a href="/">logout</a></li>
            </ul>
        </div>
    </nav>
   </header>
   <main>
    <section class="firstsection">
            <div class="leftsection">
                Hi, My name is <samp class="purple">Pranay</samp>
                <div>
                    And I Am A passionate
                </div>
                <span id="element"></span>
            </div>
            <div class="rightsection">
                <img src="img/webdeveloper.jpg" alt="">
            </div>
    </section>
<hr>
    <section class="secondsection">
            <samp class="text-gray">What I Have Done So Far</samp>
            <h1>Work Experience</h1>

            <div class="box">
                <div class="vertical">
                    <img class="image-top" src="img/html.png" alt="">
                    <div class="vartical-title">
                        HTML DEVELOPER <br>(2022-2023)
                    </div>
                    <div class="vartical-desc">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim dignissimos accusamus vitae aliquid iure nostrum nihil pariatur perspiciatis fugit tempora! Libero voluptas facilis corrupti ex tenetur, harum explicabo officiis nulla.</p>
                    </div>
                </div>

                <div class="vertical">
                    <img class="image-top" src="img/javascript.png" alt="">
                    <div class="vartical-title">
                            Javascript <br>
                            (2023-24)
                    </div>
                    <div class="vartical-desc">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum atque, facilis error rerum, distinctio voluptatem eum adipisci, recusandae dolores exercitationem unde provident quisquam. Perspiciatis, eum labore doloremque rem magni corrupti?</p>
                        
                    </div>
                </div>

                <div class="vertical">
                    <img class="image-top" src="img/javascript.png" alt="">
                    <div class="vartical-title">
                            Javascript <br>
                            (2023-24)
                    </div>
                    <div class="vartical-desc">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum atque, facilis error rerum, distinctio voluptatem eum adipisci, recusandae dolores exercitationem unde provident quisquam. Perspiciatis, eum labore doloremque rem magni corrupti?</p>
                        
                    </div>
                </div>

                <div class="vertical">
                    <img class="image-top" src="img/javascript.png" alt="">
                    <div class="vartical-title">
                            Javascript <br>
                            (2023-24)
                    </div>
                    <div class="vartical-desc">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum atque, facilis error rerum, distinctio voluptatem eum adipisci, recusandae dolores exercitationem unde provident quisquam. Perspiciatis, eum labore doloremque rem magni corrupti?</p>
                        
                    </div>
                </div>
                
            </div>
    </section>
   </main>
    <footer>
        <div class="footer">
            <div class="footer-fist">
                <h3>Pranay Developer Portfolio</h3>
            </div>
            <div class="footer-second">
                <ul>
                    <li>Home</li>
                    <li>About</li>
                    <li>contact us</li>
                    <li>Server</li>
                </ul>
            </div>
            <div class="footer-third">
            <ul>
                    <li>Home</li>
                    <li>About</li>
                    <li>contact us</li>
                    <li>Server</li>
                </ul>
            </div>
            <div class="footer-fourth">
            <ul>
                    <li>Home</li>
                    <li>About</li>
                    <li>contact us</li>
                    <li>Server</li>
                </ul>
            </div>
        </div>
    </footer>

   <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

   <!-- Setup and start animation! -->
  <script>
    var typed = new Typed('#element', {
      strings: ['Web Developer','Content Creator','Web Designer'],
      typeSpeed: 50,
    });
  </script>
</body>
</html>