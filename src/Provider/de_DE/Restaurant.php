<?php

namespace FakerRestaurant\Provider\de_DE;

class Restaurant extends \Faker\Provider\Base
{
    protected static $foodNames = [
        'Bratwurst', 'Eisbein', 'Schweinebraten', 'Hackbraten', 'Frikadellen', 'Blutwurst', 'Wiener Würstchen',
        'Rinderrouladen', 'Brathähnchen', 'Gulasch', 'Weißwürste', 'Currywurst', 'Kasseler', 'Bulette', 'Schnitzerl',
        'Pizza', 'Hamburger', 'Cheeseburger', 'Gegrillter Käse',  'Rostbraten', 'Käsespätzle', 'Elsässer Flammkuchen',
        'Dampfnudeln', 'Rheinischer Sauerbraten', 'Dicke Bohnen mit Speck', 'Miesmuscheln',
        'Bayrischer Krustenbraten mit Dunkelbiersoße und Semmelknödeln'
    ];

    protected static $beverageNames = [
        'Bier', 'Weizenbier', 'Helles', 'Starkbier', 'Kölsch', 'Altbier',
        'Milchshake', 'Tee', 'Süßer Tee', 'Kaffee', 'Heißer Tee',
        'Champagner', 'Wein', 'Limonade', 'Coca-Cola', 'Cola-Light',
        'Wasser', 'Sprite', 'Orangensaft', 'Eiskaffee',
        'Apfelschorle', 'Weinschorle',
    ];

    protected static $dairyNames = [
        'Butter',
        'Ei',
        'Käse',
        'Sauerrahm',
        'Mozzarella',
        'Joghurt',
        'Sahne',
        'Milch',
        'Eierkäse',
    ];

    protected static $vegetableNames = [
        'Zwiebel',
        'Knoblauch',
        'Tomate',
        'Kartoffel',
        'Karotte',
        'Paprike',
        'Basilikum',
        'Petersilie',
        'Brokkoli',
        'Mais',
        'Spinat',
        'Ingwer',
        'Chilli',
        'Sellerie',
        'Rosmarie',
        'Gurke',
        'Essiggurke',
        'Avocado',
        'Kürbis',
        'Minze',
        'Aubergine',
        'Süßkartoffel',
    ];

    protected static $fruitNames = [
        'Zitrone',
        'Apfel',
        'Banane',
        'Limette',
        'Erdbeere',
        'Orange',
        'Ananas',
        'Heidelbeere',
        'Rosine',
        'Kokosnuss',
        'Weinbeere',
        'Pfirsich',
        'Himbeere',
        'Preiselbeere',
        'Mango',
        'Birne',
        'Brombeere',
        'Kirsche',
        'Wassermelone',
        'Kiwi',
        'Papaya',
        'Guava',
        'Litschi',
    ];

    protected static $meatNames = [
        'Hühnerfleisch',
        'Speck',
        'Wurst',
        'Rindfleisch',
        'Schinken',
        'Frankfurter',
        'Schweinefleisch',
        'Truthahn',
        'Hühnerflügel',
        'Hühnerbrust',
        'Lamm',
    ];

    protected static $sauceNames = [
        'Tomatensauce',
        'Tomatenmark',
        'Mayonaise',
        'Grillsauce',
        'Chillisauce',
        'Knoblauchsauce',
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
