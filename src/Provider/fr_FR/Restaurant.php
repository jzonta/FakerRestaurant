<?php

namespace FakerRestaurant\Provider\fr_FR;

class Restaurant extends \Faker\Provider\Base
{

    protected static $foodNames = array(
        'Pizza au fromage', 'Hamburger', 'Cheeseburger', 'Moules Marinières', 'Salade Grecque',
        'Petit Hamburger', 'Petit Cheeseburger', 'Petit Bacon Burger', 'Petit Bacon Cheeseburger',
        'Sandwich Vegan', 'Sandwich Vegan au fromage', 'Fromage grillé', 'Pates',
        'Cheese Dog', 'Hot Dog', 'Welsh', 'Tartiflette', 'Boeuf Bourguignons'
    );

    protected static $beverageNames = array(
        'Bière', 'Bourgeon Léger', 'Miller Lite', 'Thé Froid',
        'Milk Shake', 'Thé', 'Café', 'Thé chaud', 'Chocolat Chaud',
        'Champagne', 'Vin', 'Limonade', 'Coca-Cola', 'Oasis',
        'Eau', 'Sprite', 'Jus d\'Orange', 'Café frappé'
    );

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
}
