<?php


class Usuario
{
    const URL_COMPLETA = "http://Localhost";
public $email ;
public $password;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }



}
// invocada directamente a un  objeto
Usuario::URL_COMPLETA;
$usuario = new Usuario();
// acceder a constantes
echo $usuario::URL_COMPLETA;