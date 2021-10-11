<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-snacks</title>
    <style>
        .snack1,
        .snack3 {
            color: red;
            padding-left: 20px;
        }
        .snack2,
        .snack4 {
            color: green;
            padding-left: 20px;
            font-size: 2rem;
        }
    </style>
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
                echo '<h3>' . $tmp["home"]["teamName"] . ' - ' . $tmp["visitors"]["teamName"] .  '  |  ' . $tmp["home"]["teamScore"] . ' - ' . $tmp["visitors"]["teamScore"] . '</h3>';
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
            <input type="" id="number" name="number"><br><br>
            <input type="submit" value="Submit">
        </form>
        <?php 
            $name = $_GET['fname'];
            $mail = $_GET['mail'];
            $number = $_GET['number'];
            // $data = $_GET;
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
    <section class="snack3">
    <!-- Stampare ogni data con i relativi post. -->
        <?php 
        $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
        ];
        ?>
            <?php
                foreach ( $posts as $keys => $post){ 
                    echo '<h1>' . $keys . '</h1>';
                        foreach ($post as $element )
                            foreach($element as $keys => $el)
                                echo '<p>' . $keys . ':' . $el . '<?p>';
                }

            ?>
    </section>
    <section class="snack4">
        <?php 
        // Creare un array con 15 numeri casuali ( da 1 a 100), tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
                $i = 0;
                $numbers = [];
                do {
                    $tempNumber = rand(1, 100);
                    if (!in_array($tempNumber, $numbers))
                        {
                            // array_push($numbers, $tempNumber);
                            $numbers [] = $tempNumber; // works same way as array_push read the documentation 
                        }

                } while (count($numbers) < 15); // if i count the array length instead of initializing a new var and counting that i use less processors power so it's better
                var_dump($numbers)
        ?>
            <?php 
                foreach ($numbers as $number)
                    echo ' <p>' . $number . ' </p>' . '<hr>';
            ?>

    </section>
</body>
</html>