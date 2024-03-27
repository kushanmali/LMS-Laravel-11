<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'phone_number',
        'al_batch',
        'user_name',
        'birthday',
        'address',
        'national_id_number',
        

    ];

    public function student()
    {
        return $this->hasOne(Student::class);
    }

}
