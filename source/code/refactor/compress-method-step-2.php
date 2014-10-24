<?php
$command = $fct . " -m -j " . $this->URL . "/done/" . $res . " " . $this->URL . "/done/" . $fichier;
exec($command);
plog_info('compression OK zip nom: ' . $command);