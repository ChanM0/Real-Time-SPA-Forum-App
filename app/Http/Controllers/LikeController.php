<?php
namespace App\Http\Controllers;

use App\Contracts\LikeContract;
use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Reply;

class LikeController extends Controller
{
    protected $likeContractRetriever;

    public function __construct(LikeContract $likeContract)
    {
        $this->middleware('JWT');
        $this->likeContractRetriever = $likeContract;
    }

    public function likeIt(Reply $reply)
    {
        return $this->likeContractRetriever->likeIt($reply);
    }

    public function unLikeIt(Reply $reply)
    {
        return $this->likeContractRetriever->unLikeIt($reply);
    }

}
