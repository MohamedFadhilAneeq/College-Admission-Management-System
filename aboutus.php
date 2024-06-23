<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About Us</title>
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

        .content {
            text-align: left;
            line-height: 1.6;
        }

        .content p {
            font-size: 1.1rem;
            color: #343a40;
        }

        .section-title {
            font-size: 1.3rem;
            font-weight: bold;
            margin-top: 2rem;
            color: #007bff;
        }

        .section-content {
            margin-top: 1rem;
        }

        .testimonial {
            margin-top: 2rem;
            padding: 1rem;
            background-color: #f8f9fa;
            border-left: 4px solid #007bff;
        }

        .testimonial p {
            font-style: italic;
        }

        .testimonial-author {
            margin-top: 0.5rem;
            font-weight: bold;
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
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light" style ="backgroun">
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
    <div class="container">
        <h2>About Us</h2>
        <div class="content">
            <p>Welcome to XYZ College, where we provide top-notch education and a conducive environment for learning and personal growth. Our mission is to nurture talent and foster innovation through a comprehensive curriculum and state-of-the-art facilities.</p>
            <p>At XYZ College, we are committed to academic excellence and offer a wide range of undergraduate and postgraduate programs. Our experienced faculty and modern infrastructure ensure that our students receive the best education and are well-prepared for their future careers.</p>
            <div class="section-title">Our History</div>
            <div class="section-content">
                <p>Founded in 19XX, XYZ College has been a pioneer in higher education in our region. Over the decades, we have consistently upheld our commitment to academic rigor and holistic development.</p>
            </div>
            <div class="section-title">Our Values</div>
            <div class="section-content">
                <p>Integrity, Excellence, and Innovation are at the core of everything we do at XYZ College. We believe in fostering a culture of respect, diversity, and inclusivity.</p>
            </div>
            <div class="section-title">Notable Achievements</div>
            <div class="section-content">
                <p>XYZ College has been recognized nationally and internationally for its contributions to research, student achievements, and community engagement. Our alumni have excelled in various fields, making a significant impact globally.</p>
            </div>
            <div class="section-title">Testimonials</div>
            <div class="testimonial">
                <p>"Studying at XYZ College was a transformative experience. The supportive environment and excellent faculty helped me achieve my academic and career goals." - John Doe</p>
                <div class="testimonial-author">- John Doe, Alumni</div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>