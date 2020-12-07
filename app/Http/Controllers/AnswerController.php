<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    protected $EI;
    protected $SN;
    protected $TF;
    protected $JP;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email'=>'email|required'
        ]);

        $answer                         =    new Answer;
        $answer->question_id            =    1;
        $answer->email                  =    $request->email;
        $answer->rank                   =    $request->question_1;
        $answer->save();
        $this->setDimension(1,$request->question_1);

        $answer                         =    new Answer;
        $answer->question_id            =    2;
        $answer->email                  =    $request->email;
        $answer->rank                   =    $request->question_2;
        $answer->save();
        $this->setDimension(2,$request->question_2);

        $answer                         =    new Answer;
        $answer->question_id            =    3;
        $answer->email                  =    $request->email;
        $answer->rank                   =    $request->question_3;
        $answer->save();
        $this->setDimension(3,$request->question_3);

        $answer                         =    new Answer;
        $answer->question_id            =    4;
        $answer->email                  =    $request->email;
        $answer->rank                   =    $request->question_4;
        $answer->save();
        $this->setDimension(4,$request->question_4);
        
        $answer                         =    new Answer;
        $answer->question_id            =    5;
        $answer->email                  =    $request->email;
        $answer->rank                   =    $request->question_5;
        $answer->save();
        $this->setDimension(5,$request->question_5);

        $answer                         =    new Answer;
        $answer->question_id            =    6;
        $answer->email                  =    $request->email;
        $answer->rank                   =    $request->question_6;
        $answer->save();
        $this->setDimension(6,$request->question_6);

        $answer                         =    new Answer;
        $answer->question_id            =    7;
        $answer->email                  =    $request->email;
        $answer->rank                   =    $request->question_7;
        $answer->save();
        $this->setDimension(7,$request->question_7);

        $answer                         =    new Answer;
        $answer->question_id            =    8;
        $answer->email                  =    $request->email;
        $answer->rank                   =    $request->question_8;
        $answer->save();
        $this->setDimension(8,$request->question_8);

        $answer                         =    new Answer;
        $answer->question_id            =    9;
        $answer->email                  =    $request->email;
        $answer->rank                   =    $request->question_9;
        $answer->save();
        $this->setDimension(9,$request->question_9);

        $answer                         =    new Answer;
        $answer->question_id            =    10;
        $answer->email                  =    $request->email;
        $answer->rank                   =    $request->question_10;
        $answer->save(); 
        $this->setDimension(10,$request->question_10);  

        return view('results',$this->getMBTI());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function show(Answer $answer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function edit(Answer $answer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Answer $answer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Answer  $answer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Answer $answer)
    {
        //
    }
    
    protected function getDirection($id,$answer){
        $question = Question::where('id',$id)->first(); 
        $direction = $question->direction;
        $dimension = $question->dimension;
        $new_direction =0;
        if($answer>4){
            $new_direction = $direction;            
        } 
        if($answer==4){
            $new_direction = 0;            
        } 
        if($answer<4){
            $new_direction = -$direction;                                    
        }   
        
        return compact('new_direction','dimension');
    }

    protected function setDimension($id,$answer){
        $result=$this->getDirection($id,$answer);
        if($result['dimension']=='EI'){
            $this->EI += $result['new_direction'];           
        }
        if($result['dimension']=='SN'){
            $this->SN += $result['new_direction'];           
        }
        if($result['dimension']=='TF'){
            $this->TF  += $result['new_direction'];           
        }
        if($result['dimension']=='JP'){
            $this->JP += $result['new_direction'];          
        }        
    }

    protected function getMBTI(){
        $mbti ="";
        $ei_resonance="";
        $sn_resonance="";
        $tf_resonance="";
        $jp_resonance="";
        if($this->EI > 0){
            $mbti.='I';
            $ei_resonance="I";
        }
        if($this->EI <= 0){
            $mbti.='E';
            $ei_resonance='E';
        }
        if($this->SN > 0){
            $mbti.='N';
            $sn_resonance="N";
        }
        if($this->SN <= 0){
            $mbti.='S';
            $sn_resonance="S";
        }
        if($this->TF > 0){
            $mbti.='F';
            $tf_resonance="F";
        }
        if($this->TF <= 0){
            $mbti.='T';
            $tf_resonance="T";
        }
        if($this->JP > 0){
            $mbti.='P';
            $jp_resonance="P";
        }
        if($this->JP <= 0){
            $mbti.='J';
            $jp_resonance="J";
        }
        return compact('mbti','ei_resonance', 'sn_resonance', 'tf_resonance', 'jp_resonance');
    }
}
