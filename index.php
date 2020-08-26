<?php
// PRISIJUNGIMAS
$users = [
    [
        'id' => 'ubuntu',
        'email' => 'bb@bb.com',
        'password' => 'Labas123',
        'role' => 'default'
    ],
    [
        'id' => 'pyst',
        'email' => 'sadf@kjh    .com',
        'password' => 'Labas123',
        'role' => 'admin'
    ]
];
function validateUser($email, $password)
{
    // Kai užaugsiu būsiu duomenų bazė
    global $users;
    foreach ($users as $user) {
        if ($email === $user['email'] && $password === $user['password']) {
            return $user;
        }
    }
    return false;
}

if (isset($_POST['login'])) {
    // Kai uždaugsiu būsiu validacija;
    $userValidated = validateUser($_POST['email'], $_POST['password']);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forma registracija</title>
    <style>
        .form {
            display: block;
            width: 400px;
            margin: 2rem auto;
            padding: 1rem;
            box-shadow: 0 4px 6px 2px #5555;
        }

        .form__title {
            text-align: center;
            font-size: 1.16rem;
            margin-bottom: 1rem;
        }

        .input-group {
            margin-bottom: 1rem;
        }

        .input-group > label {
            display: block;
            margin-bottom: 0.25rem;
        }

        .input-group > input[type=email],
        .input-group > input[type=text],
        .input-group > input[type=password],
        .input-group > input[type=number] {
            width: 100%;
            border: none;
            border-bottom: 1px solid #339;
        }

        .input-group > input[type=email]:focus,
        .input-group > input[type=text]:focus,
        .input-group > input[type=password]:focus,
        .input-group > input[type=number]:focus {
            outline: none;
            box-shadow: inset 0 -1px 0 0 #339;
        }

        .text--success {
            text-align: center;
            color: #393;
        }

        .text--error {
            text-align: center;
            color: #933;
        }
    </style>
</head>
<body>
<form class="form" method="POST">
    <div class="form__title">Prisijungimas</div>
    <div class="input-group">
        <label for="email">Paštas</label>
        <input type="email" id="email" name="email">
    </div>
    <div class="input-group">
        <label for="password">Slaptažodis</label>
        <input type="password" id="password" name="password">
    </div>
    <button type="submit">Prisijungti</button>
    <input type="hidden" name="login" value="1">
</form>
<?php if (isset($_POST['login'])) : ?>
    <?php if ($userValidated) : ?>
        <h3 class="text--success">Prisijunėte sėkmingai</h3>
    <?php else : ?>
        <h3 class="text--error">Prisijungti nepavyko</h3>
    <?php endif; ?>
<?php endif; ?>
</body>
</html>

<!--versija validate-->
<?php
function isEqual($val1, $val2){
    return $val1 === $val2;
}
if (isset($_POST['register'])) {
    $passwordsAreEqual = isEqual($_POST['password'], $_POST['repeat-password']);
}
?>
    <form class="form" method="POST">
        <div class="form__title">Registracija</div>
        <div class="input-group">
            <label for="email">Paštas</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="input-group">
            <label for="password">Slaptažodis</label>
            <input type="password" id="password" name="password">
        </div>
        <div class="input-group">
            <label for="password">Pakartokite slaptažodį</label>
            <input type="password" id="password" name="repeat-password">
        </div>
        <button type="submit">Registruotis</button>
        <input type="hidden" name="register" value="1">
    </form>
    <!-- Jeigu buvo pa'submit'inta registracijos forma -->
<?php if (isset($_POST['register'])) : ?>
    <?php if ($passwordsAreEqual) : ?>
        <h3 class="text--success">Registracija sėkminga</h3>
        <!-- Kitas kodas kuris nukreipia į pagrindinį puslapį -->
    <?php else : ?>
        <h3 class="text--error">Registracija nepavyko</h3>
        <!-- Kitas kodas, kuris išspausdina klaidas -->
    <?php endif; ?>
<?php endif; ?>