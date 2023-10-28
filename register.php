<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="images/x-icon" href="img/v1.jpg" />
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

        <!-- Latest compiled JavaScript -->
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body style="background-color:#ababa8;">
   <div class="wrapper">
    <h1>Registration form</h1>

    <!--form container-->
    <div class="form-container">
    <form action="index.php" method="post">
        <!--flexbox and it's items-->
        <div class="flex">
            <div class="flex-item">
            <!--full name field-->
                <div class="field-container">
                    <label for="full-name">Full Name: <span class="required">*</span></label>
                    <input type="text" name="full-name"   pattern="^([a-zA-Z]{2,} ?)+$" id="full-name" placeholder="Your full name" required="required" />
                    <span class="error-messg"></span>              
                </div>
            
             <!--email field-->
                <div class="field-container">
                    <label for="email">Email: <span class="required">*</span></label>
                    <input type="email" name="email" id="email" placeholder="Your email" required="required" />
                    <span class="error-messg"></span>
                </div>

             <!--confirm email field-->
                <div class="field-container">
                    <label for="confirm-email">Confirm email: <span class="required">*</span></label>
                    <input type="email" name="confirm-email" id="confirm-email" placeholder="Re-enter email" required="required" />
                    <span class="error-messg"></span>
                </div>
                
            </div>
            <div class="flex-item">
                <!--contact no field-->
                <div class="field-container">
                    <label for="contact-no">Contact no.: <span class="required">*</span></label>
                    <input type="tel" name="contact-no" pattern=[0-9]{10} id="contact-no" placeholder="Mobile number" required="required" />
                    <span class="error-messg"></span>
                </div>

                <!--password field-->
                <div class="field-container">
                    <label for="passkey">Password: <span class="required">*</span></label>
                    <div class="passkey-box">
                    <input type="password" name="passkey" id="passkey" class="passkey" placeholder="Password" required="required" />
                    <span class="passkey-icon" data-display-passkey="off"><i class="fas fa-eye"></i>  </span>
                    </div>
                    <span class="error-messg"></span>
                </div>

                <!--confirm password field-->
                <div class="field-container">
                    <label for="confirm-passkey">Confirm password: <span class="required">*</span></label>
                    <div class="passkey-box">
                    <input type="password" name="confirm-passkey" class="passkey" id="confirm-passkey" placeholder="Re-enter password" required="required" />
                    <span class="passkey-icon" data-display-passkey="off"><i class="fas fa-eye"></i></span>
                    </div>
                    <span class="error-messg"></span>
                </div>
                
            </div>
        </div>
        <!--Submit button-->
        <div class="center"><input type="submit" value="Register"></div>
    </form>
    </div>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/register.js"></script>

</body>
</html>