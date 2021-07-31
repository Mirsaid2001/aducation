<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;
    protected $fillable=[
        'fullName',
            'phone',
            'password',
            'salary',
            'profession_id',
            'cours'
    ];
    public function profession()
    {
        return $this->belongsTo(Profession::class);
    }
}
