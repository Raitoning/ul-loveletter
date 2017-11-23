<?php
// src/Model/Entity/Defausse.php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Defausse extends Entity
{
	protected $_accessible = [
	
		'*' => false,
		'id' => false,
		'manche' => false,
		'cartes' => false,
	];
}
?>