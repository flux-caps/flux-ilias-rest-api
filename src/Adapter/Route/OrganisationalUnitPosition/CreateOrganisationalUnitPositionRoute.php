<?php

namespace FluxIliasRestApi\Adapter\Route\OrganisationalUnitPosition;

use FluxIliasRestApi\Libs\FluxIliasApi\Adapter\Api\IliasApi;
use FluxIliasRestApi\Libs\FluxIliasApi\Libs\FluxIliasBaseApi\Adapter\OrganisationalUnitPosition\OrganisationalUnitPositionDiffDto;
use FluxIliasRestApi\Libs\FluxIliasApi\Libs\FluxIliasBaseApi\Adapter\OrganisationalUnitPosition\OrganisationalUnitPositionIdDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Body\JsonBodyDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Body\TextBodyDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Body\Type\DefaultBodyType;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Method\DefaultMethod;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Method\Method;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Route\Documentation\RouteContentTypeDocumentationDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Route\Documentation\RouteDocumentationDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Route\Documentation\RouteResponseDocumentationDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Route\Route;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Server\ServerRequestDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Server\ServerResponseDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Status\DefaultStatus;

class CreateOrganisationalUnitPositionRoute implements Route
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
            "Create organisational unit position",
            null,
            null,
            null,
            [
                RouteContentTypeDocumentationDto::new(
                    DefaultBodyType::JSON,
                    OrganisationalUnitPositionDiffDto::class,
                    "Organisational unit position difference"
                )
            ],
            [
                RouteResponseDocumentationDto::new(
                    DefaultBodyType::JSON,
                    null,
                    OrganisationalUnitPositionIdDto::class,
                    "Organisational unit position ids"
                ),
                RouteResponseDocumentationDto::new(
                    DefaultBodyType::TEXT,
                    DefaultStatus::_400,
                    null,
                    "No json body"
                )
            ]
        );
    }


    public function getMethod() : Method
    {
        return DefaultMethod::POST;
    }


    public function getRoute() : string
    {
        return "/organisational-unit-position/create";
    }


    public function handle(ServerRequestDto $request) : ?ServerResponseDto
    {
        if (!($request->parsed_body instanceof JsonBodyDto)) {
            return ServerResponseDto::new(
                TextBodyDto::new(
                    "No json body"
                ),
                DefaultStatus::_400
            );
        }

        return ServerResponseDto::new(
            JsonBodyDto::new(
                $this->ilias_api->createOrganisationalUnitPosition(
                    OrganisationalUnitPositionDiffDto::newFromObject(
                        $request->parsed_body->data
                    )
                )
            )
        );
    }
}
