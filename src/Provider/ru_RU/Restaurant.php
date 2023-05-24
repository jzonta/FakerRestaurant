<?php

namespace FakerRestaurant\Provider\ru_RU;

class Restaurant extends \Faker\Provider\Base
{
    protected static $foodNames = [
        'Пицца с сыром', 'Гамбургер', 'Чизбургер', 'Беконбургер', 'Беконный чизбургер',
        'Маленький гамбургер', 'Маленький чизбургер', 'Маленький беконбургер', 'Маленький беконный чизбургер',
        'Вегетарианский сэндвич', 'Вегетарианский сэндвич с сыром', 'Гриль с сыром',
        'Сырный хот-дог', 'Беконный хот-дог', 'Беконный сырный хот-дог', 'Паста'
    ];

    protected static $beverageNames = [
        'Пиво', 'Буд Лайт', 'Бадвейзер', 'Миллер Лайт',
        'Молочный коктейль', 'Чай', 'Сладкий чай', 'Кофе', 'Горячий чай',
        'Шампанское', 'Вино', 'Лимонад', 'Кока-кола', 'Диетическая кока-кола',
        'Вода', 'Спрайт', 'Апельсиновый сок', 'Холодный кофе'
    ];

    protected static $dairyNames = [
        'Масло',
        'Яйцо',
        'Сыр',
        'Сметана',
        'Моцарелла',
        'Йогурт',
        'Сливки',
        'Молоко',
        'Кастард',
    ];

    protected static $vegetableNames = [
        'Лук',
        'Чеснок',
        'Томат',
        'Картофель',
        'Морковь',
        'Болгарский перец',
        'Базилик',
        'Петрушка',
        'Брокколи',
        'Кукуруза',
        'Шпинат',
        'Имбирь',
        'Перец чили',
        'Сельдерей',
        'Розмарин',
        'Огурец',
        'Соленые огурцы',
        'Авокадо',
        'Тыква',
        'Мята',
        'Баклажан',
        'Ям',
    ];

    protected static $fruitNames = [
        'Лимон',
        'Яблоко',
        'Банан',
        'Лайм',
        'Клубника',
        'Апельсин',
        'Ананас',
        'Голубика',
        'Изюм',
        'Кокос',
        'Виноград',
        'Персик',
        'Малина',
        'Клюква',
        'Манго',
        'Груша',
        'Ежевика',
        'Вишня',
        'Арбуз',
        'Киви',
        'Папайя',
        'Гуава',
        'Личи',
    ];

    protected static $meatNames = [
        'Курица',
        'Бекон',
        'Колбаса',
        'Говядина',
        'Ветчина',
        'Хот-дог',
        'Свинина',
        'Индейка',
        'Крылья курицы',
        'Куриное филе',
        'Баранина',
    ];

    protected static $sauceNames = [
        'Томатный соус',
        'Томатная паста',
        'Соус майонез',
        'Соус Барбекю',
        'Чили соус',
        'Чесночный соус',
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