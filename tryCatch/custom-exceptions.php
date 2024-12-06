<?php 

class CatException extends Exception
{

    public function getMeow()
    {
        return "Meow!🐱 <br>";
    }
}

class RabbitException extends Exception
{
    public function getRabbit()
    {
        return "🐰";
    }
}

try {
    throw new CatException();
} catch (CatException $e) {
    echo $e->getMeow();
} catch (RabbitException $e) {
    echo $e->getRabbit();

} finally {
    echo "🐭";
}