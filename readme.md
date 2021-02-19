# Vivense PHP Talent Bootcamp - Ödev 4

Bu haftaki ödev için aşağıdaki UML diagrama göre PHP sınıflarını oluşturacağız. Oluşturulan bu sınıflarda herhangi bir gerçek bağlantı / sorgu / işlem bulunmasına gerek yok. Sadece yapıyı oluşturmanız yeterli. Deneme amaçlı ekrana çıktı verebilirsiniz. İsteğe bağlı olarak yapıyı kendi istediğiniz şekilde de değiştirebilirsiniz.

![diagram](https://github.com/php-bootcamp/odev4/blob/master/diagram.jpg?raw=true)

## Ek Kaynaklar

- [php.net / Traits](https://www.php.net/manual/en/language.oop5.traits.php)
- [php.net / Basics / Class](https://www.php.net/manual/en/language.oop5.basic.php)
- [php.net / Class Abstraction](https://www.php.net/manual/en/language.oop5.abstract.php)
- [php.net / Object Interfaces](https://www.php.net/manual/en/language.oop5.interfaces.php)
- [Abstract Class vs Interface](https://codeinphp.github.io/post/abstract-class-vs-interface/)
- [w3schools / PHP OOP Interfaces](https://www.w3schools.com/php/php_oop_interfaces.asp)
- [w3schools / PHP OOP Traits](https://www.w3schools.com/php/php_oop_traits.asp)
- [w3schools / PHP OOP Abstract](https://www.w3schools.com/php/php_oop_classes_abstract.asp)
- [geeksforgeeks / PHP Classes](https://www.geeksforgeeks.org/php-classes/)
- [Yusuf Sezer / PHP OOP](https://www.yusufsezer.com.tr/php-oop/)
- [Yusuf Sezer / PHP OOP Abstract](https://www.yusufsezer.com.tr/php-oop-abstract/)
- [Yusuf Sezer / PHP OOP Interface](https://www.yusufsezer.com.tr/php-oop-interface/)
- [Yusuf Sezer / PHP OOP Trait](https://www.yusufsezer.com.tr/php-oop-trait/)
- [phpenthusiast / Interfaces](https://phpenthusiast.com/object-oriented-php-tutorials/interfaces)
- [Ceyhun Çözvelioğlu / Abstract Class ve Interface arasındaki farklar nelerdir?](https://medium.com/software-development-turkey/abstract-class-ve-interface-aras%C4%B1ndaki-farklar-nelerdir-3c0a4f956eba)

## Örnek Kullanım

Yaptığınız yapıyı test etmek için `test.php` dosyasını veya aşağıdaki betiği kullanabilirsiniz.

> **Not:** Yapıya göre farklılık olabileceğini unutmayın. Yapıda değişiklik yaptıysanız, kendi yapınıza göre `test.php` dosyasını değiştiriniz.

```php
<?php

include "IQuery.php";
include "IDatabaseType.php";
include "PDOConnector.php";
include "SQLQuery.php";
include "SQL.php";
include "SQLCrud.php";
include "MySQL.php";
include "PostgreSQL.php";

$db = new MySQL("localhost", "root", "toor", "database");

$query = (new SQLQuery())->setTable("users")->select()->addWhere("username", "=", ":user")->addBinding("user", "eray");

$eray = $db->first($query);
```
