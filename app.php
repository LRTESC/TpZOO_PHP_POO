<?php

    require_once 'vendor/autoload.php';

    use App\Animals\Fish;
    use App\Animals\Elephant;
    use App\Animals\Parrot;
    use App\Animals\Whale;
    use App\Animals\Dove;
    use App\Animals\Zebra;
    use App\Animals\ClownFish;
    use App\Animals\CatFish;
    use App\Animals\BubbleFish;

    $animals = [
        Fish :: class => [
            'count' => 5,
            'name' => "gros poisson",
            "instances" => []

        ],
        BubbleFish ::class => [
            'count' => 3,
            'name' => "des petites bulles",
            "instances" => []
        ],
        CatFish::class => [
            'count'=> 2,
            'name' => "miaouuuuu",
            "instances" => []
        ],
        ClownFish::class => [
            'count' => 1,
            'name' => "aaaahhhhhh",
            "instances" => []
        ],
        Elephant::class => [
            'count' => 2,
            'name' => "mougliiii",
            "instances" => []
        ],
        Zebra::class => [
            'count' => 1,
            'name' => "blackAndWhite",
            "instances" => []
        ],
        Parrot::class => [
            'count' => 10,
            'name' => "bonjourCoco",
            "instances" => []
        ],
        Dove::class => [
            'count' => 2,
            'name' => "leVolBlanc",
            "instances" => []
        ],

];






    foreach ($animals as $index => $data) {
        for ($i = 0; $i < $data; $i++) {
            $instance = new $index($data["bruiteroude"]);
            echo $instance->GetName() . "|" . $instance->noise() . PHP_EOL;

            $animals[$index]['instances'][] = $instance;
        }
    }
    var_dump($animals);


//        new Fish("nemo"),
//        new Fish("didiou"),
//        new Fish("papalou"),
//        new Fish("cocoloui"),
//        new Fish("fifiloui"),
//
//        new BubbleFish("hihiku"),
//        new BubbleFish("titouy"),
//        new BubbleFish("hatrou"),
//
//        new CatFish("brenda"),
//        new CatFish("trentare"),
//
//        new ClownFish("badaboom"),
//
//        new Elephant("verdrou"),
//        new Elephant("croutiux"),
//
//        new Zebra("trentrux"),
//
//        new Parrot("dudure"),
//        new Parrot("retrue"),
//        new Parrot("tutu"),
//        new Parrot("gageot"),
//        new Parrot("contrefall"),
//        new Parrot("hautrelo"),
//        new Parrot("questro"),
//        new Parrot("adrealine"),
//        new Parrot("restaura"),
//        new Parrot("bulecat"),
//
//        new Dove("rest"),
//        new Dove("peace"),



    $Fish = new Fish("poisson");
    $Elephant = new Elephant("mamifere");
    $Parrot = new Parrot("bird");
    $Whale = new Whale("baleine");
    $Dove = new Dove("peace");
    $Zebra = new Zebra("équidés");
    $ClownFish = new ClownFish("rigolo");
    $CatFish = new CatFish("chat");
    $BubbleFish = new BubbleFish("petite bulles");



    var_dump($Fish);
    var_dump($Elephant);
    var_dump($Parrot);
    var_dump($Whale);
    var_dump($Dove);
    var_dump($Zebra);
    var_dump($ClownFish);
    var_dump($CatFish);
    var_dump($BubbleFish);




