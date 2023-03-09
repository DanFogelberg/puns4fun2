<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Pun;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Category_pun;

class Category extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'category',
    ];

    // protected $table = 'categories';

    public function puns(): BelongsToMany
    {
        return $this->belongsToMany(Pun::class, 'categories_puns');
    }
}