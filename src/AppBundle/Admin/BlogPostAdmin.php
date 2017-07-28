<?php

namespace AppBundle\Admin;

use AppBundle\Entity\BlogPost;
use AppBundle\Entity\Category;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class BlogPostAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $generator = new FormMapperGenerator($formMapper);

        $generator->startTab('Post');
        $generator->startGroup('Content', ['class' => 'col-md-9']);
        $generator->addField('title', 'text');
        $generator->addField('body', 'textarea');
        $generator->endGroup();

        $generator->startGroup('Meta data', ['class' => 'col-md-3']);
        $generator->addField('category', 'sonata_type_model', [
            'class' => Category::class,
            'property' => 'name',
        ]);
        $generator->endGroup();
        $generator->endTab();

        $generator->startTab('Publish Options');
        $generator->endTab();
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        // ... configure $listMapper
    }

    /**
     * @param BlogPost $object
     * @return string
     */
    public function toString($object)
    {
        return $object instanceof BlogPost
            ? $object->getTitle()
            : 'Blog Post';
    }
}
