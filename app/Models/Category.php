<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'en', 'es'
    ];

    public function getNameByLocale(){
        if(session('locale') == 'en') return $this->en;
        elseif(session('locale') == 'es') return $this->es;
        else return $this->name;
    }

    public function articles(){
        return $this->HasMany(Article::class);
    }
}
