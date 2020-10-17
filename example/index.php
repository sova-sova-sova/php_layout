<?php

use \ModuleBZ\Layout\Card;
use \ModuleBZ\Layout\Row;
use \ModuleBZ\Layout\Column;
use ModuleBZ\Layout\Title;

include_once '../vendor/autoload.php';

//*
// Показывать ли все ошибки
error_reporting(E_ALL);
ini_set('display_errors',true);
/*/
ini_set('display_errors','Off');
/**/
$row = (new Row())
    ->setID('firstRow')
    ->setClass('red blue')
    ->addColumn(
        (new Column())
            ->setClassAll('aaa')
            ->setClassFullHD('aaa')
            ->setClassMacAir('aaa')
            ->setClassLaptop('aaa')
            ->setClassBigPad('aaa')
            ->setClassPad('aaa')
            ->setClassSmartphone('aaa')
            ->setClassMobile('aaa')

            ->addTitle((new Title('Заголовок 1')))
            ->addTitle((new Title('Заголовок 2')))
            ->addRow((new Row)
                ->addColumn((new Column())->addTitle(new Title('Заголовок 3')))
            )
    )
;

$card = (
    (new Card())
    ->addTitle((new Title('Мои проекты')))
    ->addRow($row)
    ->addTitle((new Title('Моя статистика')))
);

echo '<pre>';
var_dump($card->toJSON());
echo '</pre>';
