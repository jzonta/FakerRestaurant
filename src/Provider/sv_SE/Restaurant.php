<?php

namespace FakerRestaurant\Provider\sv_SE;

class Restaurant extends \Faker\Provider\Base
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

    /**
     * A random Food Name.
     * @return string
     */
    public function foodName()
    {
        return static::randomElement(static::$foodNames);
    }

    /**
     * A random Beverage Name.
     * @return string
     */
    public function beverageName()
    {
        return static::randomElement(static::$beverageNames);
    }

    /**
     * A random Dairy Name.
     * @return string
     */
    public function dairyName()
    {
        return static::randomElement(static::$dairyNames);
    }

    /**
     * A random Vegetable Name.
     * @return string
     */
    public function vegetableName()
    {
        return static::randomElement(static::$vegetableNames);
    }

    /**
     * A random Fruit Name.
     * @return string
     */
    public function fruitName()
    {
        return static::randomElement(static::$fruitNames);
    }

    /**
     * A random Meat Name.
     * @return string
     */
    public function meatName()
    {
        return static::randomElement(static::$meatNames);
    }

    /**
     * A random Sauce Name.
     * @return string
     */
    public function sauceName()
    {
        return static::randomElement(static::$sauceNames);
    }
}
