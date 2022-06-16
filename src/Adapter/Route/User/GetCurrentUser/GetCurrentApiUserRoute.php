<?php

namespace FluxIliasRestApi\Adapter\Route\User\GetCurrentUser;

use FluxIliasRestApi\Libs\FluxIliasApi\Adapter\Api\IliasApi;
use FluxIliasRestApi\Libs\FluxIliasApi\Adapter\User\UserDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Body\JsonBodyDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Body\TextBodyDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Body\Type\LegacyDefaultBodyType;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Method\LegacyDefaultMethod;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Method\Method;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Route\Documentation\RouteDocumentationDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Route\Documentation\RouteResponseDocumentationDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Route\Route;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Server\ServerRequestDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Server\ServerResponseDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Status\LegacyDefaultStatus;

class GetCurrentApiUserRoute implements Route
{

    private function __construct(
        private readonly IliasApi $ilias_api
    ) {

    }


    public static function new(
        IliasApi $ilias_api
    ) : static {
        return new static(
            $ilias_api
        );
    }


    public function getDocumentation() : ?RouteDocumentationDto
    {
        return RouteDocumentationDto::new(
            $this->getRoute(),
            $this->getMethod(),
            "Get current user logged in api",
            null,
            null,
            null,
            null,
            [
                RouteResponseDocumentationDto::new(
                    LegacyDefaultBodyType::JSON(),
                    null,
                    UserDto::class,
                    "User"
                ),
                RouteResponseDocumentationDto::new(
                    LegacyDefaultBodyType::TEXT(),
                    LegacyDefaultStatus::_403(),
                    null,
                    "Invalid authorization"
                )
            ]
        );
    }


    public function getMethod() : Method
    {
        return LegacyDefaultMethod::GET();
    }


    public function getRoute() : string
    {
        return "/user/current/api";
    }


    public function handle(ServerRequestDto $request) : ?ServerResponseDto
    {
        $user = $this->ilias_api->getCurrentApiUser();

        if ($user !== null) {
            return ServerResponseDto::new(
                JsonBodyDto::new(
                    $user
                )
            );
        } else {
            return ServerResponseDto::new(
                TextBodyDto::new(
                    "Invalid authorization"
                ),
                LegacyDefaultStatus::_403()
            );
        }
    }
}
