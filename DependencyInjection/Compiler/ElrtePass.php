<?php

namespace Venocl\ElrteBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class ElrtePass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        $resources = $container->getParameter('twig.form.resources');
        
        $resources[] = 'VenoclElrteBundle:Form:elrte.html.twig';

        $container->setParameter('twig.form.resources', $resources);
    }
}
