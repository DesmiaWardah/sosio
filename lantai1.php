<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lantai 1</title>
    <link rel="stylesheet" href="lantai1.css" />
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
      <h2 class="floor-title">LANTAI 1</h2>
      <div class="room-grid">
        <div class="room-item" data-room="Aula Utama">Aula Utama</div>
        <div class="room-item" data-room="Mushola">Mushola</div>
        <div class="room-item" data-room="Perpustakaan">Perpustakaan</div>
        <div class="room-item" data-room="Lab Residensi">Lab Residensi</div>
        <div class="room-item" data-room="R. 1.02">R. 1.02</div>
      </div>

      <!-- Button to navigate to Lantai 3 -->
    </div>

    <!-- Logout Button -->
    <button class="logout-btn" onclick="logout()">Logout</button>

    <script src="script.js"></script>
  </body>
</html>
