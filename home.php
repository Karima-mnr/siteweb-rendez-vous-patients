<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El wanchariss clinic</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap";>
    <link href='https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
    <header class="header">
        <a href="#" class="Logo"> El wanchariss </a>
        
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="aboutus.php">About Us</a>
            <a href="services.php">Services</a>
            <a href="drs.php">Doctors </a>
            <a href="contact.php">Contact Us</a>
            
          
            <button   class="btnLogin-popup"><a href="signIn.php" class="btnLogin-popup">Sign up / in </a></button> 
                
          
            
        </nav>
    </header>
    

    <div class="container">
        <section class="intro-section">
            <h2>Welcome to Wanchariss clinic</h2>
            <p>We provide comprehensive healthcare services to ensure the well-being of our patients.</p>
        </section>
    </div>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        /* Importation de la police Poppins depuis Google Fonts */
        /* Réinitialisation des marges, des rembourrages et de la boîte de modèle */
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

body,
input,
textarea {
  font-family: "Poppins", sans-serif;
}

header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    padding: 20px 100px;
    background-color:transparent;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 1000;
    

} 


.Logo {
    font-size: 32px;
    color: #333;
    text-decoration: none;
    font-weight: 700;
    pointer-events: none;
    filter: drop-shadow(0 0 5px white); 
} 

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

.navbar a::after{
    content: '';
    position: absolute;
    width:0;
    height: 2px;
    background:#51afe9;
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
body{
    min-height: 100vh;
    background: url('Homepic.jpg') no-repeat; 
    background-position: center; 
    background-size: cover;
    font-family: "Poppins", sans-serif; 
}
            /*
        * {
            margin: 0; 
            padding: 0; 
            box-sizing: border-box; 
             scroll-behavior: smooth; 
             font-family: 'Poppins', sans-serif; 
             list-style: none; 
            text-decoration: none; 
        }

        /* Style de l'en-tête /
            /* Style de l'en-tête /
            .header {
                position: fixed; 
                top: 0; 
                left: 0; 
                width: 100%; 
                padding: 20px 100px; 
                background-color: transparent; 
                display: flex; 
                justify-content: flex-start; / Align items to the start (left) /
                align-items: center; 
                z-index: 1000; 
            }

            / Style du logo /
            .logo {
                font-size: 32px; 
                color: var(--blue); 
                text-decoration: none; 
                font-weight: 700; 
                pointer-events: none; 
                filter: drop-shadow(0 0 5px white);  
                margin-left: 0%; / Add margin to push the logo away from the edge /
            }

            / Style de la barre de navigation /
            .navbar {
                margin-left: auto; / Move the navbar to the right /
            }

                    body{
                        min-height: 100vh;
                        background: url('Homepic.jpg') no-repeat; 
                        background-position: center; 
                        background-size: cover;
                        font-family: "Poppins", sans-serif; 
                    }
                    input, 
                    textarea { 
                    font-family: "Poppins", sans-serif; 
                    }
                    / Style de la barre de navigation /
                .navbar a {
                    position: relative; 
            font-size: 18px; 
            color: var(--light-color); 
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
        }
        */

                .container {
                    position: absolute;
                    bottom: 20%;
                    left: 50%;
                    transform: translateX(-50%);
                    max-width: 800px;
                    padding: 20px;
                    background-color: rgba(255, 255, 255, 0.8); /* Set background color with transparency */
                    border-radius: 8px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    z-index: 1; /* Ensure container appears above background image */
                    background-repeat: no-repeat;
                }

                /* Header styles */
            

                header h1 {
                    font-size: 36px;
                    color: #333;
                }

                header p {
                    font-size: 18px;
                    color: #666;
                }

                /* Section heading styles */
                h2 {
            font-size: 24px;
            color: #333;
            margin-top: 10px; /* Adjusted margin-top to move the title slightly higher */
        }

                /* Intro section styles */
                .intro-section p {
                    color: #555;
                }

                /* Style du bouton de connexion */
            </style>
            <script src="script.js"></script>
        </body>
        </html>