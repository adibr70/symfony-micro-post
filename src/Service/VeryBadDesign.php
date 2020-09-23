<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Service;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Description of VeryBadDesign
 *
 * @author ionelb
 */
class VeryBadDesign implements ContainerAwareInterface{
    //put your code here
    
    /**
     * @required
     */
    
    public function setContainer(ContainerInterface $container = null) {
        
        $container->get('app.greeting');
        
    }
        
    
}
