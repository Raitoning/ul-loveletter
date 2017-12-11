// src/Controller/JoueursController.php

namespace App\Controller;

use App\Controller\AppController;

class JoueursController extends AppController
{

	public function initialize()
	{
		parent::initialize();

		$this->loadComponent('Paginator');
		$this->loadComponent('Flash'); // Include the FlashComponent
	}

	public function add()
	{
		$joueur = $this->Joueurs->newEntity();
		if ($this->request->is('post')) {
			$joueur = $this->Joueurs->patchEntity($joueur, $this->request->getData());

			if ($this->Joueurs->save($joueur)) {
				$this->Flash->success(__('Inscription réussie.'));
			}
			$this->Flash->error(__('Erreur lors de l\'inscription.'));
		}
		$this->set('joueur', $joueur);
	}

	public function login()
	{
		if ($this->request->is('post')) {
			$user = $this->Auth->identify();
			if ($user) {
				$this->Auth->setUser($user);
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Flash->error('Pseudo ou mot de passe invalide.');
		}
	}

	public function initialize()
	{
		parent::initialize();
		$this->Auth->allow(['logout']);
	}

	public function logout()
	{
		$this->Flash->success('Vous êtes maintenant déconnecté');
		return $this->redirect($this->Auth->logout());
	}

}