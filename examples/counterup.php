<?php
require('qcubed.inc.php');

use QCubed\Control\FormBase as QForm;
use QCubed\Css\DisplayType;

class SampleForm extends QForm {
	protected $strCounterUp1;
	protected $strCounterUp2;
	protected $strCounterUp3;
	protected $strCounterUp4;
	protected $strCounterUp5;
	protected $strCounterUp6;
	protected $strCounterUp7;
	protected $strCounterUp8;
	protected $strCounterUp9;
	protected $strCounterUp10;
	protected $strCounterUp11;
	protected $strCounterUp12;
	protected $strCounterUp13;

	protected function formCreate() {

		/**
		 * This circular block.
		 */

		$this->strCounterUp1 = new \QCubed\Plugin\CounterUp($this);
		$this->strCounterUp1->addCssClass('counter circle');
		$this->strCounterUp1->Data = Person::countAll(); //Here is a simple example: lists the number of people

		/**
		 * This first block.
		 */

		$this->strCounterUp2 = new \QCubed\Plugin\CounterUp($this);
		$this->strCounterUp2->Data = '52,147';
		$this->strCounterUp2->DisplayStyle = DisplayType::INLINE_BLOCK;
		$this->strCounterUp2->Width = '32%';

		$this->strCounterUp3 = new \QCubed\Plugin\CounterUp($this);
		$this->strCounterUp3->Data = '1.9583';
		$this->strCounterUp3->DisplayStyle = DisplayType::INLINE_BLOCK;
		$this->strCounterUp3->Width = '32%';

		$this->strCounterUp4 = new \QCubed\Plugin\CounterUp($this);
		$this->strCounterUp4->Data = '12345';
		$this->strCounterUp4->DisplayStyle = DisplayType::INLINE_BLOCK;
		$this->strCounterUp4->Width = '32%';

		/**
		 * This second block.
		 */

		$this->strCounterUp5 = new \QCubed\Plugin\CounterUp($this);
		$this->strCounterUp5->Data = '52,147';
		$this->strCounterUp5->Time = '1000';
		$this->strCounterUp5->Delay = '25';
		$this->strCounterUp5->DisplayStyle = DisplayType::INLINE_BLOCK;
		$this->strCounterUp5->Width = '32%';

		$this->strCounterUp6 = new \QCubed\Plugin\CounterUp($this);
		$this->strCounterUp6->Data = '1.9583';
		$this->strCounterUp6->Time = '1500';
		$this->strCounterUp6->Offset = '75';
		$this->strCounterUp6->DisplayStyle = DisplayType::INLINE_BLOCK;
		$this->strCounterUp6->Width = '32%';

		$this->strCounterUp7 = new \QCubed\Plugin\CounterUp($this);
		$this->strCounterUp7->Data = '12345';
		$this->strCounterUp7->Time = '2000';
		$this->strCounterUp7->BeginAt = '3000';
		$this->strCounterUp7->DisplayStyle = DisplayType::INLINE_BLOCK;
		$this->strCounterUp7->Width = '32%';

		/**
		 * This third block.
		 */

		$this->strCounterUp8 = new \QCubed\Plugin\CounterUp($this);
		$this->strCounterUp8->Data = '43,753';
		//$this->strCounterUp8->

		$this->strCounterUp9 = new \QCubed\Plugin\CounterUp($this);
		$this->strCounterUp9->Data = '1,734,195.10';

		$this->strCounterUp10 = new \QCubed\Plugin\CounterUp($this);
		$this->strCounterUp10->Data = '849203';
		$this->strCounterUp10->DisplayStyle = DisplayType::INLINE_BLOCK;
		$this->strCounterUp10->Width = '32%';

		/**
		 * This fourth block.
		 */

		$this->strCounterUp11 = new \QCubed\Plugin\CounterUp($this);
		$this->strCounterUp11->Data = '0.8412';
		$this->strCounterUp11->DisplayStyle = DisplayType::INLINE_BLOCK;
		$this->strCounterUp11->Width = '32%';


		$this->strCounterUp12 = new \QCubed\Plugin\CounterUp($this);
		$this->strCounterUp12->Data = '5958393.10';
		$this->strCounterUp12->DisplayStyle = DisplayType::INLINE_BLOCK;
		$this->strCounterUp12->Width = '32%';


		$this->strCounterUp13 = new \QCubed\Plugin\CounterUp($this);
		$this->strCounterUp13->Data = '5,123,348';
		$this->strCounterUp13->DisplayStyle = DisplayType::INLINE_BLOCK;
		$this->strCounterUp13->Width = '32%';

		}
}

SampleForm::run('SampleForm');
