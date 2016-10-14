<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>

<div class="container contact">
	<h1>Contactez-moi</h1>
	<div class="row">
   	 	<form class="col s12">
      		<div class="row">
       			<div class="input-field col s6">
       				<i class="material-icons prefix">account_circle</i>	
          			<input id="first_name" type="text" class="validate">
  					<label for="first_name">Prénom</label>
        		</div>
    			<div class="input-field col s6">
          			<input id="last_name" type="text" class="validate">
          			<label for="last_name">Nom</label>
    			</div>
      		</div>
    
		    
		        <div class="input-field col s12">
		        	<i class="material-icons prefix">mail</i>
		          	<input id="email" type="email" class="validate">
		          	<label for="email" data-error="Erreur, ceci n'est pas une adresse mail valide" data-success="right">Email</label>
		        </div>
		   
		    <br />
		    <div class="input-field col s12">
		    	<i class="material-icons prefix">subject</i>
			    <select>
				    <option value="Sélectionner" disabled selected class="select">Sujet</option>
				    <option value="1">Doudou sur mesure</option>
				    <option value="2">Bijoux</option>
				    <option value="3">Conseils</option>
			    </select>
			    <!-- <label>Sujet :</label> -->
		  	</div>
		  
		  	
        	<div class="input-field col s12">
        		<i class="material-icons prefix">mode_edit</i>
		        <textarea id="textarea1" class="materialize-textarea"></textarea>
		        <label for="textarea1">Votre message :</label>
        	</div>
			
			 <div class="col s12 check">
      			<input type="checkbox" id="test5" />
     			<label for="test5">Recevoir une copie du message</label>
   			</div>
    	</form>
  	</div>
  	
  	<div class="row center">
  		<button class="btn waves-effect waves-light" type="submit" name="action">Envoyer
    	<i class="material-icons right send">send</i>
  		</button>
  	</div>
</div>

<?php include('includes/footer.php');?>