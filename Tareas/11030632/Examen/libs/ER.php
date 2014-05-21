<?php

class ER{

	/*function verificar_email($email){
		  if(preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9\_-])+([a-zA-Z0-9\._-]+)+$/", $email))
		  {
		  	return true;
		  }

		   return false;
	}*/

	public function valida_username($valor){
		$exp_regu ='/^[0-9a-zA-Z]+$/'; //cualquier numero o digito; 
		if (preg_match($exp_regu, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}


    public function valida_email($valor){
		$exp_reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	/*De esta forma comprobaremos:

    Contraseñas que contengan al menos una letra mayúscula.
    Contraseñas que contengan al menos una letra minúscula.
    Contraseñas que contengan al menos un número o caracter especial.
    Contraseñas cuya longitud sea como mínimo 8 caracteres.
    Contraseñas cuya longitud máxima no debe ser arbitrariamente limitada.
   */

    public function valida_password($valor){
		$exp_reg = '/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/'; 
		if (preg_match($exp_reg, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}


	public function valida_cp($valor){
		$exp_regn = '/^[0-9]{5}$/'; //valida que sean 5 digitos numericos
		if (preg_match($exp_regn, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
   
    public function valida_rfc($valor){
		$exp_regn = '/^[A-Z,Ñ,&]{3,4}[0-9]{2}[0-1][0-9][0-3][0-9][A-Z,0-9]?[A-Z,0-9]?[0-9,A-Z]$/'; 
		if (preg_match($exp_regn, $valor)) {
		     return true;
		} else { 
		     return false;
		} 
	}
	/*Persona Física
		Longitud de 13 Caracteres
		Los primeros 4 digitos deben ser letras A-Z o un &
		Los siguientes 6 deben ser digitos
		- los primeros 2 dígitos deben tener un rango entre 0 a 99 (inclusive)
		- los dígitos 3 y 4 deben tener un rango entre 1 a 12 (inclusive)
		- los dígitos 5 y 6 debeb tener un rango entre 1 y 31
		Tomando estos digitos se puede hacer una validación conviertiendo a una fecha de año-mes-dia. Esto porque un RFC AAAA880230XXX puede pasar la validación. De tal manera que si el sistema puede convertir a fecha entonces se validad que realmente es correcto los 6 digitos del RFC.

		Los últimos 3 Caracteres se conocen como Homoclave y se calcula:
    */
}

?>