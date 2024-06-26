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


var_dump($hotels);

// stampiamo le singole informazioni di ogni hotel in pagina

foreach ($hotels as $hotel) {
    echo $hotel["name"] . ' - ' . $hotel["description"] . ' - ' . $hotel["parking"] . ' - ' . 'Valutazione: ' . $hotel["vote"] . ' - ' . $hotel["distance_to_center"] . ' Km';
    echo "<br>";
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <h1>Hotels</h1>

    <table class="table">
        <thead>

            <tr>
                <th scope="col">Nome Hotel</th>
                <th scope="col">Descrizione Hotel</th>
                <th scope="col">Parcheggio</th>
                <th scope="col">Voto complessivo</th>
                <th scope="col">Distanza dal centro</th>
            </tr>

        </thead>
        <tbody>
            <?php foreach ($hotels as $hotel) : ?>
                <tr>
                    <td><?php echo $hotel["name"] ?></td>
                    <td><a href=""><?php echo $hotel["description"] ?></a></td>
                    <td>
                        <?php
                        if ($hotel["parking"] == true) {
                            echo 'Parcheggio disponibile';
                        } else {
                            echo 'Nessun parcheggio';
                        }
                        ?>
                    </td>
                    <td><?php echo $hotel["vote"] ?> / 5</td>
                    <td><?php echo $hotel["distance_to_center"] ?> Km</td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>