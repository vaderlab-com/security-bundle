<?php

namespace VaderLab\SecurityBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use VaderLab\SecurityBundle\DependencyInjection\VaderLabSecurityExtension;

class VaderLabSecurityBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new VaderLabSecurityExtension(); // TODO: Change the autogenerated stub
    }
}
