<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    // Define the table name if it's not the plural form of the model name
    protected $table = 'payments';

    // Define the fillable fields
    protected $fillable = [
        'amount',
        'currency',
        'transaction_id',
        'status',
        'user_id', // Assuming you want to associate payments with users
    ];

    // Define any relationships if necessary
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
