<?php

namespace Venocl\ElrteBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

use Venocl\ElrteBundle\DependencyInjection\Compiler\ElrtePass;

/**
 * VenoclElrteBundle
 *
 * @author Louis Oberlé <louisoberle@yahoo.fr>
 */
class VenoclElrteBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        
        $container->addCompilerPass(new ElrtePass());
    }
}
