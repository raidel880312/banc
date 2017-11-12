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

    use AdminBundle\Entity\Comment;
    use AdminBundle\Entity\Gender;
    use AdminBundle\Entity\Publication;
    use AdminBundle\Entity\Role;
    use AdminBundle\Entity\Setting;
    use AdminBundle\Entity\State;
    use AdminBundle\Entity\User;
    use Doctrine\Bundle\DoctrineBundle\Command\DoctrineCommand;
    use Doctrine\Common\Collections\ArrayCollection;
    use Symfony\Component\Console\Input\ArrayInput;
    use Symfony\Component\Console\Input\InputInterface;
    use Symfony\Component\Console\Output\OutputInterface;
    use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;
    use TransferBundle\Entity\AccountType;

    /**
     *
     * @author
     */
    class InstallCommand extends DoctrineCommand
    {

        protected function configure()
        {
            $this
                ->setName('banc:install')
                ->setDescription('Install all site.');
        }

        protected function execute(InputInterface $input, OutputInterface $output)
        {
            $emName = 'default';
            $emServiceName = sprintf('doctrine.orm.%s_entity_manager', $emName);

            /* Step 1 */
            $command = $this->getApplication()->find('doctrine:database:create');
            $arguments = array(
                'command' => 'doctrine:database:create',
            );

            $output->writeln("Adding default database..");
            $input2 = new ArrayInput($arguments);
            $command->run($input2, $output);

            /* Step 2 */
            $output->writeln("Updating database schema..");
            $command = $this->getApplication()->find('doctrine:schema:create');
            $arguments = array(
                'command' => 'doctrine:schema:create',
            );
            $input2 = new ArrayInput($arguments);
            $command->run($input2, $output);

            /* Step 3*/
            $output->writeln("Installing default assets..");
            $command = $this->getApplication()->find('assets:install');
            $arguments = array(
                'command' => 'assets:install --symlink',
                'target' => 'web'
            );

            $input2 = new ArrayInput($arguments);
            $command->run($input2, $output);


            if (!$this->getContainer()->has($emServiceName)) {
                throw new \InvalidArgumentException(
                    sprintf(
                        'Could not find an entity manager configured with the name "%s". Check your ' .
                        'application configuration to configure your Doctrine entity managers.', $emName
                    )
                );
            }

            $em = $this->getContainer()->get($emServiceName);

            $output->writeln("Adding default ROLE_ADMIN..");

            $role = $em->getRepository('AdminBundle:Role')->findBy(array('role' => "ROLE_ADMIN"));
            if (count($role) <= 0) {
                $role = new Role();
                $role->setRole("ROLE_ADMIN");
                $role->setName("ADMIN ROOT");
                $em->persist($role);
                $em->flush();
            }
            
            //adding client role
            $role_client = new Role();
            $role_client->setRole("ROLE_CLIENT");
            $role_client->setName("CLIENT");
            $em->persist($role_client);
          
            $f = new Gender('Femenino');
            $em->persist($f);
            $m = new Gender('Masculino');
            $em->persist($m);
            
            $c = new AccountType('Credit');
            $em->persist($c);
            $d = new AccountType('Debit');
            $em->persist($d);

            $output->writeln("Adding default Administrator User..");
            $adm = $em->getRepository('AdminBundle:User')->findBy(array('username' => 'admin'));
            $gender = $em->getRepository('AdminBundle:Gender')->findOneById(2);
            $user = new User();
            if (count($adm) <= 0) {
                $user->setName('Administrator');
                $user->setEmail('administrator@banc.com');
                $user->setUsername("admin");
                $user->setPassword("admin");
                $user->setBirthday(date('d-m-Y'));
                $user->setGender($gender);
                $user->setPhones('123-456-789');
                $user->setRoles(array($role));
                $em->persist($user);
                $em->flush();
            }

            $output->writeln("Adding default settings..");
            $settings = new Setting();
            $settings->setTitle('BANC');
            $settings->setAddress('Montevideo, Uruguay');
            $settings->setPhone('123-456-7890');
            $settings->setFax('123-456-7890');
            $settings->setEmail('info@banc.com');
            $settings->setLatitude('-34.901931');
            $settings->setLongitude('-56.191496');
            $settings->setRights('Develop by BANC');
            $settings->setOffline(false);
            $settings->setMessage('Coming soon');
            $settings->setOwner('Settings');
            $em->persist($settings);
            $em->flush();

        }

        protected function setSecurePassword(&$entity)
        {
            $encoder = new MessageDigestPasswordEncoder('sha512', true, 10);
            $password = $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
            $entity->setPassword($password);
        }

    }
