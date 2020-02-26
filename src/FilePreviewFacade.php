<?php

namespace Meema\LaravelFilePreview;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Meema\LaravelFilePreview\FilePreviewClass
 */
class FilePreviewFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'file-preview';
    }
}
