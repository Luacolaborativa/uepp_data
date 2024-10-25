<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $table = 'expense';

    protected $fillable = [
        'name', 'amount', 'category_id', 'transaction_date', 'notes',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id')->withDefault([
            'name' => 'Padrao'
        ]);
    }
}
