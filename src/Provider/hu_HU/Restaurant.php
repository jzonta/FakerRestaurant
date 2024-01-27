<?php

namespace FakerRestaurant\Provider\hu_HU;

class Restaurant extends \Faker\Provider\Base
{
    protected static $foodNames = [
        'Sajtos pizza', 'Hamburger', 'Sajtos hamburger', 'Szalonnás hamburger', 'Szalonnás, sajtos hamburger',
        'Kis hamburger', 'Kis sajtos hamburger', 'Kis szalonnás hamburger', 'Kis szalonnás, sajtos hamburger',
        'Vegetáriánus szendvics', 'Sajtos vegetáriánus szendvics', 'Grillezett sajt',
        'Sajtos hot dog', 'Szalonnás hot dog', 'Szalonnás, sajtos hot dog', 'Tészta'
    ];

    protected static $beverageNames = [
        'Sör', 'Arany Ászok', 'Borsodi', 'Dreher', 'Soproni',
        'Tejturmix', 'Tea', 'Édes tea', 'Kávé', 'Forró tea',
        'Pezsgő', 'Bor', 'Limonádé', 'Coca-Cola', 'Diétás kóla',
        'Víz', 'Sprite', 'Narancslé', 'Jeges kávé'
    ];

    protected static $dairyNames = [
        'Vaj',
        'Tojás',
        'Sajt',
        'Tejföl',
        'Mozzarella',
        'Joghurt',
        'Krém',
        'Tej',
        'Tejsodó',
    ];

    protected static $vegetableNames = [
        'Hagyma',
        'Fokhagyma',
        'Paradicsom',
        'Burgonya',
        'Sárgarépa',
        'Kaliforniai paprika',
        'Bazsalikom',
        'Petrezselyem',
        'Brokkoli',
        'Kukorica',
        'Spenót',
        'Gyömbér',
        'Chili',
        'Zeller',
        'Rozmaring',
        'Uborka',
        'Savanyú uborka',
        'Avokádó',
        'Tök',
        'Menta',
        'Padlizsán',
        'Jamgyökér',
    ];

    protected static $fruitNames = [
        'Citrom',
        'Alma',
        'Banán',
        'Lime',
        'Eper',
        'Narancs',
        'Ananász',
        'Áfonya',
        'Mazsola',
        'Kókusz',
        'Szőlő',
        'Őszibarack',
        'Málna',
        'Áfonya',
        'Mangó',
        'Körte',
        'Földi szeder',
        'Cseresznye',
        'Görögdinnye',
        'Kiwi',
        'Papaya',
        'Guava',
        'Licsi',
    ];

    protected static $meatNames = [
        'Csirke',
        'Szalona',
        'Kolbász',
        'Marhahús',
        'Sonka',
        'Hot dog',
        'Sertéshús',
        'Pulyka',
        'Csirke szárny',
        'Csirkemell',
        'Bárány',
    ];

    protected static $sauceNames = [
        'Paradicsom szósz',
        'Paradicsom szósz',
        'Majonézes szósz',
        'BBQ szósz',
        'Chili szósz',
        'Fokhagymaszósz',
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
