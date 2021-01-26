<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'member_id'
    ];

    protected $table = 'companies';

    public function Member(){
        return $this->belongsTo(Member::class);
    }
    
}
