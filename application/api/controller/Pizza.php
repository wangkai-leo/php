<?php
namespace app\fake\controller;
use common\Crypt;
use think\Controller; //使用缓存
use think\facade\Cache; //引入微信放方法文件
use wx\Wchart;
use wx\WXBizDataCrypt;

class Pizza extends Controller
{
    public function getBanners(){
        $data = [
            'code' => 200,
            'data' => [
                [
                    'img' => 'https://leo-wang.top/static/arete/banner.png',
                ],
                [
                    'img' => 'https://leo-wang.top/static/arete/2.jpg',
                ]
            ],
        ];

        return json($data);
    }
    public function getPizzaCategory(){
        $data = [
            'code' => 200,
            'data' => [
                [
                    'id' => '123',
                    'en' => 'Special',
                    'cn' => '热销'
                ],
                [
                    'id' => '124',
                    'en' => 'New',
                    'cn' => '新品'
                ],
                [
                    'id' => '125',
                    'en' => 'Pizzas',
                    'cn' => '披萨'
                ],
                [
                    'id' => '126',
                    'en' => 'Sets',
                    'cn' => '配料'
                ],
                [
                    'id' => '127',
                    'en' => 'Drinks',
                    'cn' => '饮品'
                ],
                [
                    'id' => '128',
                    'en' => 'Other',
                    'cn' => '其他'
                ]
            ],
        ];

        return json($data);
    }

    public function getCartList(){

    }

    public function getPizzasByCategory(){
        $data = [
            'code' => 200,
            'data' => [
                [
                    'id' => '123',
                    'order_img' => '../images/order_img.png',
                    'product_img' => '../images/product.png',
                    'detail_img' => '../images/detail_img.png',
                    'en_name' =>'Marinara',
                    'cn_name' => '披萨',
                    'en_descript' => 'Tomato,Oregano,Tomato,OreganoTomato,Oregano',
                    'cn_descript' => '土豆,洋葱,土豆,洋葱,土豆,洋葱,土豆,洋葱',
                    'prise' => 58,

                    'specs' => [
                        [
                            'en_name' => 'Size',
                            'cn_name' => '尺寸',
                            'en_value' =>['6','9','12'],
                            'cn_value' =>['6','9','12'],
                        ],
                        [
                            'en_name' => 'Cold or Hot',
                            'cn_name' => '冷热',
                            'en_value' =>['cold','hot'],
                            'cn_value' =>['热','冷'],
                        ]
                    ],
                    'prises' =>[
                        [
                            'value' => 11,
                            'prise' => 50,
                            'default' =>true
                        ],
                        [
                            'value' => 12,
                            'prise' => 56
                        ],
                        [
                            'value' => 21,
                            'prise' => 62
                        ],
                        [
                            'value' => 22,
                            'prise' => 66
                        ],
                        [
                            'value' => 21,
                            'prise' => 72
                        ],
                        [
                            'value' => 32,
                            'prise' => 78
                        ]
                    ]
                ],
                [
                    'id' => '124',
                    'order_img' => '../images/order_img.png',
                    'product_img' => '../images/product.png',
                    'detail_img' => '../images/detail_img.png',
                    'en_name' =>'Marinara',
                    'cn_name' => '披萨',
                    'en_descript' => 'Tomato,Oregano,Tomato,OreganoTomato,Oregano',
                    'cn_descript' => '土豆,洋葱,土豆,洋葱,土豆,洋葱,土豆,洋葱',
                    'prise' => 58
                ],
                [
                    'id' => '125',
                    'order_img' => '../images/order_img.png',
                    'product_img' => '../images/product.png',
                    'detail_img' => '../images/detail_img.png',
                    'en_name' =>'Marinara',
                    'cn_name' => '披萨',
                    'en_descript' => 'Tomato,Oregano,Tomato,OreganoTomato,Oregano',
                    'cn_descript' => '土豆,洋葱,土豆,洋葱,土豆,洋葱,土豆,洋葱',
                    'prise' => 58,
                    'specs' => [
                        [
                            'en_name' => 'Size',
                            'cn_name' => '尺寸',
                            'en_value' =>['6','9','12'],
                            'cn_value' =>['6','9','12'],
                        ],
                        [
                            'en_name' => 'Cold or Hot',
                            'cn_name' => '冷热',
                            'en_value' =>['cold','hot'],
                            'cn_value' =>['热','冷'],
                        ]
                    ],
                    'prises' =>[
                        [
                            'value' => 11,
                            'prise' => 50
                        ],
                        [
                            'value' => 12,
                            'prise' => 56
                        ],
                        [
                            'value' => 21,
                            'prise' => 62,
                            'default' =>true
                        ],
                        [
                            'value' => 22,
                            'prise' => 66
                        ],
                        [
                            'value' => 21,
                            'prise' => 72
                        ],
                        [
                            'value' => 32,
                            'prise' => 78
                        ]
                    ]
                ],
                [
                    'id' => '123',
                    'order_img' => '../images/order_img.png',
                    'product_img' => '../images/product.png',
                    'detail_img' => '../images/detail_img.png',
                    'en_name' =>'Marinara',
                    'cn_name' => '披萨',
                    'en_descript' => 'Tomato,Oregano,Tomato,OreganoTomato,Oregano',
                    'cn_descript' => '土豆,洋葱,土豆,洋葱,土豆,洋葱,土豆,洋葱',
                    'prise' => 58,
                    'specs' => [
                        [
                            'en_name' => 'Size',
                            'cn_name' => '尺寸',
                            'en_value' =>['6','9','12'],
                            'cn_value' =>['6','9','12'],
                        ],
                        [
                            'en_name' => 'Cold or Hot',
                            'cn_name' => '冷热',
                            'en_value' =>['cold','hot'],
                            'cn_value' =>['热','冷'],
                        ]
                    ],
                    'prises' =>[
                        [
                            'value' => 11,
                            'prise' => 50
                        ],
                        [
                            'value' => 12,
                            'prise' => 56,
                            'default' =>true

                        ],
                        [
                            'value' => 21,
                            'prise' => 62
                        ],
                        [
                            'value' => 22,
                            'prise' => 66
                        ],
                        [
                            'value' => 21,
                            'prise' => 72
                        ],
                        [
                            'value' => 32,
                            'prise' => 78
                        ]
                    ]
                ],
                [
                    'id' => '124',
                    'order_img' => '../images/order_img.png',
                    'product_img' => '../images/product.png',
                    'detail_img' => '../images/detail_img.png',
                    'en_name' =>'Marinara',
                    'cn_name' => '披萨',
                    'en_descript' => 'Tomato,Oregano,Tomato,OreganoTomato,Oregano',
                    'cn_descript' => '土豆,洋葱,土豆,洋葱,土豆,洋葱,土豆,洋葱',
                    'prise' => 58,
                    'specs' => [
                        [
                            'en_name' => 'Size',
                            'cn_name' => '尺寸',
                            'en_value' =>['6','9','12'],
                            'cn_value' =>['6','9','12'],
                        ],
                        [
                            'en_name' => 'Cold or Hot',
                            'cn_name' => '冷热',
                            'en_value' =>['cold','hot'],
                            'cn_value' =>['热','冷'],
                        ]
                    ],
                    'prises' =>[
                        [
                            'value' => 11,
                            'prise' => 50
                        ],
                        [
                            'value' => 12,
                            'prise' => 56
                        ],
                        [
                            'value' => 21,
                            'prise' => 62
                        ],
                        [
                            'value' => 22,
                            'prise' => 66
                        ],
                        [
                            'value' => 21,
                            'prise' => 72,
                            'default' =>true

                        ],
                        [
                            'value' => 32,
                            'prise' => 78
                        ]
                    ]
                ]
            ],
        ];

        return json($data);
    }

