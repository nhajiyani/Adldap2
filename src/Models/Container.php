<?php

namespace Adldap\Models;

use Adldap\Models\Traits\HasCriticalSystemObjectTrait;
use Adldap\Models\Traits\HasDescriptionTrait;
use Adldap\Schemas\Schema;

class Container extends Entry
{
    use HasDescriptionTrait;

    use HasCriticalSystemObjectTrait;

    /**
     * Returns the containers system flags integer.
     *
     * https://msdn.microsoft.com/en-us/library/ms680022(v=vs.85).aspx
     *
     * @return string
     */
    public function getSystemFlags()
    {
        return $this->getAttribute(Schema::get()->systemFlags(), 0);
    }
}
