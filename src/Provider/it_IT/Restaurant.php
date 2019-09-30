<?php

namespace FakerRestaurant\Provider\it_IT;

class Restaurant extends \Faker\Provider\Base
{
    protected static $foodNames = [
        'Pizza margherita', 'Hamburger', 'Cheeseburger', 'Lasagne', 'Polenta',
        'Calzone farcito', 'Insalata di pollo', 'Pizza capricciosa', 'Sgombro al forno',
        'Panino vegano', 'Panino vegetariano al formaggio', 'Formaggio grigliato', 'Torta paradiso',
        'Tiramisù', 'Hot Dog', 'Caprese', 'Spaghetti al ragù', 'Penne all\'arrabbiata'
    ];

    protected static $beverageNames = [
        'Birra', 'Birra Radler', 'Vino bianco', 'Cioccolata calda',
        'Milk Shake', 'Camomilla', 'Tè freddo', 'Caffè', 'Tè caldo',
        'Champagne', 'Vino rosso', 'Limonata', 'Cola', 'Coca Zero',
        'Acqua naturale', 'Gazzosa', 'Succo d\'arancia', 'Acqua frizzante'
    ];

    protected static $dairyNames = [
        'Burro',
        'Uovo',
        'Latte',
        'Formaggio di capra',
        'Mozzarella',
        'Mozzarella di bufala',
        'Yogurt',
        'Panna',
        'Crema pasticcera',
    ];

    protected static $vegetableNames = [
        'Cipolla',
        'Aglio',
        'Pomodoro',
        'Patata',
        'Carota',
        'Peperone',
        'Broccoli',
        'Pannocchia',
        'Spinaci',
        'Funghi',
        'Peperoncino',
        'Lattuga',
        'Rosmarino',
        'Cocomero',
        'Zucchina',
        'Avocado',
        'Zucca',
    ];

    protected static $fruitNames = [
        'Limone',
        'Mela',
        'Banana',
        'Lime',
        'Fragola',
        'Arancia',
        'Ananas',
        'Mirtilli',
        'Uvetta',
        'Cocco',
        'Uva',
        'Pesca',
        'More',
        'Lamponi',
        'Mango',
        'Pera',
        'Ribes',
        'Ciliegia',
        'Anguria',
        'Kiwi',
        'Papaya',
        'Melone',
    ];

    protected static $meatNames = [
        'Pollo',
        'Bacon',
        'Salsiccia',
		'Sogliola',
		'Sgombro',
		'Gamberetti',
        'Bistecca',
        'Prosciutto',
        'Vitello',
        'Costine di maiale',
        'Petto di tacchino',
        'Alette di pollo',
        'Petto di pollo',
        'Agnello',
        'Coniglio',
    ];

    protected static $sauceNames = [
        'Passata di pomodoro',
        'Ketchup',
        'Maionese',
        'Salsa barbecue',
        'Salsa piccante',
        'Mostarda',
        'Senape',
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
