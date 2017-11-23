<?php
// src/Model/Entity/Pioche.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Pioche extends Entity
{
	protected $_accessible = [
	
		'*' => false,
		'id' => false,
		'manche' => false,
		'cartes' => false,
	];
}
?>