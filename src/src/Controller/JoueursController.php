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
}