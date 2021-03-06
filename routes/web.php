<?php

Route::domain('www.linchengxs.com')->group(function () {
    Route::get('/','Home\IndexController@index');

    Route::get('/book/','Home\BookController@index');
    Route::get('/huanxiangyinen/','Home\BookController@huanxiangyinen');
    Route::get('/dushizhichang/','Home\BookController@dushizhichang');
    Route::get('/xuanhuanqihuan/','Home\BookController@xuanhuanqihuan');
    Route::get('/gudaiyanqing/','Home\BookController@gudaiyanqing');
    Route::get('/wuxiaxianxia/','Home\BookController@wuxiaxianxia');
    Route::get('/lishijunshi/','Home\BookController@lishijunshi');
    Route::get('/lingyikehuan/','Home\BookController@lingyikehuan');
    Route::get('/youxijingji/','Home\BookController@youxijingji');
    Route::get('/xiandaiyanqing/','Home\BookController@xiandaiyanqing');
    Route::get('/chuanyuezhongsheng/','Home\BookController@chuanyuezhongsheng');
    Route::get('/zongcaihaomen/','Home\BookController@zongcaihaomen');
    Route::get('/qingchunxiaoyuan/','Home\BookController@qingchunxiaoyuan');
    Route::get('/duanpianxiaoshuo/','Home\BookController@duanpianxiaoshuo');
    Route::post('/booksehlf/','Home\BookController@booksehlf');
    Route::get('/book/{id}','Home\BookController@xq');


    Route::get('/article/','Home\ArticleController@index');
    Route::get('/article/{id}','Home\ArticleController@xq');

    Route::get('/top/','Home\TopController@index');
    Route::get('/top/{name}','Home\TopController@type');

    Route::get('/zt/','Home\ZtController@index');
    Route::get('/zt/{id}','Home\ZtController@ZtXq');

    Route::any('/search/','Home\IndexController@Search');

    Route::get('/chapter/','Home\ChapterController@index');
    Route::get('/chapter/{tid}-{did}-{sid}','Home\ChapterController@index');
    Route::get('/{id}/','Home\ChapterController@xq');
    Route::get('/{id}/list.html','Home\ChapterController@chapter_list');

});


Route::domain('m.linchengxs.com')->group(function () {
    Route::get('/', 'Mobile\IndexController@index');
    Route::get('/book/', 'Mobile\BookController@index');
    Route::get('/huanxiangyinen/','Mobile\BookController@huanxiangyinen');
    Route::get('/dushizhichang/','Mobile\BookController@dushizhichang');
    Route::get('/xuanhuanqihuan/','Mobile\BookController@xuanhuanqihuan');
    Route::get('/gudaiyanqing/','Mobile\BookController@gudaiyanqing');
    Route::get('/wuxiaxianxia/','Mobile\BookController@wuxiaxianxia');
    Route::get('/lishijunshi/','Mobile\BookController@lishijunshi');
    Route::get('/lingyikehuan/','Mobile\BookController@lingyikehuan');
    Route::get('/youxijingji/','Mobile\BookController@youxijingji');
    Route::get('/xiandaiyanqing/','Mobile\BookController@xiandaiyanqing');
    Route::get('/chuanyuezhongsheng/','Mobile\BookController@chuanyuezhongsheng');
    Route::get('/zongcaihaomen/','Mobile\BookController@zongcaihaomen');
    Route::get('/qingchunxiaoyuan/','Mobile\BookController@qingchunxiaoyuan');
    Route::get('/duanpianxiaoshuo/','Mobile\BookController@duanpianxiaoshuo');
    Route::post('/booksehlf/','Mobile\BookController@booksehlf');
    Route::get('/book/{id}','Mobile\BookController@xq');


    Route::get('/zt/','Mobile\ZtController@index');
    Route::get('/zt/{id}','Mobile\ZtController@ZtXq');

    Route::get('/top/','Mobile\TopController@index');
    Route::get('/top/{name}','Mobile\TopController@type');

    Route::get('/article/','Mobile\ArticleController@index');
    Route::get('/article/{id}','Mobile\ArticleController@xq');

    Route::any('/search/','Mobile\IndexController@Search');

    Route::get('/chapter/','Mobile\ChapterController@index');
    Route::get('/chapter/{tid}-{did}-{sid}','Mobile\ChapterController@index');
    Route::get('/{id}/','Mobile\ChapterController@xq');
    Route::get('/{id}/list.html','Mobile\ChapterController@chapter_list');
    Route::get('/towx/{str}','Mobile\IndexController@Towx');
});


Route::fallback(function () {
    return abort(404);
});
