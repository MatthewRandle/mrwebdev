<?php
    ini_set("session.save_path", "/var/lib/php/sessions");
    session_start();
    header('X-Frame-Options: DENY');
    header("X-XSS-Protection: 1; mode=block");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="./css/Global.css" />
        <link rel="stylesheet" type="text/css" href="./css/Index.css" />
        <link rel="stylesheet" type="text/css" href="./css/Navbar.css" />
        <link rel="stylesheet" type="text/css" href="./css/Footer.css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
        <link rel="canonical" href="https://misterweb.dev" />
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/favicon.ico" type="image/x-icon">

        <title>MR Web Design & Development</title>
        <meta name="description" content="Web design and development, from basic static sites to single page applications, each beautiful, modern and fully custom built" />
        <meta content="width=device-width, initial-scale=1" name="viewport" />
    </head>

    <body>
        <div class="navbar">
            <h2 class="navbar_logo" onclick="scrollToTop()">MR</h2>
            <div class="navbar_right">
                <p class="navbar_contact" onclick="scrollToContact()">Contact Me</p>
            </div>
        </div>

        <div class="hero">
            <div class="hero_left">
                <img src="./assets/ampersand.svg" alt="Ampersand">
                <h3>Web Design</h3>
                <h3>Development</h3>
                <p>Creating professional, modern and beautiful websites at an affordable price.</p>
            </div>
        
            <div class="hero_right">
                <img src="./assets/hero-illustration.svg" alt="Me at computer desk">
                <div class="circle">
                    <div class="circle_section green"></div>
                    <div class="circle_section orange"></div>
                    <div class="circle_section purple"></div>
                </div>
            </div>

            <div class="chevron_container">
                <div class="chevron"></div>
                <div class="chevron"></div>
                <div class="chevron"></div>
            </div>
        </div>

        <section class="benefits">
            <h1 data-aos="fade-right" data-aos-duration="750">What I can do for you</h1>
            <div class="benefits_top_panel" data-aos="fade-right" data-aos-duration="1000">
                <img class="responsive" src="./assets/Responsive.svg" alt="Monitor, Tablet and Mobile phone showcasing different screen sizes">
                <h3>Responsive Design</h3>
                <p>Every website I build is designed to adapt to every screen size - From desktop to mobile, ensuring every user gets
                    the perfect experience no matter the device.</p>
            </div>
            <div class="benefits_bottom">
                <div class="benefits_bottom_panel" data-aos="fade-right" data-aos-duration="1000">
                    <img class="fast" src="./assets/stopwatch.png" alt="Monitor, Tablet and Mobile phone showcasing different screen sizes">
                    <h3>Super Fast Load Times</h3>
                    <p>
                        Every website
                        I build will be optimized and developed with speed in mind - Allowing you to retain users that land on your site and provide a truly lightning
                        fast experience.
                    </p>
                </div>

                <div class="benefits_bottom_panel" data-aos="fade-right" data-aos-duration="1000">
                    <img class="seo" src="./assets/seo.png" alt="Monitor, Tablet and Mobile phone showcasing different screen sizes">
                    <h3>SEO Optimized</h3>
                    <p>
                        The better your site is optimized for search engines, the more users will find your site. 
                        Every site I build has exceptional SEO that boosts online presence.
                    </p>
                </div>
            </div>
        </section>

        <section class="whyChooseMe">
            <h2 data-aos="fade-up" data-aos-duration="750">Why Choose Me?</h2>
            <ul>
                <li data-aos="fade-up" data-aos-duration="750">
                    <div class="whyChooseMe_image_container"><img src="./assets/paintbrush.svg" alt="Paintbrush"></div>
                    <p>Your website will be designed fully custom from the ground up with your business in mind. Wether a sleek and minimal 
                        design suits your needs or a colorful, playful design.</p>
                </li>
                <li data-aos="fade-up" data-aos-duration="750">
                    <div class="whyChooseMe_image_container"><img src="./assets/money.svg" alt="Money"></div>
                    <p>
                        My website design and development prices are extremely affordable with no hidden charges. Since every 
                        website is different every price is different - get in <span onclick="scrollToContact()">contact</span> with me to discuss.
                    </p>
                </li>
                <li data-aos="fade-up" data-aos-duration="750">
                    <div class="whyChooseMe_image_container"><img class="whyChooseMe_heart" src="./assets/passion.svg" alt="Heart"></div>
                    <p>
                        I have been creating things for years and fell in love with web
                        design and development. Every website I create I give my full
                        attention and passion, ensuring you get a quality product.
                    </p>
                </li>
            </ul>
        </section>

        <section class="portfolio_container">
            <h2 data-aos="fade-up" data-aos-duration="750">My Previous Work</h2>
            <div class="portfolio" data-aos="fade-up" data-aos-duration="1000">
                <a href="https://exportknowledge.com/" rel="noopener noreferrer" target="_blank"><img src="./assets/exportknowledge.png" alt="A Clients website"></a>
                <a href="https://marleypaulsmithroofing.com" rel="noopener noreferrer" target="_blank"><img src="./assets/marleypaulsmith.png" alt="A Clients website"></a>
                <img src="./assets/stripe.png" alt="A Clients website">
            </div>
        </section>
        
        <section id="contact" class="contact">
            <h2 data-aos="fade-up" data-aos-duration="750">Get in touch</h2>
            <form action="sendMessage.php" method="POST" data-aos="fade-up" data-aos-duration="750" id="form" name="form">
                <div class="form_group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" required>
                </div>

                <div class="form_group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <label for="message">Your Message</label>
                <textarea name="message" id="message" cols="30" rows="5" required></textarea>

                <div class="form_consent">
                    <input type="checkbox" name="checkbox" style="margin-right: 10px;" required>
                    <p>
                        You allow the storage of your Name/Email and agree to our <a href="./privacy-policy">Privacy Policy</a>
                        and <a href="./terms-and-conditions">Terms & Conditions</a>
                    </p>
                </div>

                <button type="submit" name="submit">
                    <p>SEND MESSAGE</p>
                </button>

                <?php
                    if(isset($_SESSION["contactError"])) {
                        if($_SESSION["contactError"] == true) {
                            echo "<p class='contact_error'>There was a problem sending the email, please try again. If the problem persists you can email directly to <span>contact@misterweb.dev</span>. Sorry for the inconvenience.</p>";
                            unset($_SESSION['contactError']);
                        }
                    }
                ?>
            </form>            
        </section>

        <footer>
            <div class="footer_left">
                <h2 class="footer_logo" onclick="scrollToTop()">MR</h2>
                <div class="footer_links">
                    <a href="./terms-and-conditions">Terms & Conditions</a>
                    <a href="./privacy-policy">Privacy Policy</a>
                </div>
            </div>

            <a href="https://www.facebook.com/mrwebdevdesign" rel="noopener noreferrer" target="_blank"><img src="./assets/facebook.png" alt="Facebook Logo"></a>
        </footer>

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                once: true
            });
        </script>
        <script src="Index.js"></script>
    </body>
</html>