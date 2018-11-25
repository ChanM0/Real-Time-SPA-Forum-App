<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'title' => $this->title,
            /** 
             * Dont have a path field in our table so we can go to App/Models/Question.php
             * Create a new function getPathAttribute()
             */
            'path' => $this->path,
            'body' => $this->body,
            'created_at' => $this->created_at->diffForHumans(),

            /** 
             * Dont have a path field in our table so we can go to App/Models/Question.php
             * the current function/relationship is used : user()
             */
            'user' => $this->user->name,

        ];
    }
}
