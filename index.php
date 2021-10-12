<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>php-snacks</title>
    <style>
        .snack1,
        .snack3,
        .snack5 {
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
    <section class="snack5">
        <?php 
            // Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
            $lorem = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris at dapibus nibh, sed ultrices dolor. Nam massa metus, tincidunt sit amet hendrerit at, blandit ut ligula. Aliquam iaculis vestibulum elit, id dictum sapien vestibulum quis. Vestibulum auctor dolor id nunc efficitur, et placerat eros sodales. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aenean aliquet, magna ac eleifend efficitur, leo elit imperdiet magna, vitae rhoncus magna tortor ullamcorper dui. Suspendisse nibh dolor, varius ut elit ac, suscipit imperdiet sem. Cras eleifend velit non mauris dignissim pretium. Interdum et malesuada fames ac ante ipsum primis in faucibus. Morbi varius dolor vitae blandit iaculis. Quisque at ipsum vel metus consectetur euismod ac vel felis.';
            $newArray = explode( '.', $lorem);
            foreach($newArray as $string)
                if (!empty($string))
                    echo '<p>' . $string . '.' . '</p>'



        ?>
    </section>
    <section class="snack6">
                <?php 
                    // 'Utilizzare questo array: https://pastebin.com/CkX3680A. Includerlo in un file database.php... Stampiamo poi il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.'
                    include __DIR__ . '/database.php';
                    foreach ($db as $key => $element){
                        if ($key === 'teachers') {
                            foreach ($element as $el){
                                echo '<div class="gray">';
                                echo $el['name'] . ' ' . $el['lastname'];
                                echo '</div>';
                            }
                        }                    
                        else {
                            foreach ($element as $el){
                                echo '<div class="green">';
                                echo $el['name'] . ' ' . $el['lastname'];
                                echo '</div>';
                            }
                        }
                    }
                    
                
                
                ?>

    </section>
    <section class="snack7">
        <?php 
            // Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
            include __DIR__ . '/database.php';
            function average ($array) {
                $tmp = 0;
                foreach ($array as $el){
                    $tmp += $el;
                }
                $average = $tmp / count($array);
                return sprintf('%.2f', $average);
            }
        ?>
        <div class="students">
            <h1>
                <?php 
                    foreach ($students as $student)                            echo $student['name'] . ' ' . $student['lastname'] . ' ' . average($student['grades']) . '</br>'
                ?>
            </h1>

        </div>
    </section>

</body>
</html>