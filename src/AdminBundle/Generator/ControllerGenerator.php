<?php

/*
 * This file is part of the Sonata package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 */

namespace AdminBundle\Generator;

use Symfony\Component\HttpKernel\Bundle\BundleInterface;
use AdminBundle\Generator\AbstractBcGenerator;
use Doctrine\ORM\Mapping\ClassMetadataInfo;

/**
 * @author Marek Stipek <mario.dweller@seznam.cz>
 * @author Simon Cosandey <simon.cosandey@simseo.ch>
 */
class ControllerGenerator extends AbstractBcGenerator
{
    /** @var string|null */
    private $class;

    /** @var string|null */
    private $file;

    /**
     * @param array|string $skeletonDirectory
     */
    public function __construct($skeletonDirectory)
    {
        $this->setSkeletonDirs($skeletonDirectory);
    }

    /**
     * @param BundleInterface $bundle
     * @param string $controllerClassBasename
     * @throws \RuntimeException
     */
    public function generate(BundleInterface $bundle, $controllerClassBasename, $model, $metadata)
    {
        $this->class = sprintf('%s\Controller\%s', $bundle->getNamespace(), $controllerClassBasename);
        $this->file = sprintf(
            '%s/Controller/%s.php',
            $bundle->getPath(),
            str_replace('\\', '/', $controllerClassBasename)
        );
        $parts = explode('\\', $this->class);

        if (file_exists($this->file)) {
            throw new \RuntimeException(sprintf(
                'Unable to generate the admin controller class "%s". The file "%s" already exists.',
                $this->class,
                realpath($this->file)
            ));
        }


        $this->renderFileBc('AdminController.php.twig', $this->file, array(
            'classBasename' => array_pop($parts),
            'namespace' => implode('\\', $parts),
            'routing' => strtolower($model),
            'model' => $model,
            'bundle' => $bundle->getName(),
        ));

        $dir = sprintf('%s/Resources/views/%s', $bundle->getPath(), str_replace('\\', '/', $model));

        if (!file_exists($dir)) {
            mkdir($dir, 0777);
        }

        $trans = sprintf('%s/Entity/%sTranslation.php', $bundle->getPath(), str_replace('\\', '/', $model));
        $this->renderFileBc('TransEntity.php.twig', $trans, array(
            'bundle'            => $bundle->getName(),
            'model' => $model,
        ));

        $this->generateIndexView($dir, $bundle, $model);
        $this->generateShow($dir, $bundle, $model, $this->getFieldsFromMetadata($metadata));
        $this->generateEdit($dir, $bundle, $model);
        $this->generateNew($dir, $bundle, $model);
        $this->generateRemove($dir, $bundle, $model);

    }

    protected function generateIndexView($dir, $bundle, $module)
    {
        $name = explode('Bundle', $bundle->getName());

        $this->renderFileBc('crud/views/index.html.twig.twig', $dir . '/index.html.twig', array(
            'name' => $name[0],
            'bundle' => $bundle->getName(),
            'module' => strtolower($module),
            'model' => $module,
        ));
    }


    protected function generateShow($dir, $bundle, $module, $entiy_metadata)
    {
        $this->renderFileBc('crud/views/show.html.twig.twig', $dir . '/show.html.twig', array(
            'bundle' => $bundle->getName(),
            'module' => strtolower($module),
            'fields' => $entiy_metadata,
        ));
    }


    protected function generateEdit($dir, $bundle, $module)
    {
        $name = explode('Bundle', $bundle->getName());
        $this->renderFileBc('crud/views/edit.html.twig.twig', $dir . '/edit.html.twig', array(
            'name' => $name[0],
            'bundle' => $bundle->getName(),
            'module' => strtolower($module),
        ));
    }

    protected function generateNew($dir, $bundle, $module)
    {
        $name = explode('Bundle', $bundle->getName());
        $this->renderFileBc('crud/views/new.html.twig.twig', $dir . '/new.html.twig', array(
            'name' => $name[0],
            'bundle' => $bundle->getName(),
            'module' => strtolower($module),

        ));
    }

    protected function generateRemove($dir, $bundle, $module)
    {
        $this->renderFileBc('crud/views/delete.html.twig.twig', $dir . '/delete.html.twig', array(
            'bundle' => $bundle->getName(),
            'module' => strtolower($module),
            'model' => $module,
        ));
    }


    /**
     * Returns an array of fields. Fields can be both column fields and
     * association fields.
     *
     * @param  ClassMetadataInfo $metadata
     * @return array             $fields
     */
    private function getFieldsFromMetadata($metadata)
    {
        return $metadata->fieldMappings;
    }


    /**
     * @return string|null
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @return string|null
     */
    public function getFile()
    {
        return $this->file;
    }
}
