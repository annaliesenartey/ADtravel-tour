<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="admin.css" class="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css" />
    <title>Admin dashboard</title>
</head>

<body>

    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="fab fa-accusoft"></span> <span>A&D Travel and Tour</span></h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li><a class="active" href=""><span class="fas fa-igloo "></span>
                        <span>Dashboard</span></a>

                </li>

                <!-- <li><a href=""><span class="fas fa-users "></span>
                        <span>Users</span></a>

                </li>

                <li><a href=""><span class="fas fa-clipboard-list  "></span>
                        <span>Customers</span></a>

                </li>

                <li><a href=""><span class="fas fa-clipboard-list"></span>
                        <span>Tasks</span></a>

                </li>

                <li><a href=""><span class="fas fa-user-circle "></span>
                        <span>Accounts</span></a>

                </li> -->
                <li><a href="index.php"><span class="fas fa-home "></span>
                        <span>Home</span></a>

                </li>
                <li><a href="Find  A trip.php"><span class="fas fa-plane "></span>
                        <span>Find A Trip</span></a>

                </li>
                <li><a href="events.php"><span class="fas fa-calendar "></span>
                        <span>Events</span></a>

                </li>
                <li><a href=""><span class="fas fa-users "></span>
                        <span>Users</span></a>

                </li>

            </ul>
        </div>


    </div>

    <div class="main-content">
        <header>
            <h3><label for="nav-toggle">

                    <span class="fas fa-bars"></span>
                </label>

                Dashboard
            </h3>
            <div class="search-wrapper">
                <span class="fas fa-search"> </span>
                <input type="search" placeholder="Search here">
            </div>
            <div class="user-wrapper">
                <img src="" width="40px" height="40px" alt="">
                <div>
                    <h4>Admin1<h4>
                            <small>Super Admin</small>
                </div>
            </div>

        </header>
        <main>
            <div class="dashboard-cards">
                <div class="card-single">
                    <div>
                        <h1><?php
// Replace the values in the following lines with your own database credentials
$servername = "localhost";
$username = "root";
$password = "Ad12@34.";
$dbname = "kars";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Execute an SQL query to count the number of customers
$sql = "SELECT COUNT(*) as num_customers FROM customer";
$result = $conn->query($sql);

// Check if the query is successful
if ($result === false) {
    die("Error executing query: " . $conn->error);
}

// Fetch the result of the query and output it
$row = $result->fetch_assoc();
$num_customers = $row["num_customers"];
echo "Number of customers: " . $num_customers;

// Close the database connection
$conn->close();
?></h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="fas fa-users"></span>

                    </div>
                </div>


                <div class="card-single">
                    <div>
                        <h1>79</h1>
                        <span>Projects</span>
                    </div>
                    <div>
                        <span class="fas fa-clipboard"></span>

                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>6k</h1>
                        <span>Income</span>
                    </div>
                    <div>
                        <span class="fab fa-google-wallet"></span>

                    </div>
                </div>

            </div>

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Current Tours</h3>
                            <button>See all <span class="fas fa-arrow-right"></span></button>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table width="100%">
                                    <thead>
                                        <tr>
                                            <td>Tour Title</td>
                                            <td>Status</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Treasure Island Tour</td>

                                            <td>
                                                <span class="status purple"></span>
                                                review
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Western Tour</td>

                                            <td>
                                                <span class="status pink"></span>
                                                pending
                                            </td>

                                        </tr>

                                        <tr>
                                            <td>Shop</td>

                                            <td>
                                                <span class="status orange"></span>
                                                in progress
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Eastern Tour</td>

                                            <td>
                                                <span class="status purple"></span>
                                                review
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>Elimina Tour</td>

                                            <td>
                                                <span class="status pink"></span>
                                                pending
                                            </td>

                                        </tr>

                                        <tr>
                                            <td>Aqua Safari Tour</td>

                                            <td>
                                                <span class="status orange"></span>
                                                in progress
                                            </td>
                                        </tr>

                                    </tbody>


                                </table>

                            </div>


                        </div>

                    </div>

                </div>
                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>New Customer</h3>
                            <button>See all <span class="fas fa-arrow-right"></span></button>

                        </div>
                        <div class="card-body">

                        </div>
                        <?php
// Establish connection to SQL database
$servername = "localhost";
$username = "root";
$password = "Ad12@34.";
$dbname = "kars";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL query
$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

// Fetch and display results
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<div class="customer">';
        echo '<div class="info">';
        echo '<img src="jd.jpg" width="40px" height="40px" alt="">';
        echo '<div>';
        echo '<h4>' . $row["username"] . '</h4>';
        echo '<small>' . $row["email"] . '</small>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "0 results";
}

// Close database connection
$conn->close();
?>
                    </div>


                </div>

            </div>
    </div>

    </div>
    </div>
    </main>




    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
</body>



</html>