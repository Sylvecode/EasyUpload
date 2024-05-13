<?php
function createZip($repositoryPath, $repositoryName, $files){
  $filesNames = array_map('basename', $files);

  $zip = new ZipArchive();
// On ouvre l’archive.
if($zip->open($repositoryPath.'/'.$repositoryName.'.zip') == TRUE)
// On crée l’archive.
if($zip->open($repositoryPath.'/'.$repositoryName.'.zip', ZipArchive::CREATE) == TRUE)
{
  // Ajout d’un fichier.
for ($i =0; $i < count($files); $i = $i +1){
  $zip->addFile($files[$i], $filesNames[$i]);
  }
   // Et on referme l'archive.
	$zip->close();
}
else
{
  echo 'Impossible d&#039;ouvrir &quot;'.$repositoryName.'.zip&quot;';
}
// Traitement des erreurs avec un switch(), par exemple.
}

?>