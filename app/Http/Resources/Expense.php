<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class Expense extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'               => $this->id,
            'amount'           => $this->amount,
            'description'      => $this->description,
            'category'      => $this->whenLoaded('category', function(){
                return $this->category->name;
            }),
            'transaction_date' => $this->transaction_date,
            'notes'            => $this->notes
        ];

    }
}
