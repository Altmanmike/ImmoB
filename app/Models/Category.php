<?php

namespace App\Models;

use App\Models\Property;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'label'
    ];   
    
    public function dateFormatted()
    {
        return date_format($this->created_at, 'd-m-Y');
    }

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
