<?php

Route::domain('www.xiaoshuo.test')->group(function () {
    Route::get('/','Home\IndexController@index');

    Route::get('/book','Home\BookController@index');
    Route::get('/huanxiangyinen','Home\BookController@huanxiangyinen');
    Route::get('/dushizhichang','Home\BookController@dushizhichang');
    Route::get('/xuanhuanqihuan','Home\BookController@xuanhuanqihuan');
    Route::get('/gudaiyanqing','Home\BookController@gudaiyanqing');
    Route::get('/wuxiaxianxia','Home\BookController@wuxiaxianxia');
    Route::get('/lishijunshi','Home\BookController@lishijunshi');
    Route::get('/lingyikehuan','Home\BookController@lingyikehuan');
    Route::get('/youxijingji','Home\BookController@youxijingji');
    Route::get('/xiandaiyanqing','Home\BookController@xiandaiyanqing');
    Route::get('/chuanyuezhongsheng','Home\BookController@chuanyuezhongsheng');
    Route::get('/zongcaihaomen','Home\BookController@zongcaihaomen');
    Route::post('/booksehlf','Home\BookController@booksehlf');
    Route::get('/book/{id}','Home\BookController@xq');


    Route::get('/article','Home\ArticleController@index');
    Route::get('/article/{id}','Home\ArticleController@xq');

    Route::get('/top','Home\TopController@index');
    Route::get('/top/{name}','Home\TopController@type');

    Route::get('/zt','Home\ZtController@index');
    Route::get('/zt/{id}','Home\ZtController@ZtXq');

    Route::post('/search','Home\IndexController@Search');


});


Route::domain('m.xiaoshuo.test')->group(function () {
    Route::get('/', function () {
        echo 111;
    });
});


Route::fallback(function () {
    return redirect('/');
});
