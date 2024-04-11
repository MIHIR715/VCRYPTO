<?php
session_start(); // Start the session

$servername = "127.0.0.1:3306"; // Change this if your MySQL server is hosted elsewhere
$username = "root";
$password = "EVILS15";
$dbname = "vcrypto";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VCRPTO</title>
    <style>
        /* CSS styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(180deg, #000000 0%, rgba(0,0,0,0.8) 100%);
            color: #fff;
            transition: background-color 0.5s ease;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            overflow: hidden;
        }

        nav {
            background-color: rgba(0,0,0,0.5);
            color: #fff;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: background-color 0.5s ease;
        }

        nav.scrolled {
            background-color: #222;
        }

        nav h1 {
            float: left;
            margin: 0;
            transition: color 0.5s ease;
        }

        .nav-links {
            float: right;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            margin-right: 1rem;
            transition: color 0.5s ease;
        }

        .nav-links a:hover {
            color: #ff4545;
        }

        .login-btn, .register-btn {
            background-color: #ff4545;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
            transition: background-color 0.5s ease, transform 0.3s ease;
            position: fixed;
            right: 20px;
            top: 20px;
            z-index: 1001; /* Ensure buttons are on top of navbar */
        }

        .login-btn:hover, .register-btn:hover {
            background-color: #e10000;
            transform: scale(1.05);
        }

        .section {
            padding: 50px 0;
            transition: transform 0.5s ease;
        }

        .content-box {
            background-color: #333;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: background-color 0.5s ease;
            opacity: 0; /* Initially hidden */
            transform: translateY(50px); /* Slide down effect */
            transition: opacity 0.5s ease, transform 0.5s ease;
        }

        .content-box h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            transition: font-size 0.5s ease;
        }

        .content-box p {
            font-size: 1.2rem;
            line-height: 1.5;
            margin-bottom: 2rem;
        }

        .hero {
            background-image: url('background.jpg');
            background-size: cover;
            text-align: center;
            position: relative;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .hero button {
            background-color: #ff4545;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.5s ease, transform 0.3s ease;
        }

        .hero button:hover {
            background-color: #e10000;
            transform: scale(1.05);
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }

        /* Additional CSS for animations */
        #hiddenContent {
            opacity: 0;
            transition: opacity 0.5s ease;
        }

        .show-content {
            opacity: 1;
        }

        iframe {
            width: 100%;
            height: 500px;
            border: none;
            transition: transform 0.5s ease;
        }

        iframe:hover {
            transform: scale(1.05);
        }
        /* CSS styles */
.logo {
    display: flex;
    align-items: center;
    margin-top: 20px; /* Adjust the margin as needed */
}

.logo img {
    margin-right: 10px; /* Adjust the margin as needed */
}

    </style>
