<?php

declare(strict_types=1);

namespace Modules\Admin\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use URL;

class User extends Authenticatable
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'testimonial';
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
    protected $fillable = [
        'client_name',
        'client_review',
        'profile_image',
        
    ];  // All field of user table h



    protected $guarded = ['created_at', 'updated_at', 'id'];

    // Return user record
    public function getTestimonialDetail($id = null)
    {
        if ($id) {
            return Testimonial::find($id);
        }

        return Testimonial::all();
    }

    public static function createImage($request, $fielName)
    {
        try {
            if ($request->file($fielName)) {
                $photo = $request->file($fielName);

                $destinationPath = storage_path('uploads/profile/');
                $photo->move($destinationPath, time() . $photo->getClientOriginalName());
                $photo_name = time() . $photo->getClientOriginalName();

                return  URL::asset('storage/uploads/profile/' . $photo_name);
            //$request->merge(['photo'=>$photo_name]);
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }

    public function role()
    {
        return $this->belongsTo('Modules\Admin\Models\Role', 'testimonial_id');
    }
}
