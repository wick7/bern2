<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A portfolio template that uses Material Design Lite.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>MDL-Static Website</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="css/styles.css" />

    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Fascinate" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed|Bevan" rel="stylesheet">

    <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>


</head>

<!-- Uses a transparent header that draws on top of the layout's background -->
<style>
    /* SECTION ONE (1) HEADER */

    .sec-one {
        height: 100vh;
        background-image: url('https://images.pexels.com/photos/929245/pexels-photo-929245.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
    }

    .sec-one__title {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        width: 100%;
    }

    .sec-one__title--main {
        position: relative;
        top: -20rem;
        font-size: 6.5rem;
        font-weight: 200;
        font-family: 'Bevan', cursive; !important 
        color: white;
        animation-name: moveInRight;
        animation-duration: 1s;
        animation-timing-function: ease-out;
    }


    .sec-one__title--sub {
        position: relative;
        top: -20rem;
        font-size: 3.5rem;
        font-weight: 200;
        color: white;
        animation-name: moveInUp;
        animation-duration: 1s;
        animation-timing-function: ease-out;
    }

    .logo-main {
        
        background-color: ;
        height: 47rem;
        width: 47rem;
        position: relative;
        top: 2rem;
        left: 1rem;
        animation-name: moveInLeft;
        animation-duration: 1s;
        animation-timing-function: ease-out;
    }

    /* SECTION TWO (2) CHARACTER SECTION & MAP */

    .sec-two {
        /* height: 95vh; */
        padding: 1rem;
        background-color: white;
    }

    .sec-two__con {
        height: 6.5rem;
    }

    .sec-two__title {
        color: black;
        text-align: center;
        font-family: 'Bevan', cursive;
         !important 
         font-size: 6rem;
        font-weight: 200;
    }

    .card {
        position: relative;
        height: 30rem;
        padding: 3.5rem 2rem 2rem 2rem; 
    }

    .card__info {
        border: 1px solid black;
        height: 25rem;
        width: 100%;
        opacity: 0;
        transition: all .9s ease-in;
    }

    .card__icon {
        
        transform: scale(1.8);
        position: absolute;
        top: 28px;
        left: 45%; 
    }

    .card__text {
        padding-top: 3rem;
        text-align: center;
        font-size: 1rem;
        font-weight: 100;
        font-family: 'Bevan', cursive; !important
    }

    /* MAP */

     #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
    }


    .location__addy  {
        text-align: center;
    }

    

    /* SECTION THREE (3) ANTIQUES */

    .sec-three {
        display: block;
        padding-top: .5rem;
        height: 80rem;
        background-size: 60%;
        background-position: center;
        background-repeat: no-repeat;

        background: linear-gradient( rgba(252, 251, 251, 0.45),
        rgba(219, 209, 209, 0.5)),
        url('https://images.pexels.com/photos/774448/pexels-photo-774448.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
    }

    .sec-three__title-con {
        position: relative;
        top: .5rem;
        left: 10rem;
        transform: rotate(-10deg);
    }

    .sec-three__title-con--title {
        font-size: 8rem;
        font-weight: 270;
        font-family: 'Bevan', cursive; !important
    }

    .sec-three__text-con {
        position: relative;
        top: 9rem;
        left: 5rem;
        width: 90vw;
        opacity: 0;
    }

    .sec-three__text {
        font-family: 'Bevan', cursive; !important 
        font-size: 2rem;
        font-weight: 300;
        color: white;
        text-align: center;
        letter-spacing: 2px;
    }


    /* SECTION FOUR (4) HOMEWARE */

    .sec__four {
        padding: 2rem 5rem 5rem 5rem;
        height: auto;
        background-color: white;
    }

    .sec__four--title {
        text-align: center;
        font-size: 7rem;
        font-weight: 200;
        font-family: 'Bevan', cursive; !important
    }

    .sec__four--text {
        padding: 1rem 2rem 2rem 2rem;
        text-align: center;
        font-size: 2rem;
        font-weight: 200;
        font-family: 'Bevan', cursive; !important
        letter-spacing: 1px;
        word-spacing: 5px;
    }

    .mdl-list__item--three-line {
        animation-name: ;
        animation-duration: 1s;
        animation-timing-function: ease-out;
    }

    .lay {
    position: relative;
    text-align: center;
    height: 14rem;
}

    .overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: auto;
    opacity: 0;
    transition: .5s ease;
    background: rgba(255, 255, 255, .75);
    }

    .overlay_text {
        margin-top: 6rem;
        font-family: 'Bevan', cursive; !important 
        font-size: 36px;
        font-weight: 200;
    }

    .lay:hover .overlay {
    opacity: 1;
    }

    .homeware_img {
        height: 100%;
        width: 100%;
    }


    /* MEDIA QUERIES */

    @media screen and (max-width: 600px) {
         /* SECTION ONE (1) */
        

        .sec-one__title--main {
        position: relative;
        top: -8rem;
        font-size: 3rem;
            font-weight: 300;
    }


    .sec-one__title--sub {
        position: relative;
        top: -9rem;
    }

        .logo-main {
        height: 21rem;
        width: 21rem;
        position: relative;
        top: 2rem;
        left: .5rem;
    }

         /* SECTION TWO (2)*/
         .sec-two--title {
            font-size: 3rem;
            font-weight: 300;
        }

         /* SECTION THREE (3)*/
         .sec-three__title-con {

            left: 3rem;
        }

        .sec-three__title-con--title {
            font-size: 4rem;
        }

        .sec-three__text-con {
            position: relative;
            top: 5rem;
            right: 5rem;
            width: 90vw;
            opacity: 0;
            transition: .8s ease-in;
        }
        .sec-three__text {
            font-size: 1rem;
            font-weight: 200;
            letter-spacing: 1px;
            word-spacing: 5px;
        }

        /* SECTION FOUR (4)*/

        
    }

    @media screen and (max-width: 800px) {

        /* SECTION ONE (1) */
        .sec-one__title--main {
            font-size: 3rem;
            font-weight: 300;
        }

        .sec-one__title--sub {
            font-size: 1.5rem;
            font-weight: 200;
        }

        /* SECTION TWO (2)*/
        .sec-two--title {
            font-size: 3rem;
            font-weight: 300;
        }

        .cards {
            padding-top: 10rem;
        }

        /* SECTION THREE (3)*/
        .sec-three__title-con {

            left: 3rem;
        }

        .sec-three__title-con--title {
            font-size: 4rem;
        }

        .sec-three__text-con {
            position: relative;
            top: 5rem;
            left: 2rem;
            width: 90vw;
            opacity: 0;
            transition: .8s ease-in;
        }
        .sec-three__text {
            font-size: 1rem;
            font-weight: 200;
            letter-spacing: 2px;
        }

        .sec-three__grid {
           
        }

        /* SECTION FOUR (4)*/
        .sec__four {
            padding: 2rem 1rem 5rem 1rem;
            height: auto;
            background-color: white;
        }

        .sec__four--title {
            font-size: 2.5rem;
        }

        .sec__four--text {
            padding: 0;
            font-size: 1rem;
            font-weight: 200;
            letter-spacing: 2px;
        }

        /* .lay {
            height: 58rem;
        } */

    }

    /* ANIMATION - CLASSES*/

    .slideUp {
        /* width: 55rem;
        position: relative;
        top: 9rem;
        left: 25rem; */
        animation-name: moveInUp;
        animation-duration: .6s;
        animation-timing-function: ease-in;
    }

    .slideUpMob {
        animation-name: moveInUp;
        animation-duration: .6s;
        animation-timing-function: ease-in;
    }

    /* ANIMATION - KEY FRAMES*/

    @keyframes moveInLeft {
        0% {
            opacity: 0;
            transform: translateX(-10rem);
        }

        80% {
            opacity: .5;
            transform: translateX(1rem);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes moveInRight {
        0% {
            opacity: 0;
            transform: translateX(10rem);
        }

        80% {
            opacity: .5;
            transform: translateX(-1rem);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes moveInUp {
        0% {
            opacity: 0;
            transform: translateY(10rem);
        }

        80% {
            opacity: .5;
            transform: translateY(-1rem);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes noFade {
        0% {
            opacity: 0;
        }
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
        }

        40% {
            opacity: .3;
        }

        60% {
            opacity: .5;
        }

        80% {
            opacity: .8;
        }

        100% {
            opacity: 1;
        }
    }


    /* .demo-card-wide.mdl-card {
  width: 512px;
}
.demo-card-wide > .mdl-card__title {
  color: #fff;
  height: 176px;
  background: url('../assets/demos/welcome_card.jpg') center / cover;
}
.demo-card-wide > .mdl-card__menu {
  color: #fff;
} */











</style>

<body>

    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">


        @include('partials._nav')


        <main onscroll="scroller()" id="main" class="mdl-layout__content">
            <div class="page-content">

                <!-- SECTION ONE (1) HEADER -->

                <div id="header" class="sec-one">
                    <div class="sec-one__title">
                            <span class="sec-one__logo-con" ><img class="logo-main" src="/images/bern_logo-main.svg" alt="logo"></span>
                        <h1 class="sec-one__title--main" style="color:white;">BERNALESE</h1>
                        <h3 class="sec-one__title--sub">...do you speak it?</h3>
                    </div>
                </div>

                <!-- SECTION TWO (2) ABOUT (CHARACTER FOR YOUR HOME) -->

                <div id="about" class="sec-two">
                    <div class="sec-two__con mdl-grid mdl-grid--no-spacing">
                        <div class="mdl-cell mdl-cell--12-col">
                            <h1 class="sec-two__title">Character For Your Home</h1>
                        </div>
                    </div>
                    
                    <div class="cards mdl-grid">
                        <div class="mdl-cell mdl-cell--4-col">
                                <div class="card">
                                        
                                        <div class="card__info">
                                                <i style="background-color: #16511f;" class="card__icon material-icons mdl-list__item-avatar">home</i>
                                                <h4 class="card__text">
                                                        "Bernalese" is a retail concept which builds upon the eclectic notion that many aspects of collecting and acquiring are melded together to create a home.
                                                </h4>
                                        </div>
                                    </div>
                        </div>
                        <div class="mdl-cell mdl-cell--4-col">
                                <div class="card">
                                        <div class="card__info">
                                                <i style="background-color: #16511f;" class="card__icon material-icons mdl-list__item-avatar">flag</i>
                                                <h4 class="card__text">
                                                        Our flag ship retail store is located in the heart of Bernal Heights in San Francisco, California! A vast array of antique and contemporary items will be available exclusively in-store for purchase. 
                                                </h4>
                                        </div>
                                    </div>
                        </div>
                        <div class="mdl-cell mdl-cell--4-col">
                                <div class="card">
                                        <div class="card__info">
                                                <i style="background-color: #16511f;" class="card__icon material-icons mdl-list__item-avatar">shopping_cart</i>
                                                <h4 class="card__text">
                                                        A small curated assortment of vintage and world-craft items are available for purchase on <a href="http://www.ebay.com/usr/bernalese_sf" target="_blank" style="text-decoration: underline; cursor: pointer; color:black">eBay</a>.
                                                </h4>
                                        </div>
                                    </div>
                        </div>
                    </div>

                    <div class="location mdl-grid">
                        <div class="location__map mdl-cell--order-2-phone mdl-cell--order-2-tablet mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                                <div id="map"></div>
                        </div>
                        <div class="location__addy mdl-cell--order-1-phone mdl-cell--order-1-tablet mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet mdl-cell--4-col-phone">
                            <h1 class="location__addy--title">Grand Opening July 14th!</h1>
                            <h3 class="location__addy--main">307 Cortland Ave</h3>
                            <h3 class="location__addy--sub">San Francisco, CA 94110</h3>
                        </div>
                    </div>
                </div>


                <!-- SECTION THREE (3) ANTIQUES -->

                <div class="sec-three">
                    <div class="sec-three__title-con">
                        <h1 id="title--three" class="sec-three__title-con--title" style="color: white;">Antiques</h1>
                    </div>
                    <div class="sec-three__text-con">
                        <h4 class="sec-three__text">Antique...of or belonging to the past. Vintage, collectible, the ultimate recyclable. Whether it
                            is the cookie jar that rested on your grandmother's kitchen counter; the mid-century coffee table;
                            or the Victorian candlestick; these items are what make a house a home. They speak of personality,
                            history and aesthetic, combining to give your home that special character.</h4>
                    </div>

                    
                    
                    <!-- <div class="sec-three__grid">
                        <div class="mdl-cell mdl-cell--6-col">
                            <div class="demo-card-square mdl-card mdl-shadow--2dp">
                                <div class="mdl-card__title mdl-card--expand">
                                    <h2 class="mdl-card__title-text">Update</h2>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenan convallis.
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                        View Updates
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="mdl-cell mdl-cell--6-col">
                            <div class="demo-card-square mdl-card mdl-shadow--2dp">
                                <div class="mdl-card__title mdl-card--expand">
                                    <h2 class="mdl-card__title-text">Update</h2>
                                </div>
                                <div class="mdl-card__supporting-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenan convallis.
                                </div>
                                <div class="mdl-card__actions mdl-card--border">
                                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
                                        View Updates
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                        
                </div>

                <!-- SECTION FOUR (4) -->

                <div class="sec__four">
                    <h1 class="sec__four--title">Homeware</h1>
                    <h4 class="sec__four--text">
                        Not just a houseware with utility, but an item that supports its function with style, simplicity of purpose, and a bit of
                        craft & creativity. A "homeware". Maybe it is locally produced or coming from afar, but it carries
                        a special quality that contributes to making your house your home. These items fold gently into the
                        fabric and character of our daily lives.
                    </h4>
                    <div id="overlay_grid" class="mdl-grid">
                        <div class="lay mdl-cell mdl-cell--4-col">
                                <img class="homeware_img" src="/images/h1.PNG" />
                            <div class="overlay">
                                <h4 class="overlay_text">Kitchen Utility</h4>
                            </div>
                        </div>
                        <div class="lay mdl-cell mdl-cell--4-col ">
                                <img class="homeware_img" src="/images/h2.jpg" />
                                <div class="overlay">
                                        <h4 class="overlay_text">Dining Ware</h4>
                                        </div>
                        </div>
                        <div class="lay mdl-cell mdl-cell--4-col">
                                <img class="homeware_img" src="/images/h3.jpg" />
                                <div class="overlay">
                                        <h4 class="overlay_text">Cooking & Baking</h4></div>
                        </div>
                        <div class="lay mdl-cell mdl-cell--4-col">
                                <img class="homeware_img" src="/images/h4.jpg" />
                                <div class="overlay">
                                        <h4 class="overlay_text">Decorative</h4></div>
                        </div>
                        <div class="lay mdl-cell mdl-cell--4-col ">
                                <img class="homeware_img" src="/images/h5.JPG" />
                                <div class="overlay">
                                        <h4 class="overlay_text">Serving</h4></div>
                        </div>
                        <div class="lay mdl-cell mdl-cell--4-col">
                                <img class="homeware_img" src="/images/h6.JPG" />
                                <div class="overlay">
                                        <h4 class="overlay_text">Household</h4></div>
                        </div>
                    </div>
                </div>

                <!-- FOOTER -->

                <footer class="mdl-mini-footer">
                    <div class="mdl-mini-footer__left-section">
                        <div class="mdl-logo">
                            <span class="copyright" style="color:white;">Bernalese&trade;</span>
                        </div>
                        <ul class="mdl-mini-footer__link-list">
                            <li>
                                <a href="#">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#">Terms of Use</a>
                            </li>
                        </ul>
                    </div>
                </footer>

            </div>


        </main>

        

        <!-- MDL LAYOUT END -->
    </div>

    <!-- JS -->

    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/jquery.easing.min.js"></script>

    <script>

//         function initMap() {
//     // The location of Uluru
//     var uluru = {lat: 37.739322, lng: -122.418283};
//     // The map, centered at Uluru
//     var map = new google.maps.Map(
//         document.getElementById('map'), {zoom: 17, center: uluru});
//     // The marker, positioned at Uluru
//     var marker = new google.maps.Marker({position: uluru, map: map});
    
//   }

function initMap() {
    
        var bern = {lat: 37.739322, lng: -122.418283};
        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: bern,
          zoom: 16,
          styles: [
  {
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#212121"
      }
    ]
  },
  {
    "elementType": "labels.icon",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#212121"
      }
    ]
  },
  {
    "featureType": "administrative",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "administrative.country",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#9e9e9e"
      }
    ]
  },
  {
    "featureType": "administrative.land_parcel",
    "stylers": [
      {
        "visibility": "off"
      }
    ]
  },
  {
    "featureType": "administrative.locality",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#bdbdbd"
      }
    ]
  },
  {
    "featureType": "poi",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#181818"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "poi.park",
    "elementType": "labels.text.stroke",
    "stylers": [
      {
        "color": "#1b1b1b"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "geometry.fill",
    "stylers": [
      {
        "color": "#2c2c2c"
      }
    ]
  },
  {
    "featureType": "road",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#8a8a8a"
      }
    ]
  },
  {
    "featureType": "road.arterial",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#373737"
      }
    ]
  },
  {
    "featureType": "road.highway",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#3c3c3c"
      }
    ]
  },
  {
    "featureType": "road.highway.controlled_access",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#4e4e4e"
      }
    ]
  },
  {
    "featureType": "road.local",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#616161"
      }
    ]
  },
  {
    "featureType": "transit",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#757575"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "geometry",
    "stylers": [
      {
        "color": "#000000"
      }
    ]
  },
  {
    "featureType": "water",
    "elementType": "labels.text.fill",
    "stylers": [
      {
        "color": "#3d3d3d"
      }
    ]
  }
]
        });
        var marker = new google.maps.Marker({position: bern, map: map});
      }
        var myVar = setInterval(setColor, 5000);

        function setColor() {
            console.log('Yay')
        }


        // window.onresize  = function() {
        //     if (window.innerWidth < 525) {
        //         console.log('smaller');
        //         document.getElementById("texter").style.fontSize = "9px";
        //         document.getElementById("sec-three--title").style.fontSize = "10px";
        //         document.getElementsByClassName("sec-three--con").style.left = "0px";
        //         document.getElementsByClassName("section-three--title").style.fontSize = "15px";
        //     } else {
        //         console.log('bigger');
        //         document.getElementById("texter").style.fontSize = "15px";
        //         document.getElementById("sec-three--title").style.fontSize = "95px";
        //         document.getElementsByClassName("section-three--title").style.fontSize = "95px";
        //     }
        // }

        function scroller() {
            var elmnt = document.getElementById("main");
            var title = document.getElementById('title--two');
            var row = document.getElementById('sec-row')
            var info = document.getElementsByClassName('mdl-list__item--three-line');
            var antique = document.getElementsByClassName('sec-three__text-con')[0];
            var overlay = elmnt.getElementsByClassName('overlay');
            var cards = document.getElementsByClassName('card__info');

            var overlayTop = overlay.offsetTop;
            var x = elmnt.scrollLeft;
            var y = elmnt.scrollTop;
            var currentWidth = window.innerWidth;


            console.log(currentWidth)
            console.log(y);
            // console.log(window.innerWidth)

            if (y > 1705 && currentWidth >= 1024) {
                console.log('classadded')
                antique.classList.add('slideUp');
                antique.style.opacity = '1';
            } else if (y > 3279 && currentWidth < 415) {
                antique.classList.add('slideUpMob');
                antique.style.opacity = '1';
            }

            

             

            for (var i = 0; i < overlay.length; i++) {
            
                
                if (y >= 4930 && currentWidth < 415 ) {
                    overlay[0].style.opacity = '1';
                } 
                
                if (y >= 5162 && currentWidth < 415) {
                    overlay[1].style.opacity = '1';
                }

                if (y >= 5441 && currentWidth < 415) {
                    overlay[2].style.opacity = '1';
                }

                if (y >= 5652 && currentWidth < 415) {
                    overlay[3].style.opacity = '1';
                }

                if (y >= 5777 && currentWidth < 415) {
                    overlay[4].style.opacity = '1';
                    overlay[5].style.opacity = '1';
                }
        
            }

            for (var iCards = 0; iCards < cards.length; iCards++) {
            
                
            if (y >= 630) {
                cards[iCards].style.opacity = '1';
            } 
    
        }

        }


    </script>