</head>
<body>
    <nav>
        <div class="container">
            <!-- <h1>VCRPTO</h1> -->
            <h1 class="logo">
                <img src="s.png" alt="VCRPTO Logo" style="height: 40px;">
               
            </h1>
            <div class="nav-links">
                <a href="#about">About</ayp>
                <a href="#how-it-works">How It Works</a>
                <a href="#get-started">Get Started</a>
            </div>
                        <!-- PHP: Add logic for login/register buttons -->
                        <?php
            if (isset($_SESSION['username'])) {
                // If user is logged in, display logout button
                echo '<form method="post" action="logout.php">
                        <button type="submit" class="login-btn">Logout</button>
                      </form>';
            } else {
                // If user is not logged in, display login/register buttons
                echo '<button class="login-btn" onclick="window.location.href=\'login.php\';">Login</button>
                      ';
            }
            ?>
            <!-- - <button class="register-btn" onclick="window.location.href='register.html';">Register</button> --> 
        </div>
    </nav>

    <section id="about" class="section">
        <div class="container">
            <div class="content-box" id="aboutBox">
                <h2>About</h2>
                <p>Welcome to our innovative Student Reward System powered by blockchain technology! Our platform aims to revolutionize the way students are rewarded for their achievements and contributions within educational institutions. By leveraging the transparency, security, and decentralization of blockchain, we ensure a fair and tamper-proof reward system.</p>
                <h3>Key Features:</h3>
                <ul>
                    <li>Transparent Reward Distribution: Every reward and recognition is recorded on the blockchain, providing a transparent and immutable record of achievements.</li>
                    <li>Decentralized Verification: Eliminate the need for a central authority to verify student achievements. Blockchain ensures that rewards are authenticated by consensus among network participants.</li>
                    <li>Enhanced Security: Blockchain technology secures student data and rewards against tampering and unauthorized access, ensuring the integrity of the system.</li>
                    <li>Efficient Tracking: Easily track student progress and achievements in real-time, enabling timely rewards and feedback.</li>
                    <li>Customizable Reward Parameters: Tailor the reward system to fit your institution's specific criteria and goals.</li>
                </ul>
                <p><strong>Why Blockchain?</strong></p>
                <p>Traditional reward systems often lack transparency and are susceptible to manipulation or errors. By utilizing blockchain technology, we address these challenges by providing a secure, transparent, and decentralized solution for rewarding student accomplishments.</p>
            </div>
        </div>
    </section>

    <section id="how-it-works" class="section">
        <div class="container">
            <div class="content-box" id="howItWorksBox">
                <h2>How It Works</h2>
                <p><strong>Student Achievement:</strong> Students earn rewards through academic excellence, participation in extracurricular activities, community service, and other notable contributions.</p>
                <p><strong>Blockchain Verification:</strong> Each reward is recorded as a transaction on the blockchain, ensuring its authenticity and preventing any alteration.</p>
                <p><strong>Reward Distribution:</strong> Upon verification, rewards are automatically distributed to students' accounts, ready to be redeemed for various benefits or privileges.</p>
            </div>
        </div>
    </section>

    <section id="get-started" class="hero section">
        <div class="container">
            <div class="content-box" id="getStartedBox">
                <h2>Welcome to Our Blockchain-Powered Student Reward System</h2>
                <p>Experience the future of student rewards with our blockchain-powered platform. Sign up now to join our growing community of institutions embracing transparent and fair reward systems.</p>
                <button id="showMoreBtn">Sign Up Now</button>
            </div>
        </div>
    </section>

    <div class="container">
        <!-- Hidden content initially -->
        <div id="hiddenContent" style="display: none;">
            <p>Sign up form will go here.</p>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2024 VCRPTO. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // JavaScript functionality for showing/hiding content
        document.addEventListener("DOMContentLoaded", function() {
            // Get the button and content elements
            const showMoreBtn = document.querySelector("#showMoreBtn");
            const hiddenContent = document.querySelector("#hiddenContent");

            // Add event listener to the button
            showMoreBtn.addEventListener("click", function() {
                // Toggle the display of the hidden content
                hiddenContent.classList.toggle("show-content");
                showMoreBtn.textContent = hiddenContent.classList.contains("show-content") ? "Hide Sign Up Form" : "Sign Up Now";
            });

            // Smooth scrolling for navigation links
            const navLinks = document.querySelectorAll('nav a');
            navLinks.forEach((link) => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const targetId = link.getAttribute('href').substring(1);
                    const targetSection = document.getElementById(targetId);
                    targetSection.scrollIntoView({ behavior: 'smooth' });
                });
            });

            // Change navbar color on scroll
            window.addEventListener('scroll', () => {
                const navbar = document.querySelector('nav');
                if (window.scrollY > 0) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });

            // Animation for content boxes
            const aboutBox = document.querySelector('#aboutBox');
            const howItWorksBox = document.querySelector('#howItWorksBox');
            const getStartedBox = document.querySelector('#getStartedBox');

            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }

            function animateOnScroll() {
                if (isInViewport(aboutBox)) {
                    aboutBox.style.opacity = '1';
                    aboutBox.style.transform = 'translateY(0)';
                }

                if (isInViewport(howItWorksBox)) {
                    howItWorksBox.style.opacity = '1';
                    howItWorksBox.style.transform = 'translateY(0)';
                }

                if (isInViewport(getStartedBox)) {
                    getStartedBox.style.opacity = '1';
                    getStartedBox.style.transform = 'translateY(0)';
                }
            }

            window.addEventListener('scroll', animateOnScroll);
            animateOnScroll(); // Initial check
        });
    </script>
</body>
</html>
