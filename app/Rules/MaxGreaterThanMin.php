<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MaxGreaterThanMin implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $minValue = request()->input('min');
        return $value > $minValue;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The max number must be greater than the min number.';
    }
}
