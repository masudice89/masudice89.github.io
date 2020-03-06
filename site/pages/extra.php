<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style type="text/css">
    	@import "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css";
* {
  margin:0px;
  padding:0px;
  box-sizing:border-box;
}
.navbar {
  position:fixed;
  top:0px;
  left:0px;
  width:100px;
  height:100vh;
  background:#111;
  display:flex;
  flex-direction:column;
}
.navbar .item {
  flex:1;
  text-align:center;
  display:flex;
  justify-content:center;
  flex-direction:column;
}
.navbar .item div.fa {
  font-size:25px;
  color:#eee;
  transition:all 100ms ease;
}
.navbar .item div#label {
  color:#eee;
  position:relative;
  top:5px;
  font-size:16px;
  font-family:"Oswald";
  transition:all 300ms cubic-bezier(0.68,-0.55,0.27,1.55);
  left:-100px;
}
.navbar:hover .item #label {
  left:0px;
}
.navbar:hover .item:nth-child(1) div.fa {
  color:#e65d61;
}
.navbar:hover .item:nth-child(2) div.fa {
  color:#e86def;
}
.navbar:hover .item:nth-child(3) div.fa {
  color:#79e69d;
}
.navbar:hover .item:nth-child(4) div.fa {
  color:#55acee;
}
.navbar:hover .item:nth-child(5) div.fa {
  color:#a67aff;
}
.navbar:hover .item:nth-child(6) div.fa {
  color:#dcd946;
}
    </style>
  </head>
  <body>
  

    <div class="navbar">
  <div class="item">
    <div class="fa fa-user"></div>
    <div id="label">Profile</div>
  </div>
  <div class="item">
    <div class="fa fa-picture-o"></div>
    <div id="label">Photos</div>
  </div>
  <div class="item">
    <div class="fa fa-bell"></div>
    <div id="label">Notifications</div>
  </div>
  <div class="item">
    <div class="fa fa-wrench"></div>
    <div id="label">Setting</div>
  </div>
  <div class="item">
    <div class="fa fa-search"></div>
    <div id="label">Search</div>
  </div>
  <div class="item">
    <div class="fa fa-power-off"></div>
    <div id="label">Logout</div>
  </div>

</div>


<div class="container">
	<div class="basic-example">
  <div class="links">
    <p><a href="#one">Try</a></p>
    <p><a href="#two">Clicking</a></p>
    <p><a href="#three">These</a></p>
  </div>
  <div class="text">
    <p id="one">This is paragraph one</p>
    <p id="two">This is paragraph two</p>
    <p id="three">This is paragraph three</p>
  </div>
</div>

<div class="portfolio">
  <div class="portfolio__item">
    <img width="200" height="200" src="../../assets/img/images 444.jpg" alt="" class="portfolio__image">
    <div class="portfolio__desc">
      <h3 class="portfolio__title">This is the title</h3>
      <a href="#portfolio-item-1" class="button" role="button">More info</a>
    </div>
    

  </div>
  <div class="portfolio__item" id="portfolio">
    <img width="200" height="200" src="../../assets/img/slide-1.jpg" alt="" class="portfolio__image">
    <div class="portfolio__desc">
      <h3 class="portfolio__title">This is the title</h3>
      <a href="#portfolio-item-2" class="button">More info</a>
    </div>
  </div>
  <div class="portfolio__item">
    <img width="200" height="200" src="../../assets/img/slide-2.jpg" alt="" class="portfolio__image">
    <div class="portfolio__desc">
      <h3 class="portfolio__title">This is the title</h3>
      <a href="#portfolio-item-3" class="button">More info</a>
    </div>
  </div>
</div>

<div class="portfolio-lightbox" id="portfolio-item-1">
  <div class="portfolio-lightbox__content">
  <a href="#portfolio" class="close"></a> 
  <img class="portfolio-lightbox__image" width="200" height="200" src="../../assets/img/images 444.jpg" alt="">
  <h3 class="portfolio__title">This is the title</h3>
  <p class="portfolio__body">This would be a description of the portfolio item</p>
  </div>
</div> 

<div class="portfolio-lightbox" id="portfolio-item-2">
  <div class="portfolio-lightbox__content">
    <a href="#portfolio" class="close"></a>
    <img class="portfolio-lightbox__image" width="200" height="200" src="../../assets/img/slide-1.jpg" alt="dsf">
    <h3 class="portfolio__title">This is the title</h3>
    <p class="portfolio__body">This would be a description of the portfolio item</p>
  </div>
