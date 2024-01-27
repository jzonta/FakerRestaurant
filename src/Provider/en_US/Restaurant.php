<?php

namespace FakerRestaurant\Provider\en_US;

use FakerRestaurant\AbstractRestaurant;

class Restaurant extends AbstractRestaurant
{
    protected static $foodNames = [
        'Cheese Pizza', 'Hamburger', 'Cheeseburger', 'Bacon Burger', 'Bacon Cheeseburger',
        'Little Hamburger', 'Little Cheeseburger', 'Little Bacon Burger', 'Little Bacon Cheeseburger',
        'Veggie Sandwich', 'Cheese Veggie Sandwich', 'Grilled Cheese',
        'Cheese Dog', 'Bacon Dog', 'Bacon Cheese Dog', 'Pasta'
    ];

    protected static $beverageNames = [
        'Beer', 'Bud Light', 'Budweiser', 'Miller Lite',
        'Milk Shake', 'Tea', 'Sweet Tea', 'Coffee', 'Hot Tea',
        'Champagne', 'Wine', 'Lemonade', 'Coca-Cola', 'Diet Coke',
        'Water', 'Sprite', 'Orange Juice', 'Iced Coffee'
    ];

    protected static $dairyNames = [
        'Butter',
        'Egg',
        'Cheese',
        'Sour cream',
        'Mozzarella',
        'Yogurt',
        'Cream',
        'Milk',
        'Custard',
    ];

    protected static $vegetableNames = [
        'Onion',
        'Garlic',
        'Tomato',
        'Potato',
        'Carrot',
        'Bell Pepper',
        'Bell Basil',
        'Parsley',
        'Broccoli',
        'Corn',
        'Spinach',
        'Ginger',
        'Chili',
        'Celery',
        'Rosemary',
        'Cucumber',
        'Pickle',
        'Avocado',
        'Pumpkin',
        'Mint',
        'Eggplant',
        'Yam',
    ];

    protected static $fruitNames = [
        'Lemon',
        'Apple',
        'Banana',
        'Lime',
        'Strawberry',
        'Orange',
        'Pineapple',
        'Blueberry',
        'Raisin',
        'Coconut',
        'Grape',
        'Peach',
        'Raspberry',
        'Cranberry',
        'Mango',
        'Pear',
        'Blackberry',
        'Cherry',
        'Watermelon',
        'Kiwi',
        'Papaya',
        'Guava',
        'Lychee',
    ];

    protected static $meatNames = [
        'Chicken',
        'Bacon',
        'Sausage',
        'Beef',
        'Ham',
        'Hot dog',
        'Pork',
        'Turkey',
        'Chicken wing',
        'Chicken breast',
        'Lamb',
    ];

    protected static $sauceNames = [
        'Tomato sauce',
        'Tomato paste',
        'Mayonnaise sauce',
        'BBQ sauce',
        'Chili sauce',
        'Garlic sauce',
    ];
}
