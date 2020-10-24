<?php

namespace FakerRestaurant\Provider\ar_SA;

class Restaurant extends \Faker\Provider\Base
{
    protected static $foodNames = [
        'بيتزا بالجبنة', 'همبرغر', 'برجر بالجبنة', 'برجر لحم الخنزير المقدد', 'برغر لحم الخنزير المقدد بالجبنة',
        'ليتل همبرغر', 'ليتل تشيز برجر', 'ليتل بيكون برجر', 'ليتل بيكون تشيز برجر',
        'ساندوتش فيجي', 'سندويتش جبن فيجي', 'جبنة مشوية',
        'نقانق الجبن', 'نقانق لحم الخنزير المقدد', 'نقانق لحم خنزير بالجبنة', 'معكرونة'
    ];

    protected static $beverageNames = [
        'بابونج', 'شاي أخضر', 'مليسة', 'إكليل الجبل',
        'اللبن المخفوق', 'شاي', 'شاي حلو', 'قهوة', 'شاي ساخن',
        'عصير البرتقال', 'نبيذ', 'عصير الليمون', 'الكوكا كولا', 'كولا للحمية',
        'ماء', 'سبرايت', 'عصير البرتقال', 'قهوة مثلجة'
    ];

    protected static $dairyNames = [
        'زبدة',
        'بيضة',
        'جبنه',
        'الكريمة الحامضة',
        'موزاريلا',
        'زبادي',
        'كريم',
        'حليب',
        'كاسترد',
    ];

    protected static $vegetableNames = [
        'بصل',
        'ثوم',
        'طماطم',
        'البطاطس',
        'جزر',
        'فلفل حلو',
        'بقدونس',
        'بروكلي',
        'حبوب ذرة',
        'سبانخ',
        'زنجبيل',
        'الفلفل الحار',
        'كرفس',
        'إكليل الجبل',
        'خيار',
        'مخلل',
        'أفوكادو',
        'يقطين',
        'نعناع',
        'باذنجان',
        'بطاطا',
    ];

    protected static $fruitNames = [
        'ليمون',
        'تفاحة',
        'موز',
        'جير',
        'الفراولة',
        'البرتقالي',
        'أناناس',
        'توت بري',
        'زبيب',
        'جوزة الهند',
        'عنب',
        'خوخ',
        'توت العليق',
        'كرز',
        'مانجو',
        'كمثرى',
        'بلاك بيري',
        'كرز',
        'البطيخ',
        'كيوي',
        'بابايا',
        'جوافة',
        'ليتشي',
    ];

    protected static $meatNames = [
        'دجاج',
        'لحم خنزير مقدد',
        'سجق',
        'لحم بقري',
        'لحم خنزير',
        'نقانق',
        'لحم خنزير',
        'ديك رومي',
        'جناح دجاجة',
        'صدر دجاج',
        'لحم ضأن',
    ];

    protected static $sauceNames = [
        'صلصة طماطم',
        'معجون الطماطم',
        'صوص مايونيز',
        'صلصة شواء',
        'صلصة الفلفل الحار',
        'صلصة الثوم',
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
