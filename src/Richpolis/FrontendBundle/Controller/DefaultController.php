<?php

namespace Richpolis\FrontendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Richpolis\BackendBundle\Entity\Contacto;
use Richpolis\BackendBundle\Form\ContactoType;
use Richpolis\PublicacionesBundle\Entity\CategoriasPublicacion;
use Richpolis\CategoriasGaleriaBundle\Entity\Categorias;

/**
 * Frontend controller.
 *
 * @Route("/")
 */
class DefaultController extends Controller {
    
    /**
     * Lists all Frontend entities.
     *
     * @Route("/{_locale}/inicio", name="homepage",defaults={"_locale" = "en"}, requirements={"_locale" = "en|es"})
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();
       
        $galerias = $em->getRepository('CategoriasGaleriaBundle:Galerias')
                       ->getGaleriaPorTipoCategoria(Categorias::$GALERIA_PRINCIPAL);
        
        $paginaInicial = $em->getRepository('PublicacionesBundle:Publicacion')->findOneBySlug('from-the-blog');

        return $this->render("FrontendBundle:Default:index.html.twig",array(
          "galerias"=>$galerias,
          "paginaInicial"=>$paginaInicial,
        ));

    }
    
    /**
     * Pantalla de splash.
     * @Route("/{_locale}/", name="splash", defaults={"_locale" = "en"}, requirements={"_locale" = "en|es"})
     * @Route("/")
     * @Template("FrontendBundle:Default:pagina1.html.twig")
     */
    public function splashAction()
    {
        return array();
    }
    
    /**
     * Pantalla de about_la_nina.
     * @Route("/{_locale}/about", name="about_la_nina", defaults={"_locale" = "en"}, requirements={"_locale" = "en|es"})
     * @Route("/about")
     */
    public function aboutAction()
    {
        $em = $this->getDoctrine()->getManager();
        
        $publicaciones = $em->getRepository('PublicacionesBundle:Publicacion')
                            ->getPublicacionPorTipoCategoriaActivas(CategoriasPublicacion::$ABOUT);
        
        $galerias = $em->getRepository('CategoriasGaleriaBundle:Galerias')
                            ->getGaleriaPorTipoCategoria(Categorias::$GALERIA_ABOUT);


        return $this->render("FrontendBundle:Default:about.html.twig",array(
            'publicaciones'=>$publicaciones,
            'galerias'=>$galerias,
        ));
                
    }

    /**
     * Pantalla de the_mezcal.
     *
     * @Route("/{_locale}/mezcal", name="the_mezcal", defaults={"_locale" = "en"}, requirements={"_locale" = "en|es"}))
     */
    public function mezcalAction()
    {
        return $this->redirect(
            $this->generateUrl("botella_espadin",array(
                '_locale'=>$this->getRequest()->getLocale()
            ))
        );
    }

    /**
     * Pantalla de the_mezcal - botella espadin.
     *
     * @Route("/{_locale}/mezcal/espadin", name="botella_espadin", defaults={"_locale" = "en"}, requirements={"_locale" = "en|es"})
     * @Route("/mezcal/espadin")
     */
    public function espadinAction()
    {
        $em = $this->getDoctrine()->getManager();

        $botella = $em->getRepository('FrontendBundle:Botellas')
                      ->getBotellaYMensajesPorSlug('espadin');
            
        $galerias = $em->getRepository('CategoriasGaleriaBundle:Galerias')
                       ->getGaleriaPorCategoriaSlug('espadin');

        return $this->render("FrontendBundle:Default:botella.html.twig",array(
            "pagina_actual"=>"botella_espadin",
            "app_angular"=>"js/app/espadin.js",
            "botella_anterior"=>"botella_primario",
            "botella_siguiente"=>"botella_primario",
            'botella'=>$botella,
            'galerias'=>$galerias
        ));
        
    }

