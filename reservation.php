<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="coba.css" />
  </head>
  <body>
    <form action="reservation.php" method="post">
      <div class="elem-group">
        <label for="name">Your Name</label>
        <input
          type="text"
          id="name"
          name="nama"
          placeholder="John Doe"
          pattern="[A-Z\sa-z]{3,20}"
          required />
      </div>
      <div class="elem-group">
        <label for="email">Your E-mail</label>
        <input
          type="email"
          id="email"
          name="email"
          placeholder="john.doe@email.com"
          required />
      </div>
      <div class="elem-group">
        <label for="phone">Your Phone</label>
        <input
          type="tel"
          id="phone"
          name="telp"
          placeholder="498-348-3872"
          required />
      </div>
      <hr />
      <div class="elem-group inlined">
        <label for="adult">Adults</label>
        <input
          type="number"
          id="adult"
          name="adult"
          placeholder="2"
          min="1"
          required />
      </div>
      <div class="elem-group inlined">
        <label for="child">Children</label>
        <input
          type="number"
          id="child"
          name="child"
          placeholder="2"
          min="0"
          required />
      </div>
      <div class="elem-group inlined">
        <label for="checkin-date">Check-in Date</label>
        <input type="date" id="checkin-date" name="check_in" required />
      </div>
      <div class="elem-group inlined">
        <label for="checkout-date">Check-out Date</label>
        <input type="date" id="checkout-date" name="check_out" required />
      </div>
      <div class="elem-group">
        <label for="room-selection">Select Room Preference</label>
        <select id="room-selection" name="room_tipe" required>
          <option value="">Choose a Room from the List</option>
          <option value="connecting">Connecting</option>
          <option value="adjoining">Adjoining</option>
          <option value="adjacent">Adjacent</option>
        </select>
      </div>
      <div class="elem-group">
        <label for="room-selection">Select Room Preference</label>
        <select id="room-selection" name="room_paket" required>
          <option value="">Choose a Room from the List</option>
          <option value="connecting">Connecting</option>
          <option value="adjoining">Adjoining</option>
          <option value="adjacent">Adjacent</option>
        </select>
      </div>
      <hr />
      <div class="elem-group">
        <label for="message">Anything Else?</label>
        <textarea
          id="message"
          name="pesan"
          placeholder="Tell us anything else that might be important."
          required></textarea>
      </div>
      <button type="submit" name="btn_submit">Book The Rooms</button>
    </form>

    <script>
      var currentDateTime = new Date();
      var year = currentDateTime.getFullYear();
      var month = currentDateTime.getMonth() + 1;
      var date = currentDateTime.getDate() + 1;

      if (date < 10) {
        date = "0" + date;
      }
      if (month < 10) {
        month = "0" + month;
      }

      var dateTomorrow = year + "-" + month + "-" + date;
      var checkinElem = document.querySelector("#checkin-date");
      var checkoutElem = document.querySelector("#checkout-date");

      checkinElem.setAttribute("min", dateTomorrow);

      checkinElem.onchange = function () {
        checkoutElem.setAttribute("min", this.value);
      };
    </script>
  </body>
</html>

<?php
// if (isset($_POST['btn_submit'])) {
    // $nama = $_POST['nama'];
    // $email = $_POST['email'];
    // $telp = $_POST['telp'];
    // $adult = $_POST['adult'];
    // $child = $_POST['child'];
    // $check_in = $_POST['check_in'];
    // $check_out = $_POST['check_out'];
    // $room_tipe = $_POST['room_tipe'];
    // $room_paket = $_POST['room_paket'];
    // $pesan = $_POST['pesan'];

    // echo $nama . "<br>";
    // echo $email . "<br>";
    // echo $telp . "<br>";
    // echo $adult . "<br>";
    // echo $child . "<br>";
    // echo $check_in . "<br>";
    // echo $check_out . "<br>";
    // echo $room_tipe . "<br>";
    // echo $room_paket . "<br>";
    // echo $pesan;
// } else {
    // echo "Form not submitted.";
// }
?>

<?php
if (isset($_POST['btn_submit'])) {
    // Mengambil data dari formulir
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $telp = $_POST['telp'];
    $adult = $_POST['adult'];
    $child = $_POST['child'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $room_tipe = $_POST['room_tipe'];
    $room_paket = $_POST['room_paket'];
    $pesan = $_POST['pesan'];

    // Koneksi ke MySQL (gantilah parameter sesuai dengan pengaturan server Anda)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "db_villa";

    $conn = new mysqli($servername, $username, $password, $database);

    // Periksa koneksi
    if ($conn->connect_error) {
        die("Koneksi gagal: " . $conn->connect_error);
    }

    // Query SQL untuk menyimpan data ke dalam tabel
    $sql = "INSERT INTO reservasi (nama, email, telp, adult, child, check_in, check_out, room_tipe, room_paket, pesan)
            VALUES ('$nama', '$email', '$telp', '$adult', '$child', '$check_in', '$check_out', '$room_tipe', '$room_paket', '$pesan')";

    // Eksekusi query
    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan ke dalam basis data.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi
    $conn->close();
} else {
    echo "Formulir tidak dikirimkan.";
}
?>

