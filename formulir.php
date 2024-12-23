<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fakultas Sains Dan Teknologi</title>
    <link rel="stylesheet" href="formulir.css" />
    <!-- Gunakan satu file CSS untuk desain -->
  </head>
  <body>
    <div class="container">
    <!-- Header -->
    <div class="header">
      <img src="logouin.jpg" alt="Logo" />
      <h1>FAKULTAS SAINS DAN TEKNOLOGI</h1>
    </div>

    <!-- Formulir Peminjaman -->
    <div id="formSection">
      <h2>Formulir Peminjaman</h2>
      <form id="peminjamanForm">
        <div class="form-group">
          <label for="nama">Nama</label>
          <input
            type="text"
            id="nama"
            placeholder="Masukkan nama Anda"
            required
          />
        </div>
        <div class="form-group">
          <label for="keperluan">Keperluan (Unggah File atau Gambar)</label>
          <input
            type="file"
            id="keperluan"
            accept="image/*, .pdf, .doc, .docx, .ppt, .pptx"
            required
          />
        </div>
        <div class="form-group">
          <label for="jurusan">Jurusan</label>
          <input
            type="text"
            id="jurusan"
            placeholder="Masukkan jurusan Anda"
            required
          />
        </div>
        <div class="form-group">
          <label for="tanggal">Tanggal</label>
          <input type="date" id="tanggal" required />
        </div>
        <div class="form-group">
          <label for="waktu">Waktu</label>
          <input type="time" id="waktu" required />
        </div>
        <button type="submit" class="submit-btn">Submit</button>
      </form>
    </div>

    <!-- Halaman Persetujuan -->
    <div id="approvalSection" style="display: none">
      <div class="navbar">
        <a href="#" onclick="showForm()"></a>
      </div>
      <div class="content">
        <div class="box">
          <i class="fas fa-check-circle"></i>
          <!-- Gunakan fontawesome jika tersedia -->
          <p>
            PERMINTAAN SEDANG DIAJUKAN<br />HARAP TUNGGU KONFIRMASI SELANJUTNYA
          </p>
        </div>
      </div>
      <!-- Tambahkan tombol untuk kembali ke Lantai 1 -->
      <a href="lantai1.html" class="back-btn">Home</a>
      <!-- Tambahkan tombol Logout -->
      <button class="logout-btn" onclick="logout()">Logout</button>
    </div>
    <!-- <script>
        const formSection = document.getElementById('formSection');
        const approvalSection = document.getElementById('approvalSection');

        document.getElementById('peminjamanForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah pengiriman formulir secara default

            // Tampilkan bagian persetujuan dan sembunyikan formulir
            formSection.style.display = 'none';
            approvalSection.style.display = 'block';
        });

        function showForm() {
            // Kembali ke formulir
            approvalSection.style.display = 'none';
            formSection.style.display = 'block';
        }
    </script> -->
    <script src="script.js"></script>
  </body>
</html>
