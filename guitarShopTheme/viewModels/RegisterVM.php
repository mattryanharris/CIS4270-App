<?php

/**
 * View model for user registration functions.
 *
 * @author jam
 * @version 201015
 */
class RegisterVM {

    public $enteredPW;
    public $enteredConfPW;
    public $registrationType;
    public $errorMsg;
    public $statusMsg;
    public $newUser;
    
    // User type constants used for switching in the controller.
    const VALID_REGISTRATION = 'valid_registration';
    const INVALID_REGISTRATION = 'invalid_registration';
    
    public function __construct() {
        $this->errorMsg = '';
        $this->statusMsg = array();
        $this->enteredPW = '';
        $this->enteredConfPW = '';
        $this->registrationType = self::INVALID_REGISTRATION;
        $this->newUser = null;
    }

    public static function getInstance() {
        $vm = new self();
        
        $varArray = array('id' => emailPost('email'),
            'lastName' => hPOST('lastName'),
            'firstName' => hPOST('firstName'),
			'phoneNumber' => hPOST('phoneNumber'));
        $vm->newUser = new User($varArray);
        $vm->enteredPW = hPOST('password');
        $vm->enteredConfPW = hPOST('confirmPassword');
        if ($vm->validateUserInput()) {
            $vm->registrationType = self::VALID_REGISTRATION;
        }
        return $vm;
    }
      
    private function validateUserInput() {
	//Initiate values
        $success = false;

	//UNIQUE
	//If the inputted Email doesn't exist then it will return a null value
	$inputEmail = emailPost('email');

	//Prepare Values
	$inputFName = hPOST('firstName');
	$inputLName = hPOST('lastName');
	$inputPhoneNumber = hPOST('phoneNumber');
	$inputPassword = hPOST('password');
	$inputConfirmPassword = hPOST('confirmPassword');
	
	//MY UNIQUE VARIABLE
	$checkSuccess = 0;
	
	//Check if Email exist
	if (hasPresence($inputEmail)){
		$checkSuccess += 1;
	} else {
		$this->errorMsg .= 'Email is in wrong format or empty! </br>';
	}

	//Checks if First Name exist
	if (hasPresence($inputFName)){
		$checkSuccess += 1;
	} else {
		$this->errorMsg .= 'First Name is empty! </br>';
	}

	//Checks if Last Name exist
	if (hasPresence($inputLName)){
		$checkSuccess += 1;
	} else {
		$this->errorMsg .= 'Last Name is empty! </br>';
	}

	//Checks if Phone Number exist
	if (hasPresence($inputPhoneNumber)){
		if (preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $inputPhoneNumber)){
			$checkSuccess += 1;
		} else {
			$this->errorMsg .= 'Phone Number does not match format! </br>';
		}
	} else {
		$this->errorMsg .= 'Phone Number is empty! </br>';
	}

	//Checks Password and Confirm Password exists
	if (hasPresence($inputPassword) && hasPresence($inputConfirmPassword)){

		//Checks if Password matches Confirm Password
		if ($inputPassword == $inputConfirmPassword) {
			$checkSuccess += 1;
		} else {
			$this->errorMsg .= 'Passwords does not match! </br>';
		}

	} else {
		$this->errorMsg .= 'Password and/or Confirm Password are empty! </br>';
	}

	//MY UNIQUE CODE TO CHECK IF ALL PASSED
	if ($checkSuccess == 5){
		$success = true;
	}

        return $success;
    }

}
