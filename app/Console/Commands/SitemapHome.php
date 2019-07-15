<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SitemapHome extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'sitemap';

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
        $this->info('[' . date('Y-m-d H:i:s', time()) . ']开始执行sitemap生成脚本');
        try {
            \App\Services\SiteMapHome::index();
        } catch (\Exception $exception) {
            $this->error('生成sitemap失败：' . $exception->getMessage());
            return;
        }
        $this->info('[' . date('Y-m-d H:i:s', time()) . ']生成sitemap成功!');
    }
}
