<?php
	class User {
		private $id;
		private $name;
		private $email;
		private $password;
		private $date;
		private $last_login;
		private $logged;
		private $blocked;
	
    /**
     * Gets the value of id.
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets the value of id.
     *
     * @param mixed $id the id
     *
     * @return self
     */
    private function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets the value of name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value of name.
     *
     * @param mixed $name the name
     *
     * @return self
     */
    private function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the value of email.
     *
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the value of email.
     *
     * @param mixed $email the email
     *
     * @return self
     */
    private function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Gets the value of password.
     *
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Sets the value of password.
     *
     * @param mixed $password the password
     *
     * @return self
     */
    private function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Gets the value of date.
     *
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the value of date.
     *
     * @param mixed $date the date
     *
     * @return self
     */
    private function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Gets the value of last_login.
     *
     * @return mixed
     */
    public function getLastLogin()
    {
        return $this->last_login;
    }

    /**
     * Sets the value of last_login.
     *
     * @param mixed $last_login the last login
     *
     * @return self
     */
    private function setLastLogin($last_login)
    {
        $this->last_login = $last_login;

        return $this;
    }

    /**
     * Gets the value of logged.
     *
     * @return mixed
     */
    public function getLogged()
    {
        return $this->logged;
    }

    /**
     * Sets the value of logged.
     *
     * @param mixed $logged the logged
     *
     * @return self
     */
    private function setLogged($logged)
    {
        $this->logged = $logged;

        return $this;
    }

    /**
     * Gets the value of blocked.
     *
     * @return mixed
     */
    public function getBlocked()
    {
        return $this->blocked;
    }

    /**
     * Sets the value of blocked.
     *
     * @param mixed $blocked the blocked
     *
     * @return self
     */
    private function setBlocked($blocked)
    {
        $this->blocked = $blocked;

        return $this;
    }
}
?>