<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/24 0024
 * Time: 15:09
 */

namespace App\Services;

use App\Models\NovelBook;
use App\Models\NovelChapter;
use App\Models\NovelTag;
use App\Models\NovelType;
use samdark\sitemap\Index;
use samdark\sitemap\Sitemap;

class SitemapPost{


    public static function index(){
        set_time_limit(0);

        //获取所有  xml 文件
        $dir = public_path('sitemap_index.xml');
//        $files = array();
//        if ( $handle = opendir($dir) ) {
//            while ( ($file = readdir($handle)) !== false ) {
//                if ( $file != ".." && $file != "." ) {
//                    $files[] = $dir . '/' . $file;
//                }
//            }
//            closedir($handle);
//        }
        $error = '';
        $curl= curl_init();
        //遍历读取所有xml文件

            $data = file_get_contents($dir);
            $pingurl="http://ping.baidu.com/sitemap?site=".env('APP_URL')."&resource_name=sitemap&access_token=RoKT4gj0XIDdn5AQ";//你的接口地址
            curl_setopt($curl, CURLOPT_URL,$pingurl);// 要访问的地址
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);// 对认证证书来源的检查
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);// 从证书中检查SSL加密算法是否存在
            curl_setopt($curl, CURLOPT_USERAGENT,"curl/7.12.1");// 模拟用户使用的浏览器
            curl_setopt($curl, CURLOPT_COOKIE,'');
            curl_setopt($curl, CURLOPT_REFERER,"");
            curl_setopt($curl, CURLOPT_POST, 1);// 发送一个常规的Post请求
            curl_setopt($curl, CURLOPT_POSTFIELDS,$data);// Post提交的数据包
            curl_setopt($curl, CURLOPT_HTTPHEADER, array('Expect:')); //xml文件可超过1024字节
            curl_setopt($curl, CURLOPT_TIMEOUT, 30);// 设置超时限制防止死循环
            curl_setopt($curl, CURLOPT_HEADER, 0);// 显示返回的Header区域内容
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);// 获取的信息以文件流的形式返回
            $tmpInfo= curl_exec($curl);// 执行操作
            dd($tmpInfo);
            if(curl_errno($curl)) {
                $error .= curl_error($curl) . "\n";
            }
            $xml = simplexml_load_string($tmpInfo);
            $errno = $xml->params->param->value->int;
            if(200 < $errno) {
                $error .=  '文件推送错误，错误码： ' . $errno . "\n";
            }

        curl_close($curl);
        if(!empty($error)) {

            $err = "
                    错误代码                                    错误码说明：    \n
          200    无使用方式错误，需要进一步观察返回的内容是否正确     \n
          400    必选参数未提供      \n
          405    不支持的请求方式，我们只支持POST方式提交数据     \n
          411    HTTP头中缺少Content-Length字段     \n
          413    推送的数据过大，超过了10MB的限制       \n
          422    HTTP头中Content-Length声明的长度和实际发送的数据长度不一致       \n
          500    站长平台服务器内部错误      \n
        ";
            $error .= $err;
            error_log($error, 3, 'error.log');
        }

    }



}