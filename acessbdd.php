<?php

function seConnecter(){
            $serveur='mysql:host=localhost';
            $bdd='dbname=bdtandreozzi6';   		
            $user='sqltandreozzi' ;    		
            $mdp='savary' ;
            try
                {
                $pdo = new PDO($serveur.';'.$bdd, $user, $mdp); 
		}
            catch (PDOException $e)
                {
                        echo('Erreur : ' . $e->getMessage());
                }
             return $pdo;
        };

        function updateClient($pdo,$id,$nom,$prenom,$email,$tel,$rue,$CP,$ville){
            $req = "updateClient set nom='$nom', prenom='$prenom', email='$email', tel='$tel', rue='$rue', cp='$CP', ville='$ville', idCategorie='$cat' where id='$id'";
            echo $req;
            $pdo->exec($req);
          }
