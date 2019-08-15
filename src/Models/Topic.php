<?php

namespace LucasQuinnGuru\SitetronicExam\Models;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
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
    public function section()
    {
        return $this->belongsTo(\LucasQuinnGuru\SitetronicExam\Models\Section::class);
    }
}
