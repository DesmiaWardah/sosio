<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lantai 3</title>
    <link rel="stylesheet" href="lantai3.css" />
    <style>
      .logout-btn {
        display: block;
        width: 150px;
        margin: 20px auto;
        padding: 10px 20px;
        background-color: #ff4d4d;
        color: white;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
        border: none;
      }

      .logout-btn:hover {
        background-color: #cc0000;
      }
    </style>
  </head>
  <body>
    <div class="main-box">
      <div class="logo-box">
        <img src="logouin.jpg" alt="UIN Logo" class="uin-logo" />
        <h2 class="faculty-title">Fakultas Sains dan Teknologi</h2>
      </div>
    </div>

    <!-- Navigation for rooms -->
    <div class="floor-box">
      <h2 class="floor-title">Lantai 3</h2>
      <div class="room-grid">
        <div class="room-item" data-room="R. 3.01">R. 3.01</div>
        <div class="room-item" data-room="R. 3.02">R. 3.02</div>
        <div class="room-item" data-room="R. 3.03">R. 3.03</div>
        <div class="room-item" data-room="R. 3.04">R. 3.04</div>
        <div class="room-item" data-room="R. 1.05">R. 1.05</div>
        <div class="room-item" data-room="R. 3.06">R. 3.06</div>
        <div class="room-item" data-room="R. 3.07">R. 3.07</div>
        <div class="room-item" data-room="R. 3.08">R. 3.08</div>
        <div class="room-item" data-room="R. 3.09">R. 3.09</div>
        <div class="room-item" data-room="R. 3.10">R. 3.10</div>
        <div class="room-item" data-room="R. 3.11">R. 3.11</div>
        <div class="room-item" data-room="R. 3.12">R. 3.12</div>
      </div>
    </div>
    <button class="logout-btn" onclick="logout()">Logout</button>

    <script src="script.js"></script>
  </body>
</html>