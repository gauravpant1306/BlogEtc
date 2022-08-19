<?php

namespace WebDevEtc\BlogEtc\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class post_likes extends Model
{
    use SoftDeletes;

    public $table = 'post_likes';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    public $fillable = [
        'blog_etc_post_id',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'blog_etc_post_id' => 'integer',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

  
}
