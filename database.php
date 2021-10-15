<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
?>


<?php 
    $students = [
        'studente1' => [
            'name' => 'studente1',
            'lastname' => 'studente1c',
            'grades' => [
                2,
                3,
                9,
                8,
                7,
                7
            ]
            ],
        'studente2' => [
            'name' => 'studente2',
            'lastname' => 'studente2c',
            'grades' => [
                2,
                3,
                2,
                5,
                6,
                7
            ]
        ],
        'studente3' => [
            'name' => 'studente3',
            'lastname' => 'studente3c',
            'grades' => [
                2,
                5,
                4,
                5,
                6,
                7
            ]
        ],
        'studente4' => [
            'name' => 'studente4',
            'lastname' => 'studente4c',
            'grades' => [
                2,
                3,
                4,
                6,
                6,
                7
            ]
        ],
        'studente5' => [
            'name' => 'studente5',
            'lastname' => 'studente5c',
            'grades' => [
                2,
                3,
                4,
                9,
                6,
                7
            ]
        ]
    ]

?>

<?php

$ads = [
    [
        'image_path' => 'https://conversionsciences.com/wp-content/uploads/2019/04/example-of-emotional-logical-appeal-on-persuasive-copy.jpg',
        'link' => 'https://www.google.com',
        'is_active' => true,
    ],
    [
        'image_path' => 'https://previews.123rf.com/images/hstrongart/hstrongart1612/hstrongart161200121/68060446-anuncios-de-cepillos-de-dientes-el%C3%A9ctricos-modo-diferente-de-este-producto-con-blanco-modelo-de-diente.jpg',
        'link' => 'https://www.facebook.com',
        'is_active' => true,
    ],
    [
        'image_path' => 'https://thumbs.dreamstime.com/z/back-to-school-sale-background-chalkboard-sale-percentages-marketing-poster-color-pencils-96751666.jpg',
        'link' => 'https://codepen.io',
        'is_active' => false,
    ],
    [
        'image_path' => 'https://foodsecurityfoodjustice.files.wordpress.com/2016/11/beyond-the-omlette-1.jpg',
        'link' => 'https://laravel.com',
        'is_active' => false,
    ],
    [
        'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRniLfGdFLxVOUoEwYC9WeRIrfZInB74_80IV8yMnANx3HTZYoQ',
        'link' => 'https://www.php.net',
        'is_active' => true,
    ],

];

?>

<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>

<?php 

$filter = $_GET['parking'];

$hotelFiltered = [];

if (isset($filter) === true) {
    foreach($hotels as $hotel)
        {
            if ($filter == 'true') {
                if($hotel['parking'] === true)
                $hotelFiltered[] = $hotel;
            }
        }
}
if (isset($_GET['vote']) === true) {
    foreach($hotels as $hotel)
        {
            if (($_GET['vote']) <= $hotel['vote'] ) {
                $hotelFiltered[] = $hotel;
            }
        }
}
if (isset($_GET['distance']) === true) {
    foreach($hotels as $hotel)
        {
                if(($_GET['distance']) >= $hotel['distance_to_center'] )
                $hotelFiltered[] = $hotel;
        }
}
?>