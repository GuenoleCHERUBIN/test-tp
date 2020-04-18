<?php
namespace  App\src;

class Contact
{
    /**
     * @var string $firstname
     */
    private $firstname;

    /**
     * @var string $lastname
     */
    private $lastname;

    /**
     * @var string $phone_number
     */
    private $phone_number;

    /**
     * @var string $email
     */
    private $email;

    public function __construct(string $firstname ,string $lastname ,string $phone_number ,string $email)
    {
        $this->setFirstname($firstname);
        $this->setLastname($lastname);
        $this->setPhoneNumber($phone_number);
        $this->setEmail($email);
    }

    /**
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @param $firstname
     * @return Contact
     */
    public function setFirstname($firstname): Contact
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @param $lastname
     * @return Contact
     */
    public function setLastname($lastname): Contact
    {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phone_number;
    }

    /**
     * @param $phone_number
     * @return Contact
     */
    public function setPhoneNumber($phone_number): Contact
    {
        $this->phone_number = $phone_number;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return Contact
     */
    public function setEmail(string $email): Contact
    {
        $this->email = $email;
        return $this;
    }

    public function isFirstnameValid(): bool
    {
        if (empty($this->firstname)) {
            return false;
        }
        return true;
    }

    public function isLastnameValid(): bool
    {
        if (empty($this->lastname)) {
            return false;
        }
        return true;
    }

    public function isPhoneNumberEmpty()
    {
        if (empty($this->phone_number)) {
            return true;
        }
        return false;
    }

    public function isPhoneNumberValid(): bool
    {
        // Allow +, - and . in phone number
        $filtered_phone_number = filter_var($this->phone_number,FILTER_SANITIZE_NUMBER_INT);

        // Remove "-" from number
        $phone_to_check = str_replace("-", "", $filtered_phone_number);

        //Remove " " from number
        $phone_to_check_final = str_replace(" ", "", $phone_to_check);

        //Check the length of the number
        // This can ba customized if you want phone number from a specific country
        if (strlen($phone_to_check_final) < 10 || strlen($phone_to_check_final) > 14) {
            return false;
        } else {
            return true;
        }
    }

    public function isEmailEmpty():bool
    {
        if (empty($this->email)) {
            return true;
        }
        return false;
    }
    public function isEmailValid(): bool
    {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        return true;
    }

    public function isValid(): bool
    {
        $this->isFirstnameValid();

        $this->isLastnameValid();

        $this->isPhoneNumberValid();

        $this->isEmailValid();

        return true;
    }
}