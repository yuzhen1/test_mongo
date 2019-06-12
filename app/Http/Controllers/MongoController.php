<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Client;

class MongoController extends Controller
{
    //
    public $con = 'mongodb://127.0.0.1:27017';
    public $client;

    public function __construct()
    {
        $this->client = new Client($this->con);
    }
    //增加
    public function insert(){
        $collection = $this->client->a1809a->test1;

        //添加单条
        $arr = [
            'name'=>'lusi',
            'age'=>'10',
            'sex'=>'gril'
        ];
        $collection->insertOne($arr);
        //添加多条
//        $arr = [
//            [
//                'name'=>'zhangsan',
//                'age'=>'32',
//                'sex'=>'gril'
//            ],
//            [
//                'name'=>'lisi',
//                'age'=>'23',
//                'sex'=>'gril'
//            ],
//            [
//                'name'=>'wangwu',
//                'age'=>'18',
//                'sex'=>'boy'
//            ],
//        ];
//        $collection->insertMany($arr);
        var_dump($collection);
    }

    //查询
    public function show(){
        $collection = $this->client->a1809a->test1;
        $data = $collection->find()->toArray();
        dd($data);
    }

    //修改
    public function update(){
        $collection = $this->client->a1809a->test1;
        $collection->updateOne(['name'=>'lusi'],['$set'=>['age'=>99]]);
    }

    //删除
    public function delete(){
        $collection = $this->client->a1809a->test1;
        $collection->deleteOne(['name'=>'lusi']);
    }
}
