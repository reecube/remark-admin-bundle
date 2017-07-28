<?php

namespace AppBundle\Admin;

use Sonata\AdminBundle\Form\FormMapper;

class FormMapperGenerator
{
    protected $formMapper;

    public function __construct(FormMapper $formMapper)
    {
        $this->formMapper = $formMapper;
    }

    public function startTab(string $name, array $options = [])
    {
        $this->formMapper->tab($name, $options);
    }

    public function endTab()
    {
        $this->formMapper->end();
    }

    public function startGroup(string $name, array $options = [])
    {
        $this->formMapper->with($name, $options);
    }

    public function endGroup()
    {
        $this->formMapper->end();
    }

    public function addField(string $name, string $type = null, array $options = [], array $fieldDescriptionOptions = [])
    {
        $this->formMapper->add($name, $type, $options, $fieldDescriptionOptions);
    }
}
