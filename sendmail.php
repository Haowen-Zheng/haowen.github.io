<?php
$email = $_POST['email'];
$name = $_POST['name'];
$message = wordwrap($_POST['message'], 70, "\r\n");
$to = "haoliangzheng1005@gmail.com";
$headers = array(
    'From' => $email,
    'Reply-To' => $email,
    'X-Mailer' => 'PHP/' .phpversion()
);

$mailSent = mail($to,$subject, $message, $headers);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haoliang Design</title>
    <script src="https://kit.fontawesome.com/d97b293ecb.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <div class="wrapper">
            <img src="images/brandlogo.png" alt="">
            <h1>ZHL Design</h1>
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#work">Work</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <i class="fas fa-bars"></i>
        </div>
    </header>

    <main>
        <section id="home">
            <div class="wrapper">
                <div class="content">
                    <h2>This is Haoliang, I'm an artist, designer, athlete and rapper.</h2>
                    <p><a class="begin" href="#work">Let's begin!!</a></p>
                </div>
            </div>

        </section>

        <section id="work">
            <div class="wrapper">
                <h3>Work</h3>
                <div class="work">
                    <h4>Website+Drawing</h4>
                    <div class="row">
                        <div class="column">
                            <img src="images/my-work-web-sum1.jpeg" alt="">
                            <img src="images/my-work-web.jpg" alt="">
                        </div>
                        <div class="column">
                            <img src="images/my-work-sketch.jpeg" alt="">
                        </div>
                        <div class="column">
                            <img src="images/my-work-watercolour.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
      
        <section id="about">
            <div class="wrapper">
                <h3>About</h3>
                <div class="grid">
                    <div class="column">
                        <p>Name: Haoliang Zheng</p>
                        <p>Age: 24</p>
                        <p>Nation: China</p>
                        <p>Education: Bachelor of Visual Arts,<br>
                            Bachelor of Interactive Design</p>
                    </div>
                    <div class="column">
                        <img src="images/portrait.png" alt="">
                    </div>
                </div>
        </section>
        <section id="contact">
            
                <h3>Contact</h3>
                <h4>Please contact me if you have any questions!</h4>
                <div class="wrapper">
                    <div class="contact-left">
                    <form class="contact-form" method="post" action="sendmail.php">
                            <p>
                                <?php
                                if($mailSent){
                                    echo "Thanks $name, your message was successfully sent and I'll reply as soon as I can";
                                }else{
                                    echo "Oops, sorry $name, but there was an error sending your message. Your message is important to me, though, so please try it again later ";
                                }    
                                ?>
                              </p> 
                              <p>   
                                  <button type="submit">Send</button>
                            </p>
                        </form>
                    </div>

                    <div class="contact-right">
                        <h3>Reach us</h3>

                        <p>Email:<br>
                        haoliangzheng1005@gmail.com</p>

                        <p>Phone:<br>
                            +64 02108601772</p>

                        <p>Address:<br>
                            101a Haibei Rd, Zhanjiang, Guangdong, China</p>
                    </div>
                </div>

        </section>
    </main>
    <footer>
        <div class="wrapper">
            <p>&copy; Haoliang Design 2021</p>
        </div>
    </footer>
    <script src="js/main.js"></script>

</body>

</html>