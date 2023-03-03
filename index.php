<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="stylee.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />



    <title>Hello, world!</title>
</head>

<body>
    <div class="banner">
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
                    <!-- <a class="nav-item nav-link" href="inspiration.php">Inspiration</a> -->
                </div>
            </div>
            <div class="form-inline">


                <a href="signup.php"><button style="color:black" class="btn btn-outline" type="submit"><i
                            class="fas fa-user"></i>Sign Up</button></a>
                <a href="login.php"><button style="color:black" class="btn btn-outline" type="submit"><i
                            class="fas fa-sign-in"></i>Log In</button></a>
            </div>
        </nav>

        <video height="1390" src="Pictures\background vid.mp4" muted autoplay loop id="mainvideo"></video>
        <div class="content">
            <div class="heading">
                <h1>Your Journey Begins</h1>
                <p>
                    We are committed to making exploring the continent incredibly easy
                    for our customers, <br />
                    with our carefully curated Africa travel experiences, specially
                    designed with party goers, sun chasers, <br />
                    and culture enthusiasts in mind.
                </p>
                <br> <br> <br> <br> <br>


            </div>
            <div class="boxer">
                <form method="POST" action="trials.php">
                    <input style=" color: black;" type="text" name="search"
                        placeholder="Search for a place or activity">
                    <input type="submit" name="submit">
                </form>


            </div>

        </div>
    </div>
    <h2
        style=" text-align: center; font-family: 'Noto Serif', serif;  font-size: 41px; margin-top: 75px; margin-bottom: 20px; text-align: center;">
        Why choose ADTravel&Tour?</h2>
    <div class="row">
        <div class="column" style="margin-left: 1%;">
            <h2>Flexibility</h2>
            <p style="font-size: 17px;">There are free cancellation and payment optionsto satisfy any plan or budget</p>
        </div>
        <div class="column" style="margin: 0.5%;">
            <h2>Free Consultation</h2>
            <p style="font-size: 17px;">We advise our customers of country laws (especially those pertaining to
                travelers), the weather, food, economization. upcoming events they can attend, tourist sites they can
                visit, based on their interests, and everything else they need to know during their stay. </p>
        </div>
        <div class="column" style="margin: 0.5%;">
            <h2>Quality at our core</h2>
            <p style="font-size: 17px;">High quality standards. Millions of reviews. </p>
        </div>
    </div>

    <div class="container">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">

                    <img src="Pictures/car.jpg" alt="Los Angeles"
                        style="height:100%; width: 100%;  filter: brightness(45%);">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 style="font-size: 250%; font-weight:bolder;">Group Expeditions</h5>
                        <!-- <h5>More than you could ever do or see on your own</h5> -->
                        <p style="font-size: 120%; font-weight:bold;">Join a set itinerary led by experienced travel
                            experts <br> as you explore diverse destinations with like-minded travelers aboard the
                            exclusive jets.
                        </p>

                    </div>

                </div>


                <div class="item">
                    <img src="Pictures/alone.jpg" alt="Chicago" style="width:150%;   filter: brightness(70%);">
                    <div class="carousel-caption d-none d-md-block">
                        <h4 style="font-weight:bolder; font-size: 250%; ">Your Dates. Your Destinations. <br> Our
                            Planning and Expertise</h4>
                        <p style="font-weight:bold; font-size: 120%; ">Your one-stop resource for all-encompassing
                            personalized trips <br> for you and your companions to anywhere you want to go using private
                            or commercial air.
                        </p>
                    </div>
                </div>


            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>



    <section class="footer">


        <div class="box-container">


            <div class="box">
                <h3>Quick Links</h3>
                <a href="indextt.html"> <i class="fas fa-home"></i> Home</a>
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
    <script src="search.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"></script>
</body>

</html>




<?php


// Create connection
$con = new PDO("mysql:host=localhost;dbname=kars",'root','');
// $con = new PDO("mysql:host=localhost;dbname=CodeFlix",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `activity` WHERE ac_name = '$str' ");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
<br><br><br>
<table>
    <tr>
        <th>Name</th>
        <th>Description</th>
    </tr>
    <tr>
        <td><?php echo $row->Name; ?></td>
        <td><?php echo $row->Description;?></td>
    </tr>

</table>
<?php 
	}
		
		
		else{
			echo "Name Does not exist";
		}


}

?>