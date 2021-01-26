<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'address'
    ];
    protected $table = 'members';

    public function getCompany(){
        return $this->hasOne(Company::class, 'member_id');
    }
}
