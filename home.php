<?php
$registered=0;
$userexists=0;
if($_SERVER['REQUEST_METHOD']=='POST')
{
    include 'server.php';
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $pname=$_POST['p/gname'];
    $pemail=$_POST['p/gemail'];
    $phone=$_POST['phoneno'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $zip=$_POST['zip'];
    $course=$_POST['course'];
    $branch=$_POST['branch'];
    $semail=$_POST['email'];
    $sql="SELECT * FROM entries WHERE fname='$fname' AND lname='$lname' AND email='$semail' AND phoneno ='$phone' ";
    $result=mysqli_query($con,$sql);
    if($result){
        $num=mysqli_num_rows($result);
        if($num>0)
        {
            $userexists=1;
        }
        else{
            $sql="INSERT INTO entries (fname,lname,pgname,pgemail,phoneno,dob,gender,address,city,state,zip,course,branch,email) VALUES('$fname','$lname','$pname','$pemail','$phone','$dob','$gender','$address','$city','$state','$zip','$course','$branch','$semail')";
            $result=mysqli_query($con,$sql);
            if($result)
            {
                $registered=1;
            }
            else{
                die(mysqli_error($con));
            }
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>College Admission Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f8f9fa 25%, #e9ecef 100%);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: auto;
            margin-top: 3rem;
        }

        h2 {
            margin-bottom: 1.5rem;
            color: #007bff;
            font-weight: 700;
            text-align: center;
        }

        .form-group label {
            font-weight: bold;
            color: #343a40;
        }

        .form-control {
            border-radius: 0.25rem;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 0.25rem;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .form-row {
            margin-bottom: 1rem;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-select,
        .custom-select {
            display: inline-block;
            width: 100%;
            padding: 0.5rem 1.5rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            vertical-align: middle;
            background: #fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3E%3Cpath fill='%23343434' d='M2 0L0 2h4z'/%3E%3C/svg%3E") no-repeat right 0.75rem center;
            background-size: 8px 10px;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            appearance: none;
        }

        .navbar {
            background-color: #007bff;
            padding: 0.5rem 1rem;
        }

        .navbar-brand {
            color: #ffffff;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .navbar-nav .nav-item {
            margin-right: 10px;
        }

        .navbar-nav .nav-link {
            color: #ffffff;
            font-size: 1.1rem;
            transition: color 0.3s;
        }

        .navbar-nav .nav-link:hover {
            color: #f8f9fa;
        }

        @media (max-width: 576px) {
            .form-row {
                flex-direction: column;
            }

            .form-group {
                width: 100%;
            }
        }
    </style>
    <script>
        function formValidation()
        {
            let x =document.forms['form2']['name'].value;
            if(x== ""){
                alert("name must be filled out");
                return false;
            }
        }
        function newFunction()
        {
            document,getElementById("form2").reset();
        }
    </script>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">XYZ COLLEGE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link" href="main.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="home.php">ADMISSION</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">ABOUT</a>
        </li>
      </ul>
    </div>
  </nav>
    <div class="container mt-5">
        <h2>College Admission Form</h2>
        <form action="home.php" method="post" id="form2" name="form2" onSubmit="return formValidation()">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" id="fname" name="fname" placeholder="First Name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" id="lname" name="lname" placeholder="Last Name" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="fatherName">Parent or Guardian Name</label>
                    <input type="text" class="form-control" id="p/gname" name="p/gname" placeholder="Enter Name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="fatherEmail">Parent or Guardian Email</label>
                    <input type="email" class="form-control" id="p/gemail" name="p/gemail" placeholder="Enter Email" required>
                </div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" id="phoneno" name="phoneno" placeholder="Phone Number" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="dob">Date of Birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="gender">Gender</label>
                    <select id="gender" name ="gender" class="form-control custom-select" required>
                        <option selected disabled value="">Choose...</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="state">State</label>
                    <select id="state" name="state" class="form-control custom-select" required>
                        <option selected disabled value="">Choose...</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Puducherry">Puducherry</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <label for="zip">Zip</label>
                    <input type="text" class="form-control" id="zip" name="zip" required>
                </div>
            </div>
            <div class="form-group">
                <label for="course">Course Applying For</label>
                <select id="course" name= "course" class="form-control custom-select" required>
                    <option selected disabled value="">Choose...</option>
                    <option value="B.E/B.Tech">B.E / B.Tech</option>
                    <option value="M.E/M.Tech">M.E / M.Tech</option>
                    <option value="M.B.A">M.B.A</option>
                </select>
            </div>
            <div class="form-group">
                <label for="branch">Branch</label>
                <select id="branch" name="branch" class="form-control custom-select" required>
                    <option selected disabled value="">Choose...</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>

    <footer class="bg-light text-center py-3 mt-5">
        <p>&copy; 2024 XYZ College. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        const Branch = {
            "B.E/B.Tech": ["Computer Science Engineering", "Mechanical Engineering", "Electronics and Communication Engineering", "Electrical Engineering", "Electrical and Electronics Engineering", "Civil Engineering", "Chemical Engineering", "Information Technology", "Automobile Engineering", "Artificial Intelligence and Machine Learning", "Artificial Intelligence and Data Science"],
            "M.E/M.Tech": ["Civil Engineering", "Computer Science Engineering", "Electronics and Communication Engineering", "Mechanical Engineering", "Electrical Engineering", "Information Technology"],
            "M.B.A": ["General Management", "Human Resource Management", "Finance", "Marketing", "International Management"]
        };

        document.getElementById('course').addEventListener('change', function() {
            const selectedCourse = this.value;
            const branchSelect = document.getElementById('branch');

            // Clear previous options
            branchSelect.innerHTML = '<option selected disabled value="">Choose...</option>';

            // Populate new options
            if (selectedCourse in Branch) {
                Branch[selectedCourse].forEach(function(branch) {
                    const option = document.createElement('option');
                    option.value = branch;
                    option.textContent = branch;
                    branchSelect.appendChild(option);
                });
            }
        });
    </script>
</body>

</html>