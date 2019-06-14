<?php
/**
 * @author Pavel Usachev <webcodekeeper@hotmail.com>
 * @copyright Copyright (c) 2019, Pavel Usachev
 */
namespace ALevel\Plugins\Console\Command;

use Psr\Log\LoggerInterface;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class PluginTestCommand
 * @package ALevel\Plugins\Console\Command
 */
class PluginTestCommand extends Command
{
    /** @var string  */
    const COMMAND_NAME = 'alevel:plugins:run';

    /** @var LoggerInterface  */
    private $logger;

    /**
     * PluginTestCommand constructor.
     * @param LoggerInterface $logger
     * @param null $name
     */
    public function __construct(
        LoggerInterface $logger,
        $name = null
    ) {
        $this->logger = $logger;
        parent::__construct($name);
    }

    /** {@inheritDoc} */
    protected function configure()
    {
        $this->setName(self::COMMAND_NAME)
             ->setDescription('This command demonstrate how plugins works');
    }

    /** {@inheritDoc} */
    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln(sprintf("<error>The base %s was called</error>", __METHOD__));
    }
}
