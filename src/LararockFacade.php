<?php

namespace Erickne\Lararock;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Erickne\Lararock\Skeleton\SkeletonClass
 */
class LararockFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'lararock';
    }
}