    /**
     * Pantalla de the_mezcal - botella primario.
     *
     * @Route("/{_locale}/mezcal/primario", name="botella_primario", defaults={"_locale" = "en"}, requirements={"_locale" = "en|es"})
     * @Route("/mezcal/primario")
     * @Template("FrontendBundle:Default:botella.html.twig")
     */
    public function primarioAction()
    {
        $em = $this->getDoctrine()->getManager();
       
        $botella = $em->getRepository('FrontendBundle:Botellas')
                      ->getBotellaYMensajesPorSlug('primario-mezcal');
            
        $galerias = $em->getRepository('CategoriasGaleriaBundle:Galerias')
                       ->getGaleriaPorCategoriaSlug('primario-mezcal-joven');
        
        return $this->render("FrontendBundle:Default:botella.html.twig",array(
            "pagina_actual"=>"botella_primario",
            "app_angular"=>"js/app/primario.js",
            "botella_anterior"=>"botella_espadin",
            "botella_siguiente"=>"botella_espadin",
            'botella'=>$botella,
            'galerias'=>$galerias
        ));
    }


         
    /**
     * Pantalla de find_la_nina.
     *
     * @Route("/{_locale}/find", name="find_la_nina", defaults={"_locale" = "en"}, requirements={"_locale" = "en|es"})
     * @Route("/find")
     */
    public function findAction()
    {
        $em = $this->getDoctrine()->getManager();
      
        $categoriasPublicacion=$em->getRepository('PublicacionesBundle:CategoriasPublicacion')
                                  ->getCategoriasPorTipoYActivas(CategoriasPublicacion::$DISTRIBUIDORES);
        
        $galerias = $em->getRepository('CategoriasGaleriaBundle:Categorias')
                       ->getCategoriasPorTipoYActivas(Categorias::$GALERIA_DISTRIBUIDORES);

        return $this->render("FrontendBundle:Default:find.html.twig",array(
            'categoriasPublicacion'=>$categoriasPublicacion,
            'galerias'=>$galerias
        ));
    }

    /**
     * @Route("/{_locale}/contacto", name="frontend_contacto", defaults={"_locale" = "en"}, requirements={"_locale" = "en|es"})
     * @Route("/contacto")
     * @Method({"GET", "POST"})
     */
    public function contactoAction() {
        $contacto = new Contacto();
        $form = $this->createForm(new ContactoType(), $contacto);
        $request = $this->getRequest();
        $traductor=$this->get('translator');
        
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $datos=$form->getData();
                
                
                $message = \Swift_Message::newInstance()
                        ->setSubject('Contacto desde pagina')
                        ->setFrom($datos->getEmail())
                        ->setTo($this->container->getParameter('richpolis.emails.to_email'))
                        ->setBody($this->renderView('BackendBundle:Default:contactoEmail.html.twig', array('datos' => $datos)), 'text/html');
                $this->get('mailer')->send($message);

                $this->get('session')->setFlash('noticia', $traductor->trans('Thank you for submitting your email!'));

                // Redirige - Esto es importante para prevenir que el usuario
                // reenvíe el formulario si actualiza la página
                $ok=true;
                $error=false;
                $mensaje=$traductor->trans("It has sent the message");
                $contacto = new Contacto();
                $form = $this->createForm(new ContactoType(), $contacto);
            }else{
                $ok=false;
                $error=true;
                $mensaje=$traductor->trans("The message could not be sent");
            }
        }else{
            $ok=false;
            $error=false;
            $mensaje=$traductor->trans("Access Violation");
        }
        
        $em = $this->getDoctrine()->getManager();
        $contacto = $em->getRepository('BackendBundle:Configuraciones')->findOneBySlug('contacto'); 
        return $this->render("FrontendBundle:Default:contacto.html.twig",array(
              'contacto'=>$contacto,
              'form' => $form->createView(),
              'ok'=>$ok,
              'error'=>$error,
              'mensaje'=>$mensaje,
        ));
    }
    
    /**
     * Lista los ultimos tweets.
     *
     * @Route("/last-tweets/{username}/", name="last_tweets")
     */
    public function lastTweetsAction($username, $limit = 10, $age = null)
    {
        /* @var $twitter FetcherInterface */
        $twitter = $this->get('knp_last_tweets.last_tweets_fetcher');

        try {
            $tweets = $twitter->fetch($username, $limit);
        } catch (TwitterException $e) {
            $tweets = array();
        }

        $response = $this->render('FrontendBundle:Default:lastTweets.html.twig', array(
            'username' => $username,
            'tweets'   => $tweets,
        ));

        if ($age) {
            $response->setSharedMaxAge($age);
        }

        return $response;
    }
    
    /**
     * Pie de pagina.
     *
     * @Route("/pie/pagina/", name="pie_pagina")
     */
    public function piePaginaAction(){
        $em = $this->getDoctrine()->getManager();
        $piePagina = $em->getRepository('BackendBundle:Configuraciones')->findOneBySlug('pie-pagina');
        
        return $this->render('FrontendBundle:Default:piePagina.html.twig',array(
            'piePagina'=>$piePagina,
        ));
    }
}

?>
