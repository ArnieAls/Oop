<?php
$vilnius = [
    "mayor" => 'Remigijus Šimašius',
    "number"  => '+370 35 654 84',
    "area"  => 401,
    "elderships" => [
        [
            "title" => "Antakalnio Seniūnija",
            "address" => "Antakalnio g. 17, 10312 Vilnius",
            "elder" => "Taurintas Rudys",
            "population" => 52369
        ],
        [
            "title" => "Fabijoniškių Seniūnija",
            "address" => "S. Stanevičiaus g. 24, LT-07102 Vilnius",
            "elder" => "Jonas Novikevičius",
            "population" => 22369
        ],
        [
            "title" => "Grigiškių Seniūnija",
            "address" => "Vilniaus g. 6, LT-27101 Grigiškės, Vilniaus m. sav.",
            "elder" => "Leonard Klimovič",
            "population" => 32111
        ],
        [
            "title" => "Naujininkų Seniūnija",
            "address" => "Dariaus ir Girėno g. 11, LT-02170 Vilnius",
            "elder" => "Raimondas Lingys",
            "population" => 37001
        ],
        [
            "title" => "Senamiesčio seniūnija",
            "address" => "Odminių g. 3, LT-01122 Vilnius",
            "elder" => "Irena Paukštytė",
            "population" => 19423
        ],
    ],
];

?>

<!--3. print visus pavadinimus-->
<?php

foreach ($vilnius['elderships'] as $eldership)
    print $eldership['title']."<br>";

?>
<!-- 4. Atspaudinkite vienos iš seniunijų duomenis -->
<?php
foreach ($vilnius as $elderships => $eldership)
print($eldership[1]['title']. ' ' .$eldership[1]['address']. ' ' .$eldership[1]['elder']. ' ' .$eldership[1]['population']);
?>

<!-- 5. Atspausdinkite visų seniunijų duomenis lentele -->
<?php
function printElderships($vilnius)
{
?>
    <h3>Seniūnijos</h3>
    <div class="grid-books">
    <div class="grid-books__row grid-books__row--header">
        <div class="grid-books__col">Title</div>
        <div class="grid-books__col">Address</div>
        <div class="grid-books__col">Elder</div>
        <div class="grid-books__col">Population</div>
    </div>
    <?php foreach ($vilnius['elderships'] as $eldership) : ?>
        <div class="grid-books__row">
            <div class="grid-books__col"><?= $eldership['title'] ?></div>
            <div class="grid-books__col"><?= $eldership['address'] ?></div>
            <div class="grid-books__col"><?= $eldership['elder'] ?></div>
            <div class="grid-books__col"><?= $eldership['population'] ?></div>
        </div>
    <?php endforeach; ?>
</div>
<?php
}
printElderships($elderships);
?>