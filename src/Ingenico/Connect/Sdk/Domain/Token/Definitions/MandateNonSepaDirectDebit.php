<?php
/*
 * This class was auto-generated from the API references found at
 * https://epayments-api.developer-ingenico.com/s2sapi/v1/
 */
namespace Ingenico\Connect\Sdk\Domain\Token\Definitions;

use Ingenico\Connect\Sdk\DataObject;
use Ingenico\Connect\Sdk\Domain\Token\Definitions\TokenNonSepaDirectDebitPaymentProduct705SpecificData;
use UnexpectedValueException;

/**
 * @package Ingenico\Connect\Sdk\Domain\Token\Definitions
 */
class MandateNonSepaDirectDebit extends DataObject
{
    /**
     * @var TokenNonSepaDirectDebitPaymentProduct705SpecificData
     */
    public $paymentProduct705SpecificData = null;

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
    {
        parent::fromObject($object);
        if (property_exists($object, 'paymentProduct705SpecificData')) {
            if (!is_object($object->paymentProduct705SpecificData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct705SpecificData, true) . '\' is not an object');
            }
            $value = new TokenNonSepaDirectDebitPaymentProduct705SpecificData();
            $this->paymentProduct705SpecificData = $value->fromObject($object->paymentProduct705SpecificData);
        }
        return $this;
    }
}
