<?php
/**
 * Copyright � 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Vodapay\Vodapay\Controller\Redirect;



/**
 * Responsible for loading page content.
 *
 * This is a basic controller that only loads the corresponding layout file. It may duplicate other such
 * controllers, and thus it is considered tech debt. This code duplication will be resolved in future releases.
 */
class Success extends \Vodapay\Vodapay\Controller\AbstractVodapay
{
    /** @var \Magento\Framework\View\Result\PageFactory */
    protected $resultPageFactory;

    /**
     * execute
     * this method illustrate magento2 super power.
     */

    public function execute()
    {
        $pre = __METHOD__ . " : ";
        $this->_logger->debug($pre . 'bof');

        try
        {


            // ToDo update the order.
            $this->_redirect('checkout/onepage/success');

        }
        catch ( \Magento\Framework\Exception\LocalizedException $e )
        {
            $this->_logger->error( $pre . $e->getMessage());

            $this->messageManager->addExceptionMessage( $e, $e->getMessage() );
            $this->_redirect( 'checkout/cart' );
        }
        catch ( \Exception $e )
        {
            $this->_logger->error( $pre . $e->getMessage());
            $this->messageManager->addExceptionMessage( $e, __( 'We can\'t start Pay Now Checkout.' ) );
            $this->_redirect( 'checkout/cart' );
        }

        return '';
    }

}
