<?php

namespace FakerRestaurant\Provider\vi_VN;

class Restaurant extends \Faker\Provider\Base
{
    protected static $foodNames = [
        'Bánh',
        'Bánh mì',
        'Phở',
        'Bún',
        'Miến',
        'Mì',
        'Xôi',
        'Cháo',
        'Cơm',
    ];

    protected static $beverageNames = [
        'Bia',
        'Trà',
        'Trà sữa',
        'Cà phê',
        'Sâm panh',
        'Rượu vang',
        'Nước chanh',
        'Nước cam',
        'Nước quất',
        'Coca-Cola',
        'Nước lọc',
        'Sprite',
    ];

    protected static $dairyNames = [
        'Bơ',
        'Trứng',
        'Phô mai',
        'Kem chua',
        'Sữa chua',
        'Kem',
        'Sữa',
    ];

    protected static $vegetableNames = [
        'Hành',
        'Tỏi',
        'Cà chua',
        'Khoai tây',
        'Cà rốt',
        'Ớt chuông',
        'Mùi tây',
        'Bông cải xanh',
        'Ngô',
        'Rau bina',
        'Gừng',
        'Ớt',
        'Rau cần tây',
        'Rau ngót',
        'Rau mồng tơi',
        'Rau cải cúc',
        'Rau cải xoong',
        'Rau muống',
        'Quả dưa chuột',
        'Dưa chua',
        'Quả bí ngô',
        'Cây bạc hà',
        'Cà tím',
        'Mứt',
    ];

    protected static $fruitNames = [
        'Chanh',
        'Táo',
        'Chuối',
        'Vôi',
        'Dâu',
        'Cam',
        'Dứa',
        'Việt quất',
        'Nho khô',
        'Dừa',
        'Bơ',
        'Nho',
        'Đào',
        'Dâu',
        'Xoài',
        'Lê',
        'Dưa hấu',
        'Kiwi',
        'Đu đủ',
        'Ổi',
    ];

    protected static $meatNames = [
        'Thịt gà',
        'Thịt ba chỉ',
        'Lạp xưởng',
        'Thịt bò',
        'Giăm bông',
        'Thịt heo',
        'Gà tây',
        'Cánh gà',
        'Ức gà',
        'Cừu',
        'Cá',
        'Ngỗng',
        'Ngan',
        'Baba',
        'Tôm',
        'Mực',
        'Thỏ',
        'Ngao',
        'Ốc',
    ];

    protected static $sauceNames = [
        'Sốt mayonnaise',
        'Sốt BBQ',
        'Tương ớt',
        'Tương cà',
        'Nước sốt tỏi',
        'Nước sốt mật ong',
        'Dấm',
        'Ớt bột',
        'Ớt tươi',
        'Mắm tôm',
        'Nước mắm',
    ];

    /**
     * A random Food Name.
     * @return string
     */
    public function foodName () {
        return static::randomElement( static::$foodNames );
    }

    /**
     * A random Beverage Name.
     * @return string
     */
    public function beverageName () {
        return static::randomElement( static::$beverageNames );
    }

    /**
     * A random Dairy Name.
     * @return string
     */
    public function dairyName () {
        return static::randomElement( static::$dairyNames );
    }

    /**
     * A random Vegetable Name.
     * @return string
     */
    public function vegetableName () {
        return static::randomElement( static::$vegetableNames );
    }

    /**
     * A random Fruit Name.
     * @return string
     */
    public function fruitName () {
        return static::randomElement( static::$fruitNames );
    }

    /**
     * A random Meat Name.
     * @return string
     */
    public function meatName () {
        return static::randomElement( static::$meatNames );
    }

    /**
     * A random Sauce Name.
     * @return string
     */
    public function sauceName () {
        return static::randomElement( static::$sauceNames );
    }
}
