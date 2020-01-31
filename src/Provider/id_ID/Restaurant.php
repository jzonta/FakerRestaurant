<?php

namespace FakerRestaurant\Provider\id_ID;

class Restaurant extends \Faker\Provider\Base
{
    protected static $foodNames = [
        'Gado-Gado', 'Nasi Goreng', 'Mie Goreng', 'Mie Rebus', 'Kwetiau Goreng', 'Kwetiau Rebus',
        'Nasi Uduk', 'Ayam Goreng', 'Ayam Bakar', 'Sate Ayam', 'Sate Kambing', 'Rujak',
        'Soto Ayam', 'Soto Betawi', 'Sop Ayam', 'Sop Ikan', 'Rendang', 'Siomay', 'Batagor',
        'Sayur Lodeh', 'Sayur Asam', 'Sayur Bening', 'Pasta', 'Ketoprak', 'Ikan Bakar',
        'Nasi Uduk', 'Nasi Kuning', 'Sayur Lodeh', 'Gulai', 'Sop Buntut', 'Seblak', 'Sate Lilit',
        'Serabi', 'Kroket', 'Semur', 'Laksa', 'Ayam Geprek', 'Ayam Tangkap', 'Pisang Molen', 
        'Otak-Otak', 'Onde-Onde', 'Cireng', 'Gehu', 'Mie Kocok', 'Nasi Timbel', 'Klontong',
        'Tahu Bulat', 'Pepes Ikan', 'Tahu Sumedang', 'Kupat Tahu', 'Tahu Bulat', 'Soto Kuning',
        'Getuk', 'Klepon', 'Nasi Kucing', 'Nasi Pecel', 'Opor Ayam', 'Wajik', 'Urap', 'Babi Guling'

    ];

    protected static $beverageNames = [
        'Es Teh', 'Es Jeruk', 'Jus Jambu', 'Jus Alpukat', 'Es Buah', 'Es Dawet',
        'Es Kelapa Muda', 'Wedang Ronde', 'Susu Hangat', 'Kopi', 'Teh Panas', 
        'Jeruk Hangat', 'Coca-Cola', 'Diet-Coke', 'Es Susu', 'Susu Coklat',
        'Air Putih', 'Sprite', 'Jus Jeruk', 'Es Kopi', 'Es Cendol', 'Skoteng'
    ];

    protected static $dairyNames = [
        'Mentega',
        'Telur',
        'Keju',
        'Mozzarella',
        'Yogurt',
        'Krim',
        'Susu',
    ];

    protected static $vegetableNames = [
        'Bawang Merah',
        'Bawang Putih',
        'Bawang Bombay',
        'Tomat',
        'Kentang',
        'Wortel',
        'Paprika',
        'Peterseli',
        'Brokoli',
        'Jagung',
        'Bayam',
        'Jahe',
        'Cabai',
        'Seledri',
        'Timun',
        'Acar',
        'Alpukat',
        'Labu',
        'Daun Mint',
        'Terong',
        'Ubi',
    ];

    protected static $fruitNames = [
        'Lemon',
        'Apel',
        'Pisang',
        'Stroberi',
        'Jeruk',
        'Nanas',
        'Blueberry',
        'Kismis',
        'Kelapa',
        'Anggur',
        'Persik',
        'Frambos',
        'Cranberry',
        'Mangga',
        'Pir',
        'Blackberry',
        'Ceri',
        'Semangka',
        'Kiwi',
        'Pepaya',
        'Jambu Biji',
        'Leci',
        'Nagka',
        'Durian',
        'Sawo',
        'Sirsak',
        'Melon',
        'Jambu',
    ];

    protected static $meatNames = [
        'Daging Ayam',
        'Daging Babi Asap',
        'Sosis',
        'Daging Sapi',
        'Ham',
        'Hot dog',
        'Daging Babi',
        'Sayap Ayam',
        'Dada Ayam',
        'Daging Kambing',
        'Daging Domba',
        'Daging Kerbau',
        'Daging Bebek',
        'Ikan',
    ];

    protected static $sauceNames = [
        'Saus Tomat',
        'Pasta Tomat',
        'Saus Mayones',
        'Saus BBQ',
        'Saus Sambal',
        'Saus Bawang Putih',
        'Sambal Terasi',
        'Sambal Cabe Ijo',
        'Sambal Rujak',
        'Sambal Dabu-Dabu',
        'Sambal Matah',
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
