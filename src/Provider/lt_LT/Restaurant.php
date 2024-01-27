<?php

namespace FakerRestaurant\Provider\lt_LT;

use FakerRestaurant\AbstractRestaurant;

class Restaurant extends AbstractRestaurant
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
}
