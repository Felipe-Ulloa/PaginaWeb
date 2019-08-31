<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
class TeamUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            
            'name'          => 'required',
            'charge'        => 'required',
            'excerpt'        => 'required',
            'user_id'       => 'required|integer',
        ];
        if($this->get('image'))        
            $rules = array_merge($rules, ['image'         => 'mimes:jpg,jpeg,png']);
        return $rules;
    }
}