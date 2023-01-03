<?php

namespace App\Http\Resources\Version1;

use Illuminate\Http\Resources\Json\JsonResource;

class AnnouncementResource extends JsonResource
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
            'id'=> $this->id,
            'header'=> $this->header,
            'sub_header'=> $this->sub_header,
            'image' => $this->image,
            'description'=> $this->description,
            'user_id'=> $this->user_id
        ];
    }
}
