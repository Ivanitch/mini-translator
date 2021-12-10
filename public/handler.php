<?php

require_once __DIR__ . '/init.php';

use App\Translator;
use Translator\Request;

/**
 * @var Translator $translator
 * @var Request $request
 */

try {
    if (!$request->isAjax())
        throw new Exception('Это не AJAX запрос!');

    $abb = $request->getAbbFromRequest();
    if (!$abb)
        throw new Exception('Введите аббревиатуру!');

    $collection = $translator->getByABB($abb);
    if (!$collection)
        throw new Exception('Ничего не найдено');

    echo json_encode([
        'success' => true,
        'collection' => $collection
    ], JSON_UNESCAPED_UNICODE);

    return;

} catch (Exception $exception) {
    echo json_encode([
        'success' => false,
        'message' => $exception->getMessage()
    ]);
}
