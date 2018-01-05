<?php

namespace Classes;

class User  extends DB
{
    private $firstName;
    private $lastName;
    private $email;
    private $id;
    private $message;

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
    public function setid($id)
    {
        $this->id = $id;
    }
    public function getid()
    {
        return $this->id;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setmessage($message)
    {
        $this->message=$message;
    }
    public function getmessage()
    {
        return $this->message;
    }

    public function insert()
    {
        $query = "insert into users(email,first_name, last_name,message) 
            values(
            '".$this->getEmail()."',
            '".$this->getFirstName()."',
            '".$this->getLastName()."',
            '".$this->getmessage()."'
            )";
        return mysqli_query($this->db, $query);
    }
    public function delete()
    {
        $query="delete from users where id=".$this->getid();
        return mysqli_query($this->db, $query);
    }
    public function getSingleUser()
    {
        $query="select * from users where id=".$this->getid();
        $result = mysqli_query($this->db, $query);
        $user = mysqli_fetch_assoc($result);
        $thisUser = new self();
        $thisUser->setid($user['id']);
        $thisUser->setFirstName($user['first_name']);
        $thisUser->setLastName($user['last_name']);
        $thisUser->setEmail($user['email']);
        $thisUser->setmessage($user['message']);
        return $thisUser;
    }
    public function update()
    {
        $query="update users set first_name='".$this->getFirstName()."',email='".$this->getemail()."',
        last_name='".$this->getlastName()."', message='".$this->getmessage()."' where id='".$this->getid()."'";
        return mysqli_query($this->db, $query);
    }
    public function getAll()
    {
        $query = 'select * from users';
        $result = mysqli_query($this->db, $query);
        $users = [];
        if (mysqli_num_rows($result) > 0) {
            while ($user = mysqli_fetch_assoc($result)) {
                $thisUser = new self();
                $thisUser->setid($user['id']);
                $thisUser->setFirstName($user['first_name']);
                $thisUser->setLastName($user['last_name']);
                $thisUser->setEmail($user['email']);
                $thisUser->setmessage($user['message']);
                $users[] = $thisUser;
            }
        }

        return $users;
    }
}
