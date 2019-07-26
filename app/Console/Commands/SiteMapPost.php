<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SiteMapPost extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:sitemap_post';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'command:sitemap_post';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('[' . date('Y-m-d H:i:s', time()) . ']开始执行推送');
        try {
            \App\Services\SitemapPost::index();
            \App\Services\SitemapMobilePost::index();
        } catch (\Exception $exception) {
            $this->error('推送sitemap失败：' . $exception->getMessage());
            return;
        }
        $this->info('[' . date('Y-m-d H:i:s', time()) . ']推送sitemap成功!');
    }
}
