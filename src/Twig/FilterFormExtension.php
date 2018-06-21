<?php

namespace AlterPHP\EasyAdminExtensionBundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class FilterFormExtension extends AbstractExtension
{
    protected $filterFormHelper;

    public function __construct($filterFormHelper)
    {
        $this->filterFormHelper = $filterFormHelper;
    }

    public function getFunctions()
    {
        return array(
            new TwigFunction('filter_form', array($this, 'getFilterForm')),
        );
    }

    public function getFilterForm(string $entityName)
    {
        return $this->filterFormHelper->generateFilterForm($entityName);
    }
}
