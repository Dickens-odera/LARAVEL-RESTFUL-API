<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PostsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'description'=>$this->description

        ];
    }
    //extra data to display
    public function with($request){
        return [
            'version'=>'1.0.0',
            'author'=>'Dickens Odera',
            'social'=>[
                'twitter'=>'@dickensodera',
                'facebook'=>'Dickens Odera',
                'professional'=>[
                    'linkedin'=>'dickens odera',
                    'github'=>'https://github.com/Dickens-odera',
                    'email'=>'dickens@mih.co.ke',
                    'phone'=>'+254714905613'
                ]
            ],
        ];
    }
}
