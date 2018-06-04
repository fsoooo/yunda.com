<?php
/**
 * Created by PhpStorm.
 * User: wangsl
 * Date: 2018/04/02
 * Time: 14:29
 * 状态设置
 */

return [
    //保单状态
    'warranty_status' => [
            '1'=>'待核保',
            '2'=>'待支付',
            '3'=>'待生效',//核保成功
            '4'=>'保障中',
            '5'=>'可续保',
            '6'=>'已失效',
            '7'=>'已退保',
            '8'=>'已退保',
    ],
	//支付状态 1支付中,2支付失败,3支付成功
	'pay_status'=>[
		'0'=>'待支付',
		'1'=>'支付中',
		'2'=>'支付失败',
		'3'=>'支付成功',
	],
	//核保状态1核保中, 2核保失败，3核保成功
	'check_status'=>[
		'0'=>'待核保',
		'1'=>'核保中',
		'2'=>'核保失败',
		'3'=>'核保成功',
	]
];