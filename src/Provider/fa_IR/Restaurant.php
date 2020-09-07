<?php

namespace FakerRestaurant\Provider\fa_IR;

use Faker\Provider\Base;

class Restaurant extends Base
{
    protected static $foodNames = [
        'پیتزا', 'همبرگر', 'چیز برگر', 'بیکن برگر', 'بیکن برگر با پنیر',
        'همبرگر کوچک', 'همبرگر کوچک با پنیر', 'بیکن برگر کوچک', 'بیکن برگر کوچک با پنیر',
        'ساندویچ سبزیجات', 'ساندویچ سبزیجات با پنیر', 'پنیر کبابی',
        'هات داگ پنیری', 'هات داگ همراه با بیکن', 'هات داگ پنیری همراه با بیکن', 'ماکارونی'
    ];

    protected static $beverageNames = [
        'آبجو (Beer)', 'آبجو لایت آمریکایی (bud light)', 'آبجور بزرگ امریکایی (budweiser)', 'آبجو قوطی (Miller Lite)',
        'مخلطوط شیر (milk shake)', 'چای', 'چایی شیرین', 'قهوه', 'چای داغ',
        'شراب فرانسوی (Champagne)', 'شراب', 'لیموناد', 'کوکاکولا', 'نوشابه رژیمی',
        'آب', 'نوشابه لیمویی', 'آب پرتغال', 'قهوه سرد'
    ];

    protected static $dairyNames = [
        'کره',
        'تخم مرغ',
        'پنیر',
        'خامه ترش',
        'پنیر موتزارلا',
        'ماست',
        'خامه',
        'شیر',
        'فرنی',
    ];

    protected static $vegetableNames = [
        'پیاز',
        'سیر',
        'گوجه فرنگی',
        'سیب زمینی',
        'هویچ',
        'فلفل دلمه ای',
        'ریحان',
        'جعفری',
        'کلم بروکلی',
        'ذرت',
        'اسفناج',
        'زنجبیل',
        'فلفل چیلی',
        'کرفس',
        'رزماری',
        'خیار',
        'ترشی',
        'آووکادو',
        'کدو تنبل',
        'نعناع',
        'بادمجان',
        'سیب زمینی شیرین',
    ];

    protected static $fruitNames = [
        'لیمو',
        'سیب',
        'موز',
        'لیمو ترش',
        'توت فرنگی',
        'پرتغال',
        'آناناس',
        'بلوبری',
        'کشمش',
        'نارگیل',
        'انگور',
        'هلو',
        'تمشک',
        'ذغال اخته',
        'انبه',
        'گلابی',
        'توت سیاه',
        'گیلاس',
        'هندوانه',
        'کیوی',
        'خربزه درختی',
        'گواوا',
        'لیچی',
    ];

    protected static $meatNames = [
        'گوشت مرغ',
        'گوشت نمک سود خوک',
        'سوسیس',
        'گوشت گاو',
        'ژامبون (گوشت خوک)',
        'هات داگ',
        'گوشت خوک',
        'گوشت بوقلمون',
        'بال مرغ',
        'سینه مرغ',
        'گوشت بره',
    ];

    protected static $sauceNames = [
        'سس گوجه فرنگی',
        'رب گوجه فرنگی',
        'سس مایونز',
        'سس بابربی کیو',
        'سس تند چیلی',
        'سس سیر',
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
