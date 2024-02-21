<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    //numarul pentru elemente p epagina, pentru pagginare
    public const NUMBER_PER_PAGE = 10;
    protected $fillable = [
        'nume',
        'telefon',
        'email',
        'adresa'

    ];
}
