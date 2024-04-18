<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="style_services.css"> <!-- Link to the CSS file -->
</head>
<body>
    <header class="header">
        <a href="#" class="Logo"> El wanchariss </a>
        
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="aboutus.php">About Us</a>
            <a href="services.php">Services</a>
            <a href="drs.php">Doctors</a>
            <a href="contact.php">Contact Us</a>
            
            <button   class="btnLogin-popup"><a href="signIn.php" class="btnLogin-popup">Sign up / in </a></button> 
            
        </nav>
    </header>
    <h1>our services</h1>
    <!-- Content of the services page -->
    <div class="services">
        <div class="service">
            <img src="imgservices/Forensic medicine-pana.jfif" alt="Surgery Image">
            <h2>Service 1: General Surgery</h2>
            <p>General surgery is a branch of medicine that deals with diseases through surgical interventions. It covers a wide range of areas, including abdominal surgery, vascular surgery, and much more.</p>
        </div>
        <div class="service">
            <img src="imgservices/Midwives-rafiki.jfif " alt="Pediatrics Image">
            <h2>Service 2: Pediatrics</h2>
            <p>Pediatrics is the branch of medicine that focuses on the health and well-being of infants, children, and adolescents. It includes monitoring growth and development, treating childhood illnesses, and many other aspects.</p>
        </div>
        <div class="service">
            <img src="imgservices/Gynecology consultation-rafiki.jfif " alt="Gynecology Image">
            <h2>Service 3: Gynecology</h2>
            <p>Gynecology is the branch of medicine that focuses on the health of the female reproductive system, including the uterus, ovaries, and breasts. Gynecologists treat issues related to reproduction, contraception, pregnancy, and more.</p>
        </div>
    </div>
    <style>
        /* Import Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');


:root{
            --blue:#51afe9;
            --white:#fff;
            --light-color:#777;
            --box-shadow:.5rem .5rem 0  rgba(22,160,133,.2);
            --text-shadow:.4rem .4rem 0  rgba(00,00,00,.2);
            --border: .2rem solid var(--blue);
        }

        * {
            margin: 0; 
            padding: 0; 
            box-sizing: border-box; 
             scroll-behavior: smooth; 
             font-family: 'Poppins', sans-serif; 
             list-style: none; 
            text-decoration: none; 
        }

    .header {
    position: auto; 
    top: 0; 
    left: 0; 
    width: 100%; 
    padding: 20px 100px; 
    background-color:transparent; 
    display: flex; 
    justify-content: space-between; 
    align-items: center; 
    z-index: 1000;}
/* Reset default styles */
body {
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
    background-color: #f9fafb; /* Set background color */
    color: #374151; /* Set text color */
}

nav {
    padding: 10px;
}

/* CSS styles to align the logo to the left */
.navbar {
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.Logo {
    font-size: 32px;
    color: #333;
    text-decoration: none;
    font-weight: 700;
    pointer-events: none;
    filter: drop-shadow(0 0 5px white); 
}
/*
.logo {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--blue);
    margin-right: auto; /* Add margin to push other elements to the right /
} */
.navbar a {
    position: relative; 
    font-size: 18px; 
    color: #333; 
    text-decoration: none; 
    font-weight: 500; 
    margin-right: 40px; 
    text-transform: capitalize; 
    transition:all .42s ; 
        }
        .navbar a:hover{
            color: var(--blue); 
        }
       
        .navbar a::after{ 
    content: ''; 
    position: absolute; 
    width:0; 
    height: 2px; 
    background:var(--blue); 
    bottom: -2px; 
    left: 0; 
    transition: all .42s; 
} 
 
.navbar a:hover::after{ 
    width: 100%; 
} 
.navbar .btnLogin-popup {
    width: 150px;
    background-color:#51afe9;
    border: none;
    outline: none;
    height: 49px;
    border-radius: 49px;
    color: #333;
    text-transform: uppercase;
    font-weight: 600;
    margin: 10px 0;
    cursor: pointer;
    transition: 0.5s;
}
.navbar .btnLogin-popup:hover{
  background-color: transparent;
  color: #333;
}
/*
.navbar .btnLogin-popup { 
    width: 150px; 
    background-color:var(--blue);
    border: none; 
    outline: none; 
    height: 49px; 
    border-radius: 49px; 
    color: #fff; 
    text-transform: uppercase; 
    font-weight: 600; 
    margin: 10px 0; 
    cursor: pointer; 
    transition: 0.5s; 
} */

input, 
        textarea { 
        font-family: "Poppins", sans-serif; 
        } 
.active a {
    font-weight: bold;
}

h1 {
    font-size: 2.5rem;
    color: #111827; /* Set title color */
    margin-top: 20px;
    text-align: center;
}

.services {
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
    margin-top: 20px;
}

.service {
    width: calc(33.33% - 40px);
    padding: 20px;
    background-color: #ffffff; /* Set background color for service box */
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add box shadow for a card-like effect */
    margin-bottom: 30px;
    transition: transform 0.3s ease; /* Add transition effect */
}

.service:hover {
    transform: translateY(-10px); /* Move the service box up slightly on hover */
}

.service img {
    width: 100%;
    border-radius: 8px;
    margin-bottom: 20px;
}

.service h2 {
    font-size: 1.5rem;
    color: #111827; /* Set title color */
}

.service p {
    color: #6b7280; /* Set text color */
}

    </style>
</body>
</html>