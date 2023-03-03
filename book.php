<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="book.css" class="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    
    <link  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <title>Book A Trip</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style="padding: 0; margin: 0;  border: 0;">
        <a class="navbar-brand" href="indextt.html">Travel.</a>
        <button
          class="navbar-toggler"
          type="button"
          style=" width: 100px; "
          data-toggle="collapse"
          data-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button >
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="float: right;">
          <div class="navbar-nav">
            <!-- <a class="nav-item nav-link active" href="indextt.html"
              >Travel. <span class="sr-only">(current)</span></a
            > -->
            <a class="nav-item nav-link" href="indextt.html">Home</a>
            <a class="nav-item nav-link" href="events.html">Events</a>

            <a class="nav-item nav-link" href="Find A Trip.html">Find a Trip</a>
            <a class="nav-item nav-link" href="Guest.html">About</a>
            <a class="nav-item nav-link" href="inspiration.php">Inspiration</a>
          </div>
        </div>
      </nav>

    <div>
 
        <div class="heading-1">
            <h1>book now!</h1>
        </div>
        

    <section class="booking">

        <h1 class="heading">book your trip</h1>

        <form action="book_form.php" method="POST" class="book-form">

            <div class="flex">

                <div class="inputBox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">

                </div>

                <div class="inputBox">
                    <span>email :</span>
                    <input type="text" placeholder="enter your email" name="email">

                </div>

                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" placeholder="enter your number" name="phone">

                </div>

                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address">

                </div>
                <div class="inputBox">
                    <span>where to :</span>
                    <input type="text" placeholder="place you want to visit" name="location">

                </div>

                <div class="inputBox">
                    <span>how many :</span>
                    <input type="number" placeholder="number of guests" name="guests">

                </div>

                <div class="inputBox">
                    <span>arrivals :</span>
                    <input type="date" name="arrival">

                </div>
                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date" name="leaving">

                </div>
            </div>
            <input type="submit" value="submit" class="btn" name="send">





        </form>

    </section>



    </div>



















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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"></script>    <script type="javascript" src="script.js"></script>
</body>

</html>