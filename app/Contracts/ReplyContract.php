<?php 
namespace App\Contracts;

use App\Models\Reply;
use Illuminate\Http\Request;

interface ReplyContract
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index();

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request);

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Reply  $reply
   * @return \Illuminate\Http\Response
   */
  public function show(Reply $reply);

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Reply  $reply
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Reply $reply);

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Reply  $reply
   * @return \Illuminate\Http\Response
   */
  public function destroy(Reply $reply);
}