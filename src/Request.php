<?php

namespace Translator;

use Psr\Http\Message\ServerRequestInterface;

class Request
{
    private ServerRequestInterface $factory;

    public function __construct(ServerRequestInterface $requestFactory)
    {
         $this->factory = $requestFactory;
    }

    /**
     * @return ServerRequestInterface
     */
    public function on(): ServerRequestInterface
    {
        return $this->factory;
    }

    /**
     * @return string|null
     */
    public function getAbbFromRequest(): ?string
    {
        return $this->on()->getQueryParams()['abb'];
    }

    /**
     * @return bool
     */
    public function isAjax(): bool
    {
        $request = $this->on()->getServerParams()['HTTP_X_REQUESTED_WITH'] ?? null;
        if(isset($request) && !empty($request) && strtolower($request) == 'xmlhttprequest') return true;
        return false;
    }
}
