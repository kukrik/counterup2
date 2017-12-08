<?php

/**
 * This file contains the QCounterUp Class.
 */

namespace QCubed\Plugin;

use QCubed as Q;
use QCubed\Exception\Caller;
use QCubed\Exception\InvalidCast;
use QCubed\Control\BlockControl;
use QCubed\Type;

// we need a better way of reconfiguring JS assets
if (!defined('QCUBED_COUNTERUP_ASSETS_URL')) {
    define('QCUBED_COUNTERUP_ASSETS_URL', dirname(QCUBED_BASE_URL) . '/kukrik/counterup2/assets');
}

/**
 * Class QCounterUp: For showing animated data with Counter Up
 *
 * @property integer $Delay     The delay in milliseconds per number count up.
 * @property integer $Time      The total duration of the count up animation.
 * @property integer $BeginAt   The number from which to count up.
 * @property integer $Offset    The viewport percentile from which the counter starts (by default it's 100,
 *                              meaning it's triggered at the very moment the element enters the viewport).
 * @property string $Data       For example, easy to use: $this->strCounterUp->Data = Person::countAll();
 *                              (lists the number of people or anything else you need).
 *
 * @package QCubed\Plugin
 */

class CounterUpBase extends BlockControl {

    /** @var  integer Delay */
    protected $intDelay = null;
    /** @var  integer Time */
    protected $intTime = null;
    /** @var  integer Beginat */
    protected $intBeginAt = null;
    /** @var  integer Offset */
    protected $intOffset = null;
    /** @var  string Data */
    protected $strData;


	public function __construct($objParentObject, $strControlId = null) {
		parent::__construct($objParentObject, $strControlId);
		$this->registerFiles();
	}

	protected function registerFiles() {
        $this->addJavascriptFile('//cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.0/jquery.waypoints.min.js');
        $this->addJavascriptFile(QCUBED_COUNTERUP_ASSETS_URL . "/js/jquery.counterup.min.js");
    }

    /**
     * Returns the HTML formatted string for the control
     * @return string HTML string
     */
    protected function getControlHtml() {
        $overrides = [
            'id'=>$this->getJqControlId(),
            'data-counterup-delay' =>$this->intDelay,
            'data-counterup-time'=>$this->intTime,
            'data-counterup-beginAt'=>$this->intBeginAt,
            'data-counterup-offset'=>$this->intOffset
        ];

        $strToReturn = $this->renderTag('span', $overrides, null, $this->strData);
        return $strToReturn;
    }

    public function getControlJavaScript() {
        $strJS = sprintf('$j("#%s").counterUp({delay: 10, time: 1000})', $this->getJqControlId());
        return $strJS;
    }

	public function getEndScript() {
        return  $this->getControlJavaScript() . '; ' . parent::getEndScript();
	}

    /////////////////////////
    // Public Properties: GET
    /////////////////////////
    public function __get($strName) {
        switch ($strName) {
            case "Delay": return $this->intDelay;
            case "Time": return $this->intTime;
            case "BeginAt": return $this->intBeginAt;
            case "Offset": return $this->intOffset;
            case "Data": return $this->strData;

            default:
                try {
                    return parent::__get($strName);
                } catch (Caller $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
        }
    }

    /////////////////////////
    // Public Properties: SET
    /////////////////////////
	public function __set($strName, $mixValue) {
		switch ($strName) {

            case "Delay":
                try {
                    $this->blnModified = true;
                    $this->intDelay = Type::Cast($mixValue, Type::INTEGER);
                } catch (InvalidCast $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
                break;

            case "Time":
                try {
                    $this->blnModified = true;
                    $this->intTime = Type::Cast($mixValue, Type::INTEGER);
                } catch (InvalidCast $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
                break;

            case "BeginAt":
                try {
                    $this->blnModified = true;
                    $this->intBeginAt = Type::Cast($mixValue, Type::INTEGER);
                } catch (InvalidCast $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
                break;

            case "Offset":
                try {
                    $this->blnModified = true;
                    $this->intOffset = Type::Cast($mixValue, Type::INTEGER);
                } catch (InvalidCast $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
                break;

            case "Data":
                try {
                    $this->blnModified = true;
                    $this->strData = Type::Cast($mixValue, Type::STRING);
                } catch (InvalidCast $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
                break;

            default:
                try {
                    parent::__set($strName, $mixValue);
                } catch (Caller $objExc) {
                    $objExc->IncrementOffset();
                    throw $objExc;
                }
        }
    }
}
