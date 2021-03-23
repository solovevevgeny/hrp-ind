<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\navigation;


class navigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $navigation = new navigation;
        $navigation->title = 'О компании';
        $navigation->slug = 'about';
        $navigation->parent_id = 0;
        $navigation->order = 100;
        $navigation->save();

        $navigation = new navigation;
        $navigation->title = 'Услуги';
        $navigation->slug = 'uslugi';
        $navigation->parent_id = 0;
        $navigation->order = 200;
        $navigation->save();

        $navigation = new navigation;
        $navigation->title = 'Восстановление двигателей';
        $navigation->slug = 'reman-engines';
        $navigation->parent_id = 1;
        $navigation->order = 100;
        $navigation->save();

        $navigation = new navigation;
        $navigation->title = 'Ремонт двигателей';
        $navigation->slug = 'service-engines';
        $navigation->parent_id = 1;
        $navigation->order = 200;
        $navigation->save();


        $navigation = new navigation;
        $navigation->title = 'Запчасти';
        $navigation->slug = 'parts';
        $navigation->parent_id = 0;
        $navigation->order = 300;
        $navigation->save();


        $navigation = new navigation;
        $navigation->title = 'Запчасти';
        $navigation->slug = 'parts';
        $navigation->parent_id = 0;
        $navigation->order = 400;
        $navigation->save();

        $navigation = new navigation;
        $navigation->title = 'JEREH';
        $navigation->slug = 'jereh';
        $navigation->parent_id = 0;
        $navigation->order = 500;
        $navigation->save();

    }
}
