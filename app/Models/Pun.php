<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Category;

use App\Models\Category_pun;

class Pun extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'author',
        'pun',

    ];

    protected $table = 'puns';

    public function category(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'categories_puns');
    }
}