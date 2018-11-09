<?php

namespace FakerRestaurant\Provider\id_ID;

class Restaurant extends \Faker\Provider\Base
{
    protected static $foodNames = array(
        'Nasi Goreng', 'Mie Goreng', 'Mie Rebus', 'Kwetiau Goreng', 'Kwetiau Rebus',
        'Nasi Uduk', 'Ayam Goreng', 'Ayam Bakar', 'Sate Ayam', 'Sate Kambing',
        'Soto Ayam', 'Soto Betawi', 'Sop Ayam', 'Rendang', 'Siomay', 'Batagor',
        'Sayur Lodeh', 'Sayur Asam', 'Sayur Bening', 'Pasta', 'Ketoprak', 'Ikan Bakar',
        'Nasi Uduk', 'Nasi Kuning', 'Sayur Lodeh', 'Gulai', 'Sop Buntut'
    );

    protected static $beverageNames = array(
        'Es Teh', 'Es Jeruk', 'Jus Jambu', 'Jus Alpukat', 'Es Buah', 'Es Dawet',
        'Es Kelapa Muda', 'Wedang Ronde', 'Susu Hangat', 'Kopi', 'Teh Panas',
        'Jeruk Hangat', 'Coca-Cola', 'Diet-Coke', 'Es Susu', 'Susu Coklat',
        'Air Putih', 'Sprite', 'Jus Jeruk', 'Es Kopi', 'Es Cendol', 'Skoteng'
    );

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
}
