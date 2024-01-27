<?php

namespace FakerRestaurant\Provider\de_AT;

use FakerRestaurant\AbstractRestaurant;

class Restaurant extends AbstractRestaurant
{
    protected static $foodNames = [
        'Wiener Schnitzel', 'Tafelspitz', 'Saumaise', 'Gefüllte Paprika', 'Heidensterz', 'Schlickkrapfen', 'Ripperl',
        'Kärntner Kasnudeln', 'Steirisches Backhendl', 'Fleischknödel', 'Surbratl', 'Schweinsbraten mit Knödel',
        'Krautfleckerl', 'Pizza', 'Hamburger', 'Cheeseburger', 'Gegrillter Käse', 'Stelze', 'Blunzengröstl',
        'Beuschel', 'Steirisches Wurzelfleisch', 'Geselchtes mit Kraut und Knödel', 'Zwiebelrostbraten', 'Backhendl',
        'Brathendl', 'Paprikahendl', 'Grammelknödel', 'Hascheeknödel', 'Speckknödel',
    ];

    protected static $beverageNames = [
        'Bier', 'Märzen', 'Kaiser Bier', 'Stiegl',
        'Milchshake', 'Tee', 'Süßer Tee', 'Kaffee', 'Heißer Tee',
        'Champagner', 'Wein', 'Limonade', 'Coca-Cola', 'Cola-Light',
        'Wasser', 'Sprite', 'Orangensaft', 'Eiskaffee'
    ];

    protected static $dairyNames = [
        'Butter',
        'Ei',
        'Käse',
        'Sauerrahm',
        'Mozzarella',
        'Joghurt',
        'Obers',
        'Milch',
        'Eierkäse',
    ];

    protected static $vegetableNames = [
        'Zwiebel',
        'Knoblauch',
        'Paradeiser',
        'Erdapfel',
        'Karotte',
        'Paprike',
        'Basilikum',
        'Petersilie',
        'Brokkoli',
        'Kukuruz',
        'Spinat',
        'Ingwer',
        'Chilli',
        'Sellerie',
        'Rosmarie',
        'Gurke',
        'Essiggurke',
        'Avocado',
        'Kürbis',
        'Minze',
        'Aubergine',
        'Süßkartoffel',
    ];

    protected static $fruitNames = [
        'Zitrone',
        'Apfel',
        'Banane',
        'Limette',
        'Erdbeere',
        'Orange',
        'Ananas',
        'Heidelbeere',
        'Rosine',
        'Kokosnuss',
        'Weinbeere',
        'Pfirsich',
        'Himbeere',
        'Preiselbeere',
        'Mango',
        'Birne',
        'Brombeere',
        'Kirsche',
        'Wassermelone',
        'Kiwi',
        'Papaya',
        'Guava',
        'Litschi',
    ];

    protected static $meatNames = [
        'Hühnerfleisch',
        'Speck',
        'Wurst',
        'Rindfleisch',
        'Schinken',
        'Frankfurter',
        'Schweinefleisch',
        'Truthahn',
        'Hühnerflügel',
        'Hühnerbrust',
        'Lamm',
    ];

    protected static $sauceNames = [
        'Tomatensauce',
        'Tomatenmark',
        'Mayonaise',
        'Grillsauce',
        'Chillisauce',
        'Knoblauchsauce',
    ];
}
