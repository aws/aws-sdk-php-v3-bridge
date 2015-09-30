<?php
/**
 * This file is responsible for adding @method annotations to each client class.
 */
require __DIR__ . '/../vendor/autoload.php';

use Aws\SimpleDb\SimpleDbClient;
use Aws\ImportExport\ImportExportClient;

foreach ([SimpleDbClient::class, ImportExportClient::class] as $classToUpdate) {
    // Update the @method annotations on a client.
    $annotator = new ClientAnnotator($classToUpdate);

    if (!$annotator->updateApiMethodAnnotations()) {
        trigger_error(
            "Unable to update annotations on $classToUpdate",
            E_USER_WARNING
        );
    }
}
