<?php

namespace Modules\Website\Models;

use Illuminate\Database\Eloquent\Model; 

use Nestable\NestableTrait;

class Blog extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blogs';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     /**
     * The primary key used by the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['blog_title','slug','blog_description'];  // All field of user table here    


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
