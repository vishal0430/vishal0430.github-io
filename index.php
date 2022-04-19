<!DOCTYPE html>
<html lang="en">
<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'PHPMailer-master/src/Exception.php';
    require 'PHPMailer-master/src/PHPMailer.php';
    require 'PHPMailer-master/src/SMTP.php';
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vishal Patole</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

</head>

<body>
    
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio.</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Home</a></li>
                <li><a href="#about" class="menu-btn">About</a></li>
                <li><a href="#services" class="menu-btn">Services</a></li>
                <li><a href="#skills" class="menu-btn">Skills</a></li>
                <li><a href="#project" class="menu-btn">Projects</a></li>
                <li><a href="#teams" class="menu-btn">Team</a></li>
                <li><a href="#contact" class="menu-btn">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is</div>
                <div class="text-2">Vishal Patole</div>
                <div class="text-3">And I'm a <span class="typing"></span></div>
                <a href="#contact">Hire me</a>
            </div>
        </div>
    </section>

    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/profile-1.jpg" alt="">
                </div>
                <div class="column right">
                    <div class="text">I'm Vishal and I'm a <span class="typing-2"></span></div>
                    <p>I’m a problem solver, not because I like problems, but because I like solving problems & that's
                        what describes me best. I am a Full-Stack Developer and a Freelancer who has pretty good
                        experience in the same. For me, coding is fun and exciting always. I love learning new concepts
                        & technologies. For me, hard work and motivation are the keys to success.</p>
                    <a href="#">Download CV</a>
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">My services</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Apps Design</div>
                        <p>Designing interfaces for Android / IOS / Web
                            Applications.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Advertising</div>
                        <p>Advertising your Products like Applications / Services etc.
                        </p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Development</div>
                        <p>Developing Android / IOS / Web Applications.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">My skills</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">My creative skills & experiences.</div>
                    <p></p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>80%</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>80%</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                            <span>50%</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>
                            <span>70%</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Android Development</span>
                            <span>75%</span>
                        </div>
                        <div class="line ad"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Flutter Development</span>
                            <span>80%</span>
                        </div>
                        <div class="line fd"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Java</span>
                            <span>70%</span>
                        </div>
                        <div class="line java"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Python</span>
                            <span>90%</span>
                        </div>
                        <div class="line python"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>C</span>
                            <span>90%</span>
                        </div>
                        <div class="line c"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>C++</span>
                            <span>80%</span>
                        </div>
                        <div class="line cpp"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- project section start -->
    <section class="project" id="project">
        <div class="max-width">
            <h2 class="title">My Projects</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <a href="https://play.google.com/store/apps/details?id=com.vkdevlops.cprogramfree" target="_blank">
                        <div class="box">
                            <img src="images/c.png" alt="">
                            <div class="text" style="color: black;">C Programming Learn Code Prepare</div>
                            <!-- <p style="color: white;">Learn Code Prepare.</p> -->
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="https://play.google.com/store/apps/details?id=com.vkdevlops.documentscanner"
                        target="_blank">
                        <div class="box">
                            <img src="images/document_scanner.png" alt="">
                            <div class="text" style="color: black;">Document Scanner - PDF Creator</div>
                            <!-- <p style="color: white;">Designing UI as per requirements of Client.</p> -->
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="https://play.google.com/store/apps/details?id=com.vkdevlops.qrscannercreator"
                        target="_blank">
                        <div class="box">
                            <img src="images/scanx.jpg" alt="">
                            <div class="text" style="color: black;">ScanX Pro</div>
                            <!-- <p style="color: white;">Decision Support Consultant and Manages Marketing Strategies.</p> -->
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="https://play.google.com/store/apps/details?id=com.vishalpatole.sudoku"
                        target="_blank">
                        <div class="box">
                            <img src="images/sudoku.png" alt="">
                            <div class="text" style="color: black;">ScanX Pro</div>
                            <!-- <p style="color: white;">Decision Support Consultant and Manages Marketing Strategies.</p> -->
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="https://play.google.com/store/apps/details?id=com.vishalpatole.wordsspy"
                        target="_blank">
                        <div class="box">
                            <img src="images/wordsspy.png" alt="">
                            <div class="text" style="color: black;">ScanX Pro</div>
                            <!-- <p style="color: white;">Decision Support Consultant and Manages Marketing Strategies.</p> -->
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">My team</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="images/profile-1.jpg" alt="">
                        <div class="text">Vishal Patole</div>
                        <p>Managing and Developing Project as per UI provided.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-3.jpg" alt="">
                        <div class="text">Swapnali Patole</div>
                        <p>Designing UI as per requirements of Client.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-2.jpg" alt="">
                        <div class="text">Vaishnavi Gaikwad</div>
                        <p>Decision Support Consultant and Manages Marketing Strategies.</p>
                    </div>
                </div>
                <!-- <div class="card">
                    <div class="box">
                        <img src="images/profile-4.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/profile-5.jpeg" alt="">
                        <div class="text">Someone name</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Contact me</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in Touch</div>
                    <p>Fill the form to get any service quote or to get your query resolved.
                    </p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Name</div>
                                <div class="sub-title">Vishal Patole</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Address</div>
                                <div class="sub-title">Pune, Maharashtra</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Email</div>
                                <div class="sub-title">vishalpatole428@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Message me</div>
                    <form action="#" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" placeholder="Name" name="name" required>
                            </div>
                            <div class="field email">
                                <input type="email" placeholder="Email" name="email" required>
                            </div>
                        </div>
                        <div class="field">
                            <input type="text" placeholder="Subject" name="subject" required>
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="Message.." name="message" required></textarea>
                        </div>
                        <div class="button-area">
                            <button type="submit">Send message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- footer section start -->
    <footer>
        <span>Created By <a href="https://www.vishalp.in">Vishal Patole</a> | <span class="far fa-copyright"></span>
            2022 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
</body>

<?php
        if($_POST!=null){
            $mail = new PHPMailer();
            $mail->IsSMTP();
            $mail->Mailer = "smtp";
            $mail->SMTPDebug  = 0;  
            $mail->SMTPAuth   = TRUE;
            $mail->SMTPSecure = "tls";
            $mail->Port       = 587;
            $mail->Host       = "smtp.gmail.com";
            $mail->Username   = "vishupiddu4127@gmail.com";
            $mail->Password   = "Hero@0430";
            $mail->IsHTML(true);
            $mail->AddAddress("vishalpatole428@gmail.com", "Vishal Patole");
            $mail->SetFrom("vishalpatole428@gmail.com", "{$_POST['name']}");
            $mail->AddReplyTo("{$_POST['email']}", "{$_POST['name']}");
            // $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
            $mail->Subject = $_POST["subject"];
            $content = $_POST["message"];
            $mail->MsgHTML($content); 
            if(!$mail->Send()) {
                echo '<script>alert("Something went wrong. Please try again and check email.")</script>';
            } else {
                echo '<script>alert("Request sent successfully !!")</script>';
            }
            $_POST = array();
        }
      ?>

</html>