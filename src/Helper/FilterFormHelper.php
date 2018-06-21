<?php

declare(strict_types=1);

namespace AlterPHP\EasyAdminExtensionBundle\Helper;

use Symfony\Component\Form\FormFactoryInterface;

/**
 * This file is part of the EasyAdmin Extension package.
 */
class FilterFormHelper
{
    /**
     * @var FormFactoryInterface
     */
    private $formFactory;

    /**
     * @var array
     */
    private $easyAdminConfig;

    /**
     * @param FormFactoryInterface $formFactory
     * @param array                $easyAdminConfig
     */
    public function __construct(FormFactoryInterface $formFactory, array $easyAdminConfig)
    {
        $this->formFactory = $formFactory;
        $this->easyAdminConfig = $easyAdminConfig;
    }

    public function generateFilterForm(string $entityName)
    {
        dump(func_get_args());
        die;
    }
}
