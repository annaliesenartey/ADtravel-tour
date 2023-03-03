<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>Find a Trip</title>
</head>

<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 0; margin: 0;  border: 0;">
        <a class="navbar-brand" href="indextt.html">Travel.</a>
        <button class="navbar-toggler" type="button" style=" width: 100px; " data-toggle="collapse"
            data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="float: right;">
            <div class="navbar-nav">
                <!-- <a class="nav-item nav-link active" href="indextt.html"
              >Travel. <span class="sr-only">(current)</span></a
            > -->
                <a class="nav-item nav-link" href="index.php">Home</a>
                <a class="nav-item nav-link" href="events.php">Events</a>

                <a class="nav-item nav-link" href="Find A Trip.php">Find a Trip</a>
                <a class="nav-item nav-link" href="admina.php">Administration</a>
                <!-- <a class="nav-item nav-link" href="cars.php">Vehicles</a> -->
                <!-- <a class="nav-item nav-link" href="Guest.html">About</a> -->
                <!-- <a class="nav-item nav-link" href="inspiration.php">Inspiration</a> -->
            </div>
        </div>
        <div class="form-inline">


            <a href="signup.html"><button style="color:black" class="btn btn-outline" type="submit"><i
                        class="fas fa-user"></i>Sign Up</button></a>
            <a href="login.html"><button style="color:black" class="btn btn-outline" type="submit"><i
                        class="fas fa-sign-in"></i>Log In</button></a>
        </div>
    </nav>

    <div class="container" style="padding: 0; margin: 0; border: 0;">
        <!-- <img  src="pictures/bulb.jpg.jpg" style = "  background-size:110px; width:150%; height:450px;"> -->
        <img src="Pictures/travel.jpeg"
            style="filter: brightness(21%);  background-size:110px; width:150%; height:250px;">

        <div class="top-content">
            <h1 style="color:rgb(245, 230, 216); text-align: center; ">Your Next Adventure Awaits You</h1>
        </div>
        <a class="btn" href="book.html"> <button style="border-radius: 3px;  ">Travel With Us</button></a>
        <!-- <a class="btn"  href="book.php" ><h1>Travel With Us</h1></a> -->

    </div>

    <section class="packages">

        <h1 class="heading-title">top destinations</h1>

        <div class="box-container">

            <div class="box">

                <div class="image">
                    <img src="Pictures/ghana1.jpg " alt="">
                </div>

                <div class="content">
                    <h3>adventure and tour</h3>
                    <p>TreasureIsland> BridgeView> AquaSafari</p>
                    <a href="book.html" class="btn">book now</a>
                </div>


            </div>


            <div class="box">

                <div class="image">
                    <img src="Pictures/Nkrumah.png " alt="">
                </div>

                <div class="content">
                    <h3>adventure and tour</h3>
                    <p>NkrumahMausoleum> NationalTheatre> Waterpark </p>
                    <a href="book.html" class="btn">book now</a>
                </div>


            </div>

            <div class="box">

                <div class="image">
                    <img src="Pictures/kakum.jpg " alt="">
                </div>

                <div class="content">
                    <h3>adventure and tour</h3>
                    <p>KakumPark AccraZoo WaterPark </p>
                    <a href="book.html" class="btn">book now</a>
                </div>


            </div>

            <div class="box">

                <div class="image">
                    <img src="Pictures/ghana1.jpg " alt="">
                </div>

                <div class="content">
                    <h3>adventure and tour</h3>
                    <p>Accra-treasure-something</p>
                    <a href="book.html" class="btn">book now</a>
                </div>


            </div>

            <div class="box">

                <div class="image">
                    <img src="Pictures/ghana1.jpg " alt="">
                </div>

                <div class="content">
                    <h3>adventure and tour</h3>
                    <p>Accra-treasure-something</p>
                    <a href="book.html" class="btn">book now</a>
                </div>


            </div>

            <div class="box">

                <div class="image">
                    <img src="Pictures/cityview.jpg " alt="">
                </div>

                <div class="content">
                    <h3>adventure and tour</h3>
                    <p>CityView> SafariValley</p>
                    <a href="book.html" class="btn">book now</a>
                </div>


            </div>

            <div class="box">

                <div class="image">
                    <img src="Pictures/polo.jpg " alt="">
                </div>

                <div class="content">
                    <h3>adventure and tour</h3>
                    <p>PoloClub> Movenpick> NumberOne</p>
                    <a href="book.html" class="btn">book now</a>
                </div>


            </div>

            <div class="box">

                <div class="image">
                    <img src="Pictures/castle.jpg " alt="">
                </div>

                <div class="content">
                    <h3>Royal Adventures </h3>
                    <p>ElminaCastle> OsuCastle> CapeCoastCastle </p>
                    <a href="book.html" class="btn">book now</a>
                </div>


            </div>



        </div>

    </section>
    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">Book An Event</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body mx-3">
                    <div class="md-form mb-5">
                        <i class="fas fa-tag prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="form32">Name of Event</label>
                        <input type="text" id="form32" class="form-control validate" value="">

                    </div>
                    <div class="md-form mb-5">
                        <i class="fas fa-user prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="form34">First Name</label>
                        <input type="text" id="form34" class="form-control validate">

                    </div>
                    <div class="md-form mb-5">
                        <i class="fas fa-user prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="form34">Last Name</label>
                        <input type="text" id="form34" class="form-control validate">

                    </div>

                    <div class="md-form mb-5">
                        <i class="fas fa-envelope prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="form29">Your email</label>

                        <input type="email" id="form29" class="form-control validate">
                    </div>

                    <div class="md-form mb-5">
                        <i class="fas fa-phone"></i>
                        <label data-error="wrong" data-success="right" for="form32">Phone</label>
                        <input type="text" id="form32" class="form-control validate">

                    </div>



                    <div class="md-form">
                        <i class="fas fa-pencil prefix grey-text"></i>
                        <label data-error="wrong" data-success="right" for="form8">Any questions or comments</label>
                        <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>

                    </div>



                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button class="btn btn-unique">Submit <i class="fas fa-paper-plane-o ml-1"></i></button>
                </div>
            </div>
        </div>
    </div>


    <form method="POST" action="bookingProc.php">
        <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Book An Event</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <i class="fas fa-tag prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="form32">Name of Event</label>
                            <input type="text" name="eventname" id=" form32" class="form-control validate" value="">

                        </div>
                        <div class="md-form mb-5">
                            <i class="fas fa-user prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="form34">First Name</label>
                            <input type="text" name="fname" id="form34" class="form-control validate">

                        </div>
                        <div class="md-form mb-5">
                            <i class="fas fa-user prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="form34">Last Name</label>
                            <input type="text" name="lname" id="form33" class="form-control validate">

                        </div>

                        <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="form29">Your email</label>

                            <input type="email" name="email" id="form29" class="form-control validate">
                        </div>

                        <div class="md-form mb-5">
                            <i class="fas fa-phone"></i>
                            <label data-error="wrong" data-success="right" for="form32">Phone</label>
                            <input type="text" name="number" id="form32" class="form-control validate">

                        </div>
                        <h4>Book a vehicle?</h4>



                        <input type="radio" name="type" value="Fresher"> No
                        <input type="radio" name="type" value="Experienced"> Yes
                        <br> <br>
                        <div id="textboxes" style="display: none">
                            <div class="md-form mb-5">
                                <label for="cars">Choose a car:</label>
                                <select name="cars" id="cars">
                                    <option value="4x4">4x4</option>
                                    <option value="Sedan">Sedan</option>
                                    <option value="Saloon">Saloon</option>
                                </select>
                            </div>

                            <div class="md-form mb-5">
                                <i class="fas fa-phone"></i>
                                <label data-error="wrong" data-success="right" for="form32">Car type</label>
                                <input type="text" id="form32" class="form-control validate">

                            </div>
                        </div>

                        <br>
                        <div id="textboxes" style="display: none">
                            <div class="md-form mb-5">
                                <i class="fas fa-phone"></i>
                                <label data-error="wrong" data-success="right" for="form32">Car type</label>
                                <input type="text" id="form32" class="form-control validate">

                            </div>
                        </div>


                        <div class="md-form">
                            <i class="fas fa-pencil prefix grey-text"></i>
                            <label data-error="wrong" data-success="right" for="form8">Any questions or comments</label>
                            <textarea type="text" id="form8" class="md-textarea form-control" rows="4"></textarea>

                        </div>



                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-unique" name="submit">Submit <i
                                class="fas fa-paper-plane-o ml-1"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <section class="footer">


        <div class="box-container">


            <div class="box">
                <h3>Quick Links</h3>
                <a href="home.php"> <i class="fas fa-home"></i> Home</a>
                <a href="event.php"><i class="fas fa-calendar"></i>Events</a>
                <a href="trip.php"><i class="fas fa-plane"></i>Find a trip</a>

            </div>

            <div class="box">
                <h3>Contact Us</h3>
                <a href="#"> <i class="fas fa-phone"></i> +233 50 707 88 99</a>
                <a href="#"><i class="fas fa-envelope"></i>info@adda.com</a>
                <a href="#"><i class="fas fa-map"></i>No 71 University Avenue Accra</a>
            </div>

            <div class="box">
                <h3>Follow Along<h3>
                        <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
                        <a href="#"> <i class="fab fa-twitter"></i>twitter</a>
                        <a href="#"> <i class="fab fa-youtube"></i>youtube</a>


            </div>


        </div>
        <h1 style="text-align:center">Enriching Lives Through Travel</h1>



    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>