<?php
exec($fct . " -m -j " . $this->URL . "/done/" . $res . " " . $this->URL . "/done/" . $fichier);
plog_info('compression OK zip nom:' . $fct . " -m " . $this->URL . "/done/" . $fichier . " " . $this->URL . "/done/" . $fichier);