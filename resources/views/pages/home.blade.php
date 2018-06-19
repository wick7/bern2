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
    /* SECTION ONE (1) */

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
        font-size: 8rem;
        font-weight: 500;
        font-family: 'Bevan', cursive; !important 
        color: white;
        animation-name: moveInRight;
        animation-duration: 1s;
        animation-timing-function: ease-out;
    }


    .sec-one__title--sub {
        font-size: 4rem;
        font-weight: 300;
        color: white;
        animation-name: moveInUp;
        animation-duration: 1s;
        animation-timing-function: ease-out;
    }

    /* SECTION TWO (2) */

    .sec-two {
        /* height: 95vh; */
        padding: 1rem;
        background-color: white;
    }

    .sec-two__title {
        color: black;
        text-align: center;
        font-family: 'Bevan', cursive;
         !important font-size: 15rem;
        font-weight: 500;
    }

    /* SECTION THREE (3) */

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
        font-size: 10rem;
        font-weight: 500;
        font-family: 'Bevan', cursive; !important
    }

    .sec-three__text-con {

        position: relative;
        top: 35rem;
        opacity: 0;
    }

    .sec-three__text {
        font-family: 'Bevan', cursive; !important 
        font-size: 15rem;
        font-weight: 500;
        color: white;
        text-align: center;
    }


    /* SECTION FOUR (4) */

    .sec__four {
        height: 95vh;
        background-color: white;
    }

    .sec__four--title {
        text-align: center;
        font-size: 7rem;
        font-weight: 500;
        font-family: 'Bevan', cursive; !important
    }

    .sec__four--text {
        padding: 4rem;
        text-align: center;
        font-size: 2rem;
        font-weight: 500;
        font-family: 'Bevan', cursive; !important
    }

    .mdl-list__item--three-line {
        animation-name: ;
        animation-duration: 1s;
        animation-timing-function: ease-out;
    }


    /* MEDIA QUERIES */

    @media screen and (max-width: 600px) {

        /* SECTION ONE (1) */
        .sec-one__title--main {
            font-size: 3.5rem;
            font-weight: 300;
        }

        .sec-one__title--sub {
            font-size: 1.5rem;
            font-weight: 200;
        }

        /* SECTION TWO (2)*/
        .sec-two--title {
            font-size: 3.5rem;
            font-weight: 300;
        }

        /* SECTION THREE (3)*/
        .sec-three__title-con {

            left: 1.7rem;
        }

        .sec-three__title-con--title {
            font-size: 4rem;
        }

        .sec-three__text-con {
            position: relative;
            top: 5rem;
            width: 90vw;
            opacity: 0;
            transition: .8s ease-in;
        }
        .sec-three__text {
            font-size: 1.4rem;
            font-weight: 230;
        }

        .sec-three__grid {
           
        }

        /* SECTION FOUR (4)*/
        .sec__four {
            height: auto;
            background-color: white;
        }

        .sec__four--title {
            font-size: 4rem;
        }

        .sec__four--text {
            font-size: 1.4rem;
            font-weight: 300;
        }

    }

    /* ANIMATION - CLASSES*/

    .slideUp {
        width: 55rem;
        position: relative;
        top: 9rem;
        left: 25rem;
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


    .demo-card-wide.mdl-card {
  width: 512px;
}
.demo-card-wide > .mdl-card__title {
  color: #fff;
  height: 176px;
  background: url('../assets/demos/welcome_card.jpg') center / cover;
}
.demo-card-wide > .mdl-card__menu {
  color: #fff;
}
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
                        <h1 class="sec-one__title--main" style="color:white;">BERNALESE</h1>
                        <h3 class="sec-one__title--sub">...do you speak it?</h3>
                    </div>
                </div>

                <!-- SECTION TWO (2) ABOUT (CHARACTER FOR YOUR HOME) -->

                <div id="about" class="sec-two">
                    <div class="mdl-grid mdl-grid--no-spacing">
                        <div class="mdl-cell mdl-cell--12-col">
                            <h1 class="sec-two__title">Character For Your Home</h1>
                        </div>
                    </div>
                    <div class="mdl-grid">
                        <!-- <div class="mdl-cell mdl-cell--2-col mdl-cell--1-col-phone"></div> -->
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
                        <!-- <div class="mdl-cell mdl-cell--2-col mdl-cell--1-col-phone"></div> -->
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
                    
                    <div class="sec-three__grid">
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
                    </div>
                        
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
                </div>

                <!-- FOOTER -->

                <footer class="mdl-mini-footer">
                    <div class="mdl-mini-footer__left-section">
                        <div class="mdl-logo">
                            <span class="copyright" style="color:white;">Bernalese&trade;</span>
                        </div>
                        <ul class="mdl-mini-footer__link-list">
                            <li>
                                <a href="#">Help</a>
                            </li>
                            <li>
                                <a href="#">Privacy & Terms</a>
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
            var x = elmnt.scrollLeft;
            var y = elmnt.scrollTop;
            var currentWidth = window.innerWidth;
            console.log(y)
            console.log(window.innerWidth)
            if (y > 1225 && currentWidth > 376) {
                console.log('classadded')
                antique.classList.add('slideUp');
                antique.style.opacity = '1';
            } else if (y > 1225 && currentWidth <= 375) {
                antique.classList.add('slideUpMob');
                antique.style.opacity = '1';
            }
        }
    </script>

</body>


</html>
