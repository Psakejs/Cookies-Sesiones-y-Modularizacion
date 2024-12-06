<?php 

require('./logic/createHorse.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horse</title>
    <style>
        header{
            text-align: center;
            padding: 1rem;
        }
        h1{
            font-size: 3rem;
            font-weight: bold;
        }
        main{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem;
        }
        ul{
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 1rem;
            padding: 0;
        }
        li{
            font-size: 1.5rem;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <header>
        <h1>Make a horse run</h1>
    </header>
    <main>
        <ul>
            <li>
                <?= $horse1->make_the_horse_run() ?>
            </li>
            <li>
                <?= $black_horse->make_the_horse_run() ?>
            </li>
            <li>
                <?= $gray_horse->make_the_horse_run() ?>
            </li>
        </ul>
    </main>
</body>
</html>
