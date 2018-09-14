<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 4 Website Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php include ("header.php") ?>

<form action="/form.php" method="post">
    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name" required>
    </div>
    <div>
        <label for="tel">Tel :</label>
        <input type="tel" id="tel" name="user_tel" required>
    </div>
    <div>
        <label for="mail">e-mail :</label>
        <input type="email" id="mail" name="user_mail" required>
    </div>

    <div>
        <label for="name">Sujet</label>
        <select name="Sujet :">
            <option value="reclamation">Reclamation</option>
            <option value="Adventure">Adventure</option>
            <option value="Solution">Solution</option>
            <option value="Deleted">deleted</option>
        </select></div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message"></textarea>
    </div>
    <!-- INsert botuum "send"-->

    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>

</form>>

<?php include("footer.php") ?>

</body>
</html>
