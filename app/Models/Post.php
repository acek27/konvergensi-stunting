<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Post extends Model
{
    use SoftDeletes;

    protected $fillable = ['title', 'image', 'editor', 'content', 'slug', 'opd_id'];
    protected $attributes = [
        'slug' => 1
    ];
    protected $with = ['opds'];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value . '-' . uniqid(), '-');
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->isoFormat('D MMMM Y');
    }

    public function opds()
    {
        return $this->belongsTo(Opd::class, 'opd_id', 'kode');
    }
}
