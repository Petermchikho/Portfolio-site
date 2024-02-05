<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="../../assets/css/about.css">
    <link rel="stylesheet" href="../../assets/vendor/bootstrap-icons/bootstrap-icons.css">
</head>
<body>
    <header 
    class="header" 
    id="header">
        <div 
        class="logo">
          <p class="logo-text">
            Peter.
          </p>
        </div>

        <nav 
        class="nav" 
        id="nav">
            <a href="../../index.html">
                <p 
                >home</p>
            </a>
            <a href="../about/about.html">
                <p 
                >
                about</p>
            </a>
            <a href="../work/work.html">
                <p>work</p>
            </a>
            <a href="../services/services.html">
                <p>services</p>
            </a>
            <a href="../gallery/gallery.html">
                <p>gallery</p>
            </a>
            <a href="../contact/contact.html">
                <p
                class="active">contact</p>
            </a>
        </nav>
        <div class="harmburger">
            <i class="bi bi-list" id="open-nav">

            </i>
            <i class="bi bi-x" id="close-nav">

            </i>
        </div>


    </header>
    <main>
        <section class="details-main section-padding">
            <div class="socials">
                <a href="">
                    <i class="bi bi-facebook">

                    </i>
                </a>
                <a href="">
                    <i class="bi bi-twitter">

                    </i>
                </a>
                <a href="">
                    <i class="bi bi-instagram">

                    </i>
                </a>
            </div>
            <div class="about">
                <div class="image-text">
                    <img src="../../assets/images/services/sitemap_contact.png" alt="">
                    <h6>CONTACT US</h6>
                </div>
                <div class="text-circle">
                    <span class="circle-blue">

                    </span>
                    <p>
                        lets talk
                    </p>
                </div>
            </div>
            <?php
                if(!empty($_POST["send"])) {
                    $Name = $_POST["Name"];
                $Email = $_POST["Email"];
                    $Phone = $_POST["Phone"];
                    $Message = $_POST["Message"];
                    $toEmail = "petercharlesmchikho1@gmail.com";
                
                    $mailHeaders = "Name: " . $Name .
                    "\r\n Email: ". $Email  . 
                    "\r\n Phone: ". $Phone  . 
                    "\r\n Message: " . $Message . "\r\n";

                    if(mail($toEmail, $Name, $mailHeaders)) {
                        $message = "Your Message has been sent";
                    }
                }
            ?>
            <form name="emailContact" method="post">
                <h5>Say hello!</h5>
                <input  class="full" type="text" name="Name" id="" placeholder="Name">
                <input class="full" type="email" name="Email" id="" placeholder="Email">
                <input  class="full" type="text" name="Phone" id="" placeholder="Phone numer">
                <textarea name="Message" id="" cols="30" rows="10" placeholder="Message"></textarea>
                <?php if (! empty($message)) {?>
                <div class='success'>
                    <h6><?php echo $message; ?>	</h6>
                </div>
                <?php } ?>
                <div class="send-btn">
                    <input type="submit" value="send" name="send">
                </div>
                
            </form>
            
        </section>
    </main>
    <footer class="section-padding">
        <p class="text-footer">
            Peter -Innovate your dream : &copy;2024 powered by <a href="http://nativeback.com" target="_blank" rel="noopener noreferrer"> NativeBack</a>
        </p>

    </footer>
    <a href="#" class="back-to-top" id="back-to-top"><i class="bi bi-chevron-up"></i></a>

    <script src="../../assets/js/about.js"></script>
</body>
</html>