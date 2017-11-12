<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/admin/account')) {
            // transfer_account_index
            if (rtrim($pathinfo, '/') === '/admin/account') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'transfer_account_index');
                }

                return array (  '_controller' => 'TransferBundle\\Controller\\AccountController::indexAction',  '_route' => 'transfer_account_index',);
            }

            // transfer_account_list
            if ($pathinfo === '/admin/account/list') {
                return array (  '_controller' => 'TransferBundle\\Controller\\AccountController::listAction',  '_route' => 'transfer_account_list',);
            }

            // transfer_account_show
            if (preg_match('#^/admin/account/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'transfer_account_show')), array (  '_controller' => 'TransferBundle\\Controller\\AccountController::showAction',));
            }

            // transfer_account_new
            if ($pathinfo === '/admin/account/new') {
                return array (  '_controller' => 'TransferBundle\\Controller\\AccountController::newAction',  '_route' => 'transfer_account_new',);
            }

            // transfer_account_create
            if ($pathinfo === '/admin/account/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_transfer_account_create;
                }

                return array (  '_controller' => 'TransferBundle\\Controller\\AccountController::createAction',  '_route' => 'transfer_account_create',);
            }
            not_transfer_account_create:

            // transfer_account_edit
            if (preg_match('#^/admin/account/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'transfer_account_edit')), array (  '_controller' => 'TransferBundle\\Controller\\AccountController::editAction',));
            }

            // transfer_account_update
            if (preg_match('#^/admin/account/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_transfer_account_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'transfer_account_update')), array (  '_controller' => 'TransferBundle\\Controller\\AccountController::updateAction',));
            }
            not_transfer_account_update:

            // transfer_account_delete
            if (preg_match('#^/admin/account/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_transfer_account_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'transfer_account_delete')), array (  '_controller' => 'TransferBundle\\Controller\\AccountController::deleteAction',));
            }
            not_transfer_account_delete:

            if (0 === strpos($pathinfo, '/admin/accounttype')) {
                // transfer_accounttype_index
                if (rtrim($pathinfo, '/') === '/admin/accounttype') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'transfer_accounttype_index');
                    }

                    return array (  '_controller' => 'TransferBundle\\Controller\\AccountTypeController::indexAction',  '_route' => 'transfer_accounttype_index',);
                }

                // transfer_accounttype_list
                if ($pathinfo === '/admin/accounttype/list') {
                    return array (  '_controller' => 'TransferBundle\\Controller\\AccountTypeController::listAction',  '_route' => 'transfer_accounttype_list',);
                }

                // transfer_accounttype_show
                if (preg_match('#^/admin/accounttype/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'transfer_accounttype_show')), array (  '_controller' => 'TransferBundle\\Controller\\AccountTypeController::showAction',));
                }

                // transfer_accounttype_new
                if ($pathinfo === '/admin/accounttype/new') {
                    return array (  '_controller' => 'TransferBundle\\Controller\\AccountTypeController::newAction',  '_route' => 'transfer_accounttype_new',);
                }

                // transfer_accounttype_create
                if ($pathinfo === '/admin/accounttype/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_transfer_accounttype_create;
                    }

                    return array (  '_controller' => 'TransferBundle\\Controller\\AccountTypeController::createAction',  '_route' => 'transfer_accounttype_create',);
                }
                not_transfer_accounttype_create:

                // transfer_accounttype_edit
                if (preg_match('#^/admin/accounttype/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'transfer_accounttype_edit')), array (  '_controller' => 'TransferBundle\\Controller\\AccountTypeController::editAction',));
                }

                // transfer_accounttype_update
                if (preg_match('#^/admin/accounttype/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_transfer_accounttype_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'transfer_accounttype_update')), array (  '_controller' => 'TransferBundle\\Controller\\AccountTypeController::updateAction',));
                }
                not_transfer_accounttype_update:

                // transfer_accounttype_delete
                if (preg_match('#^/admin/accounttype/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_transfer_accounttype_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'transfer_accounttype_delete')), array (  '_controller' => 'TransferBundle\\Controller\\AccountTypeController::deleteAction',));
                }
                not_transfer_accounttype_delete:

            }

        }

        // transfer_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'transfer_default_index')), array (  '_controller' => 'TransferBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/transfer')) {
                // transfer_transfer_index
                if ($pathinfo === '/admin/transfer/index') {
                    return array (  '_controller' => 'TransferBundle\\Controller\\TransferController::indexAction',  '_route' => 'transfer_transfer_index',);
                }

                // transfer_transfer_list
                if ($pathinfo === '/admin/transfer/list') {
                    return array (  '_controller' => 'TransferBundle\\Controller\\TransferController::listAction',  '_route' => 'transfer_transfer_list',);
                }

                // transfer_transfer_show
                if (preg_match('#^/admin/transfer/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'transfer_transfer_show')), array (  '_controller' => 'TransferBundle\\Controller\\TransferController::showAction',));
                }

                // transfer_transfer_new
                if ($pathinfo === '/admin/transfer/new') {
                    return array (  '_controller' => 'TransferBundle\\Controller\\TransferController::newAction',  '_route' => 'transfer_transfer_new',);
                }

                // transfer_transfer_create
                if ($pathinfo === '/admin/transfer/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_transfer_transfer_create;
                    }

                    return array (  '_controller' => 'TransferBundle\\Controller\\TransferController::createAction',  '_route' => 'transfer_transfer_create',);
                }
                not_transfer_transfer_create:

                // transfer_transfer_edit
                if (preg_match('#^/admin/transfer/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'transfer_transfer_edit')), array (  '_controller' => 'TransferBundle\\Controller\\TransferController::editAction',));
                }

                // transfer_transfer_update
                if (preg_match('#^/admin/transfer/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_transfer_transfer_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'transfer_transfer_update')), array (  '_controller' => 'TransferBundle\\Controller\\TransferController::updateAction',));
                }
                not_transfer_transfer_update:

                // transfer_transfer_delete
                if (preg_match('#^/admin/transfer/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_transfer_transfer_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'transfer_transfer_delete')), array (  '_controller' => 'TransferBundle\\Controller\\TransferController::deleteAction',));
                }
                not_transfer_transfer_delete:

            }

            // admin_default_index
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_default_index');
                }

                return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::indexAction',  '_route' => 'admin_default_index',);
            }

            if (0 === strpos($pathinfo, '/admin/da')) {
                // admin_default_dashboard
                if ($pathinfo === '/admin/dashboard') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::dashboardAction',  '_route' => 'admin_default_dashboard',);
                }

                // admin_default_grid
                if ($pathinfo === '/admin/data-grid') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\DefaultController::gridAction',  '_route' => 'admin_default_grid',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/user/profile')) {
                // admin_profile_index
                if (preg_match('#^/admin/user/profile/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_profile_index')), array (  '_controller' => 'AdminBundle\\Controller\\ProfileController::indexAction',));
                }

                // admin_profile_edit
                if (preg_match('#^/admin/user/profile/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_profile_edit')), array (  '_controller' => 'AdminBundle\\Controller\\ProfileController::editAction',));
                }

                // admin_profile_editprofile
                if (preg_match('#^/admin/user/profile/(?P<id>[^/]++)/edit/profile$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_profile_editprofile')), array (  '_controller' => 'AdminBundle\\Controller\\ProfileController::editProfileAction',));
                }

                // admin_profile_update
                if (preg_match('#^/admin/user/profile/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_profile_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_profile_update')), array (  '_controller' => 'AdminBundle\\Controller\\ProfileController::updateAction',));
                }
                not_admin_profile_update:

                // admin_profile_updateprofile
                if (preg_match('#^/admin/user/profile/(?P<id>[^/]++)/update/profile$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_profile_updateprofile;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_profile_updateprofile')), array (  '_controller' => 'AdminBundle\\Controller\\ProfileController::updateProfileAction',));
                }
                not_admin_profile_updateprofile:

                // admin_profile_setpass
                if (preg_match('#^/admin/user/profile/(?P<id>[^/]++)/set\\-password$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_profile_setpass')), array (  '_controller' => 'AdminBundle\\Controller\\ProfileController::setPassAction',));
                }

                // admin_profile_updatepass
                if (preg_match('#^/admin/user/profile/(?P<id>[^/]++)/update\\-password$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_profile_updatepass;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_profile_updatepass')), array (  'message' => 'Password updated successfully',  '_controller' => 'AdminBundle\\Controller\\ProfileController::updatePassAction',));
                }
                not_admin_profile_updatepass:

            }

            if (0 === strpos($pathinfo, '/admin/log')) {
                if (0 === strpos($pathinfo, '/admin/login')) {
                    // _login
                    if ($pathinfo === '/admin/login') {
                        return array (  '_controller' => 'AdminBundle\\Controller\\SecuredController::loginAction',  '_route' => '_login',);
                    }

                    // _security_check
                    if ($pathinfo === '/admin/login_check') {
                        return array (  '_controller' => 'AdminBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                    }

                }

                // _logout
                if ($pathinfo === '/admin/logout') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_logout',);
                }

            }

            if (0 === strpos($pathinfo, '/admin/setting')) {
                // admin_setting_index
                if (rtrim($pathinfo, '/') === '/admin/setting') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_setting_index');
                    }

                    return array (  '_controller' => 'AdminBundle\\Controller\\SettingController::indexAction',  '_route' => 'admin_setting_index',);
                }

                // admin_setting_list
                if ($pathinfo === '/admin/setting/list') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\SettingController::listAction',  '_route' => 'admin_setting_list',);
                }

                // admin_setting_show
                if (preg_match('#^/admin/setting/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_setting_show')), array (  '_controller' => 'AdminBundle\\Controller\\SettingController::showAction',));
                }

                // admin_setting_new
                if ($pathinfo === '/admin/setting/new') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\SettingController::newAction',  '_route' => 'admin_setting_new',);
                }

                // admin_setting_create
                if ($pathinfo === '/admin/setting/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_setting_create;
                    }

                    return array (  '_controller' => 'AdminBundle\\Controller\\SettingController::createAction',  '_route' => 'admin_setting_create',);
                }
                not_admin_setting_create:

                // admin_setting_edit
                if (preg_match('#^/admin/setting/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_setting_edit')), array (  '_controller' => 'AdminBundle\\Controller\\SettingController::editAction',));
                }

                // admin_setting_update
                if (preg_match('#^/admin/setting/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_setting_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_setting_update')), array (  '_controller' => 'AdminBundle\\Controller\\SettingController::updateAction',));
                }
                not_admin_setting_update:

                // admin_setting_delete
                if (preg_match('#^/admin/setting/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_setting_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_setting_delete')), array (  '_controller' => 'AdminBundle\\Controller\\SettingController::deleteAction',));
                }
                not_admin_setting_delete:

            }

            if (0 === strpos($pathinfo, '/admin/user')) {
                // admin_user_index
                if (rtrim($pathinfo, '/') === '/admin/user') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_user_index');
                    }

                    return array (  '_controller' => 'AdminBundle\\Controller\\UserController::indexAction',  '_route' => 'admin_user_index',);
                }

                // admin_user_list
                if ($pathinfo === '/admin/user/list') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\UserController::listAction',  '_route' => 'admin_user_list',);
                }

                // admin_user_show
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_show')), array (  '_controller' => 'AdminBundle\\Controller\\UserController::showAction',));
                }

                // admin_user_new
                if ($pathinfo === '/admin/user/new') {
                    return array (  '_controller' => 'AdminBundle\\Controller\\UserController::newAction',  '_route' => 'admin_user_new',);
                }

                // admin_user_create
                if ($pathinfo === '/admin/user/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_user_create;
                    }

                    return array (  '_controller' => 'AdminBundle\\Controller\\UserController::createAction',  '_route' => 'admin_user_create',);
                }
                not_admin_user_create:

                // admin_user_edit
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_edit')), array (  '_controller' => 'AdminBundle\\Controller\\UserController::editAction',));
                }

                // admin_user_profile
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/profile$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_profile')), array (  '_controller' => 'AdminBundle\\Controller\\UserController::profileAction',));
                }

                // admin_user_update
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_user_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_update')), array (  '_controller' => 'AdminBundle\\Controller\\UserController::updateAction',));
                }
                not_admin_user_update:

                // admin_user_delete
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_admin_user_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_delete')), array (  '_controller' => 'AdminBundle\\Controller\\UserController::deleteAction',));
                }
                not_admin_user_delete:

                // admin_user_setpass
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/set\\-password$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_setpass')), array (  '_controller' => 'AdminBundle\\Controller\\UserController::setPassAction',));
                }

                // admin_user_updatepass
                if (preg_match('#^/admin/user/(?P<id>[^/]++)/update\\-password$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_admin_user_updatepass;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_updatepass')), array (  'message' => 'Object updated successfully',  '_controller' => 'AdminBundle\\Controller\\UserController::updatePassAction',));
                }
                not_admin_user_updatepass:

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
