<?php

namespace Venocl\ElrteBundle\DependencyInjection;

use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;

/**
 * VElrteExtension
 *
 * @author Louis Oberlé <louisoberle@yahoo.fr>
 */
class VenoclElrteExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container)
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('elrte.yml');
        
        $container->setParameter('venocl_elrte.elrte.config', $configs[0]['elrte']);
    }
}
