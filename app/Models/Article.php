<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;

class Article extends Model
{
    use Searchable;
    use HasFactory;
    protected $fillable = [
        'title','description','price','category_id','user_id'
    ];
    
    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'category_id' => $this->category_id,
            'user_id' => $this->user_id
        ];
    }
}
