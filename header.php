<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dropdown Menu with Search Box | CodingNepal</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- GOOGLE FONT EXTERNAL LINK  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
        <style>
          
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  text-decoration: none;
  font-family: 'Poppins', sans-serif;
}
.header-logo {
  width: 50%;
}
.wrapper {
    /* background: white; */
    position: fixed;
    width: 100%;
    height: 100px;
    position: fixed;
    left: 0px;
    top: 0px;
}
.wrapper nav{
  position: relative;
  display: flex;
  width: 100%;
  margin: 0 auto;
  height: 100px;
  align-items: center;
  justify-content: space-between;
  padding: 0px 20px;
}
nav .content{
  display: flex;
  align-items: center;
}
nav .content .links{
  margin-left: 0px;
  display: flex;
  padding: 10px 10px;
  width: 700px;
  justify-content: center;
}
.logo img {
  margin-top: 10px;
}

.content .links li{
  list-style: none;
  /* line-height: 70px; */
  margin-right: 56px;
}
label.menu-icon {
  position: absolute;
  right: 0px;
}
label.menu-icon i {
  font-size: 30px;
  margin-top: 28px !important;
  color: black;
}
.content .links li a,
.content .links li label{
  color: #000000;
  font-size: 18px;
  font-weight: 500;
  padding: 9px 10px;
  border-radius: 5px;
  transition: all 0.3s ease;
}
.content .links li label{
  display: none;
}
.content .links li a:hover,
.content .links li label:hover{
  background: #ffffff;
  color: black;
}
.wrapper .search-icon,
.wrapper .menu-icon{
  color: #fff;
  font-size: 18px;
  cursor: pointer;
  line-height: 70px;
  width: 70px;
  text-align: center;
}
.wrapper .menu-icon{
  display: none;
}
.wrapper #show-search:checked ~ .search-icon i::before{
  content: "\f00d";
}

.wrapper .search-box{
  position: absolute;
  height: 100%;
  max-width: calc(100% - 50px);
  width: 100%;
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s ease;
}
.wrapper #show-search:checked ~ .search-box{
  opacity: 1;
  pointer-events: auto;
}
.search-box input{
  width: 100%;
  height: 100%;
  border: none;
  outline: none;
  font-size: 17px;
  color: #fff;
  background: #171c24;
  padding: 0 100px 0 15px;
}
.search-box input::placeholder{
  color: #f2f2f2;
}
.search-box .go-icon{
  position: absolute;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  line-height: 60px;
  width: 70px;
  background: #171c24;
  border: none;
  outline: none;
  color: #fff;
  font-size: 20px;
  cursor: pointer;
}
.wrapper input[type="checkbox"]{
  display: none;
}

