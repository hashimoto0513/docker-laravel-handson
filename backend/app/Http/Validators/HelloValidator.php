<?php
namespace App\Http_validators;

use Illuminate\Validation\Validator;

class HelloValidator extends Validator{
    public function validateHello($attribute, $value, $parameters){
        return $value % 2 == 0;
    }
}
