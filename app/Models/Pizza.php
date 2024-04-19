<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    //it is automatically connected to the pizza table
    //to change the table you are connected to, you can override it by:
    // protected $table = "table_name;

    protected $table = "pizza_project";

}
