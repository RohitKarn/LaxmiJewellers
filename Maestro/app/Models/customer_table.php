<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\HomeController;

class customer_table extends Model
{
    public $table = 'customers';
    public $primaryKey = 'customer_id';
    public $incrementing = true;
    public $timestamp = false;
}
