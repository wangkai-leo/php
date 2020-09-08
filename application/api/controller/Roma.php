<?php
namespace app\api\controller;

use app\api\model\Regist;
use common\Crypt; //使用缓存
use think\Controller; //引入微信放方法文件

class Roma extends Controller
{
    public function saveRegist()
    {
        $city = $this->request->param('city');
        $uname = $this->request->param('uname');
        $mobile = $this->request->param('mobile');
        $reg = Regist::insertRegsit($city,$uname,$mobile);
        if ($reg == 1) {
            $data=[
                'code'=>200
            ];
            return json($data);
        }else{
            $data=[
                'code'=>201,
                'msg'=>'提交'
            ];
            return json($data);
        }
    }
    public function regist()
    {
        $city = $this->request->param('city');
        $uname = $this->request->param('uname');
        $mobile = $this->request->param('mobile');
        echo $city;
    }
    public function test()
    {
        $reg = Regist::insertRegsit();
        // $reg=new Regist;
        // $data=$reg->test();
        if ($reg == 1) {
            $data=[
                'code'=>200
            ];
            return json($data);
        }


        // $data=Db::table('roma_regist')->select();
        // $this->assign('data',$data);
        // return json($data);

        // $city=$this->request->param('city');
        // $uname=$this->request->param('uname');
        // $mobile=$this->request->param('mobile');
        // echo $city;
    }
}
