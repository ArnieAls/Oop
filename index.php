<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration BY forces</title>
    <style>

        .container {
            width: 600px;
            margin: 150px auto;
        }

        .form-box {
            padding: 20px;
            border: 3px solid black;
            border-radius: 10px;
        }

        legend {
            font-size: 20px;
            font-weight: bold;
            margin-top: 20px;
        }

        .form-box input {
            padding: 10px;
            font-size: 20px;
            width: 100%;
            box-sizing: border-box;
        }

        .form-box input[type=checkbox], .form-box input[type=radio] {
            width: auto;
        }

        .form-box input[type=submit] {
            padding: 10px 20px;
            border: 1px solid black;
            margin-top: 20px;
            background-color: white;
            cursor: pointer;
        }

        .certificate-box {
            padding: 20px;
            border: 3px solid #f1d170;
            border-radius: 10px;
            position: relative;
        }

        .certificate-info {
            margin-top: 10px;
        }

        .certificate-info > .item > span {
            font-size: 21px;
            font-weight: bold;
            color: black;
        }

        h2 {
            margin-bottom: 10px;
        }

        .certificate-box p {
            font-size: 25px;
            font-weight: bold;
            margin: 0;
        }

        .certificate-box span {
            color: darkred;
        }

        .item {
            font-size: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Registration form to the BY Force</h2>
    <div class="form-box">
        <form method="post">
            <div class="input">
                <label>Name:</label>
                <input type="text" name="first_name" required/>
            </div>
            <div class="input">
                <label>Lastname:</label>
                <input type="text" name="last_name" required/>
            </div>
            <div class="input">
                <label>Age:</label>
                <input type="number" name="age"/>
            </div>
            <div class="input">
                <div class="input">
                    <label>Operation:</label>
                    <input type="radio" id="lox" name="spec" value="lox" checked/>
                    <label for="lox">Lox</label>
                </div>
                <div class="input">
                    <input type="radio" id="omon" name="spec" value="OMON"/>
                    <label for="omon">Omon</label>
                </div>
                <div class="input">
                    <input type="radio" id="military" name="spec" value="Military"/>
                    <label for="military">Military</label>
                </div>
                <div class="input">
                    <input type="radio" id="pro" name="spec" value="Professional"/>
                    <label for="pro">Recruiter</label>
                </div>
                <div class="input">
                    <label>Bonus:</label>
                    <input type="checkbox" id="extra1" name="extras[]" value="shizo"/>
                    <label for="extra1">Shizofrenic</label>
                    <input type="checkbox" id="extra2" name="extras[]" value="kungfu"/>
                    <label for="extra2">KungFu master</label>
                    <input type="checkbox" id="extra3" name="extras[]" value="comunist"/>
                    <label for="extra3">Comunist</label>
                </div>
                <div class="input">
                    <input type="submit" value="Join the Force"/>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>

<!--versija validate-->
<?php

if (isset($_POST['submit'])) {

}
?>
<!---->
<?php //if (isset($_POST['register'])) : ?>
<!--<!--    -->--><?php ////if ($passwordsAreEqual) : ?>
<!--        <h3 class="text--success">Registracija sėkminga</h3>-->
<!--        <!-- Kitas kodas kuris nukreipia į pagrindinį puslapį -->-->
<!--    --><?php //else : ?>
<!--        <h3 class="text--error">Registracija nepavyko</h3>-->
<!--        <!-- Kitas kodas, kuris išspausdina klaidas -->-->
<!--    --><?php //endif; ?>
<?php //endif; ?>

<button id="submit" class="ok-btn">Ok</button>
