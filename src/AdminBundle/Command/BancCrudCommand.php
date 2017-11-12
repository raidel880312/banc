<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AdminBundle\Command;

use AdminBundle\Generator\ControllerGenerator;
use Doctrine\ORM\Mapping\ClassMetadataInfo;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\HttpKernel\KernelInterface;
use Doctrine\Bundle\DoctrineBundle\Command\DoctrineCommand;
use Doctrine\Bundle\DoctrineBundle\Mapping\ClassMetadataCollection;

/**
 * Load data fixtures from bundles.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Jonathan H. Wage <jonwage@gmail.com>
 */
class BancCrudCommand extends DoctrineCommand
{

    protected function configure()
    {
        $this
            ->setName('banc:generate:crud')
            ->addArgument('model', InputArgument::REQUIRED, 'Entity name')
            ->addOption('bundle', 'b', InputOption::VALUE_REQUIRED, 'Bundle name')
            ->setDescription('Generate crud entity.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $skeletonDirectory = __DIR__ . '/../Resources/skeleton';
        $controllerGenerator = new ControllerGenerator($skeletonDirectory);
        $controllerClassBasename = $input->getArgument('model') . 'Controller';
        $bundle = $this->getBundle($input->getOption('bundle'));
        $entity = $input->getArgument('model');
        $entityClass = $this->getContainer()->get('doctrine')->getAliasNamespace($input->getOption('bundle')) . '\\' . $entity;


        $command = $this->getApplication()->find('doctrine:generate:form');
        $arguments = array(
            'command' => 'doctrine:generate:form',
            'entity' => $input->getOption('bundle') . ':' . $entity,
        );
        $input2 = new ArrayInput($arguments);
        $command->run($input2, $output);
        $metadata = $this->getEntityMetadata($entityClass);
        try {
            $controllerGenerator->generate($bundle, $controllerClassBasename, $input->getArgument('model'), $metadata);
            $output->writeln(sprintf(
                '%sThe controller class "<info>%s</info>" has been generated under the file "<info>%s</info>".', PHP_EOL, $controllerGenerator->getClass(), realpath($controllerGenerator->getFile())
            ));
            $output->writeln("The form type need to add these configuration params: , array('attr' => array('class' => 'form-control')");

        } catch (\Exception $e) {
            $this->writeError($output, $e->getMessage());
        }

    }


    protected function getEntityMetadata($entity)
    {
        $em = $this->getContainer()->get('doctrine')->getManager();
        $metadata = $em->getMetadataFactory()->getMetadataFor($entity);
        return $metadata;
    }

    private function writeError(OutputInterface $output, $message)
    {
        $output->writeln(sprintf("\n<error>%s</error>", $message));
    }

    private function getBundle($name)
    {
        return $this->getKernel()->getBundle($name);
    }

    /**
     * @return KernelInterface
     */
    private function getKernel()
    {
        $application = $this->getApplication();
        /* @var $application Application */

        return $application->getKernel();
    }

}
