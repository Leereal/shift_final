<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Answer::create(['answer'=>1]);
        Answer::create(['answer'=>2]);
        Answer::create(['answer'=>3]);
        Answer::create(['answer'=>4]);
        Answer::create(['answer'=>5]);
        Answer::create(['answer'=>6]);
        Answer::create(['answer'=>7]);
    }
}
