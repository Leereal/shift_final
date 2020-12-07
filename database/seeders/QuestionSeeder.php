<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::create(['question'=>'You find it takes effort to introduce yourself to other people.','dimension'=>'EI','direction'=>'1','meaning'=>'I']);
        Question::create(['question'=>'You consider yourself more practical than creative.','dimension'=>'SN','direction'=>'-1','meaning'=>'S']);
        Question::create(['question'=>'Winning a debate matters less to you than making sure no one gets upset.','dimension'=>'TF','direction'=>'1','meaning'=>'F']);
        Question::create(['question'=>'You get energized going to social events that involve many interactions.','dimension'=>'EI','direction'=>'-1','meaning'=>'E']);
        Question::create(['question'=>'You often spend time exploring unrealistic and impractical yet intriguing ideas.','dimension'=>'SN','direction'=>'1','meaning'=>'N']);
        Question::create(['question'=>'Deadlines seem to you to be of relative rather than absolute importance.','dimension'=>'JP','direction'=>'1','meaning'=>'P']);
        Question::create(['question'=>'Logic is usually more important than heart when it comes to making important decisions.','dimension'=>'TF','direction'=>'-1','meaning'=>'T']);
        Question::create(['question'=>'Your home and work environments are quite tidy.','dimension'=>'JP','direction'=>'-1','meaning'=>'J']);
        Question::create(['question'=>'You do not mind being at the center of attention.','dimension'=>'EI','direction'=>'-1','meaning'=>'E']);
        Question::create(['question'=>'Keeping your options open is more important than having a to-do list.','dimension'=>'JP','direction'=>'1','meaning'=>'P']);   
    }
}
