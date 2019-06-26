<?php
namespace App\Services;

use Qcloud\Sms\SmsSingleSender;

class CodeService{
    protected $sms;
    protected $templateId;
    protected $smsServer;

    public function __construct(){
        $this->sms = config('sms');
        $this->smsServer = new SmsSingleSender($this->sms['app_id'],$this->sms['app_key']);
        $this->templateId = '359634';
    }

    public function  getCode($phone,$code){
        $params = [$code,"3分钟"];
        $result = $this->smsServer->sendWithParam("86",$phone,$this->templateId,$params,$this->sms['sign'],"","");
        $rs = json_decode($result,true);
        return $rs;
    }
}
