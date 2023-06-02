<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    protected $table = "visitor_table";
    protected $primarykey = "id";
    
    protected $fillable = ['name','fromemail','toemail','contact','organization','rack','reason','status'];

    use HasFactory;
}