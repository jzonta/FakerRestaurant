<?php

namespace FakerRestaurant\Provider\tr_TR;

use FakerRestaurant\AbstractRestaurant;

class Restaurant extends AbstractRestaurant
{
    protected static $foodNames = [
        'Karışık pizza', 'Hamburger', 'Tavuk burger', 'Islak burger', 'Yengen',
        'Et döner', 'Tavuk döner', 'Patso', 'Kumpir',
        'Ton balıklı sandwich', 'Tavuklu sandwich', 'Kumru',
        'Köfte', 'Pide', 'Lahmacun', 'Makarna', 'Hamsi tava'
    ];

    protected static $beverageNames = [
        'Bira', 'Ayran', 'Kola', 'Çay', 'Bitki çayı',
        'Soda', 'Meyve suyu', 'Su', 'Türk kahvesi', 'Kahve',
        'Şarap', 'Limonata', 'Meyveli soda', 'Kefir', 'Rakı',
        'Votka', 'Gazoz', 'Portakal suyu', 'Buzlu kahve'
    ];

    protected static $dairyNames = [
        'Tereyağı',
        'Yumurta',
        'Beyaz peynir',
        'Tulum peyniri',
        'Keçi peyniri',
        'Yoğurt',
        'Lor peyniri',
        'Süt',
        'Süzme yoğurt',
    ];

    protected static $vegetableNames = [
        'Soğan',
        'Sarımsak',
        'Domates',
        'Patates',
        'Havuç',
        'Dolmalık biber',
        'Fesleğen',
        'Maydanoz',
        'Brokoli',
        'Mısır',
        'Ispanak',
        'Zencefil',
        'Acı biber',
        'Kereviz',
        'Biberiye',
        'Salatalık',
        'Turşu',
        'Avakado',
        'Bal kabağı',
        'Nane',
        'Patlıcan',
        'Tatlı patates',
        'Karnıbahar',
    ];

    protected static $fruitNames = [
        'Limon',
        'Elma',
        'Muz',
        'Çilek',
        'Portakal',
        'Mandalina',
        'Ananas',
        'Dut',
        'Kuru üzüm',
        'Hindistan cevizi',
        'Üzüm',
        'Şeftali',
        'Ahududu',
        'Yaban mersini',
        'Mango',
        'Armut',
        'Böğürtlen',
        'Kiraz',
        'Karpuz',
        'Kivi',
        'Papaya',
        'Vişne',
        'Nar',
        'Hurma',
    ];

    protected static $meatNames = [
        'Hindi',
        'Tavuk',
        'Sosis',
        'Sucuk',
        'Dana',
        'Kuzu',
        'Keçi',
        'Tavuk kanat',
        'Tavuk göğsü',
        'Pastırma',
        'Salam',
    ];

    protected static $sauceNames = [
        'Domates sosu',
        'Domates ezmesi',
        'Biber ezmesi',
        'Mayonez',
        'Barbekü sosu',
        'Acı sos',
        'Sarımsaklı sos',
    ];
}
