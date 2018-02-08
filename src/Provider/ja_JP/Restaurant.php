<?php

namespace FakerRestaurant\Provider\ja_JP;

class Restaurant extends \Faker\Provider\Base
{

    protected static $foodNames = array(
        'ピザ', 'ハンバーガー', 'チーズバーガー', '寿司', '牛丼',
        'すき焼き', '天ぷら', '焼肉', '蕎麦',
        'パン', 'サンドウィッチ', 'うどん',
        '納豆巻', 'カレー', 'カツ丼', 'パスタ'
    );

    protected static $beverageNames = array(
        'ビール', '黒ラベル', 'サッポロ', '一番搾り',
        '牛乳', 'お茶', '紅茶', 'コーヒー', 'ホットティー',
        'シャンパン', 'ワイン', 'レモネード', 'コカ・コーラ', 'ダイエットコーラ',
        '水', 'スプライト', 'オレンジジュース', 'アイスコーヒー'
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
