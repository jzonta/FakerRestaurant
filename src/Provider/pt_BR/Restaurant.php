<?php

namespace FakerRestaurant\Provider\pt_BR;

class Restaurant extends \Faker\Provider\Base
{
    protected static $foodNames = [
        'Pizza', 'Pastel', 'X-Salada', 'Xis-Bacon', 'X-Coração', 'X-Frango', 'X-Bacon', 'X-Calabresa',
        'X Calabresa', 'Cachorro Quente', 'Bauru de Filé', 'Bauru de Filé ao Molho 4 Queijos',
        'Bauru de Filé ao Molho Branco', 'Sanduíche Simples', 'Torrada Gratinada', 'Torrada Simples',
        'Bauru Lombinho com Abacaxi', 'X-Burger Vegetariano', 'Frango no Prato', 'Filé no Prato',
        'Porção de Fritas', 'Porção de Contra Filé', 'Porção de Calabresa', 'Porção Mista'
    ];

    protected static $beverageNames = [
        'Cerveja Lata', 'Cerveja 600ml', 'Cerveja 1L',
        'Cerveja Bavária', 'Cerveja Kilsen', 'Cerveja Skol', 'Cerveja Brahma',
        'Coca-Cola Lata', 'Coca-Cola 600ml', 'Coca-Cola 2L', 'Coca-Cola Lata Zero',
        'Fanta Lata', 'Fanta 600ml', 'Fanta 2L', 'Fanta Lata Zero',
        'Sprite Lata', 'Sprite 600ml', 'Sprite 2L', 'Sprite Lata Zero',
        'Água sem gás', 'Água com gás',
        'Suco de Uva', 'Suco de Abacaxi', 'Suco de Laranja', 'Suco de Limão', 'Suco de Morango'
    ];

    protected static $dairyNames = [
        'Manteiga',
        'Ovo',
        'Leite',
        'Queijo',
        'Nata',
        'Mussarela',
        'Iogurte',
        'Creme',
        'Leite',
        'Quindim',
    ];

    protected static $vegetableNames = [
        'Cebola',
        'Alho',
        'Tomate',
        'Batata',
        'Cenoura',
        'Pimentão',
        'Bell Basil',
        'Salsinha',
        'Brócolis',
        'Milho',
        'Espinafre',
        'Cogumelo',
        'Gengibre',
        'Pimenta',
        'Aipo',
        'Roemary',
        'Pepino',
        'Salmoura',
        'Abacate',
        'Abóbora',
        'Hortelã',
        'Berinjela',
        'Inhame',
    ];

    protected static $fruitNames = [
        'Limão',
        'Maçã',
        'Banana',
        'Lima',
        'Morango',
        'Laranja',
        'Abacaxi',
        'Mirtilo',
        'Passa',
        'Coco',
        'Uva',
        'Pêssego',
        'Framboesa',
        'Oxicoco',
        'Manga',
        'Pera',
        'Amora',
        'Cereja',
        'Melancia',
        'Kiwi',
        'Mamão',
        'Goiaba',
        'Lichia'
    ];

    protected static $meatNames = [
        'Frango',
        'Bacon',
        'Linguiça',
        'Carne',
        'Presunto',
        'Cachorro quente',
        'Carne de porco',
        'Peru',
        'ASA de galinha',
        'Peito de frango',
        'Cordeiro',
    ];

    protected static $sauceNames = ['Molho de tomate',
        'Molho de tomate',
        'Molho de maionese',
        'Molho de churrasco',
        'Molho de pimenta',
        'Molho de alho',
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
