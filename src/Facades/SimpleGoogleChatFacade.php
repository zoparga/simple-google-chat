<?php

namespace zoparga\SimpleGoogleChat\Facades;

use Illuminate\Support\Facades\Facade;

class SimpleGoogleChatFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'simplegooglechat';
    }
}
