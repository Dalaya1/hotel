
<div class="container-fluid"><!-- #wrapper -->
	<?php 
	 
     include('include/accesbdd.php');
     $bdd=seConnecter();
     $lesCategories= getLesCategories($bdd);
    
if (isset($_POST['btnSubmit']))
{
    $id=$_POST['txtId'];
    $description=$_POST['txtDescription'];
    $prix=$_POST['txtnom'];
    $image=$_POST['txtprenom'];
    $id=$_POST['txttel'];
    $id=$_POST['txtemail'];
    $id=$_POST['txtrue'];
    $id=$_POST['txtcp'];
    $id=$_POST['txtville'];
    $cat=$_POST['lstCat'];
    verifierDonneesProduit($pdo,$id,$nom,$prenom,$email,$tel,$rue,$CP,$ville);
   if (nbErreurs()==0){
  
      setProduit($bdd,$id,$description,$prix,$image,$cat);
	   echo "<h3>le produit a été enregistré</h3>";
		 
    }
}
?>
<body>
	<main class=row bg-secondary"><!-- #main content and sidebar area -->
           	<section class="col-md-4 ml-auto mr-auto" ><!-- #content -->
                    <article >
                        <h2>enregistrer un nouveau client</h2>
                       
                        <form class="form-horizontal" method='post' action='creer.php'>
                      
                            <div class="form-group">
                                <label > Nom </label>
                                <input class="form-control" type='text' name='txtDescription' />
                            </div>
                            <div class="form-group">
                                <label> Prénom </label>
                                <input class="form-control" name='txtPrénom' type='text' />
                            </div>
                            <div class="form-group">
                                <label> email </label>
                                <input class="form-control" name='txtemail' type='text'  />
                            </div>
                            
                            <div class="form-group">
                                <label>  n° Téléphone </label>
                                <input class="form-control" name='txttel' type='text'  />
                            </div>
                            
                            <div class="form-group">
                                <label> rue </label>
                                <input class="form-control" name='txtrue' type='text'  />
                            </div>
                            <div class="form-group">
                                <label> Code Postal </label>
                                <input class="form-control" name='txtcp' type='text'  />
                            </div>
                            <div class="form-group">
                                <label> Ville </label>
                                <input class="form-control" name='txtville' type='text'  />
                            </div>
                            <div class="form-group">
                                <label> categorie* </label>
                                   <select class="form-control" name='lstCat'>
                                     <?php
                                        foreach( $lesCategories as $uneCategorie) 
                                        {
                                            echo "<option value='".$uneCategorie['id']."'>".$uneCategorie['libelle']."</option>";
                                        }
                                     ?>
                                    </select>
                            </div>
                            <div class="form-group">
                                <input class="btn-primary" type='submit' value='valider' name='btnSubmit' />  
                            </div>                            
                        </form>

                    </article>
                    </section><!-- end of #content -->

	</main><!-- end of #main content and sidebar-->
	
