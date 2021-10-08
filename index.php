<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks</title>
</head>
<body>
     <section class="snack1">
         <h1>
             Snak 1 : Calendario partite
         </h1>

         <?php 
            /*
            ## Snack 1
            Creiamo un array contenente le partite di basket di un’ipotetica tappa
            del calendario.
            Ogni array avrà una squadra di casa e una squadra ospite,
            punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
            Stampiamo a schermo tutte le partite con questo schema.
            Olimpia Milano - Cantù | 55-60
            */
            $teams = [
                [
                    "home" => [
                        "teamName" => "MIAMI HEAT",
                        "teamScore" => rand(50, 100)
                    ],
                    "visitors" => [
                        "teamName" => "BOSTON CELTICS",
                        "teamScore" => rand(50, 100)
                    ]
                ],
                [
                    "home" => [
                        "teamName" => "BROOKLIN NETS",
                        "teamScore" => rand(50, 100)
                    ],
                    "visitors" => [
                        "teamName" => "PHILADELPHIA 76ERS",
                        "teamScore" => rand(50, 100)
                    ]
                ],
                [
                    "home" => [
                        "teamName" => "TORONTO RAPTORS",
                        "teamScore" => rand(50, 100)
                    ],
                    "visitors" => [
                        "teamName" => "NEW YORK KNICS",
                        "teamScore" => rand(50, 100)
                    ]
                ],
                [
                    "home" => [
                        "teamName" => "DETROIT PISTONS",
                        "teamScore" => rand(50, 100)
                    ],
                    "visitors" => [
                        "teamName" => "MILWAUKEE BUCKS",
                        "teamScore" => rand(50, 100)
                    ]
                ],
                [
                    "home" => [
                        "teamName" => "DALLAS MAVERICKS",
                        "teamScore" => rand(50, 100)
                    ],
                    "visitors" => [
                        "teamName" => "HOUSTON ROCKETS",
                        "teamScore" => rand(50, 100)
                    ]
                ],
                [
                    "home" => [
                        "teamName" => "SAN ANTONIO SPURS",
                        "teamScore" => rand(50, 100)
                    ],
                    "visitors" => [
                        "teamName" => "DENVER NUGGETS",
                        "teamScore" => rand(50, 100)
                    ]
                ],
            ];
            for ($i =  0; $i < count($teams); $i++)
            {
                $tmp = $teams[$i];
                echo '<h3>' . $tmp["home"]["teamName"] . ' - ' . $tmp["visitors"]["teamName"] .  '  |  ' . $tmp["home"]["teamScore"] . ' - ' . $tmp["visitors"]["teamScore"];
            }
            /* ## Snack 2
             Passare come parametri GET name, mail e age e verificare
             (cercando i metodi che non conosciamo nella documentazione) che name
             sia più lungo di 3 caratteri,
             che mail contenga un punto e una chiocciola e che age sia un numero.
             Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
             */

         ?>
    </section>
    <section class="snack2">
        <form action="index.php" method="get">
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname"><br><br>
            <label for="mail">email:</label>
            <input type="text" id="mail" name="mail"><br><br>
            <label for="number">number:</label>
            <input type="text" id="number" name="number"><br><br>
            <input type="submit" value="Submit">
        </form>
        <?php 
            $name = $_GET['fname'];
            $mail = $_GET['mail'];
            (int)$number = $_GET['number'];
            // info correctly received check
            // echo '<h1>' . $name . ' ' . $mail . ' ' . $number   . '</h1>';
            if (isset($name) && isset($mail) && isset($number)) {
                if (strlen($name) > 3 && strpos($mail, '@') && strpos($mail, '.' ) && is_numeric($number))
                        echo 'accesso riuscito';
                else{
                    echo 'accesso fallito';
                }
            }

            
        ?>
    </section>
</body>
</html>