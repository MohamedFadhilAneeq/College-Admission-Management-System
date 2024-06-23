<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M.B.A Students</title>
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
    <h1>M.B.A Admissions</h1><br>
    <a href="main.php">Back to Main page</a><br>
    <div class="container">
    <div class="row">
    <a class="col p-2" href="mba.php">All</a>
    <a class="col p-2" href="ge.php">General Management</a>
    <a class="col p-2" href="hrm.php">Human Resource Management</a>
    <a class="col p-2" href="f.php">Finance</a>
    <a class="col p-2" href="m.php">Marketing</a>
    <a class="col p-2" href="im.php">International Management</a>
    </div>
    </div>
    <?php
				require 'server.php';
				
				$result = mysqli_query($con,"SELECT * FROM entries WHERE branch='International Management' AND (course='mba' OR course='Mba' OR course='MBA' OR course='M.B.A')");  
 
                if ($result->num_rows > 0) { 
                    print "
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
                   while($row = mysqli_fetch_array($result))
                   {  
    
                  print "<tr>"; 
                  print "<td>" . $row['fname'] . "</td>";
                  print "<td>" . $row['lname'] . "</td>";
                  print "<td>" . $row['pgname'] . "</td>";
                  print "<td>" . $row['pgemail'] . "</td>";
                  print "<td>" . $row['email'] . "</td>";
                  print "<td>" . $row['phoneno'] . "</td>";
                  print "<td>" . $row['dob'] . "</td>";
                  print "<td>" . $row['gender'] . "</td>";
                  print "<td>" . $row['address'] . "</td>";
                  print "<td>" . $row['city'] . "</td>";
                  print "<td>" . $row['state'] . "</td>";
                  print "<td>" . $row['zip'] . "</td>";
                  print "<td>" . $row['course'] . "</td>";
                  print "<td>" . $row['branch'] . "</td>";
                  print "</tr>"; 
                  } 
                  print "</table>";
                } else {
                    echo "<p style='text-align: center;'>0 results</p>";
                }
    
                ?>
</body>
</html>