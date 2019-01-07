<?php

namespace FakerRestaurant\Provider\en_US;

class Restaurant extends \Faker\Provider\Base
{
    protected static $foodNames = [
        'Cheese Pizza', 'Hamburger', 'Cheeseburger', 'Bacon Burger', 'Bacon Cheeseburger',
        'Little Hamburger', 'Little Cheeseburger', 'Little Bacon Burger', 'Little Bacon Cheeseburger',
        'Veggie Sandwich', 'Cheese Veggie Sandwich', 'Grilled Cheese',
        'Cheese Dog', 'Bacon Dog', 'Bacon Cheese Dog', 'Pasta'
    ];

    protected static $beverageNames = [
        'Beer', 'Bud Light', 'Budweiser', 'Miller Lite',
        'Milk Shake', 'Tea', ' Sweet Tea', 'Coffee', 'Hot Tea',
        'Champagne', 'Wine', 'Limonade', 'Coca-Cola', 'Diet-Coke',
        'Water', 'Sprite', 'Orange Juice', 'Iced Coffee'
    ];

    protected static $dairyNames = [
        'Butter',
        'Egg',
        'Milk',
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
        'Mushroom',
        'Ginger',
        'Chili',
        'Celery',
        'Roemary',
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
        'Blueberryy',
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
        'Mayonaise sauce',
        'BBQ sauce',
        'Chili sauce',
        'Garlic sauce',
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

    public function dairy()
    {
        return static::randomElement(static::$dairyNames);
    }

    public function vegetable()
    {
        return static::randomElement(static::$vegetableNames);
    }

    public function fruit()
    {
        return static::randomElement(static::$fruitNames);
    }

    public function meat()
    {
        return static::randomElement(static::$meatNames);
    }

    public function sauce()
    {
        return static::randomElement(static::$sauceNames);
    }
}
