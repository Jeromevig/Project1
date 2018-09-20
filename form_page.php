<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Ajouter meta -->
    <title>Bootstrap 4 Website Example</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php include ("header.php") ?>

<div class="container">
    <div class="row jumbotron">
        <form name="contactform" method="POST" action="send_form_email.php">
            <div>
                <label for="first_name">First Name :</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>

            <div>
                <label for="last_name">Last Name :</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>

            <div>
                <label for="email">e-mail :</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div>
                <label for="telephone">Telephone</label>
                <input type="text" id="telephone" name="telephone" required>
            </div>

            <div>
                <label for="comments">Comments :</label>
                <textarea id="comments" name="comments" required></textarea>
            </div>

            <input type="submit" class="btn btn-info" value="Submit">
        </form>
    </div>
</div>

<?php include("footer.php") ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
