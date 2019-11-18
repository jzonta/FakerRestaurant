<?php

namespace FakerRestaurant\Provider\lt_LT;

class Restaurant extends \Faker\Provider\Base
{
    protected static $foodNames = [
        'Makaronai', 'Sūrio pica', 'Suši', 'Kiaušinienė', 'Omletas',
        'Balandėliai', 'Lietiniai blynai', 'Bulviniai blynai', 'Cepelinai',
        'Varškėčiai', 'Grikių blynai', 'Vištienos kroketai', 'Vištienos petukai',
        'Gruzdinti batatai', 'Gruzdinti kalmarai', 'Cezario salotos', 'Dorada',
        'Šnicelis', 'Kiaulienos kepsnys', 'Šašlykas', 'Kebabas', 'Charčio sriuba',
        'Šonkauliai', 'Jautienos antrekotas', 'Ryžių makaronai', 'Moliūgų sriuba',
    ];
    protected static $beverageNames = [
        'Alus', 'Mineralinis vanduo', 'Limonadas', 'Kava', 'Arbata', 'Kapučino',
        'Vanduo', 'Šalta kava', 'Šalta arbata', 'Gira', 'Sultys', 'Vynas',
    ];

    protected static $dairyNames = [
        'Sviestas', 'Kiaušiniai', 'Sūris', 'Grietinė', 'Mocarela', 'Jogurtas',
        'Pienas', 'Kondensuotas pienas',
    ];

    protected static $vegetableNames = [
        'Svogūnas', 'Česnakas', 'Pomidoras', 'Bulvė', 'Morka', 'Varpiniai pipirai',
        'Bazilikas', 'Petražolės', 'Brokolis', 'Kukurūzas', 'Špinatai', 'Imbieras',
        'Salierai', 'Paprika', 'Agurkas', 'Marinuotas agurkas',
        'Konservuotas agurkas', 'Moliūgas', 'Baklažanas',
    ];

    protected static $fruitNames = [
        'Citrina', 'Obuolys', 'Bananas', 'Žalioji citrina', 'Braškė',
        'Apelsinas', 'Ananasas', 'Mėlynė', 'Razina', 'Kokosas', 'Vynuogė',
        'Persikas', 'Avietė', 'Spanguolė', 'Mangas', 'Kriaušė', 'Gervuogė',
        'Vyšnia', 'Arbūzas', 'Kivis', 'Papaja', 'Gvajava', 'Mandarinas',
        'Greipfrutas', 'Avokadas', 'Vyšnia', 'Abrikosas', 'Gervuogė',
    ];

    protected static $meatNames = [
        'Vištiena', 'Bekonas', 'Dešrelės', 'Jautiena', 'Kiauliena', 'Aviena',
        'Arkliena', 'Aviena', 'Ėriena', 'Kalakutiena',
    ];

    protected static $sauceNames = [
        'Pomidorų padažas', 'Pomidorų pasta', 'Majonezinis padažas',
        'Barbekiu padažas', 'Garstyčių padažas', 'Čili padažas',
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
