<?php
// src/Model/Entity/Manche.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Manche extends Entity
{
	protected $_accessible = [
	
		'*' => false,
		'id' => false,
		'partie' => false,
		'joueurs' => false,
		'defausse' => false,
		'pioche' => false,
	];
}
?>