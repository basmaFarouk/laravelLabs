<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id'=>$this->id,
            'name'=>$this->name,
            'email'=>$this->email
            //'posts'=>$this->posts->title بوستس دي اسم الفانكشن في الموديل
            //'posts'=>PostResource::collection($this->posts) عشان هما اكتر من بوست
            

        ];
    }
}
