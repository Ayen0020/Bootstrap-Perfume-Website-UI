<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfume Company</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=Istok+Web&family=Montserrat:wght@500&family=Mukta:wght@500&family=Poppins:wght@300&family=Righteous&family=Rochester&family=Sacramento&family=Seymour+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light col-12">
            <div class="d-flex align-items-center">
                <img src="img/logo1.png" alt="Logo 1" width="90" height="90" class="d-inline-block align-top">
                <img src="img/logo2.png" alt="Logo 2" width="90" height="90" class="d-inline-block align-top ml-auto">
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="HOME.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="company-profile.php">Company Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="mission&vision.php">Mission & Vision</a>


                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Products</a>
                    </li>
            
                </ul>
            </div>
        </nav>

        <!-- Home Section -->
        <section class="hero-section text-center mt-6">
            <div class="container">
                <div class="row py-5">
                    <div class="col-lg-12 text-center">
                        <h1>Elevate Your Senses</h1>
                        <p>Discover the essence of luxury with our exquisite collection of perfumes.</p>
                        <div class="line">
                        </div>
                    </div>
                </div>
            </div>
        </section>

      
<footer class=" text-center py-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4>Follow Us</h4>
                <div class="social-icons">
                    <a href="#" target="_blank" class="social-icon"><i class="fab fa-facebook"></i></a>
                    <a href="#" target="_blank" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank" class="social-icon"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <div class="row mt-1">
            <div class="col-lg-12">
                <p>&copy; 2023 Lux Scents Company. All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<style>
    body {
        margin: 0;
        padding: 0;
        overflow-x: hidden; /* Remove horizontal scrolling */
    }

    .nav-item {
        text-decoration: none;
        color: black;
        font-weight: bold;
    }

    .nav-item:hover {
        color: blue;
    }
    .navbar-nav .nav-item:hover .nav-link {
        color: blue; 
        transition: color 0.3s ease-in-out; 
    }

    .hero-section a.btn {
        margin: 0 5px;
        background-color: blueviolet;
    }

    .hero-section {
        text-align: center;
        font-family: Verdana;
        background-image: url('img/bg5.jfif');
        background-size: contain;
        background-position: center;
        height: 70vh; 
        width: 100%;
        margin: 0;
        padding: 0;
    }

    .hero-section h1 {
        font-size: 48px;
        font-family: 'Seymour One', sans-serif;
    }
        .hero-section h1 {
    font-size: 48px;
    font-family: 'Seymour One', sans-serif;
    overflow: hidden;
    white-space: nowrap;
    margin: 0 auto;
    letter-spacing: 4px;
    animation: typing 5s steps(14) infinite;
}

@keyframes typing {
    from {
        width: 0;
    }
    to {
        width: 100%;
    }
}

    .hero-section p {
        font-size: 18px;
        margin-bottom: 10px;
        
    }
    .navbar {
    background-color:	#E6E6FA !important;
}


    footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        background-color: #E6E6FA;
    }
footer h4{
    font-family: 'Seymour One', sans-serif;
}
    .social-icons {
        font-size: 24px;
        display: flex;
        justify-content: center;
    }

    .social-icon {
        color: #000;
        transition: color 0.3s ease-in-out;
        margin: 0 10px; /* Adjusted spacing */
    }

    .social-icon:hover {
        color: blue;
    }
    
</style>

</body>
</html>
