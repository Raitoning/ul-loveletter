<?php
// src/Model/Entity/Carte.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Carte extends Entity
{
	protected $_accessible = [
	
		'*' => false,
		'id' => false,
		'url' => false,
		'effet' => false,
		'defausse' => false,
		'pioche' => false,
	];
}
?>