<?php
    include './partials/functions.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <header>
        <div class="container mt-5">
            <h1 class="text-center">PHP Strong Password Generator</h1>
        </div>
    </header>
    <main>
        <div class="container mt-5">
            <form action="<?php echo $_SERVER['PHP_SELF']?>" class="mt-5 small">
                <div class="form-floating">
                    <!--  Gli attributi min e max specificano i valori minimi e massimi che l'utente può inserire. Nel tuo caso, l'utente può inserire un valore tra 8 e 32. -->
                    <input type="number" class="form-control" id="password" name="password" min="8" max="32" required>
                    <label for="password">Enter your password number!</label>
                </div>
                <input type="submit" value="Create password!" class="btn btn-outline-dark mt-5">
                <?php if (!empty($_GET['password'])) {
                    $length = $_GET['password'];
                    $random_string = getRandomPassword($length);
                } ?>
            </form>
            <div class="mt-5">
                <h2>Your new password: <?php echo $random_string ?></h2>
            </div>
        </div>
    </main>
    <footer>
        <div class="container d-flex flex-row-reverse mt-5">
            <span>"Homemade"</span>
        </div>
    </footer>

</body>
</html>