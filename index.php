<?php

// klaviatūra:
// -taustiņu skaits
// -izmērs
// -krāsa
// -cena



class Klaviatura {
    public $taustiņuSkaits;
    public $izmers;
    private $kraasa;
    private $cena;

    public function __construct($taustiņuSkaits, $izmers, $kraasa, $cena) {
        $this->taustiņuSkaits = $taustiņuSkaits;
        $this->izmers = $izmers;
        $this->kraasa = $kraasa;
        $this->cena = $cena;
    }

    public function getKraasa() {
        return $this->kraasa;
    }

    public function getCena() {
        return $this->cena;
    }

    public function setKraasa($kraasa) {
        $this->kraasa = $kraasa;
    }

    public function setCena($cena) {
        $this->cena = $cena;
    }
}

$klaviatura1 = new Klaviatura(104, 'Standarta', 'Melna', 49.99);

$kraasa = $klaviatura1->getKraasa();
$cena = $klaviatura1->getCena();

echo "Sākotnējā krāsa: " . $kraasa . "\n";
echo "Sākotnējā cena: " . $cena . "\n";

$klaviatura1->setKraasa('Balta');
$klaviatura1->setCena(59.99);

$kraasa = $klaviatura1->getKraasa();
$cena = $klaviatura1->getCena();

echo "Jaunā krāsa: " . $kraasa . "\n";
echo "Jaunā cena: " . $cena . "\n";


// class Klaviatura {
//     public $taustiņuSkaits; // Publiska īpašība (pieejama visiem)
//     public $izmers; // Publiska īpašība (pieejama visiem)
//     private $kraasa; // Privāta īpašība (pieejama tikai klasei)
//     private $cena;  // Privāta īpašība (pieejama tikai klasei)


//     public function __construct($taustiņuSkaits, $izmers, $kraasa, $cena) {
//         $this->taustiņuSkaits = $taustiņuSkaits;
//         $this->izmers = $izmers;
//         $this->kraasa = $kraasa;
//         $this->cena = $cena;
//     }
// }



// // Izveidojam objektus no klases Klaviatura
// $klaviatura1 = new Klaviatura(104, 'Standarta', 'Melna', 49.99);
// $klaviatura2 = new Klaviatura(87, 'Kompakta', 'Balta', 39.99);
// $klaviatura3 = new Klaviatura(61, 'Mini', 'Sarkana', 29.99);
// $klaviatura = $klaviatura1, $klaviatura2, $klaviatura3

// echo $klaviatura1->taustiņuSkaits; // Izvadīs "104"
// echo $klaviatura2->izmers; // Izvadīs "Kompakta"
// echo $klaviatura3->kraasa; // Izvadīs kļūdu, jo "kraasa" ir privāta īpašība

// echo "Taustiņu skaits: " . $klaviatura1->taustiņuSkaits . "\n";
// echo "Izmērs: " . $klaviatura1->izmers . "\n";
// echo "Krāsa: " . $klaviatura1->kraasa . "\n"; // Nevarēs izvadīt, jo "kraasa" ir privāta īpašība
// echo "Cena: " . $klaviatura1->cena . "\n"; // Nevarēs izvadīt, jo "cena" ir privāta īpašība

// echo "Taustiņu skaits: " . $klaviatura1->taustiņuSkaits . "\n";
// echo "Izmērs: " . $klaviatura1->izmers . "\n";
// echo "Krāsa: " . $klaviatura1->kraasa . "\n"; // Nevarēs izvadīt, jo "kraasa" ir privāta īpašība
// echo "Cena: " . $klaviatura1->cena . "\n"; // Nevarēs izvadīt, jo "cena" ir privāta īpašība

// echo "Taustiņu skaits: " . $klaviatura2->taustiņuSkaits . "\n";
// echo "Izmērs: " . $klaviatura2->izmers . "\n";
// echo "Krāsa: " . $klaviatura2->kraasa . "\n"; // Nevarēs izvadīt, jo "kraasa" ir privāta īpašība
// echo "Cena: " . $klaviatura2->cena . "\n"; // Nevarēs izvadīt, jo "cena" ir privāta īpašība