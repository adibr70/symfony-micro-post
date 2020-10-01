<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Twig\Environment;


/**
 * @Route("/blog")
 */
class BlogController extends AbstractController{
    //put your code here
    
    
    /** 
     * @var Environment
     */
    private $twig;
    
    /**
     * @var SessionInterface
     */
    private $session;
    
    /**
     * @var RouterInterface
     */
    private $router;
    
    /**
     * @param Environment $twig
     * @param SessionInterface $session
     * @param RouterInterface $router 
     */

    public function __construct(
            Environment $twig, 
            SessionInterface $session,
            RouterInterface $router
            ) {
        
        $this->twig = $twig;
        $this->session = $session;
        $this->router = $router;
    }
    
    /**
     * @Route("/", name="blog-index")
     */
    public function index() {
 
        $html = $this->twig->render(
                    'blog/index.html.twig',
                    [
                        'posts' => $this->session->get('posts')
                    ]
                );
        
        return new Response($html);
        
    }
        
    /**
     * @Route("/add", name="blog-add")
     */
    public function add() {
 
        $posts = $this->session->get('posts');
        $posts[uniqid()] = [
            'title' => 'A random title ' . rand(1, 500),
            'text' => 'Some random text nr ' . rand(1, 500),
            'date' => new \DateTime()
        ];
        $this->session->set('posts', $posts);
        
        return new RedirectResponse($this->router->generate('blog-index'));
    }
        
    /**
     * @Route("/show/{id}", name="blog-show")
     */
    public function show($id) {
 
        $posts = $this->session->get('posts');

        if(!$posts || !isset($posts[$id])) {
            throw new NotFoundHttpException('Post not found!');
        }
        
        $html = $this->twig->render(
                    'blog/post.html.twig',
                    [
                        'id' => $id,
                        'post' => $posts[$id]
                    ]
                );
        return new Response($html);        
        
    }
    
}
