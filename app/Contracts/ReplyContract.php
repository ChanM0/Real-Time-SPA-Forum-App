<?php 
namespace App\Contracts;

use Illuminate\Http\Request;
use App\Models\Reply;
use App\Models\Question;

interface ReplyContract
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index(Question $question);

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Question $question, Request $request);

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Reply  $reply
   * @return \Illuminate\Http\Response
   */
  public function show(Question $question, Reply $reply);

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Reply  $reply
   * @return \Illuminate\Http\Response
   */
  public function update(Question $question, Request $request, Reply $reply);

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Reply  $reply
   * @return \Illuminate\Http\Response
   */
  public function destroy(Question $question, Reply $reply);
}