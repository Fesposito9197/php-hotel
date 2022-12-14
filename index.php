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





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <title>PHP Hotels</title>
    </head>
    <body>
       
        <div class="container">
            <table class="table">
            
            <tbody class="table-group-divider">
                <tr>
                <th scope="col">Name</th>
                <?php foreach ($hotels as $hotel) { ?>
                <td><?php echo $hotel["name"] ?></td>
                <?php } ?>
                </tr>
                <tr>
                <th scope="col">Description</th>
                <?php foreach ($hotels as $hotel) { ?>
                <td><?php echo $hotel["description"] ?></td>
                <?php } ?>
                </tr>
                <tr>
                <th scope="col">Parking</th>
                <?php foreach ($hotels as $hotel) { ?>
                <td><?php  echo $hotel["parking"] ? 'si' : 'no' ?></td>
                <?php } ?>
                </tr>
                <tr>
                <th scope="col">Vote</th>
                <?php foreach ($hotels as $hotel) { ?>
                <td><?php echo $hotel["vote"] ?></td>
                <?php } ?>
                </tr>
                <tr>
                <th scope="col">Distance to center</th>
                <?php foreach ($hotels as $hotel) { ?>
                <td><?php echo $hotel["distance_to_center"] ?></td>
                <?php } ?>
                </tr>
            </tbody>
            </table>
        </div>
       
    </body>
</html>
                
                
                