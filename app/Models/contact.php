<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    // Define your table name if it's not 'contacts'
    protected $table = 'contact';

    // Other model configurations...
}
