<?php

$file = "../files/file.xml";

$xmlFile = new DOMDocument('1.0', 'utf-8');
$xmlFile->appendChild($root = $xmlFile->createElement('root'));

$root->appendChild($textes = $xmlFile->createElement('textes'));
$textes->appendChild($xmlFile->createElement('texte_1', $_POST['text_1']));
$textes->appendChild($xmlFile->createElement('texte_2', $_POST['text_2']));
$textes->appendChild($xmlFile->createElement('texte_3', $_POST['text_3']));

$xmlFile->formatOutput = true;

$xmlFile->save($file);

header('Location: ../pages/download.php');
exit();
?>