<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class Weblog extends Model
{
    use HasFactory;
    protected $fillable =[
        'title',
        'author',
        'email',
        'slug',
        'content'
    ];
    public function scopeIndexWeblog($query){

        return $query->latest()->take(5)->get();
    }
    public function scopeCreateWeblog(){
        Weblog::create([
            'title'=> request('title'),
            'author'=>request('author'),
            'email'=>request('email'),
            'slug'=>Str::slug(request('title')),
            'content'=>request('content')
        ]);

    }
    public function scopeDetailWeblog($query,$id,$slug){
        return $query->find($id);

    }

}
