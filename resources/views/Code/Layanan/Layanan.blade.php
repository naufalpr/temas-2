<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Under Development</title>

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap");

    body {
      margin: 0;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .centered {
      font-size: 1.5em;
      color: #000000d2; /* Light gray color */
      text-align: center;
      margin-bottom: 20px; /* Space between text and button */
      font-family: 'Poppins', sans-serif;
    }

    .back-button {
      font-size: 1.3em;
      font-family: 'Poppins', sans-serif;
      color: #000000d2; /* Light gray color */
      cursor: pointer;
      text-align: center;
      border: 2px solid #000000d2;
      padding: 10px 20px;
      border-radius: 5px;
      transition: background-color 0.3s, color 0.3s;
    }

    .back-button:hover {
      background-color: #d3d3d3;
      color: #000000d2;
      font-family: 'Poppins', sans-serif;
    }
  </style>

</head>
<body>
    <div class="centered">
        Halaman ini masih dalam tahap pengembangan
    </div>
    <div class="back-button" onclick="goBack()">
        &#8592; Kembali
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
