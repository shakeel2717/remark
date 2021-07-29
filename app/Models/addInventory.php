<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class addInventory extends Model
{
    use HasFactory;
    protected $fillable = ['users_id','rma_id','serial','model','issue','sale_price'];
}
