<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // acme_recommend_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_recommend_homepage')), array (  '_controller' => 'Acme\\RecommendBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/message')) {
            // message_receive
            if ($pathinfo === '/message/receive') {
                return array (  '_controller' => 'Acme\\RecommendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'message_receive',);
            }

            // message_send
            if ($pathinfo === '/message/send') {
                return array (  '_controller' => 'Acme\\RecommendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'message_send',);
            }

            // message_index
            if ($pathinfo === '/message') {
                return array (  '_controller' => 'Acme\\RecommendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'message_index',);
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // sonata_admin_redirect
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'sonata_admin_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => 'sonata_admin_dashboard',  'permanent' => 'true',  '_route' => 'sonata_admin_redirect',);
            }

            // sonata_admin_dashboard
            if ($pathinfo === '/admin/dashboard') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',  '_route' => 'sonata_admin_dashboard',);
            }

            if (0 === strpos($pathinfo, '/admin/core')) {
                // sonata_admin_retrieve_form_element
                if ($pathinfo === '/admin/core/get-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:retrieveFormFieldElementAction',  '_route' => 'sonata_admin_retrieve_form_element',);
                }

                // sonata_admin_append_form_element
                if ($pathinfo === '/admin/core/append-form-field-element') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:appendFormFieldElementAction',  '_route' => 'sonata_admin_append_form_element',);
                }

                // sonata_admin_short_object_information
                if (0 === strpos($pathinfo, '/admin/core/get-short-object-description') && preg_match('#^/admin/core/get\\-short\\-object\\-description(?:\\.(?P<_format>html|json))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'sonata_admin_short_object_information')), array (  '_controller' => 'sonata.admin.controller.admin:getShortObjectDescriptionAction',  '_format' => 'html',));
                }

                // sonata_admin_set_object_field_value
                if ($pathinfo === '/admin/core/set-object-field-value') {
                    return array (  '_controller' => 'sonata.admin.controller.admin:setObjectFieldValueAction',  '_route' => 'sonata_admin_set_object_field_value',);
                }

            }

            // sonata_admin_search
            if ($pathinfo === '/admin/search') {
                return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::searchAction',  '_route' => 'sonata_admin_search',);
            }

            if (0 === strpos($pathinfo, '/admin/acme/recommend/users')) {
                // admin_acme_recommend_users_list
                if ($pathinfo === '/admin/acme/recommend/users/list') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_acme_recommend_users_list',  '_route' => 'admin_acme_recommend_users_list',);
                }

                // admin_acme_recommend_users_create
                if ($pathinfo === '/admin/acme/recommend/users/create') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_acme_recommend_users_create',  '_route' => 'admin_acme_recommend_users_create',);
                }

                // admin_acme_recommend_users_batch
                if ($pathinfo === '/admin/acme/recommend/users/batch') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_acme_recommend_users_batch',  '_route' => 'admin_acme_recommend_users_batch',);
                }

                // admin_acme_recommend_users_edit
                if (preg_match('#^/admin/acme/recommend/users/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_acme_recommend_users_edit')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_acme_recommend_users_edit',));
                }

                // admin_acme_recommend_users_delete
                if (preg_match('#^/admin/acme/recommend/users/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_acme_recommend_users_delete')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_acme_recommend_users_delete',));
                }

                // admin_acme_recommend_users_show
                if (preg_match('#^/admin/acme/recommend/users/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_acme_recommend_users_show')), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_acme_recommend_users_show',));
                }

                // admin_acme_recommend_users_export
                if ($pathinfo === '/admin/acme/recommend/users/export') {
                    return array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::exportAction',  '_sonata_admin' => 'sonata.admin.post',  '_sonata_name' => 'admin_acme_recommend_users_export',  '_route' => 'admin_acme_recommend_users_export',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
