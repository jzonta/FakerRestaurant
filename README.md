FakerRestaurant
=======================

Food and Beverage names generate using fakerphp/faker (previously fzaninotto/Faker).


Installation
------------

Add the FakerRestaurant library to your `composer.json` file:

```
composer require jzonta/faker-restaurant
```

Usage
-----

To  use this with [Faker](https://github.com/fakerphp/Faker), you must add the `FakerRestaurant\Restaurant` provider class to the Faker generator:

```php
<?php

$faker = \Faker\Factory::create();
$faker->addProvider(new \FakerRestaurant\Provider\en_US\Restaurant($faker));

// Generator
$faker->foodName();      // A random Food Name
$faker->beverageName();  // A random Beverage Name
$faker->dairyName();  // A random Dairy Name
$faker->vegetableName();  // A random Vegetable Name
$faker->fruitName();  // A random Fruit Name
$faker->meatName();  // A random Meat Name
$faker->sauceName();  // A random Sauce Name
```

Language specific formatters
-----

```
ar_SA -> \FakerRestaurant\Provider\ar_SA\Restaurant
de_AT -> \FakerRestaurant\Provider\de_AT\Restaurant
de_DE -> \FakerRestaurant\Provider\de_DE\Restaurant
en_US -> \FakerRestaurant\Provider\en_US\Restaurant
es_PE -> \FakerRestaurant\Provider\es_PE\Restaurant
fa_IR -> \FakerRestaurant\Provider\fa_IR\Restaurant
fr_FR -> \FakerRestaurant\Provider\fr_FR\Restaurant
id_ID -> \FakerRestaurant\Provider\id_ID\Restaurant
it_IT -> \FakerRestaurant\Provider\it_IT\Restaurant
ja_JP -> \FakerRestaurant\Provider\ja_JP\Restaurant
lt_LT -> \FakerRestaurant\Provider\lt_LT\Restaurant
pt_BR -> \FakerRestaurant\Provider\pt_BR\Restaurant
sv_SE -> \FakerRestaurant\Provider\sv_SE\Restaurant
vi_VN -> \FakerRestaurant\Provider\vi_VN\Restaurant
```

Testing
-----
```sh
composer run test
### or ###
php test/_all.php
```
Sample test results:
```log
> php test/_all.php

====== Printing random beverage...
[ar_SA] شاي ساخن
[de_AT] Kaffee
[de_DE] Eiskaffee
[en_US] Sweet Tea
[es_PE] Frutillada
[fa_IR] آب
[fr_FR] Coca-Cola
[id_ID] Coca-Cola
[it_IT] Milk Shake
[ja_JP] サッポロ
[lt_LT] Sultys
[pt_BR] Suco de Abacaxi
[sv_SE] Pripps Blå
[vi_VN] Nước lọc
====== Printing random dairy...
[ar_SA] حليب
[de_AT] Joghurt
[de_DE] Mozzarella
[en_US] Custard
[es_PE] Queso
[fa_IR] پنیر موتزارلا
[fr_FR] Crème
[id_ID] Mentega
[it_IT] Crema pasticcera
[ja_JP] モッツァレラ
[lt_LT] Jogurtas
[pt_BR] Iogurte
[sv_SE] Yogurt
[vi_VN] Sữa
====== Printing random food...
[ar_SA] نقانق لحم خنزير بالجبنة
[de_AT] Saumaise
[de_DE] Rinderrouladen
[en_US] Cheese Dog
[es_PE] Lentejas con arroz
[fa_IR] ساندویچ سبزیجات
[fr_FR] Boeuf Bourguignons
[id_ID] Tahu Sumedang
[it_IT] Tiramisù
[ja_JP] 寿司
[lt_LT] Dorada
[pt_BR] X-Calabresa
[sv_SE] Ärtsoppa
[vi_VN] Mì
====== Printing random fruit...
[ar_SA] بلاك بيري
[de_AT] Erdbeere
[de_DE] Apfel
[en_US] Pear
[es_PE] Naranja
[fa_IR] لیمو ترش
[fr_FR] Pastèque
[id_ID] Kismis
[it_IT] Kiwi
[ja_JP] ココナッツ
[lt_LT] Gvajava
[pt_BR] Kiwi
[sv_SE] Kiwi
[vi_VN] Dâu
====== Printing random meat...
[ar_SA] سجق
[de_AT] Rindfleisch
[de_DE] Schinken
[en_US] Pork
[es_PE] Pavo
[fa_IR] ژامبون (گوشت خوک)
[fr_FR] Boeuf
[id_ID] Sayap Ayam
[it_IT] Petto di tacchino
[ja_JP] 子羊
[lt_LT] Arkliena
[pt_BR] Cachorro quente
[sv_SE] Skinka
[vi_VN] Ốc
====== Printing random sauce...
[ar_SA] صلصة الفلفل الحار
[de_AT] Grillsauce
[de_DE] Chillisauce
[en_US] Chili sauce
[es_PE] Mayonesa
[fa_IR] سس سیر
[fr_FR] Mayonaise
[id_ID] Saus Tomat
[it_IT] Salsa piccante
[ja_JP] トマトペースト
[lt_LT] Čili padažas
[pt_BR] Molho de alho
[sv_SE] Vitlökssås
[vi_VN] Sốt mayonnaise
====== Printing random vegetable...
[ar_SA] بروكلي
[de_AT] Rosmarie
[de_DE] Ingwer
[en_US] Carrot
[es_PE] Papa
[fa_IR] اسفناج
[fr_FR] Menthe
[id_ID] Bawang Bombay
[it_IT] Rosmarino
[ja_JP] にんじん
[lt_LT] Brokolis
[pt_BR] Pimentão
[sv_SE] Mynta
[vi_VN] Rau cải xoong


====== THE END - ALL GOOD ======
```