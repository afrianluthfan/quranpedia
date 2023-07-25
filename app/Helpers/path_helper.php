<?php

if (!function_exists('public_path')) {
    /**
     * Get the full path to the public directory.
     *
     * @param string $path
     * @return string
     */
    function public_path(string $path = ''): string
    {
        return ROOTPATH . 'public' . DIRECTORY_SEPARATOR . $path;
    }
}
