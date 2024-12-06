<?php 

require('vendor/autoload.php');
require('app/logic/createHorse.php');

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
        section{
            display: flex;
            flex-direction: column;
            gap: 1rem;
            padding: 1rem;
        }
        section h2{
            font-size: 2rem;
            font-weight: bold;
        }
        .adopted__horses{
            background-color: #f2f2f2;
        }
        .available__horses{
            background-color: #e6e6e6;
        }
        
    </style>
</head>
<body>
    <header>
        <h1>Make a horse run</h1>
    </header>
    <main>
        <section class="Adopted__horses">
            <h2>Caballos disponibles</h2>
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
        </section>
        <section class="Available_horses">
            <h2> Caballos adoptados</h2>
            <ul>
                <li><?= $horse_adopted1->is_adopted(); ?></li>
            </ul>
            <ul>
                <li><?= $horse_adopted2->is_adopted();?></li>
            </ul>
        </section>
    </main>
</body>
</html>
