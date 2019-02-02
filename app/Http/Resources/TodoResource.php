<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TodoResource extends JsonResource
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
                'id'            => $this->id,
                'title'         => $this->title,
                'completed'     => $this->completed === 0 ? false : true,
                'created_at'    => \Carbon\Carbon::parse($this->created_at)->format('d F Y') 
        ];
    }
}
