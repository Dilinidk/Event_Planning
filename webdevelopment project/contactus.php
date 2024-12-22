<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Event Plan</title>

    <link rel="stylesheet" href="style5.css">
</head>
      


<body>

     <!-- javascript -->
    <script type="text/javascript">
        function validateName() {
            var rValue = true;

            var name = document.forms["myForm"]["Name"].value;
            var email = document.forms["myForm"]["Email"].value;
            var pNumber= document.forms["myForm"]["Number"].value;

            if(name =="" || name == null) {
                alert("Name must be filled out or incorrect");
                rValue = false;
            }

            if(email =="" || !email.includes("@")) {
                alert("email not valid");
                rValue = false;
            }

            if(!pNumber.match(/^\d{10}$/)) {
                alert("Phone number not valid");
                rValue=false;
            }
            return rValue;
        }
        
    </script>

        <!--nav bar-->
    <section class="header">
        <a href= "index.html" class="logo"><span>MY</span>EVENT</a>
        <div class="navback" >
        <nav class="navbar">
                <a  href="index.html">Home</a>
                <a href="service.html">Services </a>
                <a href="aboutus.html">About Us </a>
                <a href="prices.html">Prices </a>
                <a href="contactus.html"  class="active">Contact</a>
        </nav>
        </div>
        <div id="menu-bars" class="fas fa-bars"></div>
    </section><br><br>

    <section class="contact"  id="contact">
        <h1 class="heading">contact <span>us</span></h1>
        
        <form name = "myForm"  method="post" action="./submitted.php" onsubmit="return validateName()">
            <div class="inputBox">
                <input type="text" placeholder="name" name="Name">
                <input type="email" placeholder="email" name="Email">
            </div>

            <div class="inputBox">
                <input type="text" placeholder="number" name="Number">
                <input type="text" placeholder="subject" name="Subject">
            </div>

            <div class="inputBox">
                <intput type="text" placeholder="message" name="message">
            </div>
            

            <!-- <textarea name="" placeholder="your message" name="Message" id="Message" cols="30" rows="10"></textarea> -->
            <input type="submit" value="send message" name="send" class="btn">
        </form>

    </section>


<!------------------------------------------------------------------------------------------------------->
    <footer class="footer">
        <div class="footer-container">
          <div class="footer-item">
            <a href="#" class="footer-logo"><span>MY</span>EVENT</a>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam et magna nec magna pulvinar tristique.</p>
          </div>
          <div class="footer-item">
            <h2>Services</h2>
            <ul>
              <li><a href="#">Event Planning</a></li>
              <li><a href="#">Catering</a></li>
              <li><a href="#">Décor</a></li>
              <li><a href="#">Entertainment</a></li>
            </ul>
          </div>
          <div class="footer-item">
            <h2>Contact</h2>
            <ul>
              <li><a href="#">Address: 123 Main Street, Anytown, CA 12345</a></li>
              <li><a href="#">Phone: (555) 555-5555</a></li>
              <li><a href="#">Email: info@myevent.com</a></li>
            </ul>
          </div>
          <div class="footer-item">
            <h2>Follow Us</h2>
            
            <ul class="social-media">
              <li><a href="www.facebook.com" ><img src="fb.svg" width="30px" alt="facebook"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="www.instagram.com"><img src="insta.svg" width="30px" alt="insatagram"><i class="fab fa-twitter"></i></a></li>
              <li><a href="www.twitter.com"><img src="twitter.svg" width="30px" alt="twitter"><i class="fab fa-instagram"></i></a></li>
            </ul>
          
          </div>
        </div>
        <p class="copyright">Copyright &copy; 2024 MYEVENT. All Rights Reserved.</p>
      </footer>

      </body>
      </html>
