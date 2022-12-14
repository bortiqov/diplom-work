<?php


namespace rakhmatov\payment\models\paynet;

class CheckTransactionResult extends GenericResult {
    /**
     * @access public
     * @var integer
     */
    public $providerTrnId;
    /**
     * @access public
     * @var integer
     */
    public $transactionState;
    public $transactionStateErrorStatus;
    public $transactionStateErrorMsg;
}
