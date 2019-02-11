<?php

namespace FakerRestaurant\Provider\ja_JP;

class Restaurant extends \Faker\Provider\Base
{
    protected static $foodNames = [
        'ピザ', 'ハンバーガー', 'チーズバーガー', '寿司', '牛丼',
        'すき焼き', '天ぷら', '焼肉', '蕎麦',
        'パン', 'サンドウィッチ', 'うどん',
        '納豆巻', 'カレー', 'カツ丼', 'パスタ'
    ];

    protected static $beverageNames = [
        'ビール', '黒ラベル', 'サッポロ', '一番搾り',
        '牛乳', 'お茶', '紅茶', 'コーヒー', 'ホットティー',
        'シャンパン', 'ワイン', 'レモネード', 'コカ・コーラ', 'ダイエットコーラ',
        '水', 'スプライト', 'オレンジジュース', 'アイスコーヒー'
    ];

    protected static $dairyNames = [
        'バター',
        '卵',
        '牛乳',
        'チーズ',
        'サワークリーム',
        'モッツァレラ',
        'ヨーグルト',
        'クリーム',
        '牛乳',
        'カスタード',
    ];

    protected static $vegetableNames = [
        '玉ねぎ',
        'ニンニク',
        'トマト',
        'じゃがいも',
        'にんじん',
        'ピーマン',
        'ベルバジル',
        'パセリ',
        'ブロッコリ',
        'コーン',
        'ほうれん草',
        'キノコ',
        'ショウガ',
        'チリ',
        'セロリ',
        'ロマリー',
        'きゅうり',
        'ピクルス',
        'アボカド',
        'かぼちゃ',
        'ミント',
        '茄子',
        'ヤムイモ',
    ];

    protected static $fruitNames = [
        'レモン',
        '林檎',
        'バナナ',
        'ライム',
        'イチゴ',
        'オレンジ',
        'パイナップル',
        'ブルーベリー',
        'レーズン',
        'ココナッツ',
        'グレープ',
        '桃',
        'ラズベリー',
        'クランベリー',
        'マンゴー',
        '梨',
        'ブラックベリー',
        'チェリー',
        'スイカ',
        'キウイ',
        'パパイヤ',
        'グアバ',
        'ライチ',
    ];

    protected static $meatNames = [
        'チキン',
        'ベーコン',
        'ソーセージ',
        '牛肉',
        'ハム',
        'ホットドッグ',
        '豚肉',
        '七面鳥',
        '鶏手羽肉',
        '鶏の胸肉',
        '子羊',
    ];

    protected static $sauceNames = [
        'トマトソース',
        'トマトペースト',
        'マヨネーズソース',
        'バーベキューソース',
        'チリソース',
        'ガーリックソース',
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

    public function dairy()
    {
        return static::randomElement(static::$dairyNames);
    }

    public function vegetable()
    {
        return static::randomElement(static::$vegetableNames);
    }

    public function fruit()
    {
        return static::randomElement(static::$fruitNames);
    }

    public function meat()
    {
        return static::randomElement(static::$meatNames);
    }

    public function sauce()
    {
        return static::randomElement(static::$sauceNames);
    }
}
