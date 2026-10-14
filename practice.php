<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Typing Practice - Master Speed Academy</title>

<style>
body {
    font-family: Arial, sans-serif;
    background: linear-gradient(135deg, #dbeafe, #f3e8ff);
    margin: 0;
    padding: 25px;
    color: #172554;
}
.container {
    max-width: 750px;
    margin: 30px auto;
    background: white;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 8px 25px #0001;
}
h1 { color: #6d28d9; text-align: center; }
.sample {
    background: #f3e8ff;
    padding: 20px;
    border-radius: 12px;
    line-height: 1.8;
    font-size: 18px;
}
textarea {
    width: 100%;
    height: 130px;
    padding: 12px;
    margin-top: 15px;
    box-sizing: border-box;
    border: 2px solid #c4b5fd;
    border-radius: 10px;
    font-size: 16px;
}
.stats {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
    margin: 20px 0;
}
.stat {
    flex: 1;
    min-width: 100px;
    background: #eff6ff;
    padding: 15px;
    text-align: center;
    border-radius: 12px;
}
.stat strong {
    display: block;
    font-size: 25px;
    color: #7c3aed;
    margin-top: 8px;
}
button, .home {
    border: none;
    padding: 13px 20px;
    border-radius: 10px;
    background: #7c3aed;
    color: white;
    font-size: 16px;
    cursor: pointer;
    text-decoration: none;
}
button:hover, .home:hover { background: #5b21b6; }
</style>
</head>

<body>
<div class="container">
    <h1>⌨️ Typing Practice</h1>
    <p>Type the sentence below as accurately as you can!</p>

    <div class="sample" id="sample">
        Practice makes perfect. Keep learning and improve your typing speed every day.
    </div>

    <textarea id="typing" placeholder="Start typing here..."></textarea>

    <div class="stats">
        <div class="stat">Time Left<strong id="time">60</strong></div>
        <div class="stat">Speed (WPM)<strong id="wpm">0</strong></div>
        <div class="stat">Accuracy<strong id="accuracy">100%</strong></div>
    </div>

    <button id="restart">Try Again ↻</button>
    <a class="home" href="index.php">Home</a>
    <p id="message"></p>
</div>

<script>
const sample = document.getElementById("sample").textContent.trim();
const typing = document.getElementById("typing");
const timeDisplay = document.getElementById("time");
const wpmDisplay = document.getElementById("wpm");
const accuracyDisplay = document.getElementById("accuracy");
const message = document.getElementById("message");

let timeLeft = 60;
let started = false;
let finished = false;
let timer;
let startTime;

function updateStats() {
    const text = typing.value;
    let correct = 0;

    for (let i = 0; i < text.length; i++) {
        if (text[i] === sample[i]) correct++;
    }

    const accuracy = text.length
        ? Math.round((correct / text.length) * 100)
        : 100;

    const elapsed = started
        ? Math.max((Date.now() - startTime) / 60000, 1 / 60)
        : 0;

    const wpm = elapsed > 0
        ? Math.round((text.trim() ? text.trim().split(/\s+/).length : 0) / elapsed)
        : 0;

    wpmDisplay.textContent = wpm;
    accuracyDisplay.textContent = accuracy + "%";

    if (text === sample) {
        finishTest("Great job! You typed the full sentence!");
    }
}

function finishTest(msg) {
    finished = true;
    clearInterval(timer);
    typing.disabled = true;
    message.textContent = msg;
}

typing.addEventListener("input", function () {
    if (finished) return;

    if (!started) {
        started = true;
        startTime = Date.now();

        timer = setInterval(function () {
            timeLeft--;
            timeDisplay.textContent = timeLeft;

            if (timeLeft <= 0) {
                finishTest("Time is up! Try again to improve your score.");
            }
        }, 1000);
    }

    updateStats();
});

document.getElementById("restart").addEventListener("click", function () {
    clearInterval(timer);
    timeLeft = 60;
    started = false;
    finished = false;
    typing.disabled = false;
    typing.value = "";
    timeDisplay.textContent = "60";
    wpmDisplay.textContent = "0";
    accuracyDisplay.textContent = "100%";
    message.textContent = "";
    typing.focus();
});

</script>
</body>
</html>