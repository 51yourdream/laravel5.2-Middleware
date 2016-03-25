<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/25
 * Time: 16:29
 */
use Illuminate\Database\Seeder;
use App\Page;

class PageSeeder extends Seeder
{
    public function run()
    {
        // TODO: Implement run() method.
        for($i=10; $i<20; $i++){
            Page::create([
                'title'=>'page title'.$i,
                'content'=>'page content'.$i,
            ]);
        }
        $this->command->info('Page table seeded!');
    }

}
