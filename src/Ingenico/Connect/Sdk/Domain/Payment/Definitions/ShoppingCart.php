<?php
/*
 * This class was auto-generated from the API references found at
 * https://epayments-api.developer-ingenico.com/s2sapi/v1/
 */
namespace Ingenico\Connect\Sdk\Domain\Payment\Definitions;

use Ingenico\Connect\Sdk\DataObject;
use Ingenico\Connect\Sdk\Domain\Payment\Definitions\AmountBreakdown;
use UnexpectedValueException;

/**
 * @package Ingenico\Connect\Sdk\Domain\Payment\Definitions
 */
class ShoppingCart extends DataObject
{
    /**
     * @var AmountBreakdown[]
     */
    public $amountBreakdown = null;

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
    {
        parent::fromObject($object);
        if (property_exists($object, 'amountBreakdown')) {
            if (!is_array($object->amountBreakdown) && !is_object($object->amountBreakdown)) {
                throw new UnexpectedValueException('value \'' . print_r($object->amountBreakdown, true) . '\' is not an array or object');
            }
            $this->amountBreakdown = [];
            foreach ($object->amountBreakdown as $amountBreakdownElementObject) {
                $amountBreakdownElement = new AmountBreakdown();
                $this->amountBreakdown[] = $amountBreakdownElement->fromObject($amountBreakdownElementObject);
            }
        }
        return $this;
    }
}
