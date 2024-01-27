<?php

namespace FakerRestaurant\Provider\sv_SE;

use FakerRestaurant\AbstractRestaurant;

class Restaurant extends AbstractRestaurant
{
    protected static $foodNames = [
        'Pizza', 'Hamburgare', 'Köttbullar med mos', 'Ostburgare', 'Pölsa', 'Inlagd sill',
        'Kroppkakor', 'Blodpudding', 'Kalops', 'Ärtsoppa',
        'Raggmunk med fläsk', 'Kåldolmar', 'Wallenbergare',
        'Bruna bönor med fläsk', 'Pyttipanna', 'Kålpudding', 'Pasta', 'Ugnsbakad falukorv',
        'Stekt strömming med potatismos', 'Rotmos och fläsklägg', ' Isterband med stuvad potatis',
        'Lapskojs', 'Janssons frestelse', 'Fattiga riddare'
    ];

    protected static $beverageNames = [
        'Öl', 'Norrlands Guld', 'Arboga 10,2', 'Pripps Blå', 'Sofiero',
        'Milkshake', 'Te', 'Iste', 'Kaffe',
        'Champagne', 'Vin', 'Lemonad', 'Coca-Cola', 'Fanta',
        'Vatten', 'Sprite', 'Apelsinjuice', 'Iskaffe'
    ];

    protected static $dairyNames = [
        'Smör',
        'Ägg',
        'Ost',
        'Gräddfil',
        'Mozzarella',
        'Yogurt',
        'Grädde',
        'Mjölk',
        'Senap',
    ];

    protected static $vegetableNames = [
        'Lök',
        'Vitlök',
        'Tomat',
        'Potatis',
        'Morot',
        'Paprika',
        'Basilika',
        'Persilja',
        'Broccoli',
        'Majs',
        'Spenat',
        'Ingefära',
        'Chili',
        'Selleri',
        'Rosmarin',
        'Gurka',
        'Ättiksgurka',
        'Avocado',
        'Pumpa',
        'Mynta',
        'Aubergine',
        'Sötpotatis',
    ];

    protected static $fruitNames = [
        'Citron',
        'Äpple',
        'Banan',
        'Lime',
        'Jordgubbe',
        'Apelsin',
        'Ananas',
        'Blåbär',
        'Russin',
        'Kokosnöt',
        'Vindruva',
        'Persika',
        'Hallon',
        'Tranbär',
        'Mango',
        'Päron',
        'Lingon',
        'Körsbär',
        'Vattenmelon',
        'Kiwi',
        'Papaya',
        'Granskott',
        'Kråkbär',
    ];

    protected static $meatNames = [
        'Kyckling',
        'Bacon',
        'Korv',
        'Biff',
        'Skinka',
        'Hotdog',
        'Fläsk',
        'Kalkon',
        'Kycklingvinge',
        'Kycklingbröst',
        'Lamm',
    ];

    protected static $sauceNames = [
        'Tomatsås',
        'Tomatpure',
        'Majonäs',
        'BBQ-sås',
        'Chilisås',
        'Vitlökssås',
    ];
}
