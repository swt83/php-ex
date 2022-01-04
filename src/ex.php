<?php

if (!function_exists('ex'))
{
    function ex($object, $coords, $default = null)
    {
        if (!is_array($object) and !is_object($object))
        {
            return $default;
        }

        $keys = explode('.', $coords);
        foreach ($keys as $key)
        {
            if (is_array($object))
            {
                if (isset($object[$key]))
                {
                    $object = $object[$key];
                }
                else
                {
                    return $default;
                }
            }
            elseif (is_object($object))
            {
                if (isset($object->$key))
                {
                    $object = $object->$key;
                }
                else
                {
                    return $default;
                }
            }
            else
            {
                return $default;
            }
        }
        return $object ? $object : $default;
    }
}

if (!function_exists('excount'))
{
    function excount($array)
    {
        $num = @count($array); // suppress error

        return $num ? $num : 0;
    }
}