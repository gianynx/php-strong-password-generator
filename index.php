<?php
if (!empty($_GET['password'])) {
    $password = $_GET['password'];
    $length = strlen($password);
}
function getRandomPassword($length) {
    $my_string = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?@#$%"£&/()=^[]{}°-_:.;,<>';
    $a = '';
    while ($a <= $length) {
        $random_string = rand(0, $my_string);
    }
    return $random_string;
}
$strong_password = getRandomPassword($random_string);

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
            <form action="<?php $_SERVER['PHP_SELF']?>" class="mt-5 small">
                <div class="form-floating">
                    <input name="password" type="password" class="form-control" id="password" placeholder="password" minlength="8" maxlength="32" required>
                    <label for="password">Enter your password!</label>
                </div>
            </form>
            <div class="mt-5">
                <h2>Strong Password: <?php echo $strong_password ?></h2>
            </div>
        </div>
    </main>
    <footer>
        <div class="container d-flex flex-row-reverse">
            <span>"Homemade"</span>
        </div>
    </footer>

</body>
</html>