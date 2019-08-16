<?php

namespace LucasQuinnGuru\SitetronicExam\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function topic()
    {
        return $this->belongsTo(\LucasQuinnGuru\SitetronicExam\Models\Topic::class);
    }
}