</body>


</html>



      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMzWCudrOv35cgm3HHLyZQ4xsw2Ern3xA&callback=initMap">
      </script>
      





      <!-- <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone">
                <ul id="sec-row" class="mdl-list mdl-list--two">
                    <li class="mdl-list__item mdl-list__item--three-line">
                        <span class="mdl-list__item-primary-content">
                            <i class="material-icons mdl-list__item-avatar">home</i>
                            <span>More Than A House</span>
                            <span class="mdl-list__item-text-body">
                                "Bernalese" is a retail concept in progress which builds upon the eclectic notion that many aspects of collecting and acquiring
                                are melded together to create a home.
                            </span>
                        </span>
                    </li>
                    <li class="mdl-list__item mdl-list__item--three-line">
                        <span class="mdl-list__item-primary-content">
                            <i class="material-icons mdl-list__item-avatar">build</i>
                            <span>In Development</span>
                            <span class="mdl-list__item-text-body">
                                Our flag ship retail store is forthcoming in San Francisco, California - stay tuned! A vast array of antique and contemporary
                                items will be available exclusively in-store for purchase.
                            </span>
                        </span>
                    </li>
                    <li class="mdl-list__item mdl-list__item--three-line">
                        <span class="mdl-list__item-primary-content">
                            <i class="material-icons  mdl-list__item-avatar">shopping_cart</i>
                            <span>Online</span>
                            <span class="mdl-list__item-text-body">
                                A curated assortment of vintage and world-craft items is available for purchase via eBay.
                            </span>
                        </span>
                    </li>
                </ul>
            </div>
        </div> -->