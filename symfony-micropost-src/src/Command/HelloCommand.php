<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Command;

use App\Service\Greeting;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Description of HelloCommand
 *
 * @author ionelb
 */
class HelloCommand extends Command{
    //put your code here
    
    /**
     * @var Greeting
     */
    private $greeting;
    
    public function __construct(Greeting $greeting) {
        $this->greeting = $greeting;
        parent::__construct();
    }
    
    protected function configure() {
        $this->setName('app:say-hello')
                ->setDescription('Say hello to the user')
                ->addArgument('name', InputArgument::REQUIRED);
    }
    
    protected function execute(InputInterface $input, OutputInterface $output) {
        $name = $input->getArgument('name');
        $output->writeln([
            'Hello from the app',
            '==================',
            ''
            ]);
        $output->writeln($this->greeting->greet($name));
        
        return 1;
    }
}
