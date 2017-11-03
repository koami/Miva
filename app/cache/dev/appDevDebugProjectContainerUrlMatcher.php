<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        }

        if (0 === strpos($pathinfo, '/admin/utilisateurs')) {
            // adminUtilisateurs
            if (rtrim($pathinfo, '/') === '/admin/utilisateurs') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'adminUtilisateurs');
                }

                return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursAdminController::indexAction',  '_route' => 'adminUtilisateurs',);
            }

            // adminAdressesUtilisateurs
            if (preg_match('#^/admin/utilisateurs/(?P<id>[^/]++)/adresses$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminAdressesUtilisateurs')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursAdminController::utilisateurAction',));
            }

            // adminFacturesUtilisateurs
            if (preg_match('#^/admin/utilisateurs/(?P<id>[^/]++)/factures$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminFacturesUtilisateurs')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursAdminController::utilisateurAction',));
            }

        }

        if (0 === strpos($pathinfo, '/profile/factures')) {
            // factures
            if ($pathinfo === '/profile/factures') {
                return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursController::facturesAction',  '_route' => 'factures',);
            }

            // facturesPDF
            if (0 === strpos($pathinfo, '/profile/factures/pdf') && preg_match('#^/profile/factures/pdf/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'facturesPDF')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursController::facturesPDFAction',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/contact')) {
            // contactUs
            if (rtrim($pathinfo, '/') === '/contact') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'contactUs');
                }

                return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ContactController::contactAction',  '_route' => 'contactUs',);
            }

            // sendMail
            if ($pathinfo === '/contact/Mail_Envoye') {
                return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\ContactController::sendMailAction',  '_route' => 'sendMail',);
            }

        }

        if (0 === strpos($pathinfo, '/admin/pages')) {
            // adminPages
            if (rtrim($pathinfo, '/') === '/admin/pages') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'adminPages');
                }

                return array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::indexAction',  '_route' => 'adminPages',);
            }

            // adminPages_softdel
            if ($pathinfo === '/admin/pages/soft/del') {
                return array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::softDelAction',  '_route' => 'adminPages_softdel',);
            }

            // adminPages_restore
            if (preg_match('#^/admin/pages/(?P<id>[^/]++)/restore$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_restore')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::restoreAction',));
            }

            // adminPages_show
            if (preg_match('#^/admin/pages/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_show')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::showAction',));
            }

            // adminPages_new
            if ($pathinfo === '/admin/pages/new') {
                return array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::newAction',  '_route' => 'adminPages_new',);
            }

            // adminPages_create
            if ($pathinfo === '/admin/pages/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_adminPages_create;
                }

                return array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::createAction',  '_route' => 'adminPages_create',);
            }
            not_adminPages_create:

            // adminPages_edit
            if (preg_match('#^/admin/pages/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_edit')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::editAction',));
            }

            // adminPages_update
            if (preg_match('#^/admin/pages/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_adminPages_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_update')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::updateAction',));
            }
            not_adminPages_update:

            // adminPages_delete
            if (preg_match('#^/admin/pages/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_adminPages_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPages_delete')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesAdminController::deleteAction',));
            }
            not_adminPages_delete:

        }

        // page
        if (0 === strpos($pathinfo, '/page') && preg_match('#^/page/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'page')), array (  '_controller' => 'Pages\\PagesBundle\\Controller\\PagesController::pageAction',));
        }

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/subCategories')) {
                // adminSubCategories
                if (rtrim($pathinfo, '/') === '/admin/subCategories') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'adminSubCategories');
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\SubCategoriesAdminController::indexAction',  '_route' => 'adminSubCategories',);
                }

                // admin_subCategories_show
                if (preg_match('#^/admin/subCategories/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_subCategories_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\SubCategoriesAdminController::showAction',));
                }

                // admin_subCategories_new
                if ($pathinfo === '/admin/subCategories/new') {
                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\SubCategoriesAdminController::newAction',  '_route' => 'admin_subCategories_new',);
                }

                // admin_subCategories_create
                if ($pathinfo === '/admin/subCategories/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_subCategories_create;
                    }

                    return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\SubCategoriesAdminController::createAction',  '_route' => 'admin_subCategories_create',);
                }
                not_admin_subCategories_create:

                // admin_subCategories_edit
                if (preg_match('#^/admin/subCategories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_subCategories_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\SubCategoriesAdminController::editAction',));
                }

                // admin_subCategories_update
                if (preg_match('#^/admin/subCategories/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_subCategories_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_subCategories_update')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\SubCategoriesAdminController::updateAction',));
                }
                not_admin_subCategories_update:

                // admin_subCategories_delete
                if (preg_match('#^/admin/subCategories/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_subCategories_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_subCategories_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\SubCategoriesAdminController::deleteAction',));
                }
                not_admin_subCategories_delete:

            }

            // admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesAdminController::commandesAction',  '_route' => 'admin',);
            }

        }

        if (0 === strpos($pathinfo, '/panier')) {
            // supprimer
            if (0 === strpos($pathinfo, '/panier/supprimer') && preg_match('#^/panier/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::supprimerAction',));
            }

            // ajouter
            if (0 === strpos($pathinfo, '/panier/ajouter') && preg_match('#^/panier/ajouter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouter')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::ajouterAction',));
            }

            // panier
            if (rtrim($pathinfo, '/') === '/panier') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'panier');
                }

                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::panierAction',  '_route' => 'panier',);
            }

            // livraison
            if ($pathinfo === '/panier/livraison') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::livraisonAction',  '_route' => 'livraison',);
            }

            // validation
            if ($pathinfo === '/panier/validation') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::validationAction',  '_route' => 'validation',);
            }

            // livraisonAdresseSuppression
            if (0 === strpos($pathinfo, '/panier/livraison/adresse/suppression') && preg_match('#^/panier/livraison/adresse/suppression/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'livraisonAdresseSuppression')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::adresseSuppressionAction',));
            }

            // ajouterPanier
            if (preg_match('#^/panier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajouterPanier')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PanierController::ajouterPanierAction',));
            }

        }

        // produits
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'produits');
            }

            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::produitsAction',  '_route' => 'produits',);
        }

        // voirPlus
        if ($pathinfo === '/articles') {
            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::plusAction',  '_route' => 'voirPlus',);
        }

        // presentation
        if (0 === strpos($pathinfo, '/produit') && preg_match('#^/produit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'presentation')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::presentationAction',));
        }

        // subCategorieProduits
        if (0 === strpos($pathinfo, '/subCategorie') && preg_match('#^/subCategorie/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'subCategorieProduits')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::produitsAction',));
        }

        // articles
        if (0 === strpos($pathinfo, '/articles') && preg_match('#^/articles/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'articles')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::articlesAction',));
        }

        // rechercheProduits
        if ($pathinfo === '/recherche') {
            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsController::rechercheTraitementAction',  '_route' => 'rechercheProduits',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // ajax_star_rating_system
            if ($pathinfo === '/ajax/starrating/update/data') {
                return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\AjaxStarRatingSystemController::updateDataAction',  '_route' => 'ajax_star_rating_system',);
            }

            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/partenaires')) {
                    // adminPartenaires
                    if (rtrim($pathinfo, '/') === '/admin/partenaires') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'adminPartenaires');
                        }

                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PartenairesAdminController::indexAction',  '_route' => 'adminPartenaires',);
                    }

                    // adminPartenaires_show
                    if (preg_match('#^/admin/partenaires/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPartenaires_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PartenairesAdminController::showAction',));
                    }

                    // adminPartenaires_new
                    if ($pathinfo === '/admin/partenaires/new') {
                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PartenairesAdminController::newAction',  '_route' => 'adminPartenaires_new',);
                    }

                    // adminPartenaires_create
                    if ($pathinfo === '/admin/partenaires/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_adminPartenaires_create;
                        }

                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PartenairesAdminController::createAction',  '_route' => 'adminPartenaires_create',);
                    }
                    not_adminPartenaires_create:

                    // adminPartenaires_edit
                    if (preg_match('#^/admin/partenaires/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPartenaires_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PartenairesAdminController::editAction',));
                    }

                    // adminPartenaires_update
                    if (preg_match('#^/admin/partenaires/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_adminPartenaires_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPartenaires_update')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PartenairesAdminController::updateAction',));
                    }
                    not_adminPartenaires_update:

                    // adminPartenaires_delete
                    if (preg_match('#^/admin/partenaires/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_adminPartenaires_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminPartenaires_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\PartenairesAdminController::deleteAction',));
                    }
                    not_adminPartenaires_delete:

                }

                if (0 === strpos($pathinfo, '/admin/garanties')) {
                    // adminGaranties
                    if (rtrim($pathinfo, '/') === '/admin/garanties') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'adminGaranties');
                        }

                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\GarantiesAdminController::indexAction',  '_route' => 'adminGaranties',);
                    }

                    // adminGaranties_show
                    if (preg_match('#^/admin/garanties/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminGaranties_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\GarantiesAdminController::showAction',));
                    }

                    // adminGaranties_new
                    if ($pathinfo === '/admin/garanties/new') {
                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\GarantiesAdminController::newAction',  '_route' => 'adminGaranties_new',);
                    }

                    // adminGaranties_create
                    if ($pathinfo === '/admin/garanties/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_adminGaranties_create;
                        }

                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\GarantiesAdminController::createAction',  '_route' => 'adminGaranties_create',);
                    }
                    not_adminGaranties_create:

                    // adminGaranties_edit
                    if (preg_match('#^/admin/garanties/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminGaranties_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\GarantiesAdminController::editAction',));
                    }

                    // adminGaranties_update
                    if (preg_match('#^/admin/garanties/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_adminGaranties_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminGaranties_update')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\GarantiesAdminController::updateAction',));
                    }
                    not_adminGaranties_update:

                    // adminGaranties_delete
                    if (preg_match('#^/admin/garanties/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_adminGaranties_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminGaranties_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\GarantiesAdminController::deleteAction',));
                    }
                    not_adminGaranties_delete:

                }

                if (0 === strpos($pathinfo, '/admin/produits')) {
                    // adminProduits
                    if (rtrim($pathinfo, '/') === '/admin/produits') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'adminProduits');
                        }

                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::indexAction',  '_route' => 'adminProduits',);
                    }

                    // adminProduits_show
                    if (preg_match('#^/admin/produits/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::showAction',));
                    }

                    // adminProduits_new
                    if ($pathinfo === '/admin/produits/new') {
                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::newAction',  '_route' => 'adminProduits_new',);
                    }

                    // adminProduits_create
                    if ($pathinfo === '/admin/produits/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_adminProduits_create;
                        }

                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::createAction',  '_route' => 'adminProduits_create',);
                    }
                    not_adminProduits_create:

                    // adminProduits_edit
                    if (preg_match('#^/admin/produits/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::editAction',));
                    }

                    // adminProduits_update
                    if (preg_match('#^/admin/produits/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_adminProduits_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_update')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::updateAction',));
                    }
                    not_adminProduits_update:

                    // adminProduits_delete
                    if (preg_match('#^/admin/produits/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_adminProduits_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminProduits_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\ProduitsAdminController::deleteAction',));
                    }
                    not_adminProduits_delete:

                }

                if (0 === strpos($pathinfo, '/admin/rayon')) {
                    // adminRayon
                    if (rtrim($pathinfo, '/') === '/admin/rayon') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'adminRayon');
                        }

                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\RayonAdminController::indexAction',  '_route' => 'adminRayon',);
                    }

                    // adminRayon_show
                    if (preg_match('#^/admin/rayon/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminRayon_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\RayonAdminController::showAction',));
                    }

                    // adminRayon_new
                    if ($pathinfo === '/admin/rayon/new') {
                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\RayonAdminController::newAction',  '_route' => 'adminRayon_new',);
                    }

                    // adminRayon_create
                    if ($pathinfo === '/admin/rayon/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_adminRayon_create;
                        }

                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\RayonAdminController::createAction',  '_route' => 'adminRayon_create',);
                    }
                    not_adminRayon_create:

                    // adminRayon_edit
                    if (preg_match('#^/admin/rayon/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminRayon_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\RayonAdminController::editAction',));
                    }

                    // adminRayon_update
                    if (preg_match('#^/admin/rayon/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_adminRayon_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminRayon_update')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\RayonAdminController::updateAction',));
                    }
                    not_adminRayon_update:

                    // adminRayon_delete
                    if (preg_match('#^/admin/rayon/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_adminRayon_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminRayon_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\RayonAdminController::deleteAction',));
                    }
                    not_adminRayon_delete:

                }

                if (0 === strpos($pathinfo, '/admin/media')) {
                    // adminMedia
                    if (rtrim($pathinfo, '/') === '/admin/media') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'adminMedia');
                        }

                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\MediaAdminController::indexAction',  '_route' => 'adminMedia',);
                    }

                    // adminMedia_show
                    if (preg_match('#^/admin/media/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminMedia_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\MediaAdminController::showAction',));
                    }

                    // adminMedia_new
                    if ($pathinfo === '/admin/media/new') {
                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\MediaAdminController::newAction',  '_route' => 'adminMedia_new',);
                    }

                    // adminMedia_create
                    if ($pathinfo === '/admin/media/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_adminMedia_create;
                        }

                        return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\MediaAdminController::createAction',  '_route' => 'adminMedia_create',);
                    }
                    not_adminMedia_create:

                    // adminMedia_edit
                    if (preg_match('#^/admin/media/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminMedia_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\MediaAdminController::editAction',));
                    }

                    // adminMedia_update
                    if (preg_match('#^/admin/media/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_adminMedia_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminMedia_update')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\MediaAdminController::updateAction',));
                    }
                    not_adminMedia_update:

                    // adminMedia_delete
                    if (preg_match('#^/admin/media/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_adminMedia_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminMedia_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\MediaAdminController::deleteAction',));
                    }
                    not_adminMedia_delete:

                }

                if (0 === strpos($pathinfo, '/admin/c')) {
                    if (0 === strpos($pathinfo, '/admin/categories')) {
                        // adminCategories
                        if (rtrim($pathinfo, '/') === '/admin/categories') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'adminCategories');
                            }

                            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::indexAction',  '_route' => 'adminCategories',);
                        }

                        // adminCategories_show
                        if (preg_match('#^/admin/categories/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_show')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::showAction',));
                        }

                        // adminCategories_new
                        if ($pathinfo === '/admin/categories/new') {
                            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::newAction',  '_route' => 'adminCategories_new',);
                        }

                        // adminCategories_create
                        if ($pathinfo === '/admin/categories/create') {
                            if ($this->context->getMethod() != 'POST') {
                                $allow[] = 'POST';
                                goto not_adminCategories_create;
                            }

                            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::createAction',  '_route' => 'adminCategories_create',);
                        }
                        not_adminCategories_create:

                        // adminCategories_edit
                        if (preg_match('#^/admin/categories/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_edit')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::editAction',));
                        }

                        // adminCategories_update
                        if (preg_match('#^/admin/categories/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                                $allow = array_merge($allow, array('POST', 'PUT'));
                                goto not_adminCategories_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_update')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::updateAction',));
                        }
                        not_adminCategories_update:

                        // adminCategories_delete
                        if (preg_match('#^/admin/categories/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                                $allow = array_merge($allow, array('POST', 'DELETE'));
                                goto not_adminCategories_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminCategories_delete')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CategoriesAdminController::deleteAction',));
                        }
                        not_adminCategories_delete:

                    }

                    if (0 === strpos($pathinfo, '/admin/commandes')) {
                        // adminCommande
                        if (rtrim($pathinfo, '/') === '/admin/commandes') {
                            if (substr($pathinfo, -1) !== '/') {
                                return $this->redirect($pathinfo.'/', 'adminCommande');
                            }

                            return array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesAdminController::commandesAction',  '_route' => 'adminCommande',);
                        }

                        // adminShowFacture
                        if (0 === strpos($pathinfo, '/admin/commandes/facture') && preg_match('#^/admin/commandes/facture/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminShowFacture')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesAdminController::showFactureAction',));
                        }

                        // adminLivrer
                        if (0 === strpos($pathinfo, '/admin/commandes/livrer') && preg_match('#^/admin/commandes/livrer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'adminLivrer')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesAdminController::livrerAction',));
                        }

                    }

                }

            }

            // validationCommande
            if (0 === strpos($pathinfo, '/api/banque') && preg_match('#^/api/banque/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'validationCommande')), array (  '_controller' => 'Ecommerce\\EcommerceBundle\\Controller\\CommandesController::validationCommandeAction',));
            }

        }

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        // fos_js_routing_js
        if (0 === strpos($pathinfo, '/js/routing') && preg_match('#^/js/routing(?:\\.(?P<_format>js|json))?$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_fos_js_routing_js;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_js_routing_js')), array (  '_controller' => 'fos_js_routing.controller:indexAction',  '_format' => 'js',));
        }
        not_fos_js_routing_js:

        if (0 === strpos($pathinfo, '/_console')) {
            // console
            if ($pathinfo === '/_console') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_console;
                }

                return array (  '_controller' => 'coresphere_console.controller:consoleAction',  '_route' => 'console',);
            }
            not_console:

            // console_exec
            if (0 === strpos($pathinfo, '/_console/commands') && preg_match('#^/_console/commands(?:\\.(?P<_format>json))?$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_console_exec;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'console_exec')), array (  '_controller' => 'coresphere_console.controller:execAction',  '_format' => 'json',));
            }
            not_console_exec:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
