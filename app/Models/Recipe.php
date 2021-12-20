<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Recipe extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'user_id',
        'name',
        'category_id',
        'prepare_time',
        'cooking_time',
        'serving',
        'description'
    ];


    protected $appends = [
        'created_at_str'
    ];


    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getCreatedAtStrAttribute()
    {
        return Carbon::create($this->created_at)->format('d F, Y');
    }

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
