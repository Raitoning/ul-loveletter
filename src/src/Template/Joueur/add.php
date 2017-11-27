<!-- File: src/Template/Joueur/add.ctp -->

<h1>Inscription</h1>
<?php
    echo $this->Form->create($joueur);
    // Hard code the user for now.
    echo $this->Form->control('Pseudo');
    echo $this->Form->control('Mot de passe');
    echo $this->Form->button(__('Inscription'));
    echo $this->Form->end();
?>
<form method="post" action="/articles/add">