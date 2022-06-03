<?php

namespace FluxIliasRestApi\Adapter\Route\OrganisationalUnitStaff\AddOrganisationalUnitStaff;

use FluxIliasRestApi\Libs\FluxIliasApi\Adapter\Api\IliasApi;
use FluxIliasRestApi\Libs\FluxIliasApi\Adapter\OrganisationalUnitStaff\OrganisationalUnitStaffDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Body\JsonBodyDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Body\TextBodyDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Body\Type\LegacyDefaultBodyType;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Method\LegacyDefaultMethod;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Method\Method;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Route\Documentation\RouteDocumentationDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Route\Documentation\RouteParamDocumentationDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Route\Documentation\RouteResponseDocumentationDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Route\Route;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Server\ServerRequestDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Server\ServerResponseDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Status\LegacyDefaultStatus;

class AddOrganisationalUnitStaffByIdByUserImportIdRoute implements Route
{

    private IliasApi $ilias_api;


    private function __construct(
        /*private readonly*/ IliasApi $ilias_api
    ) {
        $this->ilias_api = $ilias_api;
    }


    public static function new(
        IliasApi $ilias_api
    ) : /*static*/ self
    {
        return new static(
            $ilias_api
        );
    }


    public function getDocumentation() : ?RouteDocumentationDto
    {
        return RouteDocumentationDto::new(
            $this->getRoute(),
            $this->getMethod(),
            "Add organisational unit staff by organisational unit id and user import id",
            null,
            [
                RouteParamDocumentationDto::new(
                    "id",
                    "int",
                    "Organisational unit id"
                ),
                RouteParamDocumentationDto::new(
                    "user_import_id",
                    "string",
                    "User import id"
                ),
                RouteParamDocumentationDto::new(
                    "position_id",
                    "int",
                    "Organisational unit position id"
                )
            ],
            null,
            null,
            [
                RouteResponseDocumentationDto::new(
                    LegacyDefaultBodyType::JSON(),
                    null,
                    OrganisationalUnitStaffDto::class,
                    "Organisational unit staff"
                ),
                RouteResponseDocumentationDto::new(
                    LegacyDefaultBodyType::TEXT(),
                    LegacyDefaultStatus::_404(),
                    null,
                    "Organisational unit staff not found"
                )
            ]
        );
    }


    public function getMethod() : Method
    {
        return LegacyDefaultMethod::POST();
    }


    public function getRoute() : string
    {
        return "/organisational-unit/by-id/{id}/add-staff/by-import-id/{user_import_id}/{position_id}";
    }


    public function handle(ServerRequestDto $request) : ?ServerResponseDto
    {
        $id = $this->ilias_api->addOrganisationalUnitStaffByIdByUserImportId(
            $request->getParam(
                "id"
            ),
            $request->getParam(
                "user_import_id"
            ),
            $request->getParam(
                "position_id"
            )
        );

        if ($id !== null) {
            return ServerResponseDto::new(
                JsonBodyDto::new(
                    $id
                )
            );
        } else {
            return ServerResponseDto::new(
                TextBodyDto::new(
                    "Organisational unit staff not found"
                ),
                LegacyDefaultStatus::_404()
            );
        }
    }
}
