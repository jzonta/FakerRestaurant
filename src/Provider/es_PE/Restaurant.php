<?php

namespace FakerRestaurant\Provider\es_PE;

use FakerRestaurant\AbstractRestaurant;

class Restaurant extends AbstractRestaurant
{
    protected static $foodNames = [
        'Hamburguesas con papas', 'Estofado de pollo', 'Lentejas con arroz','Kanlu Wantan', 'Chicharrón de Pollo',
        'Arroz a la cubana', 'Tallarines en salsa blanca', 'Arroz Chaufa', 'Lomo Saltado','Salpicon de Pollo',
        'Saltado de vainitas','Sopa de Semola','Caldo de Gallina','Sopa Blanca','Tallarines a la Alfredo','Aguadito',
        'Salchibroster','Arroz con pollo','Pescado Frito','Tallarines verdes','Sopa de moron','Guiso de Quinua',
        'Papa a la Huancaina','Pollo a la brasa','Aguadito','Bisteck a la olla','Estofado de Res','Cuy al Horno'
    ];

    protected static $beverageNames = [
        'Cerveza', 'Coca Cola', 'Inca Kola', 'Fanta','Chicha Morada',
        'Pisco Sour', 'Machu Picchu', 'Kola Escocesa', 'Cafe', 'Refresco de piña',
        'Champán', 'Vino', 'Limonada', 'Emoliente','Frutillada',
        'Agua', 'Sprite', 'Jugo de Naranja', 'Pisco','Kola Real'
    ];

    protected static $dairyNames = [
        'Mantequilla',
        'Huevo',
        'Leche',
        'Queso',
        'Crema Agría',
        'Mozzarella',
        'Yogurt',
        'Crema',
        'Natilla',
        'Leche condensada'
    ];

    protected static $vegetableNames = [
        'Cebolla',
        'Ajo',
        'Tomate',
        'Papa',
        'Zanahoria',
        'Pimiento',
        'Albahaca',
        'Perejil',
        'Brócoli',
        'Maiz',
        'Espinaca',
        'Champiñones',
        'Jengibre',
        'Ají',
        'Apio',
        'Romero',
        'Pepino',
        'Pepinillo',
        'Palta',
        'Calabaza',
        'Menta',
        'Berenjena',
        'Camote',
    ];

    protected static $fruitNames = [
        'Limón',
        'Manzana',
        'Plátano',
        'Lima',
        'Fresa',
        'Naranja',
        'Piña',
        'Arándano',
        'Pasa',
        'Coco',
        'Uva',
        'Durazno',
        'Frambuesa',
        'Mango',
        'Pera',
        'Mora',
        'Cereza',
        'Sandía',
        'Kiwi',
        'Papaya',
        'Guayaba',
        'Chirimoya',
        'Mandarina'
    ];

    protected static $meatNames = [
        'Pollo',
        'Tocino',
        'Salchicha',
        'Res',
        'Jamón',
        'Hot dog',
        'Chancho',
        'Pavo',
        'Alitas',
        'Pechuga de pollo',
        'Cordero',
        'Cuy'
    ];

    protected static $sauceNames = [
        'Mayonesa',
        'Salsa BBQ',
        'Ají',
        'Salsa de ajo',
        'Ketchup',
        'Tarí',
        'Salsa Golf',
        'Salsa Blanca',
        'Mostaza',
        'Salsa chimichurri'
    ];
}
