<?php

namespace Hiberus\sanchez\Console;

use Hiberus\sanchez\Model\ExamenComando;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use Hiberus\sanchez\Model\ResourceModel\Extension\CollectionFactory;

class ExamenCommand extends Command
{
    const NAME='examen';

    public $collection;
    protected \Hiberus\sanchez\Model\ResourceModel\Extension\CollectionFactory $collectionFactory;

    public function __construct(
        CollectionFactory $collectionFactory,
        string $name = null
    ){
        $this->collection=$collectionFactory;
        parent::__construct($name);
    }

    public function configure(){
        $this->setName('hiberus:sanchez');
        $this->setDescription('Mostrar datos de la tabla');
        parent::configure();
    }

    protected function execute(
        InputInterface $input,
        OutputInterface $output
    ){
        $examenes=$this->collection->create();

        if(!empty($examenes)){
            $output->writeln('<info>Alumnos:</info>');
            foreach($examenes as $examen){
                $id=$examen->getIdExam();
                $firstname=$examen->getFirstname();
                $lastname=$examen->getLastname();
                $mark=$examen->getMark();
                $output->writeln('<info>'.$id.' '.$firstname.' '.$lastname.': '.$mark.'</info>');
            }
        }else{
            $output->writeln('<info>Vacio</info>');
        }


    }

}
