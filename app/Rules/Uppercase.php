<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Uppercase implements ValidationRule
{
    /**
     * Run the validation rule.
     * @return void
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        /**
     * 
     * @param mixed $value
     * @return bool
     */
    }
    public function passes($attribute, $value){
        /* condition to be passed */
        return strtoupper($value) === $value;
    }
    /**
     * Get the validation error mesage.
     * @return string
     * 
     */
    public function message(){
        return 'The: attribute must be uppercase.';
    }
}

