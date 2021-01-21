<?php


namespace core\base\settings;


class ShopSettings extends Settings
{
     private $templateArr = [
        'text' => ['phone', 'name', 'address','price','sale'],
        'textarea' => ['content', 'keywords','goods_contact']
     ];

}