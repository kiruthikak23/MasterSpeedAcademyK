<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - Master Speed Academy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #36d1dc, #5b86e5);
            text-align: center;
            padding: 30px;
        }
        .box {
            background: white;
            max-width: 450px;
            margin: 50px auto;
            padding: 30px;
            border-radius: 15px;
        }
        h1 {
            color: #5b86e5;
        }
        input, textarea {
            width: 90%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 6px;
        }
        button, a {
            background: #5b86e5;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 6px;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="box">
    <h1>Contact Us</h1>
    <h3>Master Speed Academy</h3>

    <form onsubmit="event.preventDefault(); alert('Thank you for contacting us!');">
        <input type="text" placeholder="Your Name" required>
        <input type="email" placeholder="Your Email" required>
        <textarea placeholder="Your Message" required></textarea>
        <br><br>
        <button type="submit">Send Message</button>
    </form>

    <br><br>
    <a href="index.php">Back to Home</a>
</div>

</body>
</html>