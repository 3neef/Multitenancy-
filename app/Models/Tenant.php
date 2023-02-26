<?php

namespace App\Models;

use App\Traits\MultiTable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory, MultiTable;

    protected $fillable = ['name', 'table_name'];


    public function users(){
        return $this->belongsToMany(User::class);
    }
}
