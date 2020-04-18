<?php
namespace Test;

use App\src\Contact;
use PHPUnit\Framework\TestCase;

class ContactTest extends TestCase
{

        private $contact;

        public function setUp(): void
        {
            $this->contact = new Contact();
            $this->contact->setFirstname('testfirstname');
            $this->contact->setLastname('testlastname');
            $this->contact->setEmail('test@gmail.com');
            $this->contact->setPhoneNumber('0642587434');
        }

        public function testIsValidContactOK()
        {
            $this->contact->isValid();
            $this->assertTrue(true);
        }

        public function isPhoneNumberValidOK()
        {
            $this->contact->isPhoneNumberValid();
            $this->assertTrue(true);
        }

        public function testIsValidContactKO()
        {
            $this->contact->setPhoneNumber('definitely not a phone number');
            $this->contact->isValid();
            $this->assertTrue(false);
        }
        public function isPhoneNumberValidKO()
        {
            $this->contact->isPhoneNumberValid();
            $this->assertTrue(false);
        }

        public function testIsFirstnameEmpty()
        {
            $this->contact->setFirstname('');
            $this->contact->isFirstnameValid();
            $this->assertTrue(false);
        }

        public function testIsLastnameEmpty()
        {
            $this->contact->setLastname('');
            $this->contact->isLastnameValid();
            $this->assertTrue(false);
        }

        public function testIsEmailValid()
        {
            $this->contact->isEmailValid();
            $this->assertTrue(true);
        }

        public function testIsEmailEmpty()
        {
            $this->contact->setEmail('');
            $this->contact->isEmailEmpty();
            $this->assertTrue(true);
        }

        public function testIsPhoneNumberEmpty()
        {
            $this->contact->setPhoneNumber('');
            $this->contact->isPhoneNumberEmpty();
            $this->assertTrue(true);
        }
}