<?php

namespace FakerRestaurant\Provider\nl_NL;

class Restaurant extends \Faker\Provider\Base
{
    protected static $foodNames = [
        'Bacon Burger',
        'Bacon Cheeseburger',
        'Cheeseburger',
        'Fish and Chips',
        'Ham-Kaas Tosti',
        'Hamburger',
        'Kaas Tosti',
        'Kaaspizza',
        'Kipburger',
        'Kipfilet',
        'Kipschnitzel',
        'Kleine Bacon Burger',
        'Kleine Bacon Cheeseburger',
        'Kleine Cheeseburger',
        'Kleine Hamburger',
        'Kleine Kipburger',
        'Mixed Grill',
        'Saté',
        'Spareribs',
        'Sweet BBQ Burger',
        'Varkenshaas',
        'Vegan Saté',
        'Vegetarische Sandwich met Kaas',
        'Vegetarische Sandwich',
        'Wiener Schnitzel',
    ];

    protected static $beverageNames = [
        'Amstel',
        'Ananassap',
        'Bier',
        'Cappuccino',
        'Champagne',
        'Coca-Cola',
        'Cola Light',
        'Cola Zero',
        'Grolsch',
        'Heineken',
        'Hertog Jan',
        'IJskoffie',
        'IJsthee',
        'Koffie',
        'Limonade',
        'Milk shake',
        'Sinaasappelsap',
        'Sprite',
        'Thee',
        'Water',
        'Wijn',
    ];

    protected static $dairyNames = [
        'Boter',
        'Crème Fraîche',
        'Custard',
        'Ei',
        'Kaas',
        'Karnemelk',
        'Melk',
        'Mozzarella',
        'Room',
        'Slagroom',
        'Yoghurt',
        'Zure room',
    ];

    protected static $vegetableNames = [
        'Aardappel',
        'Aubergine',
        'Augurk',
        'Avocado',
        'Basilicum',
        'Broccoli',
        'Cassava',
        'Chili',
        'Gember',
        'Knoflook',
        'Komkommer',
        'Mais',
        'Munt',
        'Paprika',
        'Peterselie',
        'Pompoen',
        'Rosemarijn',
        'Spinazie',
        'Tomaat',
        'Ui',
        'Wortel',
    ];

    protected static $fruitNames = [
        'Aardbei',
        'Ananas',
        'Appel',
        'Banaan',
        'Bosbes',
        'Braambes',
        'Citroen',
        'Cranberry',
        'Druif',
        'Framboos',
        'Guava',
        'Kers',
        'Kiwi',
        'Kokosnoot',
        'Limoen',
        'Lychee',
        'Mandarijn',
        'Mango',
        'Meloen',
        'Nectarine',
        'Passievrucht',
        'Peer',
        'Pruim',
        'Rozenbottel',
        'Rozijn',
        'Sinaasappel',
        'Tomaat',
        'Watermeloen',
    ];

    protected static $meatNames = [
        'Côte a l\'os',
        'Dunne lende',
        'Filet américain',
        'Filet pur',
        'Ham',
        'Hespenspek',
        'Kalfsgehakt',
        'Kalfskotelet',
        'Kalfslapje',
        'Kalfsschenkel',
        'Kalfszwezerik',
        'Lamsbout',
        'Lamsfilet',
        'Lamsgehakt',
        'Lamskotelet',
        'Lamskroontje',
        'Lamsragout',
        'Lamsschenkel',
        'Lamsschouder',
        'Mignonnette',
        'Rosbief',
        'Rumsteak',
        'Runderfilet',
        'Rundergehakt',
        'Rundertong',
        'Soepvlees',
        'Spek',
        'Spieringkotelet',
        'Stoofvlees',
        'Tournedos',
        'Varkensgebraad',
        'Varkensgehakt',
        'Varkenshaasje',
        'Varkenskotelet',
        'Varkenskroontje',
        'Varkensstoofvlees',
        'Varkenswangetjes',
        'Zesrib',
    ];

    protected static $sauceNames = [
        'Aioli',
        'Andalousesaus',
        'Aspergesaus',
        'Barbecuesaus',
        'Bearnaisesaus',
        'Bechamelsaus',
        'Blackwellsaus',
        'Bolognesesaus',
        'Champignonsaus',
        'Chilisaus',
        'Chimichurri',
        'Chinese hoisinsaus',
        'Chutney',
        'Cocktailsaus',
        'Curry',
        'Curryketchup',
        'Dipsaus',
        'Dressing',
        'Fritessaus',
        'Groene saus',
        'Guacamole',
        'Harissa',
        'Hollandaisesaus',
        'Hummus',
        'Joppiesaus',
        'Kaassaus',
        'Ketjap',
        'Knoflooksaus',
        'Knolseldersaus',
        'Maderasaus',
        'Mammoetsaus',
        'Mangochutney',
        'Mayonaise',
        'Mojo',
        'Mosterd',
        'Oestersaus',
        'Pepersaus',
        'Pesto',
        'Piccalilly',
        'Pindasaus',
        'Piripirisaus',
        'Ravigote',
        'Roquefortsaus',
        'Roux',
        'Salsa verde',
        'Salsa',
        'Sambal',
        'Samoeraisaus',
        'Satésaus',
        'Sojasaus',
        'Sriracha',
        'Stoofvleessaus',
        'Stroganoffsaus',
        'Tabasco',
        'Tahini',
        'Tapenade',
        'Tarator',
        'Tartaarsaus',
        'Tomatenketchup',
        'Tomatensaus',
        'Tzatziki',
        'Vinaigrette',
        'Vissaus',
        'Vlammensaus',
        'Vleesjus',
        'Whiskysaus',
        'Witte saus',
        'Worcestersaus',
        'Zulusaus',
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
