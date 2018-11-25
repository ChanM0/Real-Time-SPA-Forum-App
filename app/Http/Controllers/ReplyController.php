<?php

namespace App\Http\Controllers;

use App\Contracts\ReplyContract;
use Illuminate\Http\Request;
use App\Models\Reply;
use App\Models\Question;

class ReplyController extends Controller
{
    protected $replyContractRetriever;

    public function __construct(ReplyContract $replyContract)
    {
        $this->replyContractRetriever = $replyContract;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Question $question)
    {
        return $this->replyContractRetriever->index($question);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Question $question, Request $request)
    {
        return $this->replyContractRetriever->store($question, $request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question, Reply $reply)
    {
        return $this->replyContractRetriever->show($question, $reply);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reply $reply)
    {
        return $this->replyContractRetriever->update($request, $reply);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question, Reply $reply)
    {
        return $this->replyContractRetriever->destroy($question, $reply);
    }
}
