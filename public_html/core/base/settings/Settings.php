<?php
/**
 * Класс настроек
 */

namespace core\base\settings;


class Settings
{
    static private $_instance;

    private $routes = [
        'admin' => [  // маршруты для админ панели
            'name'=> 'admin',
            'path'=> 'core/admin/controller/',//путь к файлам админ.панели
            'hrUrl'=> false,//человекопонятные url

        ],
        'settings' =>[ //настройки сайта
            'path'=>'core/base/settings/'
        ],
        'plugins'=>[
            'path'=> 'core/plugins/controller/',
            'hrUrl'=> false,
        ],
        'user'=>[ //настройки для пользовательской части сайта
            'path'=> 'core/user/',
            'hrUrl'=> true,
            'routes'=>[

            ]
        ],
        'default'=> [ // раздел по умолчанию
            'controller'=> 'IndexController',
            'inputMethod'=> 'inputData', //метод, который вызовется по-умолчанию, если по маршрутам мы не определили метод вызова
            'outputMethod'=>'outputData'//метод по-умолчанию , который будет осущесвлять вывод данных пользовательской части и метод, который будет отдавать эти данные в пользовательскиеи шаблоны

        ]
    ];
    private $templateArr = [
        'text' => ['phone', 'name', 'address'],
        'textarea' => ['content', 'keywords']
    ];
    private function __construct()
    {
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    static public function get($property){
        return self::instance()->$property;
    }

    public static function instance(){
         if (self::$_instance instanceof self){
            return self::$_instance;
        }
        return self::$_instance = new self;
    }
}