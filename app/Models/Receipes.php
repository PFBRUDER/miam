<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Receipes extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'receipeName',
        'file',
        'cookingTime',
        'ingredients',
        'receipeDescription',
    ];

    public function author() : HasOne
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    public function image(): HasOne
    {
        return $this->hasOne(Image::class);
    }

}