    public function getPizzaById(){
        $data = [
            'code' => 200,
            'data' => [
                'id' => '124',
                    'order_img' => '../images/order_img.png',
                    'product_img' => '../images/product.png',
                    'detail_img' => '../images/detail_img.png',
                    'en_name' =>'Marinara',
                    'cn_name' => '披萨',
                    'en_descript' => 'Tomato,Oregano,Tomato,OreganoTomato,Oregano',
                    'cn_descript' => '土豆,洋葱,土豆,洋葱,土豆,洋葱,土豆,洋葱',
                    'prise' => 58,
                    'specs' => [
                        [
                            'en_name' => 'Size',
                            'cn_name' => '尺寸',
                            'en_value' =>['6','9','12'],
                            'cn_value' =>['6','9','12'],
                        ],
                        [
                            'en_name' => 'Cold or Hot',
                            'cn_name' => '冷热',
                            'en_value' =>['cold','hot'],
                            'cn_value' =>['热','冷'],
                        ]
                    ],
                    'prises' =>[
                        [
                            'value' => 11,
                            'prise' => 50
                        ],
                        [
                            'value' => 12,
                            'prise' => 56
                        ],
                        [
                            'value' => 21,
                            'prise' => 62
                        ],
                        [
                            'value' => 22,
                            'prise' => 66
                        ],
                        [
                            'value' => 21,
                            'prise' => 72,
                            'default' =>true

                        ],
                        [
                            'value' => 32,
                            'prise' => 78
                        ]
                    ]
            ],
        ];

        return json($data);
    }
}