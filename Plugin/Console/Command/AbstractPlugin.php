<?php
/**
 * @author Pavel Usachev <webcodekeeper@hotmail.com>
 * @copyright Copyright (c) 2019, Pavel Usachev
 */
namespace ALevel\Plugins\Plugin\Console\Command;

use Psr\Log\LoggerInterface;

use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class AbstractPlugin
 * @package ALevel\Plugins\Plugin\Console\Command
 */
abstract class AbstractPlugin
{
    /** @var LoggerInterface */
    protected $logger;

    /**
     * AbstractPlugin constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param OutputInterface $output
     * @param null            $method
     */
    protected function displayMessage(OutputInterface $output, $method = null)
    {
        $method = $method ?: __METHOD__;

        $output->writeln(
            sprintf(
                "<info>Method %s was called</info>",
                $method
            )
        );
    }

    /**
     * @return void
     */
    protected function logMessage($method = null)
    {
        $method = $method ?: __METHOD__;

        $this->logger->info(
            sprintf(
            "Method %s was called",
            $method
            )
        );
    }
}
