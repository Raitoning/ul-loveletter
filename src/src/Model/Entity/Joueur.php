<?php
// src/Model/Entity/Joueur.php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher; // Add this line

use Cake\ORM\Entity;

class Joueur extends Entity
{
	protected $_accessible = [

		'*' => false,
		'id' => false,
		'pseudo' => false,
		'mot_de_passe' => false,
		'jeton' => false,
		'manche' => false,
		'cartes' => false,
	];

	// Add this method
    protected function _setPassword($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();

            return $hasher->hash($value);
        }
    }
}
?>