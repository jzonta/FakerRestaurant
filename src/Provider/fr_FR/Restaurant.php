<?php

namespace FakerRestaurant\Provider\fr_FR;

use FakerRestaurant\AbstractRestaurant;

class Restaurant extends AbstractRestaurant
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

    protected static $dairyNames = array(
        'Beurre',
        'Lait',
        'Fromage',
        'Mozzarella',
        'Yaourt',
        'Crème',
    );

    protected static $vegetableNames = array(
        'Oignon',
        'Ail',
        'Tomate',
        'Pomme de terre',
        'Carotte',
        'Poivron',
        'Basil',
        'Persil',
        'Brocoli',
        'Blé',
        'Épinard',
        'Champignon',
        'Gingembre',
        'Chilie',
        'Romarin',
        'Concombre',
        'Cornichon',
        'Avocat',
        'Citrouille',
        'Menthe',
        'Aubergine',
        'Poireau'
    );

    protected static $fruitNames = array(
        'Citron',
        'Pomme',
        'Banane',
        'Fraise',
        'Orange',
        'Ananas',
        'Myrtille',
        'Raisin',
        'Noix de coco',
        'Framboise',
        'Mangue',
        'Poire',
        'Mûre',
        'Cerise',
        'Pastèque',
        'Melon',
        'Kiwi',
        'Papaye',
        'Goyave',
        'Litchi'
    );

    protected static $meatNames = array(
        'Poulet',
        'Bacon',
        'Saucisse',
        'Boeuf',
        'Jambon',
        'Porc',
        'Dinde',
        'Paupiette',
    );

    protected static $sauceNames = array(
        'Sauce tomate',
        'Concentré de tomate',
        'Mayonaise',
        'Sauce barbecue',
        'Ketchup'
    );
}
