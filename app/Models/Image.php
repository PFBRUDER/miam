<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Image extends Model
{
    use HasFactory;

    /**
     * @var array<int, string>
     */

     protected $fillable = [
        'path',
        'receipes_id'
     ];

     public function receipe(): BelongsTo 
     {
        return $this->belongsTo(Receipe::class);
     }

}
