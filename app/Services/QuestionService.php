<?php 
namespace App\Services;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use App\Models\Question;
use App\Contracts\QuestionContract;

class QuestionService implements QuestionContract
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return Question::latest()->get();
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
        //
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Question  $question
   * @return \Illuminate\Http\Response
   */
  public function show(Question $question)
  {
    return $question;
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Question  $question
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Question $question)
  {
        //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Question  $question
   * @return \Illuminate\Http\Response
   */
  public function destroy(Question $question)
  {
        //
  }
}