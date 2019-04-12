<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Articles extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        #return parent::toArray($request); //returns everything
        return [
            'id'=>$this->id,
            'title'=>$this->title,
            'body'=>$this->body
        ];
    }
    
    public function with($request){
        return [
            'version'=>'1.0.0',
            'author'=>'Dickens Odera',
            'author_url'=>url('http://github.com/Dickens-odera')
        ];
    }
    
}
