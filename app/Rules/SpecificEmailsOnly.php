<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class SpecificEmailsOnly implements Rule
{
    private array $emails = ['emailme@joelohr.com'];

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return in_array($value, $this->emails);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'You are not allowed to login the current email address.';
    }
}
