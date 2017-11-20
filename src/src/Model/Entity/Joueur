<?php

class Joueur
{
    private $jeton;
    private $pseudo;
    private $mdp;
    private $manche;
    private $cartes;

//GETS
    public function getJeton(){
        return $jeton;
    }

    public function getPseudo(){
        return $pseudo;
    }

    public function getMdp(){
        return $mdp;
    }

    public function getManche(){
        return $manche;
    }

    public function getCartes(){
        return $cartes;
    }

//SETS

    public function setManche($_manche){
        $manche = _manche;
    }

    public function setPseudo($_pseudo){
        $pseudo = _pseudo;
    }

    public function setMDP($_mdp){
        $mdp=_mdp;
    }

//OTHER

    public function gainJeton(){
        $jeton=$jeton+1;
    }

    public function debutPartie($_manche){
        $jeton=0;
        setManche($_manche);
        piocher();
    }

    public function piocher(){
        array_push($cartes, $manche->piocher());
    }

    public function defausser($_id) {
        if(_id<=count($cartes)-1)
        {
            $manche->defausser($cartes[$_id]);
            unset($cartes ,$_id);
            sort($_id);
        }
    }


}