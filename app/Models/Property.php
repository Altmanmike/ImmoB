<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [                
        'title',
        'category_id',
        'type',
        'furnished',        
        'photo',
        'rooms',
        'area',        
        'description',
        'price',
        'user_id',
        'user_phone',
        'user_mail',
        'slug'            
    ];   
    
    public function dateFormatted()
    {
        return date_format($this->created_at, 'd-m-Y');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
