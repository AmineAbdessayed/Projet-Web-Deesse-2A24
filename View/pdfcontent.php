<?php
include_once "$_SERVER[DOCUMENT_ROOT]/temp/Controller/ParticipsC.php";
	$Particips=new ParticipsC();
    $listeParticips=$Particips->afficherP();
    ?>
    <!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
<table class="table">
		 
			<tr>
				<th>id_p</th>
				<th>Nom_p</th>	
                <th>Prenom</th>
				<th>adresse_mail</th>
				<th>id_event</th>
             
              
                
			</tr>
			
			<?php
				foreach($listeParticips as $ParticipsC){
			?>
			<tr>
				<td><?php echo $ParticipsC['id_p']; ?></td>
				<td><?php echo $ParticipsC['Nom_p']; ?></td>
				<td><?php echo $ParticipsC['Prenom']; ?></td>
				<td><?php echo $ParticipsC['adresse_mail']; ?></td>
                <td><?php echo $ParticipsC['id_event']; ?></td>
               
              
			<td>
            <?php
                echo  '
			<button class="btn btn-info"><a href="modifierP.php?deletevar='.$ParticipsC['id_p'].'" class="text-light">Modifier </a></button>
  <button class="btn btn-danger"><a href="supprimerP.php? deletevar='.$ParticipsC['id_p'].'" class="text-light">Delete</a></button>
		</td>';
				?>
                </td>
			</tr>
            
			<?php
				}
			?>
			 
		</table>

                </body>
                </html>          