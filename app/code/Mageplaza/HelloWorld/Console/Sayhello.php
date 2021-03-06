<?php


namespace Mageplaza\HelloWorld\Console;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Sayhello extends Command
{
    const NAME = 'name';

    /**
     * configure
     */
    protected function configure()
    {
        $options = [
            new InputOption(
                self::NAME,
                null,
                InputOption::VALUE_REQUIRED,
                'Name'
            )
        ];


        $this->setName('example:sayhello')
            ->setDescription('Demo command line')
            ->setDefinition($options);

        parent::configure();
    }

    /**
     * @param  InputInterface  $input
     * @param  OutputInterface  $output
     * @return $this|int
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if ($name = $input->getOption(self::NAME)) {

            $output->writeln("Hello " . $name);


        } else {

            $output->writeln("Hello World");

        }

        return $this;
    }
}
