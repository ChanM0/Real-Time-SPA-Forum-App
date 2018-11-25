<?php 
namespace App\Contracts;

use Illuminate\Http\Request;
use App\Models\Like;
use App\Models\Reply;

interface LikeContract
{

    public function likeIt(Reply $reply);

    public function unLikeIt(Reply $reply);

}