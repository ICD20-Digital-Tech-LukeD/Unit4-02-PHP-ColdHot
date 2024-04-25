<html>
  <head>
    <title>Cold or Hot</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <h1>Cold or Hot Checker</h1>
    <p>Enter temperature in celsius below</p>
    <form method="post" action="calculations.php" target="output">
      <br>
      <input type="number" name="userInp" required>
      <br>
      <button type="submit">Submit</button>
      <br>
      <br>
      <iframe name="output" style="width:500px;height:150px;border:2px solid black;"></iframe>
</html>