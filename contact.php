<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="contact.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
  </head>
  <body>
    <header class="header">
        <a href="#" class="Logo">El wanchariss</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="aboutus.php">About us</a>
            <a href="services.php">Services</a>
            <a href="drs.php">Doctors</a>
            <a href="contact.php">Contact us</a>
            <button   class="btnLogin-popup"><a href="signUp.php" class="btnLogin-popup">Sign up / in </a></button> 
            

        </nav> 
    </header>
    
        <div class="container">
            <div class="form">
                    <div class="contact-info">
                        <h3 class="title">Let's get in touch</h3>
                        <p class="text">
                            Elwanchariss Clinic provides personalized healthcare solutions tailored to your needs. With a team of experienced professionals, we offer comprehensive medical services ranging from diagnostics to treatment. Contact us today to schedule an appointment and experience compassionate care focused on your well-being.
                        </p>

                        <div class="info">
                            <div class="information">
                                <img src="imgcontact/location.svg" class="icon" alt="" />
                                <p>Chlef city centre N^600</p>
                            </div>
                            <div class="information">
                                <img src="imgcontact/email.svg" class="icon" alt="" />
                                <p>Elwanchariss@gmail.com</p>
                            </div>
                            <div class="information">
                                <img src="imgcontact/phone.svg" class="icon" alt="" />
                                <p>055-456-789</p>
                            </div>
                        </div>

                        <div class="social-media">
                            <p>Connect with us :</p>
                            <div class="social-icons">
                                <a href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            
                            </div>
                        </div>
                    </div>

                <div class="contact-form">
                        <span class="circle one"></span>
                        <span class="circle two"></span>

                            <form action="https://api.web3forms.com/submit" method="POST" autocomplete="off">
                                    <h3 class="title">Contact us</h3>
                                    <div class="input-container">
                                        <input type="hidden" name="access_key" value="f2a2ffab-9774-4f79-b0db-4d1885f100fe">
                                        <input type="text" name="name" class="input" />
                                        <label for="">Username</label>
                                        <span>Username</span>
                                    </div>
                                    <div class="input-container">
                                        <input type="hidden" name="access_key" value="f2a2ffab-9774-4f79-b0db-4d1885f100fe">
                                        <input type="email" name="email" class="input" />
                                        <label for="">Email</label>
                                        <span>Email</span>
                                    </div>
                                    <div class="input-container">
                                        <input type="hidden" name="access_key" value="f2a2ffab-9774-4f79-b0db-4d1885f100fe">
                                        <input type="tel" name="phone" class="input" />
                                        <label for="">Phone</label>
                                        <span>Phone</span>
                                        </div>
                                    <div class="input-container textarea">
                                        <input type="hidden" name="access_key" value="f2a2ffab-9774-4f79-b0db-4d1885f100fe">
                                        <textarea name="message" class="input"></textarea>
                                        <label for="">Message</label>
                                        <span>Message</span>
                                    </div>
                                    <input type="hidden" name="access_key" value="f2a2ffab-9774-4f79-b0db-4d1885f100fe">
                                    <input type="submit" value="Send" class="btn" />
                            </form>
                            
                </div>
            </div>
            <div class="right"> 
                 <img src="imgcontact/contacttus.png" alt="" class="img">
            </div>
       </div>
 
    
     
    
    <script src="contact.js"></script>
  </body>
</html>