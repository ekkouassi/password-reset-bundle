<?php

namespace Mrke\ResetPasswordBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Ernest KOUASSI<ernestkouassi02@gmail.com>
 */
class ResetPasswordBundle extends Bundle
{
    /**
     * @return string
     */
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}