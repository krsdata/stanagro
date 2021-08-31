<?php

declare(strict_types=1);

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * The product validation rules.
     *
     * @return array
     */
    public function rules()
    {
        switch ($this->method()) {

                case 'GET':
                case 'DELETE': {
                        return [];
                    }
                case 'POST': {
                        return [
                            'client_name'     => "required|min:3" ,  
                            'client_review'       => 'required',
                            'client_image'             => 'required|mimes:jpeg,bmp,png,gif'
                        ];
                    }
                case 'PUT':
                case 'PATCH': {

                    return [
                        'client_name'     => "required|min:3" ,  
                        'client_review'       => 'required',
                        'client_image'             => 'required|mimes:jpeg,bmp,png,gif'
                    ];
                }
                default:break;
            }
        //}
    }

    /**
     * The
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
