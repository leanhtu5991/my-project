<?php
namespace App\Controller;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Psr\Log\LoggerInterface;
class TestController
{
    /**
     * @Route("/test", name="test")
     */
    public function number()
    {   
        return new Response(
            '<html><body>Hello world</body></html>'
        );
    }

}