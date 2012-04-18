<?php
namespace Venocl\ElrteBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\FormView;
use Symfony\Component\Form\FormInterface;

/**
 * Form field using Elrte
 *
 * @author Louis Oberlé <louisoberle@yahoo.fr>
 */
class ElrteType extends AbstractType
{
    
    private $options;

    public function __construct(array $options)
    {
        $this->options = $options;
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'required' => false,
        );
    }
    
    public function buildView(FormView $view, FormInterface $form)
    {
        $view->set('options', $this->options);
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