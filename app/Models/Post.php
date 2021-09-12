<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    //! Fungsi dari $fillable adalah yang bisa di isi  ['title','excerpt','body']; sisanya tidak bisa
    // protected $fillable = ['title','excerpt','body'];
    //! Fungsi dari $guarded adalah kebalikan dari $fillable dimana ['id'] tidak bisa diisi sisanya bisa diisi
    protected $guarded =  ['id'];
}
