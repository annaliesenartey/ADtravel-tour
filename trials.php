<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="webstyle1.css" class="stylesheet">
    <title>Search Bar using PHP</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="stylee.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />


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
                <!-- <a class="nav-item nav-link" href="cars.php">Vehicles</a> -->
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

    <section class="middle">


        <div class="mid-container">


            <div class="mid">

                <div class="image">
                    <img src="Pictures/cella.jpg" alt="">
                </div>
                <div class="time">
                    <h3>Afrochella-the most anticipated end of year concert <br>

                    </h3>
                    <p> Accra Ghana, Dec 22-24</p>
                    <!-- <a href="book.html" class="book">Book Now</a> -->
                    <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal"
                        data-target="#modalContactForm">Book Now</a>
                </div>
            </div>

            <div class="mid">

                <div class="image">
                    <img src="Pictures/wote.jpg" alt="">
                </div>
                <div class="time">
                    <h3 id="I">Chale Wote


                    </h3>
                    <p>Accra,Ghana Dec 22-24 </p>
                    <a href="" onclick="change()" class="btn btn-default btn-rounded mb-4" data-toggle="modal"
                        data-target="#modalContactForm">Book Now</a>
                </div>
            </div>

            <div class="mid">

                <div class="image">

                    <img src="Pictures/afronn.jpg" alt="">
                </div>
                <div class="time">
                    <h3>Afronation-Most anticipated afro-centric concert <br>

                    </h3>
                    <p> Accra,Ghana Dec 22-24 </p>
                    <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal"
                        data-target="#modalContactForm">Book Now</a>
                </div>
            </div>

            <div class="mid">

                <div class="image">
                    <img src="Pictures/global.jpg" alt="">
                </div>
                <div class="time">
                    <h3> Global Citizen-Africa's biggest global concert<br>


                    </h3>
                    <p>Accra, Ghana Dec 22-24</p>
                    <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal"
                        data-target="#modalContactForm">Book Now</a>
                </div>
            </div>

            <div class="mid">

                <div class="image">
                    <img src="Pictures/party.jpg" alt="">
                </div>
                <div class="time">
                    <h3>Ghana Party in the park-A fun and exciting party for ghanaians and diasporans <br>

                    </h3>
                    <p>Accra Ghana, Dec 22-24</p>
                    <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal"
                        data-target="#modalContactForm">Book Now</a>
                </div>
            </div>



            <div class="mid">

                <div class="image">
                    <img src="Pictures/detty.jpg" alt="">
                </div>
                <div class="time">
                    <h3>Detty Rave-Ghana's liveliest afrobeats concert <br>

                    </h3>
                    <p>Dec 22-24, Accra Ghana</p>
                    <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal"
                        data-target="#modalContactForm">Book Now</a>
                </div>
            </div>








        </div>





        </div>
    </section>
    <script src="search.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"></script>
</body>

</html>

<?php
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "kars";

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