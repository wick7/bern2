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

    <link href="css/scrolling-nav.css" rel="stylesheet">
</head>

<!-- Uses a transparent header that draws on top of the layout's background -->
<style>
    .material-icons {
        margin-top: .8rem;
        color: black;
    }

    .nav-text {
        color: black;
    }

    .nav-text a {
        color: black;
    }

    /* .page-section-two {
    height: 95vh;
    background-color: white;
} */

    .jgs_section-two h1 {
        color: black;
    }

    .jgs_section-one {
        height: 100%;
        padding: 4rem 4rem 4rem 4rem;
    }

    .jgs_header {}

    .jgs_title {}

    .jgs_title h1 {
        color: black;
    }

    .mdl-cell {
        height: 20rem;
    }

    .jgs--1 {
        background-image: url('https://images.pexels.com/photos/774448/pexels-photo-774448.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        background-size: cover;
    }

    .jgs--2 {
        background-image: url('https://images.pexels.com/photos/1010519/pexels-photo-1010519.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        background-size: cover;
        background-position-y: 40%;
    }

    .jgs--3 {
        background-image: url('https://images.pexels.com/photos/163084/typewriter-vintage-old-vintage-typewriter-163084.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        background-size: cover;
        background-position-y: 40%;
    }

    .jgs--4 {
        background-image: url('https://images.pexels.com/photos/210528/pexels-photo-210528.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        background-size: cover;
    }

    .jgs--5 {
        background-image: url('https://images.pexels.com/photos/47319/phone-dial-old-arrangement-47319.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        background-size: cover;
    }

    .jgs--6 {
        background-image: url('https://images.pexels.com/photos/821757/pexels-photo-821757.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        background-size: cover;
        background-position-x: 90%;
    }

    .jgs--7 {
        background-image: url('https://images.pexels.com/photos/1078057/pexels-photo-1078057.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        background-size: cover;
        background-position-x: 30%;
    }

    .jgs--8 {
        background-image: url('https://images.pexels.com/photos/331988/pexels-photo-331988.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        background-size: cover;
    }

    .jgs--9 {
        background-image: url('https://images.pexels.com/photos/1095602/pexels-photo-1095602.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        background-size: cover;
    }

    .jgs--10 {
        background-image: url('https://images.pexels.com/photos/952594/pexels-photo-952594.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        background-size: cover;
    }

    .jgs--11 {
        background-image: url('https://images.pexels.com/photos/775414/pexels-photo-775414.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        background-size: cover;
    }

    .jgs--12 {
        background-image: url('https://images.pexels.com/photos/1084586/pexels-photo-1084586.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        background-size: cover;
        background-position-y: 40%;
    }

    .jgs--13 {
        background-image: url('https://images.pexels.com/photos/205384/pexels-photo-205384.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        background-size: cover;
    }

    .jgs--14 {
        background-image: url('https://images.pexels.com/photos/159613/ghettoblaster-radio-recorder-boombox-old-school-159613.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        background-size: cover;
    }

    .jgs--15 {
        background-image: url('https://images.pexels.com/photos/1134041/pexels-photo-1134041.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        background-size: cover;
    }

    .jgs--16 {
        background-image: url('https://images.pexels.com/photos/242433/pexels-photo-242433.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        background-size: cover;
    }

    .jgs--17 {
        background-image: url('https://images.pexels.com/photos/594388/vinyl-record-player-retro-594388.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
        background-size: cover;
        background-position-x: 40%;
    }



    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 43px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.8);
        /* Black w/ opacity */
    }

    /* Modal Content */

    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 5px;
        border: 1px solid #888;
        width: 85%;
        height: 45rem;

    }

    /* The Close Button */

    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }




    @media screen and (max-width: 600px) {
        .modal-content {
            width: 88%;
            height: 35rem;
            background-position: center;
        }
    }
</style>

<body>

    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">


        @include('partials._nav')


        <main class="mdl-layout__content">
            <div class="page-content">
                <div class="jgs_section-one">
                    <div class="jgs_header">
                        <div class="jgs_title">
                            <h1>JUST GREAT STUFF</h1>
                        </div>
                    </div>
                    <div class="mdl-grid mdl-grid--no-spacing">
                        <div class="jgs--1 mdl-cell mdl-cell--2-col"></div>
                        <div class="jgs--2 mdl-cell mdl-cell--2-col"></div>
                        <div class="jgs--3 mdl-cell mdl-cell--4-col"></div>
                        <div class="jgs--4 mdl-cell mdl-cell--4-col mdl-cell--4-col-phone mdl-cell--8-col-tablet"></div>
                    </div>
                    <div class="mdl-grid mdl-grid--no-spacing">
                        <div class="jgs--5 mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet"></div>
                        <div class="jgs--6 mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet"></div>
                        <div class="jgs--7 mdl-cell mdl-cell--2-col mdl-cell--4-col-phone"></div>
                    </div>
                    <div class="mdl-grid mdl-grid--no-spacing">
                        <div class="jgs--8 mdl-cell mdl-cell--4-col"></div>
                        <div class="jgs--9 mdl-cell mdl-cell--4-col"></div>
                        <div class="jgs--10 mdl-cell mdl-cell--2-col mdl-cell--4-col-phone mdl-cell--8-col-tablet"></div>
                        <div class="jgs--11 mdl-cell mdl-cell--2-col mdl-cell--4-col-phone mdl-cell--8-col-tablet"></div>
                    </div>
                    <div class="mdl-grid mdl-grid--no-spacing">
                        <div class="jgs--12 mdl-cell mdl-cell--6-col mdl-cell--4-col-phone mdl-cell--4-col-tablet"></div>
                        <div class="jgs--13 mdl-cell mdl-cell--4-col"></div>
                        <div class="jgs--14 mdl-cell mdl-cell--2-col mdl-cell--4-col-phone mdl-cell--8-col-tablet"></div>
                    </div>
                    <div class="mdl-grid mdl-grid--no-spacing">
                        <div class="jgs--15 mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet"></div>
                        <div class="jgs--16 mdl-cell mdl-cell--4-col mdl-cell--6-col-tablet"></div>
                        <div class="jgs--17 mdl-cell mdl-cell--2-col mdl-cell--4-col-phone"></div>
                    </div>
                </div>
                <div class="page-section-two">
                </div>
            </div>

            <div id="myModal" class="modal">

                <!-- Modal content -->
                <div class="modal-content">
                    <span class="close">&times;</span>
                </div>

            </div>

        </main>
    </div>

    <script>
        var modal = document.getElementById('myModal');

        // Get the button that opens the modal
        // var btn = document.getElementById("myBtn");

        var modalContent = document.getElementsByClassName("modal-content")[0];

        var btn = document.getElementsByClassName("mdl-cell");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        for (var i = 0; i < btn.length; i++) {
            // console.log(btn[i].classList)
            var listing = btn[i].classList;
            console.log(listing[0])
            btn[i].onclick = function (i) {
                console.log(i.srcElement.classList[0]);
                var current = i.srcElement.classList[0];
                modal.style.display = "block";
                modalContent.classList.add(current);
            }
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
            console.log(modalContent.classList)
            var rid = modalContent.classList[1];
            modalContent.classList.remove(rid)

        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal) {
                modal.style.display = "none";
                console.log(modalContent.classList)
                var rid = modalContent.classList[1];
                modalContent.classList.remove(rid)
            }
        }
    </script>

</body>

</html>