</div> 

<div class="portfolio-lightbox" id="portfolio-item-3">
  <div class="portfolio-lightbox__content">
  <a href="#portfolio" class="close"></a>
  <img class="portfolio-lightbox__image" width="200" height="200" src="../../assets/img/slide-2.jpg" alt="">
  <h3 class="portfolio__title">This is the title</h3>
  <p class="portfolio__body">This would be a description of the portfolio item</p>
  </div>
</div> 

<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Roboto+Condensed:700|Roboto:300,700');
*, *::before, *::after {
  box-sizing: border-box;
}

body {
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
}

.basic-example {
  display: flex;
}

.text p:target { background: red; }


.button {
  display: inline-block;
  text-decoration: none;
  color: white;
  background: limegreen;
  padding: .5em 1.25em;
}

.portfolio {
  display: grid;
  grid: auto / repeat(auto-fit, minmax(15em, 1fr));
  grid-gap: 1em;
  background: #333;
  padding: 7em 4em;
}

.portfolio__item {
  position: relative;
  flex-basis: 30%;
  margin: 0;
  padding: 0;
  background: white;
}

.portfolio__desc {
  padding: 1.5em;
}

.portfolio__title {
  font-family: 'Roboto Condensed', sans-srif;
  font-size: 1.5em;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-top: 0;
}

.portfolio__image,
.portfolio-lightbox__image{
  width: 100%;
  display: block;
}

.portfolio-lightbox {
  display: flex;
  align-items: center;
  justify-content: center;
  transform: scale(0,1); 
  transition: transform 150ms ease-in-out;
  transform-origin: right; 
  padding: 2em;
  position: fixed;
  top: 0;
  left: 0;
  color: white;
  background: rgba(0, 0, 0, .5);
   /*box-shadow: 0 0 0 100vmax rgba(0, 0, 0, .25);*/
  width: 100vw;
  height: 100vh;
  z-index: 10;
}

.portfolio-lightbox:target {
  transform: scale(1,1);
  transform-origin: left; 

}

.portfolio-lightbox__content {
  width: 75%;
  padding: 1em;
  background: black;
  position: relative;
}

.portfolio__lightbox__image { margin-bottom: 1em; }

.close {
  position: absolute;
  right: -1em;
  top: -1em;
  border: white 2px solid;
  display: flex;
  width: 2em;
  height: 2em;
  background: red;
  border-radius: 50%;
  align-items: center;
  justify-content: center;
  text-decoration: none;
}

.close::after {
  content: 'x';
  color: white;
}
</style>

</div>

<div class="container">
	<div class="gallery">
		<a href="../../assets/img/slide-1.jpg" data-lightbox="mygallery" data-title="DEO, Thakurgaon"><img src="../../assets/img/slide-1.jpg" class="img-thumbnail"></a>
		<a href="../../assets/img/slide-2.jpg" data-lightbox="mygallery" data-title="DEO, Thakurgaon"><img src="../../assets/img/slide-2.jpg" class="img-thumbnail"></a>
		<a href="../../assets/img/slide-1.jpg" data-lightbox="mygallery" data-title="DEO, Thakurgaon"><img src="../../assets/img/slide-1.jpg" class="img-thumbnail"></a>
		<a href="../../assets/img/slide-2.jpg" data-lightbox="mygallery" data-title="DEO, Thakurgaon"><img src="../../assets/img/slide-2.jpg" class="img-thumbnail"></a>
		<a href="../../assets/img/slide-1.jpg" data-lightbox="mygallery" data-title="DEO, Thakurgaon"><img src="../../assets/img/slide-1.jpg" class="img-thumbnail"></a>
		<a href="../../assets/img/slide-2.jpg" data-lightbox="mygallery" data-title="DEO, Thakurgaon"><img src="../../assets/img/slide-2.jpg" class="img-thumbnail"></a>
	</div>
	<link rel="stylesheet" type="text/css" href="../../assets/css/lightbox/lightbox.min.css">
	<style type="text/css">
		.gallery{
			margin: 10px 50px;
		}
		.gallery img{
			transition: 1s;
			padding: 15px;
			width: 200px;height: 200px;
		}
		.gallery img:hover{
			filter: grayscale(100%);
			transform: scale(1.1);
		}
	</style>
	<script type="text/javascript" src="../../assets/js/lightbox/lightbox-plus-jquery.min.js"></script>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>