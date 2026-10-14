<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Master Speed Academy</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background: #f7f5ff;
    color: #172554;
}

nav {
    background: #10254e;
    color: white;
    padding: 20px 7%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 15px;
}

nav h2 span {
    color: #ffd43b;
}

nav a {
    color: white;
    text-decoration: none;
    margin: 8px;
    font-weight: bold;
}

nav a:hover {
    color: #ffd43b;
}

.hero {
    min-height: 400px;
    padding: 75px 8%;
    display: flex;
    align-items: center;
    background: linear-gradient(120deg, #c8f4ff, #f0dcff, #fff0cf);
}

.hero-content {
    max-width: 600px;
}

.tag {
    display: inline-block;
    background: #ffdf59;
    padding: 10px 18px;
    border-radius: 25px;
    font-weight: bold;
}

.hero h1 {
    font-size: clamp(38px, 6vw, 65px);
    margin: 22px 0;
    line-height: 1.1;
}

.hero h1 span {
    color: #7514df;
}

.hero p {
    font-size: 19px;
    line-height: 1.7;
    margin-bottom: 25px;
}

.btn {
    display: inline-block;
    background: linear-gradient(90deg, #7514df, #a000e8);
    color: white;
    text-decoration: none;
    padding: 15px 25px;
    border-radius: 12px;
    font-weight: bold;
    margin: 5px 5px 5px 0;
}

.btn:hover {
    transform: translateY(-3px);
}

.courses {
    padding: 55px 7%;
    text-align: center;
}

.courses h2 {
    font-size: 32px;
    margin-bottom: 12px;
}

.subtitle {
    color: #64748b;
    margin-bottom: 30px;
}

.cards {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
    gap: 22px;
    margin-top: 30px;
}

.card {
    padding: 30px 20px;
    border-radius: 18px;
    background: white;
    box-shadow: 0 5px 20px #17255412;
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-6px);
}

.card .emoji {
    font-size: 42px;
    margin-bottom: 15px;
}

.card h3 {
    margin-bottom: 12px;
}

.card p {
    color: #64748b;
    line-height: 1.6;
}

.purple { border-bottom: 5px solid #a855f7; }
.green  { border-bottom: 5px solid #34d399; }
.orange { border-bottom: 5px solid #fb923c; }
.pink   { border-bottom: 5px solid #f472b6; }

.cta {
    margin: 10px 7% 50px;
    padding: 35px 20px;
    text-align: center;
    border-radius: 20px;
    color: white;
    background: linear-gradient(100deg, #6414d9, #2563eb);
}

.cta h2 {
    margin-bottom: 15px;
}

footer {
    background: #10254e;
    color: white;
    text-align: center;
    padding: 22px;
}

@media (max-width: 600px) {
    nav {
        flex-direction: column;
        text-align: center;
    }

    .hero {
        padding: 45px 7%;
    }
}
</style>
</head>

<body>

<nav>
    <h2>⌨️ Master <span>Speed</span> Academy</h2>
    <div>
        <a href="index.php">Home</a>
        <a href="#courses">Courses</a>
        <a href="#about">About</a>
    </div>
</nav>

<section class="hero">
    <div class="hero-content">
        <span class="tag">⭐ Improve Your Typing Skills!</span>

        <h1>Master <span>Speed</span><br>Academy</h1>

        <p>
            Practice typing, increase your speed
            and build a better future!
        </p>

        <a href="#courses" class="btn">⌨️ Start Learning →</a>
    </div>
</section>

<section class="courses" id="courses">
    <h2>Explore Our Features 📚</h2>
    <p class="subtitle">
        Learn typing easily and improve your skills every day.
    </p>

    <div class="cards">
        <div class="card purple">
            <div class="emoji">⌨️</div>
            <h3>Typing Practice</h3>
            <p>Practice typing and improve your speed with simple exercises.</p>
        </div>

        <div class="card green">
            <div class="emoji">📊</div>
            <h3>Track Progress</h3>
            <p>Learn to improve your typing speed and accuracy.</p>
        </div>

        <div class="card orange">
            <div class="emoji">🏆</div>
            <h3>Earn Achievements</h3>
            <p>Challenge yourself and celebrate your progress.</p>
        </div>

        <div class="card pink">
            <div class="emoji">🎓</div>
            <h3>For Everyone</h3>
            <p>Suitable for students, beginners and professionals.</p>
        </div>
    </div>
</section>

<section class="cta" id="about">
    <h2>Your Typing Journey Starts Here!</h2>
    <p>Type Better. Learn Faster. Achieve More.</p>
</section>

<footer>
    <p>© 2026 Master Speed Academy | All Rights Reserved</p>
</footer>
<a href="login.php" style="
background:#764ba2;
color:white;
padding:12px 25px;
text-decoration:none;
border-radius:8px;
display:inline-block;
">
Login
</a>
<br><br>
<a href="register.php" style="
background:#28a745;
color:white;
padding:12px 25px;
text-decoration:none;
border-radius:8px;
display:inline-block;
">
Register
</a>
<br><br>
<a href="practice.php" style="
background:#ff9800;
color:white;
padding:12px 25px;
text-decoration:none;
border-radius:8px;
display:inline-block;
">
Start Typing Practice
</a>
<br><br>
<a href="about.php" style="
background:#e91e63;
color:white;
padding:12px 25px;
text-decoration:none;
border-radius:8px;
display:inline-block;
">
About Us
</a>
<br><br>
<a href="contact.php" style="
background:#009688;
color:white;
padding:12px 25px;
text-decoration:none;
border-radius:8px;
display:inline-block;
">
Contact Us
</a>
</body>
</html>