<?php

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$nachricht = htmlspecialchars($_POST['nachricht']);

$nachrichtsenden = "\n\n" . "Name: " . $name . "\n\n" . "Email: " . $email . "\n\n" . "Nachricht: " . $nachricht;

 
mail('info@gerdt-webdesign.de','Email Anfrage von der Website',$nachrichtsenden);
mail($email,'Eingangsbestaetigung','Lieber Interresent, Ihre Anfrage Mail habe ich erhalten. Ich melde mich so schnell ich kann');

header("refresh:3;url=http://kunsttherapie.gerdt-webdesign.de/");

?> 

<!DOCTYPE html>
<html lang="de">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" type="text/css" href="">

        <style>
            body {
                background-color: whitesmoke;
                color: #2E6C9F;
                font-family: "Verdana";
            }

            div {
                max-width: 300px;
                margin: 10vh auto 0 auto;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                text-align:center;
                padding: 20px;
            }

            div a {
                padding-bottom: 120px;
                text-decoration: none;
                color: #2E6C9F;
            }

            div a> span:nth-of-type(1) {
                font-size: 2.6rem;
                font-weight: normal;
            }

            div a> span:nth-of-type(2) {
                font-size: 2rem;
                font-weight: normal;
            }

            .apple{
            background: #f5f5f5;
            border: 1px solid #FFF;
            border-radius: 5px;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            box-shadow: 1px 2px 4px rgba(0,0,0,.4);
            }

        </style>

    </head>

    <body>

        <div class="apple">
            <a href="index.html">
                <span>Praxis für Kunsttherapie</span><br>
                <span>und psychologische Beratung</span>
            </a>
            <h1>Vielen Danke für Ihre Anfrage!</h1>
            <h2>Ich melde mich so schnell ich verfügbar bin.</h2>
        </div>

    </body>

</html>