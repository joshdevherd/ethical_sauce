<?php 

    $message_sent = false;

    if(isset($_POST['email']) && $_POST['email'] != ''){
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $subject = "Contact Form";
            $message = $_POST['message'];

            $recipient = "joshuashepherd877@gmail.com";
            $body = "";

            $body .= "From: " . $name . "\r\n";
            $body .= "Email: " . $email . "\r\n";
            $body .= "Message: " . $message . "\r\n";

            mail($recipient, $subject, $body);

            $message_sent = true;
        } 
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Read about modern day ethical
    concepts and issues via our blog, and save the world in style">
    <meta name="keywords" content="ethics, philosophy, ethical clothing, ethical">
    <meta name="author" content="Josh Shepherd">
    <title>Home | Ethical Sauce</title>
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- font awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <style>
      /* main{
          height: 100vh;
      } */

      /* .nav-wrapper {
          position: fixed;
          z-index: 1000;
      } */

      form{
          padding: 2em 0 !important;
      }
      #abv-fold {
          min-height: 80vh !important;
          max-width: 100vw !important;
          background-image: url(img/es_home.jpg);
          background-repeat: no-repeat;
          background-position: 90% 70%;
          background-size: cover;

      }
      #about_img {
          float: right;
      }
  </style>
</head>
<body>
    <header>
        <nav class="nav-wrapper black">
            <div class="container">
                <a href="index.html" class="brand-logo">Ethical Sauce</a>
                 <!-- mobile menu trigger -->
                 <a href="#" class="sidenav-trigger" data-target='mobile-menu'>
                    <i class="material-icons">menu</i>
                </a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="index.html#about">About</a></li>
                    <li><a href="index.html#blog_home">Blog</a></li>
                    <li><a href="index.html#store_home">Visit Store</a></li>
                    <li><a href="index.html#write">Write for Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <!--social buttons-->
                    <li><a href="#" class='btn-floating btn-small red darken-4 tooltipped' data-tooltip='Instagram'>
                        <i class="fab fa-instagram"></i>
                    </a></li>
                    <li><a href="#" class='btn-floating btn-small red darken-4 tooltipped' data-tooltip='Facebook'>
                        <i class="fab fa-facebook"></i>
                    </a></li>
                    <li><a href="#" class='btn-floating btn-small red darken-4 tooltipped' data-tooltip='Twitter'>
                        <i class="fab fa-twitter"></i>
                    </a></li>
                    
                </ul>
            </div>
        </nav>
        <!-- mobile nav -->
        <ul class="sidenav grey lighten-2" id='mobile-menu'>
            <li><a href="#about">About</a></li>
                    <li><a href="index.html#blog_home">Blog</a></li>
                    <li><a href="index.html#store_home">Visit Store</a></li>
                    <li><a href="index.html#write">Write for Us</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="instagram.com">
                        <i class="fab fa-instagram"></i>
                        Instagram
                    </a></li>
                    <li><a href="facebook.com">
                        <i class="fab fa-facebook"></i>
                        Facebook
                    </a></li>
                    <li><a href="twitter.com">
                        <i class="fab fa-twitter"></i>
                        Twitter
                    </a></li>
        </ul>
    </header>
            </div>
        </nav>
            <?php 
                if($message_sent):
            ?>
            <h3 class="flow-text center">Thanks for your message. We will be in touch shortly</h3>
            <?php else: ?>
        <main>
            <div class="container">
                
            </div>
            <div class="container">
                <h2 class="flow-text">Contact Us</h2>
                <div class="row">
                    <div class="col s4">
                        <div class="card">
                            <div class="card-content">
                                <p class="flow-text">
                                    Are you a writer, and passionate about
                                    our vision? Are you interested in
                                    writing for us on your own slot on our blog?
                                    Contact us HERE for more details...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card">
                            <div class="card-content">
                                <p class="flow-text">
                                    Have questions about our services that
                                    we provide, or any of our products? Or just
                                    to make a comment and let us know how we're doing?
                                    Contact us HERE...
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col s4">
                        <div class="card">
                            <div class="card-content">
                                <p class="flow-text">
                                    Do you represtent a charity or want us to support one of
                                    your causes, or want to reach out to us for any other reason?
                                    Our door is open. Contact us here...                               
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <form method="POST" action="mail.php" class="col s12">
                        <div class="input-field">
                            <i class="material-icons prefix">person</i>
                            <input type="text" id='name' name="name">
                            <label for="name">Your Name</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">email</i>
                            <input type="email" id='email' name="email">
                            <label for="email">Your Email</label>
                        </div>
                        <div class="input-field">
                            <i class="material-icons prefix">message</i>
                            <textarea name="message" id="message" name ="message" class="materialize-textarea"></textarea>
                            <label for="message">Your Message</label>
                        </div>
                        <div class="input-field center">
                            <button class="btn" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
            
        </main>
        

        <!-- footer -->
        <section class="page-footer black">
        
            <div class="row center">
                <div class="container">
                    <div class="col s12 m4">
                        <h3 class="flow-text">
                            Top Charities
                        </h3>
                        <ul class="">
                            <a href="instagram.com" class="white-text"><li>
                                <i class="material-icons">monetization_on</i> Charity 1
                            </li></a>
                            <a href="facebook.com" class="white-text"><li>
                                <i class="material-icons">monetization_on</i> Charity 2
                            </li></a>
                            <a href="facebook.com" class="white-text"><li>
                                <i class="material-icons">monetization_on</i> Charity 3
                            </li></a>
                        </ul>
                    </div>
                    <div class="col s12 m4">
                        <h3 class="flow-text">Boring Stuff</h3>
                        <ul>
                            <a href="instagram.com" class="white-text"><li>
                                <i class="material-icons">shield</i> Privacy Policy
                            </li></a>
                            <a href="facebook.com" class="white-text"><li>
                                <i class="material-icons">done_all</i> Terms &amp; Conditions
                            </li></a>
                            
                        </ul>
                    </div>
                    <div class="col s12 m4">
                        <h3 class="flow-text">
                            Socials
                        </h3>
                        <ul class="">
                            <a href="instagram.com" class="white-text"><li>
                                <i class="fab fa-instagram"></i> Instagram
                            </li></a>
                            <a href="facebook.com" class="white-text"><li>
                                <i class="fab fa-facebook"></i> Facebook
                            </li></a>
                            <a href="facebook.com" class="white-text"><li>
                                <i class="fab fa-twitter"></i> Twitter
                            </li></a>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="row center">
                <div class="container">
                    
                    <div class="col s12">
                        <h3 class="flow-text">
                            Thank you for all your support
                        </h3>
                        <p class="flow-text">
                            There are many ways you can support our mission. Try our links above and connect to
                            us on our social media pages and have a look at our favourite charities. If you are a
                            charity, or an ambassador for one, feel free to visit our 
                            <a href="#" class="flow-text white-text">contact page</a>.
                        </p>
                    </div>
                </div>
            </div>
        </section>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
        $('.sidenav').sidenav();
        $('.materialboxed').materialbox();
        $('.parallax').parallax();
        $('.tabs').tabs();
        $('.tooltipped').tooltip();
        $('.scrollspy').scrollSpy();
        $('.card').mouseover(function(e) {
            $(e.currentTarget).addClass('red lighten-4')
        });
        $('.card').mouseout(function(e) {
            $(e.currentTarget).removeClass('red lighten-4')
        });
    });
    </script>
    <?php endif; ?>
</body>
</html>
