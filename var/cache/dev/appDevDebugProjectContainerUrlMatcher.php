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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // gfct_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gfct_homepage');
            }

            return array (  '_controller' => 'GFCTBundle\\Controller\\DefaultController::indexAction',  '_route' => 'gfct_homepage',);
        }

        // prueba_nombre
        if (0 === strpos($pathinfo, '/nombre') && preg_match('#^/nombre/(?P<nPila>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'prueba_nombre')), array (  '_controller' => 'GFCTBundle\\Controller\\DefaultController::nombreAction',));
        }

        if (0 === strpos($pathinfo, '/Empresa')) {
            // all_empresa
            if ($pathinfo === '/Empresa/all') {
                return array (  '_controller' => 'GFCTBundle\\Controller\\EmpresaController::allAction',  '_route' => 'all_empresa',);
            }

            // empresa_crear
            if ($pathinfo === '/Empresa/crear') {
                return array (  '_controller' => 'GFCTBundle\\Controller\\EmpresaController::crearEmpresaAction',  '_route' => 'empresa_crear',);
            }

            // nueva_empresa
            if ($pathinfo === '/Empresa/nueva') {
                return array (  '_controller' => 'GFCTBundle\\Controller\\EmpresaController::nuevaAction',  '_route' => 'nueva_empresa',);
            }

            // exito_empresa
            if ($pathinfo === '/Empresa/msgExito') {
                return array (  '_controller' => 'GFCTBundle\\Controller\\EmpresaController::msgExitoAction',  '_route' => 'exito_empresa',);
            }

        }

        // all_alumno
        if ($pathinfo === '/Alumno/all') {
            return array (  '_controller' => 'GFCTBundle\\Controller\\AlumnoController::allAction',  '_route' => 'all_alumno',);
        }

        if (0 === strpos($pathinfo, '/Profesores')) {
            // all_profesor
            if ($pathinfo === '/Profesores/all') {
                return array (  '_controller' => 'GFCTBundle\\Controller\\ProfesoresController::allAction',  '_route' => 'all_profesor',);
            }

            // exito_profesores
            if ($pathinfo === '/Profesores/msgExito') {
                return array (  '_controller' => 'GFCTBundle\\Controller\\ProfesoresController::msgExitoAction',  '_route' => 'exito_profesores',);
            }

            // nuevo_profesores
            if ($pathinfo === '/Profesores/nuevo') {
                return array (  '_controller' => 'GFCTBundle\\Controller\\ProfesoresController::nuevoAction',  '_route' => 'nuevo_profesores',);
            }

        }

        if (0 === strpos($pathinfo, '/Empresa')) {
            // api_nuevo
            if ($pathinfo === '/Empresa') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_nuevo;
                }

                return array (  '_controller' => 'GFCTBundle\\Controller\\ApiController::empresasAction',  '_route' => 'api_nuevo',);
            }
            not_api_nuevo:

            // api_examen
            if ($pathinfo === '/Empresa') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_api_examen;
                }

                return array (  '_controller' => 'GFCTBundle\\Controller\\ApiController::profesoresAction',  '_route' => 'api_examen',);
            }
            not_api_examen:

        }

        // registro
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'GFCTBundle\\Controller\\DefaultController::registerAction',  '_route' => 'registro',);
        }

        // admin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'GFCTBundle\\Controller\\DefaultController::adminAction',  '_route' => 'admin',);
        }

        if (0 === strpos($pathinfo, '/usuario')) {
            // usuarioslogin
            if ($pathinfo === '/usuarios/login') {
                return array (  '_controller' => 'GFCTBundle\\Controller\\DefaultController::loginAction',  '_route' => 'usuarioslogin',);
            }

            // usuarioPrueba
            if ($pathinfo === '/usuarioPrueba') {
                return array (  '_controller' => 'GFCTBundle\\Controller\\DefaultController::usuarioPruebaAction',  '_route' => 'usuarioPrueba',);
            }

            if (0 === strpos($pathinfo, '/usuarios')) {
                // usuarios
                if ($pathinfo === '/usuarios') {
                    return array (  '_controller' => 'GFCTBundle\\Controller\\DefaultController::usuariosAction',  '_route' => 'usuarios',);
                }

                // logout
                if ($pathinfo === '/usuarios/logout') {
                    return array('_route' => 'logout');
                }

            }

        }

        if (0 === strpos($pathinfo, '/Default')) {
            // conf
            if ($pathinfo === '/Default/conf') {
                return array (  '_controller' => 'GFCTBundle\\Controller\\DefaultController::confAction',  '_route' => 'conf',);
            }

            // nuevo_conf
            if ($pathinfo === '/Default/nuevoConf') {
                return array (  '_controller' => 'GFCTBundle\\Controller\\DefaultController::nuevoConfAction',  '_route' => 'nuevo_conf',);
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