/* Dropdown Menu code start */
.content .links ul{
  position: absolute;
  background: #171c24;
  top: 83px;
  z-index: -1;
  opacity: 0;
  visibility: hidden;
}
.content .links li:hover > ul{
  top: 70px;
  opacity: 1;
  visibility: visible;
  transition: all 0.3s ease;
  z-index: 1;
  background: linear-gradient(#22c47b, #17975a);
}
.content .links ul li a{
  display: block;
  width: 100%;
  line-height: 30px;
  border-radius: 0px!important;
}
.content .links ul ul{
  position: absolute;
  top: 0;
  right: calc(-100% + 8px);
}
.content .links ul li{
  position: relative;
}
.content .links ul li:hover ul{
  top: 0;
}

/* Responsive code start */
@media screen and (max-width: 1250px){
  .wrapper nav{
    max-width: 100%;
    padding: 0 20px;
  }
  nav .content .links{
    margin-left: 30px;
  }
  .content .links li a{
    padding: 8px 13px;
  }
  .wrapper .search-box{
    max-width: calc(100% - 100px);
  }
  .wrapper .search-box input{
    padding: 0 100px 0 15px;
  }
  label.search-icon i {
    display: none;
  }
  input.header-btn{
    display: none !important;
  }
  .wrapper {
    background-color: rgb(255, 255, 255);
    position: fixed;
    width: 100%;
    height: 100px;
    box-shadow: 4px 4px 10px gray;
}
.style-none{
    display: flex;
    flex-direction: column;
  align-items: start;
  justify-content: start;
  border-radius: 50px;
  background: none !important;
}
.hover-effect:hover{
  background: none !important;
}
.hover-effect {
  padding: 3px 16px;
  display: flex;
  align-items: start !important;
  border-radius: 50px;
  background: none;
}
.hover-effect:hover {
  background: white !important;
  display: flex;
  align-items: center !important;
}
.desktop-link{
  display: none !important;
}
}
input.header-btn {
  padding: 10px 20px;
  font-size: 17px;
  border-radius: 50px;
  border: none;
  background: linear-gradient(#22c47b, #17975a);
  margin-right: 0px;
  cursor: pointer;
}
.margin-right{
  margin-right: 0px !important;
}
.links {
  background: linear-gradient(#22c47b, #17975a);
  border-radius: 50px;
}
@media screen and (max-width: 900px){
  .wrapper .menu-icon{
    display: block;
  }
  .wrapper #show-menu:checked ~ .menu-icon i::before{
    content: "\f00d";
  }
  nav .content .links{
    display: block;
    position: fixed;
    background: linear-gradient(#22c47b, #17975a);
    height: 100%;
    width: 100%;
    top: 100px;
    left: -100%;
    margin-left: 0;
    max-width: 350px;
    overflow-y: auto;
    padding-bottom: 100px;
    transition: all 0.3s ease;
  }
  nav #show-menu:checked ~ .content .links{
    left: 0%;
  }
  .content .links li{
    margin: 15px 20px;
  }
  .content .links li a,
  .content .links li label{
    line-height: 40px;
    font-size: 20px;
    display: block;
    padding: 8px 18px;
    cursor: pointer;
  }
  .content .links li a.desktop-link{
    display: none;
  }

  /* dropdown responsive code start */
  .content .links ul,
  .content .links ul ul{
    position: static;
    opacity: 1;
    visibility: visible;
    background: none;
    max-height: 0px;
    overflow: hidden;
  }
  .content .links #show-features:checked ~ ul,
  .content .links #show-services:checked ~ ul,
  .content .links #show-items:checked ~ ul{
    max-height: 100vh;
  }
  .content .links ul li{
    margin: 7px 20px;
  }
  .content .links ul li a{
    font-size: 18px;
    line-height: 30px;
    border-radius: 5px!important;
  }
  .desktop-link{
    display: none !important;
  }
  .style-none{
    display: flex;
    flex-direction: column;
  align-items: start;
  justify-content: start;
  border-radius: 50px;
  background: none !important;
}
.content .links li:hover > ul {
        top: 70px;
        opacity: 1;
        visibility: visible;
        transition: all 0.3s ease;
        z-index: 1;
        background: none !important;
        border-radius: 0px !important;
    }
li.hover-effect.style-none {
  display: flex;
  align-items: start !important;
  padding: 15px 0px !important;
  border-radius: 0px !important;
  padding-left: 16px !important;
  position: relative;
}
.content .links li a.desktop-link {
  display: none !important;
}
label.service-color {
  position: absolute;
  top: 0px;
  left: 40px;
}
li.hover-effect.style-none:hover .service-color{
color: black;

}
.service-color{
  display: block;
}
.service-color:hover{
  background: none !important;

}
ul.links {
  border-radius: 0px !important;
}
.hover-effect a{
  display: block !important;
  color: black !important;
  }
  .active{
    background:none !important;
    padding: 3px 16px;
    display: flex;
    align-items: center;
    border-radius: 50px;
  }
  .active a:hover {
    background: none !important;
}
li.hover-effect:hover {
  background: none !important;
}
li.hover-effect a {
  display: block !important;
}
.hover-effect a:hover{
  background: none !important;
}
li.hover-effect {
  display: flex;
  align-items: center !important;
}
ul {
  border-radius: 0px !important;
}
li.active img {
  filter: invert(1);
}
.active a{
  color: white !important;
}
.hover-effect img {
  filter: invert(0) !important;
}
}

@media screen and (max-width: 400px){
  .wrapper nav{
    padding: 0 10px;
  }
  .content .logo a{
    font-size: 27px;
  }
  .wrapper .search-box{
    max-width: calc(100% - 70px);
  }
  .wrapper .search-box .go-icon{
    width: 30px;
    right: 0;
  }
  .wrapper .search-box input{
    padding-right: 30px;
  }
}
.active{
  background: white;
  padding: 3px 16px;
  display: flex;
  align-items: center;
  border-radius: 50px;
}
.active a{
display: block !important;
color: black !important;
}
.hover-effect{
  padding: 3px 16px;
  display: flex;
  align-items: center;
  border-radius: 50px;
}
.hover-effect:hover{
  background: white !important;
}
.hover-effect img{
  filter: invert(1);
}
.hover-effect a{
display: none !important;
color: black !important;
}
.hover-effect:hover a{
  display: block !important;
}
.logo {
  width: 300px;
}
.navigation-button {
  display: flex;
  gap: 10px;
}
.whatsapp-icon-circle {
    width: 70px;
    height: 70px;
    background: linear-gradient(#22c47b, #17975a);
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    bottom: 20px;
    left: 20px;
    z-index: 1000;
    cursor: pointer;
}

.whatsapp-icon-circle i {
    font-size: 50px;
    color: white;
}
        </style>
</head>
<body>
  <div class="wrapper">
    <nav>
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="#"><img src="Image/logo/header-logo.webp" alt="Header Logo" class="header-logo"></a></div>
        <ul class="links">
          <li class="active "><img src="Image/navigation Icon/home.png" alt="home Icon" class="home-icon"><a href="index.php">Home</a></li>
          <li class="hover-effect"><img src="Image/navigation Icon/about 1.png" alt="About Icon" class="about-icon"><a href="about.php">About</a></li>
          <li class="hover-effect style-none"><img src="Image/navigation Icon/technical-support 1.png" alt="Service Icon" class="service-icon">
            <a href="#" class="desktop-link">Service</a>
            <input type="checkbox" id="show-features">
            <label for="show-features" class="service-color">Service</label>
            <ul class="extra-style-navigation">
              <li class="margin-right adjust-font-size"><a href="childcare-assignment.php">Childcare Assignment</a></li>
              <li class="margin-right adjust-margin-top-dropdowns"><a href="#">CIPD Assignment</a></li>
              <li class="margin-right adjust-margin-top-dropdowns"><a href="#">Do My Assignment</a></li>
              <li class="margin-right adjust-margin-top-dropdowns"><a href="#">Essay Writing Service</a></li>
              <li class="margin-right adjust-margin-top-dropdowns"><a href="#">HND Assignment</a></li>
              <li class="margin-right adjust-margin-top-dropdowns"><a href="#">Nursing Assignment</a></li>
              <li class="margin-right adjust-margin-top-dropdowns"><a href="#">Write My Assignment</a></li>
              <li class="margin-right adjust-margin-top-dropdowns"><a href="#">Write My Essay</a></li>
            </ul>
          </li>
          <li class="hover-effect"><img src="Image/navigation Icon/best-price 1.png" alt="Price Icon" class="price-icon"><a href="pricing.php">Pricing</a></li>
          <li class="margin-right hover-effect"><img src="Image/navigation Icon/discuss 1.png" alt="Reviews Icon" class="reviews-icon"><a href="#writer">Reviews</a></li>
        </ul>
      </div>
      <div class="navigation-button">
      <a href="#"> <input type="submit" value="Live Chat" class="header-btn"></a> 
       <a href="order.php"> <input type="submit" value="order Now" class="header-btn"></a>
      </div>
    </nav>
  </div>

  <div class="whatsapp-icon-circle">
         <a href="https://wa.me/442080028776?text=Hi,%20I%20saw%20your%20website%20Dissertationwrtingservice.uk"><i class='bx bxl-whatsapp'></i></a>
        </div>
</body>
</html>
