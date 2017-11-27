<?php
//	src/Model/Table/JoueursTable.php
namespace App\Model\Table;

// add this use statement right below the namespace declaration to import
// the Validator class
use Cake\Validation\Validator;
use Cake\ORM\Table;

class JoueursTable extends Table
{
	public function initialize(array $config)
	{

	}

	// Add the following method.
	public function validationDefault(Validator $validator)
	{
		$validator
			->notEmpty('pseudo')
			->notEmpty('motdepasse');

		return $validator;
	}
}
?>