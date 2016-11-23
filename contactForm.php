<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ćwiczenie 1</title>
</head>
<body>

<form action="mailSender.php" method="POST">
  <input type="text" name="name" placeholder="Imię i nazwisko"/><br />
  <input type="email" name="email" placeholder="E-mail" /><br />
  <input type="text" name="subject" placeholder="Temat:" /><br />
  <textarea name="body" placeholder="Napisz do mnie maila"></textarea><br />
  <input type="submit" value="Wyślij" />
</form>



</body>
</html>
