<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Entries</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        h1 {
            text-align: center;
            margin-top: 20px;
            color: #4CAF50;
        }
        p {
            text-align: center;
            font-size: 18px;
            margin: 20px 0;
        }
        a {
            display: inline-block;
            margin: 10px auto;
            text-align: center;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #45a049;
        }
        .navbar {
            background-color: #343a40;
        }
        .navbar-brand, .nav-link {
            color: #b1b1b1 !important;
        }
        .nav-link {
            margin-right: 15px;
        }
        .nav-link:hover {
            color: #000000 !important;
        }
        .navbar-toggler {
            border-color: rgba(255, 255, 255, 0.1);
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%288, 8, 8, 0.5%29' stroke-width='2' linecap='round' linejoin='round' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }
    </style>
</head>
<body style="background-color: linear-gradient(135deg, #f8f9fa 25%, #e9ecef 100%);">
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
        <a class="navbar-brand" href="#" style="background-color: transparent;">XYZ COLLEGE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="main.php" style="background-color: transparent; color: rgb(164, 164, 164);">HOME<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="home.php" style="background-color: transparent;">ADMISSION</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php"style="background-color: transparent;">ABOUT</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>All Entries</h1>
        <p>
            <a href="bebtech.php">B.E/B.Tech</a>
            <?php
                require 'server.php';
                
                $query = mysqli_query($con, "SELECT COUNT(*) FROM entries WHERE course IN ('b.e', 'b.tech', 'B.e', 'B.Tech', 'B.E', 'B.TECH', 'B.E/B.Tech')");
                $fetch = mysqli_fetch_array($query);
                echo "<p>".$fetch[0]."</p>";
            ?>
        </p>
        <p>
            <a href="memtech.php">M.E/M.Tech</a>
            <?php
                require 'server.php';
                
                $query = mysqli_query($con, "SELECT COUNT(*) FROM entries WHERE course IN ('m.e', 'm.tech', 'M.e', 'M.Tech', 'M.E', 'M.TECH', 'M.E/M.Tech')");
                $fetch = mysqli_fetch_array($query);
                echo "<p>".$fetch[0]."</p>";
            ?>
        </p>
        <p>
            <a href="mba.php">MBA</a>
            <?php
                require 'server.php';
                
                $query = mysqli_query($con, "SELECT COUNT(*) FROM entries WHERE course IN ('mba', 'Mba', 'MBA', 'M.B.A')");
                $fetch = mysqli_fetch_array($query);
                echo "<p>".$fetch[0]."</p>";
            ?>
        </p>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
