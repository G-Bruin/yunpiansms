<?php
/**
 * Created by PhpStorm.
 * User: Bruin
 * Date: 2017/3/14
 * Time: 20:18
 */

namespace XiaoLong\YunpianSMS\Facades;

use Illuminate\Support\Facades\Facade;

class YunpianSMS extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(){
        return 'YunpianSMSService';
    }
}