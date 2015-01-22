<?php
// se debe indicar en donde esta la interfaz a implementar
use Illuminate\Auth\UserInterface;
Class Usuarios extends Eloquent implements UserInterface{
 
    protected $table = 'usuarios';
    protected $fillable = array('nombre', 'correo', 'password');
 
    // este metodo se debe implementar por la interfaz
    public function getAuthIdentifier()
    {
        return $this->getKey();
    }
    
    //este metodo se debe implementar por la interfaz
    // y sirve para obtener la clave al momento de validar el inicio de sesión
    public function getAuthPassword()
    {
        return $this->password;
    }
    /**
    * Get the token value for the "remember me" session.
    *
    * @return string
    */
    public function getRememberToken()
    {
    return $this->remember_token;
    }

    /**
    * Set the token value for the "remember me" session.
    *
    * @param string $value
    * @return void
    */
    public function setRememberToken($value)
    {
    $this->remember_token = $value;
    }

    /**
    * Get the column name for the "remember me" token.
    *
    * @return string
    */
    public function getRememberTokenName()
    {
    return 'remember_token';
    }
        
    }

?>