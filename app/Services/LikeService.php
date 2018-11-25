<?php 
namespace App\Services;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
// use Illuminate\Support\Facades\Auth;
use App\Contracts\LikeContract;
use App\Models\Like;
use App\Models\Reply;

class LikeService implements LikeContract
{
    public function likeIt(Reply $reply)
    {
        $reply->like()->create([
            // 'user_id' => auth()->id()
            'user_id' => '1'
        ]);
        return response('Updated Like', Response::HTTP_ACCEPTED);
    }

    public function unLikeIt(Reply $reply)
    {
        // $reply->like()->where(['user_id', au th()->id()])->first()->delete();
        $reply->like()->where('user_id', '1')->first()->delete();
        return response('Removed Like', Response::HTTP_NO_CONTENT);
    }
}