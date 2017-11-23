<?php
// src/Model/Entity/Partie.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Partie extends Entity
{
	protected $_accessible = [
	
		'*' => false,
		'id' => false,
		'numero' => false,
		'gagnant' => false,
		'manches' = false,
	];
}
?>