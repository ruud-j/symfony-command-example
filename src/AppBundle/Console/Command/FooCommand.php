<?php namespace AppBundle\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class FooCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('foo:bar')
            ->setDescription('Greet someone')
            ->addOption(
                'name',
                'null',
                InputArgument::OPTIONAL,
                'Who do you want to greet?'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getOption('name');
        if ($name) {
            $text = 'Hello '.$name;
        } else {
            $text = 'Hello';
        }

        $output->writeln($text);
    }
}
