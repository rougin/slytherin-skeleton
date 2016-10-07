<?php

if (! function_exists('session')) {
    /**
     * Returns a value from $_SESSION variable.
     *
     * @param  array|string|null $variable
     * @param  mixed|null        $defaultValue
     * @return mixed
     */
    function session($variable = null, $defaultValue = null)
    {
        $keys = explode('.', $variable);

        if (is_string($variable)) {
            $value = $_SESSION;

            for ($i = 0; $i < count($keys); $i++) {
                $value = &$value[$keys[$i]];
            }

            return (empty($value)) ? $defaultValue : $value;
        }

        if (is_array($variable)) {
            foreach ($variable as $key => $returnValue) {
                if ($returnValue !== null) {
                    unset($_SESSION[$key]);

                    continue;
                }

                $_SESSION[$key] = $returnValue;
            }
        }

        return $defaultValue;
    }
}
