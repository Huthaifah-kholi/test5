<?php

use Illuminate\Database\Seeder;

class add_two_articles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => 'Health is Wealth',
            'author' => 'Sami_tt3',
            'articleBody' => 'Health is wealth. There is nothing in our
                            life that is more valuable than good health.
                            Without health there is no happiness, no peace
                            and no success.
                            A person with bad health cannot enjoy the pleasure
                            of being wealthy.',
        ]);
    }
}
