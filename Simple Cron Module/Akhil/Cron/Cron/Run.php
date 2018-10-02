<?php
/**
 * Akhil Gupta
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL)
 * This is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/OSL-3.0  Open Software License (OSL)
 *
 * DISCLAIMER**
 *
 * @category   MAGENTO2 Simple CRON MODULE
 * @package    MAGENTO2 Simple CRON MODULE
 * @url       https://www.youtube.com/user/thisisakhilgupta/
 * @author    Akhil Gupta
 */
    namespace Akhil\Cron\Cron;
    use \Psr\Log\LoggerInterface;


    class Run
    {
        protected $logger;


//        public function __construct(LoggerInterface $logger)
    public function __construct(\Akhil\Customlog\Logger\Customlogger $logger)

        {
            $this->logger = $logger;
        }

        public function execute()
        {
            $this->logger->info('Cron Works');
        }

    }
