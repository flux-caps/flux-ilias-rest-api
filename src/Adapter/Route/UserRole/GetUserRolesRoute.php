<?php

namespace FluxIliasRestApi\Adapter\Route\UserRole;

use FluxIliasRestApi\Adapter\Api\IliasRestApi;
use FluxIliasRestApi\Libs\FluxRestApi\Body\JsonBodyDto;
use FluxIliasRestApi\Libs\FluxRestApi\Libs\FluxRestBaseApi\Method\LegacyDefaultMethod;
use FluxIliasRestApi\Libs\FluxRestApi\Libs\FluxRestBaseApi\Method\Method;
use FluxIliasRestApi\Libs\FluxRestApi\Request\RequestDto;
use FluxIliasRestApi\Libs\FluxRestApi\Response\ResponseDto;
use FluxIliasRestApi\Libs\FluxRestApi\Route\Route;

class GetUserRolesRoute implements Route
{

    private IliasRestApi $ilias_rest_api;


    private function __construct(
        /*private readonly*/ IliasRestApi $ilias_rest_api
    ) {
        $this->ilias_rest_api = $ilias_rest_api;
    }


    public static function new(
        IliasRestApi $ilias_rest_api
    ) : /*static*/ self
    {
        return new static(
            $ilias_rest_api
        );
    }


    public function getDocuRequestBodyTypes() : ?array
    {
        return null;
    }


    public function getDocuRequestQueryParams() : ?array
    {
        return [
            "role_id",
            "role_import_id",
            "role_ref_id",
            "user_id",
            "user_import_id"
        ];
    }


    public function getMethod() : Method
    {
        return LegacyDefaultMethod::GET();
    }


    public function getRoute() : string
    {
        return "/user-roles";
    }


    public function handle(RequestDto $request) : ?ResponseDto
    {
        return ResponseDto::new(
            JsonBodyDto::new(
                $this->ilias_rest_api->getUserRoles(
                    $request->getQueryParam(
                        "user_id"
                    ),
                    $request->getQueryParam(
                        "user_import_id"
                    ),
                    $request->getQueryParam(
                        "role_id"
                    ),
                    $request->getQueryParam(
                        "role_import_id"
                    )
                )
            )
        );
    }
}
