<?php
//src/Command/CreateTestCommand
namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateTestCommand extends Command
{
    protected function configure()
    {
        $this
        // the name of the command (the part after "bin/console")
        ->setName('test')

        // the short description shown while running "php bin/console list"
        ->setDescription('Creates a new test.')

        // the full command description shown when running the command with
        // the "--help" option
        ->setHelp('This command allows you to create a test...')
    ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $section = $output->section();
        $output->writeln([
            'Test',
            '============',
            '',
        ]);     
        $section->overwrite('Command 1');
        $section->overwrite('Command 2');
        $section->overwrite('Command 3');
        $section->overwrite('Command 4');

        $section->writeln('Command 1');
        $section->writeln('Command 2');
        $section->writeln('Command 3');
        $section->writeln('Command 4');
        // ...
        $section->clear(2);
       
    }
}

