<?php
/**
 * Created by PhpStorm.
 * User: Bruin
 * Date: 2017/3/14
 * Time: 20:18
 */

namespace XiaoLong\YunpianSMS\Services;


use XiaoLong\YunpianSMS\Http;
use Illuminate\Support\Facades\Config;

class YunpianSMSService
{
    /**
     * Http对象
     *
     * @var Http
     */
    protected $http;

    protected $apikey;

    protected $sendUrl;



    public function __construct()
    {
        $this->http = new Http();
        $this->apikey = Config::get('yunpian.smsApiKey');
        $this->sendUrl = Config::get('yunpian.smsSendUrl');
    }

    public function sendSMS($mobile, $smsSendText){
    
        $postArr = [
            'apikey' => $this->apikey,
            'text' =>urlencode($smsSendText),
            'mobile' => $mobile
        ];
        $options = array(
            'headers' => array(
                'Accept:application/json;charset=utf-8;',
                'Content-Type:application/x-www-form-urlencoded;charset=utf-8;',
            ),
            'strings' => true
        );
        $response = $this->http->post($this->sendUrl,$postArr,$options);
        return $response['data'];
    }
}