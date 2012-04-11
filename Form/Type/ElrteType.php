<?php
namespace Venocl\ElrteBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

/**
 * Form field using Elrte
 *
 * @author Louis Oberlé <louisoberle@yahoo.fr>
 */
class ElrteType extends AbstractType
{
    public function getDefaultOptions(array $options)
    {
        return array();
    }

    public function getParent(array $options)
    {
        return 'textarea';
    }

    public function getName()
    {
        return 'venocl_elrte';
    }
}