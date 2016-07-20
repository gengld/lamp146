<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
    // return view('welcome');
    // echo "1111";
    // echo date("Y-m-d H:i:s");
    // echo date("Y-m-d H:i:s");
    // echo date("Y-m-d H:i:s");
    //获取配置文件
    // echo Config::get('app.timezone');
    // echo Config::get('app.timezone');
    // echo Config::get('app.timezone');
    // echo Config::get('app.url');
    // echo Config::get('app.url');
    // echo Config::get('app.url');
    // echo Config::get("app.locale");
    // echo Config::get("app.locale");
    // echo Config::get('app.locale');
    //设置配置信息
    // Config::set('app.timezone','PRC');
    // echo Config::get('app.timezone');
    // Config::set('app.timezone','UTC');
    // echo Config::get('app.timezone');
    // Config::set('app.timezone','PRC');
    // echo Config::get('app.timezone');
    // echo Config::get('app.webname');
    // echo Config::get('app.webname');
    // echo Config::get('app.webname');
    //环境系统的信息
    // echo env("DB_CONNECTION");
    // echo env("DB_CONNECTION");
    // echo env("DB_HOST");
// });
    //路由的基本操作
// Route::get('/test',function(){
	// echo "111";
// });
// Route::get('/test/add',function(){
	// echo "222";
// });
// Route::post("/user/add",function(){
// 	echo "333";
// });
// Route::get('form',function(){
// 	// echo "走过南，闯过北";
// 	return view('form');
// });

//带参数的路由
// Route::get('/shop/{id}',function($id){
// 	// echo "sss";
// 	echo "商品的id是".$id;
// })->where('id','\d+');

// Route::get('/shop/{id}',function($id){
// 	echo "商品的id是".$id;
// })->where('id','\d+');
// Route::get('/shop/{id}',function($id){
// 	echo "商品的id是".$id;
// })->where('id','\d+');
// Route::get('/shop/{name}',function($name){
	// echo "商品的名字".$name;
// })->where('name','[a-z A-Z]');
// Route::get('shop/{name}',function($name){
// 	echo "商品的名字".$name;
// })->where('name','[a-z A-Z]+');
// Route::get('shop/{name}',function($name){
	// echo "商品的名字".$name;
// })->where('name','[a-z A-Z]+');
//多个参数的路由
// Route::get('shops/{id}-{name}',function($id,$name){
// 	echo "商品的id是".$id;
// 	echo "商品的名字".$name;
// })->where('id','\d+')->where('name','[a-z A-Z]+');
// Route::get('shops/{id}-{name}',function($id,$name){
// 	echo "商品的id是".$id;
// 	echo "商品的名字".$name;
// })->where('id','\d+')->where('name','[a-z A-Z]+');
// Route::get('shops/{id}-{name}',function($id,$name){
// 	echo "商品的id是".$id;
// 	echo "商品的名字".$name;
// })->where('id','\d+')->where('name','[a-z A-Z]+');

// //给路由起别名
// Route:get('admin/user/add',[
// 	'as'=>'uadd',
// 	function(){
// 		echo "sss";
// 	}
// 	]);
// Route::get('/test',function(){
// 	echo route('uadd');
// });
// //给路由起别名
// Route:get('admin/user/add',[
// 	'as'=>'uadd',
// 	function(){
// 		echo "sss";
// 	}
// 	]);
// Route::get('/test',function(){
// 	echo route('uadd');
// });
// //给路由起别名
// Route:get('admin/user/add',[
// 	'as'=>'uadd',
// 	function(){
// 		echo "sss";
// 	}
// 	]);
// Route::get('/test',function(){
// 	echo route('uadd');
// });

// //路由组的设置
// Route::group([],function(){
// 	//路由
// 	Route::get('admin/shop/add',function(){
// 		echo "我是后台商品的添加页面";
// 	});
// 	Route::get('admin/user/edit',function(){
// 		echo "这是后台用户的修改";
// 	});
// });
// //路由组的设置
// Route::group([],function(){
// 	//路由
// 	Route::get('admin/shop/add',function(){
// 		echo "我是后台商品的添加页面";
// 	});
// 	Route::get('admin/user/edit',function(){
// 		echo "这是后台用户的修改";
// 	});
// });
// //路由组的设置
// Route::group([],function(){
// 	//路由
// 	Route::get('admin/shop/add',function(){
// 		echo "我是后台商品的添加页面";
// 	});
// 	Route::get('admin/user/edit',function(){
// 		echo "这是后台用户的修改";
// 	});
// });
// Route::get('/ss',function(){
// 	abort('404');
// });
// //路由组的设置
// Route::group([],function(){
// 	//路由
// 	Route::get('admin/shop/add',function(){
// 		echo "我是后台商品的添加页面";
// 	});
// 	Route::get('admin/user/edit',function(){
// 		echo "这是后台用户的修改";
// 	});
// });
// Route::get('/ss',function(){
// 	abort('404');
// });
//路由组的设置
Route::group(['middleware'=>'login'],function(){
	//路由
	Route::get('/home/order',function(){
		echo "我是前台的订单页面";
	});
	Route::get('admin/user/edit',function(){
		echo "这是后台用户的修改";
	});
});
Route::get('/ss',function(){
	abort('404');
});

// //Ajax
// Route::get('/ajax',function(){
// 	return view('ajax');
// });
// Route::post('/post',function(){
// 	echo "ajax的响应数据";
// });

// //Ajax
// Route::get('/ajax',function(){
// 	return view('ajax');
// });
// Route::post('/post',function(){
// 	echo "ajax的响应数据";
// });

// //Ajax
// Route::get('/ajax',function(){
// 	return view('ajax');
// });
// Route::post('/post',function(){
// 	echo "ajax的响应数据";
// });

// Route::get('/login',function(){
// 	echo "这是用户的登录界面";
// });

// Route::get('/home/person',function(){
// 	echo "这是前台的个人中心";
// })->middleware('login');

// Route::get('/login',function(){
// 	echo "这是用户的登录界面";
// });

// Route::get('/home/person',function(){
// 	echo "这是前台的个人中心";
// })->middleware('login');

Route::get('/login',function(){
	echo "这是用户的登录界面";
});

Route::get('/home/person',function(){
	echo "这是前台的个人中心";
})->middleware('login');