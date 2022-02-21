<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\UserResource; //use namespace

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
        'post_id'=>$this->id,
        'post_title'=>$this->title,
        //'user'=>new UserResource($this->user) هرجعه بفورمات اليوزر اللي عملاه في الريسورس
        //'user'=>$this->user->name
        ];
    }
}
