<?php

namespace Litepie\Repository\Traits;

/**
 * Class TransformableTrait
 * @package Litepie\Repository\Traits
 * @author Renfos Technologies Pvt. Ltd. <info@info@renfos.com>
 */
trait TransformableTrait
{
    /**
     * @return array
     */
    public function transform()
    {
        return $this->toArray();
    }
}
