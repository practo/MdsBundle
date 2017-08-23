<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Practo\MDS\Model\DrugProductClient;
use Practo\MDS\Model\DrugProductSearchRequest

class TestCommand extends ContainerAwareCommand
{
    /**
     * Initialize Service.
     *
     * @param InputInterface  $input  - Input
     * @param OutputInterface $output - Output
     */
    protected function initialize(InputInterface $input, OutputInterface $output)
    {
        parent::initialize($input, $output);
        $this->client = $this->getContainer()->get('practo_mds.drug_product');
    }

    /**
     * Configure the task with options and arguments.
     */
    protected function configure()
    {
        $this->setName('test:sdk:rest')
            ->setDescription('sdk sample command with client usage samples')
    }

    /**
     * Command executes logic.
     *
     * @param InputInterface  $input  - InputInterface
     * @param OutputInterface $output - OutputInterface
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {         
        $searchReq = new DrugProductSearchRequest();
        $searchReq->setQ('PARACETAMOL');
        $drugProduct = $this->client->search(searchReq);
        print_r($drugProduct);die;
    }

    
}