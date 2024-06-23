<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>B.E / B.Tech Students</title>
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
        a {
            display: block;
            width: 200px;
            margin: 10px auto;
            text-align: center;
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #45a049;
        }
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            background-color: white;
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        @media (max-width: 600px) {
            table, th, td {
                display: block;
                width: 100%;
            }
            th, td {
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <h1>B.E / B.Tech Admissions</h1><br>
    <a href="main.php">Back to Main page</a><br>
    <div class="container">
    <div class="row">
    <a class="col p-2" href="bebtech.php">All</a>
    <a class="col p-2" href="cse.php">Computer Science Engineering</a>
    <a class="col p-2" href="me.php">Mechanical Engineering</a>
    <a class="col p-2" href="ece.php">Electronics and Communication Engineering</a>
    <a class="col p-2" href="ee.php">Electrical Engineering</a>
    <a class="col p-2" href="eee.php">Electrical and Electronics Engineering</a>
    <a class="col p-2" href="ce.php">Civil Engineering</a>
    <a class="col p-2" href="che.php">Chemical Engineering</a>
    <a class="col p-2" href="it.php">Information Technology</a>
    <a class="col p-2" href="ae.php">Automobile Engineering</a>
    <a class="col p-2" href="aiml.php">Artificial Intelligence and Machine Learning</a>
    <a class="col p-2" href="aids.php">Artificial Intelligence and Data Science</a>
    </div>
    </div>
    <?php
        require 'server.php';
        
        $result = mysqli_query($con, "SELECT * FROM entries WHERE branch='Electronics and Communication Engineering' AND course IN ('b.e', 'b.tech', 'B.e', 'B.Tech', 'B.E', 'B.TECH', 'B.E/B.Tech')");  

        if ($result->num_rows > 0) { 
            echo "
            <table>
            <tr>
            <th>First Name</th>
            <th>Last Name</th> 
            <th>Parent or Guardian Name</th> 
            <th>Parent or Guardian Email</th> 
            <th>Email</th> 
            <th>Phone Number</th> 
            <th>Date of Birth</th> 
            <th>Gender</th> 
            <th>Address</th> 
            <th>City</th> 
            <th>State</th> 
            <th>Zip</th>
            <th>Course</th>
            <th>Branch</th>
            </tr>";
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>"; 
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['lname'] . "</td>";
                echo "<td>" . $row['pgname'] . "</td>";
                echo "<td>" . $row['pgemail'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['phoneno'] . "</td>";
                echo "<td>" . $row['dob'] . "</td>";
                echo "<td>" . $row['gender'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>" . $row['city'] . "</td>";
                echo "<td>" . $row['state'] . "</td>";
                echo "<td>" . $row['zip'] . "</td>";
                echo "<td>" . $row['course'] . "</td>";
                echo "<td>" . $row['branch'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p style='text-align: center;'>0 results</p>";
        }
    ?>
</body>
</html>