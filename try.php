<!DOCTYPE html>
 <html lang="en">
        <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <title>Sign in & Sign up Form</title>
            <link rel="stylesheet" href="signupin.css" />
        </head>
       
      <body>
           <main>
                <div class="box">
                    <div class="inner-box">
                        <div class="forms-wrap"> 
                          
                            <form action="signupin.html" method="post" autocomplete="off" class="sign-in-form">
                                
                                <span class="error-msg"></span>
                                    <div class="logo">
                                        <img src="imgsignip/LOGO1.jpg" alt="elwanchariss" />
                                        <h4>El wanchariss</h4>
                                    </div>

                                    <div class="heading">
                                        <h2>Welcome Back</h2>
                                        <h6>Not registred yet?</h6>
                                        <a href="#" class="toggle">Sign up</a>
                                    </div>

                                    <div class="actual-form">
                                        <div class="input-wrap">
                                            <input
                                                type="text"
                                                name="name"
                                                minlength="4"
                                                class="input-field"
                                                autocomplete="off"
                                                required
                                            />
                                            <label>Name</label>
                                        </div>

                                        <div class="input-wrap">
                                            <input
                                                type="password"
                                                name="password"
                                                minlength="4"
                                                class="input-field"
                                                autocomplete="off"
                                                required
                                            />
                                            <label>Password</label>
                                        </div>

                                        <input type="submit" name="submit" value="Sign In" class="sign-btn" />

                                        <p class="text">
                                            Forgotten your password or you login datails?
                                            <a href="#">Get help</a> signing in
                                        </p>
                                    </div>
                            </form>
                
                            <form action="" method="post" autocomplete="off" class="sign-up-form">
                               
                                <div class="logo">
                                    <img src="imgsignip/LOGO1.jpg " alt="Elwanchariss" />
                                    <h4>El wanchariss</h4>
                                </div>

                                <div class="heading">
                                    <h2>Get Started</h2>
                                    <h6>Already have an account?</h6>
                                    
                                    <a href="#" class="toggle">Sign in</a>
                                    <?php
                                       echo $msg;
                                    ?>
                                </div>

                             <div class="actual-form">
                                    <div class="input-wrap">
                                        <input
                                            type="text"
                                            name="name"
                                            minlength="4"
                                            class="input-field"
                                            autocomplete="off"
                                            
                                            required
                                        />
                                        <label>Name</label>
                                    </div>

                                    <div class="input-wrap">
                                        <input
                                            type="email"
                                            name="email"
                                            class="input-field"
                                            autocomplete="off"
                                           
                                            required
                                        />
                                        <label>Email</label>
                                    </div>

                                    <div class="input-wrap">
                                        <input
                                            type="password"
                                            name="password"
                                            minlength="4"
                                            class="input-field"
                                            autocomplete="off"
                                            required
                                        />
                                        <label>Password</label> <br>
                                    </div>
                                    <div class="input-wrap">
                                        <input
                                            type="password"
                                            name="cpassword"
                                            minlength="4"
                                            class="input-field"
                                            autocomplete="off"
                                            required
                                        />
                                        <label> Confirm Password</label> <br>
                                    </div>
                                
                                    <p>User Type<sup>*</sup></p>
                                    <select class="user" name="user_type">
                                                    <option value="user">user</option>
                                                    <option value="admin">admin</option>
                                    </select>
                                    
                                    <input type="submit" name="submit" value="Sign Up" class="sign-btn" />

                                    <p class="text">
                                        By signing up, I agree to the
                                        <a href="#">Terms of Services</a> and
                                        <a href="#">Privacy Policy</a>
                                    </p>
                              </div>
                            
                            </form>
                        </div>


                        <div class="carousel"> -- pic box in front of sign up/in box -----------
                            <div class="images-wrapper">
                                <img src="imgsignip/SIGNIP.png" class="image img-1 show" alt="" />
                            
                            </div>   
                        </div>
                    </div>
            </div>
            </main>

            <- Javascript file --

            <script src="signupin.js"></script>
      </body>
 </html>
