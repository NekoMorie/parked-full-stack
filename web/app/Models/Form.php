<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    // Specify the table associated with the model if it's not the plural form of the model name
    protected $table = 'form';

    // Specify the fillable properties
    protected $fillable = [
        'user_id',
        'file_diagnosa1',
        'file_diagnosa2',
        'file_diagnosa3',
        'hasil_diagnosa1',
        'hasil_diagnosa2',
        'hasil_diagnosa3',
    ];

    // Define the relationship with the User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
