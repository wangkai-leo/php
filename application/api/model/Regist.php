<?php
namespace app\api\model;
use think\Model;

class Regist extends Model
{
    protected $table='roma_regist';

    // public function getData(){
    //     $data = Regist::get(1);
    //     return $data;
    // }
    // public function  getdata(){
    //     return '测试模型';
    // }

    public static function test(){
        return '测试';
    }
    
    public static function insertRegsit($city,$uname,$mobile){
        $regist=new Regist;
        $regist->city     = $city;
        $regist->uname    = $uname;
        $regist->mobile    = $mobile;
        $data=$regist->save();
        return $data;
    }
}