<?php 
namespace App\Services;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use App\Models\Question;
use App\Contracts\QuestionContract;
use Symfony\Component\HttpFoundation\Response;

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
        //Save for later when JWT is implemented 
        // auth()->user()->question()->create($request->all());

        Question::create($request->all());
        
        // return response('Created', 201);
        return response(null, Response::HTTP_CREATED);
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
        $question->delete();
       
        // return response('Deleted', Response::HTTP_NO_CONTENT);
        return response(null, Response::HTTP_NO_CONTENT);
    }
}