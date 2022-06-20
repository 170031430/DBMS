<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
    <title>Project</title>
</head>

<body>
    <section id="header">
        <div class="header container">
            <div class="nav-bar">
                <div class="brand">
                    <a href="#hero">
                        <h1><span>G</span>argi <span>B</span>havanam</h1>
                    </a>
                </div>
                <div class="nav-list">
                    <div class="hamburger">
                        <div class="bar"></div>
                    </div>
                    <ul>
                        <li><a href="#hero" data-after="Home">Home</a></li>
                        <li><a href="#Admin" data-after="Admin">Admin</a></li>
                        <li><a href="#Warden" data-after="Warden">Warden</a></li>
                        <li><a href="#about" data-after="About">About</a></li>
                        <li><a href="#contact" data-after="Contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="hero">
        <div class="hero container">
            <div>
                <h1>Welcome to Gargi Bhavanam<span></span></h1>
            </div>
        </div>
    </section>
    <section id="Admin">
        <div class="Admin container">
            <!-- <div class="Admin-top">
                <h1 class="Admin-title"><span>A</span>dmin</h1>
                <p>A Hostel Admin is responsible for managing and leading a team that provides services to a hostel.</p>
            </div> -->
            <div class="Admin-bottom">
                <div class="Admin-items">
                    <div class="Icons"><a href="./login.php"><img src="./images/admin.png" width="100px" height="100px"></a></div>
                    <p>Login Page</p>
                </div>
            </div>
        </div>
    </section>
    <!-- <section id="Warden">
        <div class="Warden container">
            <div class="Warden-top">
                <h1 class="Warden-title"><span>W</span>arden</h1>
                <p>A Hostel Warden is responsible for monitoring, counseling, and mentoring students who reside in campus hostels.</p>
            </div>
            <div class="Warden-bottom">
                <div class="Warden-items">
                    <div class="Icons"><a href="./wardenlogin.php"><img src="./images/warden.jpg" width="100px" height="100px"></a></div>
                    <p>Each Warden is employed by an University or a College to make sure that students who live in hostels follow rules. The Wardens job involves checking student rooms regularly for day-to-day attendance log.</p>
                </div>
            </div>
        </div>
    </section> -->
    <section id="about">
        <div class="about container">
            <div class="col-left">
                <div class="about-img">
                    <img src="./images/gargi.JPG" alt="img" width="450px" height="450px">
                </div>
            </div>
            <div class="col-right">
                <h1 class="about-title"><span>A</span>bout</h1>
                <h2>Gargi Bhavanam</h2>
                <p>This Hostel is in Amrita Vishwa Vidyapeetham, Coimbatore named Gargi Bhavanam. This girl's hostel is for B.tech 4th years, all the Master students and MBA students. The room is allotted for 1 person. The hostel has good environment full of greenery and they try their best to keep it clean every time. The rooms are also flexible. The maintenance is also good. The mess is inside the hostel and there are strict timings to follow it. Everyone should be inside the hostel by 9:00pm for their attendance call from their respective wardens.</p>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="contact container">
            <div>
                <h1 class="contact-title"> <span>C</span>ontact info</h1>
            </div>
            <div class="contact-items">
                <div class="contact-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/phone.png" /></div>
                    <div class="contact-info">
                        <h1>Phone</h1>
                        <h2>+91 (422) 2685 000</h2>
                        <h2>+91 (422) 2686 274</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/new-post.png" /></div>
                    <div class="contact-info">
                        <h1>Email</h1>
                        <h2>univhq@amrita.edu</h2>
                        <h2>rwgib@cb.amrita.edu</h2>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/map-marker.png" /></div>
                    <div class="contact-info">
                        <h1>Address</h1>
                        <h2>Amrita Vishwa Vidyapeetham,Ettimadai.</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="./app.js"></script>
</body>

</html>