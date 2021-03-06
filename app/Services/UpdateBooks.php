<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/5/24 0024
 * Time: 15:09
 */

namespace App\Services;

use App\Models\Comment;
use App\Models\EarlyBook;
use App\Models\EarlyChapter;
use App\Models\NovelBook;
use App\Models\NovelChannel;
use App\Models\NovelChapter;
use App\Models\NovelTag;
use App\Models\NovelType;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class UpdateBooks{




    public static function DealEarlyChapters(){


        for($i=0;$i<4000;$i++){
            $chapters = EarlyChapter::where(['is_yc'=>1])->limit(1000)->get();

            if(!$chapters->isEmpty()){
                foreach ($chapters as $chapter){
                    $novel_chapter = new NovelChapter();
                    $novel_chapter->bid = $chapter->bid;
                    $novel_chapter->chapter_id = $chapter->chapterId;
                    $novel_chapter->title = $chapter->chapterName;
                    $novel_chapter->chapterContent = $chapter->chapterContent;
                    $novel_chapter->is_pay = $chapter->is_pay;
                    $novel_chapter->goId = $chapter->goId;
                    $novel_chapter->save();
                    $chapter->is_yc = 2 ;
                    $chapter->save();
                }
            }else{
                break;
            }
        }



        return true;
    }


    public static function DealEarlyBooks()
    {

            //获取初始表books数据
            $early_books =  EarlyBook::where(['is_yc'=>1])->get();



            if($early_books->count()){
                foreach ($early_books as $early_book){

                    if($early_book->typename == '0'|| $early_book->typename == '1'||$early_book->typename ==''){
                        $early_book->typename = '现代言情';
                    }elseif($early_book->typename == '现言'){
                        $early_book->typename = '现代言情';
                    }elseif($early_book->typename == '古言'){
                        $early_book->typename = '古代言情';
                    }elseif($early_book->typename == '幻言'){
                        $early_book->typename = '幻想异能';
                    }

                    $type =  NovelType::where('typename','like','%'.$early_book->typename.'%')->first();
                    if(!$type){
                        $type = new NovelType();
                        $type->typename = $early_book->typename;
                        $type->save();
                    }

                    $channel =  NovelChannel::where('channelname','like','%'.$early_book->channelname.'%')->first();
                    if(!$channel){
                        $channel = new NovelChannel();
                        $channel->channelname = $early_book->channelname;
                        $channel->save();
                    }


                    if($early_book->status=='已完结'){
                        $status = 1;
                    }else{
                        $status = 0;
                    }
                    $book = NovelBook::where('name','=',$early_book->name)->where(['author'=>$early_book->author])->first();
                    if(!$book){
//                        $filename = static::downFile($early_book->cover_img,storage_path('app/public/'),md5($early_book->cover_img));
                        $arr = explode('/',$early_book->cover_img);
                        $nobook = new NovelBook();
                        $nobook->id = $early_book->id;
                        $nobook->name = $early_book->name;
                        $nobook->status = $early_book->status;
                        $nobook->chapter_number = $early_book->info_chapters_num;
                        $nobook->author = substr($early_book->author,9);
                        $nobook->words  = $early_book->words  ;
                        $nobook->protagonist = $early_book->protagonist;
                        $nobook->cover_img = end($arr);
                        $nobook->status = $status;
                        $nobook->synopsis = $early_book->synopsis;
                        $nobook->type_id = $type->id;
                        $nobook->channel_id = $channel->id;
                        $nobook->tag_ids = static::getTags()??'';
                        $nobook->pubdate = $early_book->update_date;
                        $nobook->try_id = 0;
                        $nobook->is_online = 0;
                        $nobook->pc_read_url = '';
                        $nobook->m_read_url = $early_book->referral_link;
                        $nobook->comment_id = static ::getCommitId()??'';
                        $nobook->info_id = $early_book->info_id;
                        $nobook->save();

                    }

                    $early_book->is_yc = 2 ;
                    $early_book->save();
                }


        }



        return true;
    }





    public static function DealEarlyComments(){
        $comment_images = config('name.img');
        $comment_content = config('name.content');
        $comment_name = config('name.name');



        for($i=0;$i<100;$i++){
            $img =  collect($comment_images)->random(1);
            $content =  collect($comment_content)->random(1);
            $name =  collect($comment_name)->random(1);
            $commit = new Comment();
            $commit->comment_name = $name[0];
            $commit->comment_img = $img[0];
            $commit->comment_content = $content[0];
            $commit->save();
        }

        return $a = '1';
    }



    public static function getTags(){
        $tags = NovelTag::pluck('id')->all();
        if(count($tags)>=4){
            $tags =  collect($tags)->random(4);
        }
        return json_encode($tags->toArray());
    }


    public static function getTryId()
    {
        $ids = NovelBook::where(['try_id'=>'0'])->pluck('id')->all();

        foreach ($ids as $id){
            $one = NovelChapter::where(['bid'=>$id])->where(['goId'=>0])->where(['is_pay'=>0])->limit(2)->get();

            $try_ids = $one->pluck('id')->all();

            if($try_ids){
                NovelBook::where(['id'=>$id])->update(['try_id'=>json_encode($try_ids)]);
            }

        }

        return true;
    }

    public static function getCommitId()
    {
        $ids = Comment::pluck('id')->all();

        if(count($ids)!=0){
            $rand_one_id =  collect($ids)->random(1);

            return $rand_one_id[0];
        };

        return false;
    }


    /**
     * 获取远程文件所采用的方法
     * @param $url
     * @param $save_dir
     * @param $filename
     * @param string $type
     * @return array
     * @author:  deng    (2019/4/24 14:38)
     */
    private static function downFile($url, $save_dir, $filename, $type = '0')
    {
        if($type){
            $ch=curl_init();
            $timeout=5;
            curl_setopt($ch,CURLOPT_URL,$url);
            curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
            curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
            $img=curl_exec($ch);
            curl_close($ch);
        }else{
            ob_start();
            readfile($url);
            $img=ob_get_contents();
            ob_end_clean();
        }
        $size=strlen($img);
        //文件大小
        $fp2=@fopen($save_dir.$filename.'.jpg','a');
        fwrite($fp2,$img);
        fclose($fp2);
        unset($img,$url);

        $result = [
            'file_size' => $size,
            'file_name' => $filename.'.jpg',
            'save_path' => $save_dir.$filename,
            'address' => $save_dir.$filename
        ];

        return $result;
    }

    public static function updateInfoId()
    {
        while(true){
            $book = NovelBook::where(['info_id'=>null])->limit(1)->first();
//            dd($book);
            if($book){
                $ebook = EarlyBook::where(['id'=>$book->id])->first();
                $book->info_id = $ebook->info_id;
                $book->save();
            }else{
                break;
            }
        }

    }
}