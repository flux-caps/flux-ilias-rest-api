<?php

namespace FluxIliasRestApi\Adapter\Route\UserRole\RemoveUserRole;

use FluxIliasRestApi\Adapter\Api\Api;
use FluxRestApi\Body\JsonBodyDto;
use FluxRestApi\Body\TextBodyDto;
use FluxRestApi\Request\RequestDto;
use FluxRestApi\Response\ResponseDto;
use FluxRestApi\Route\Route;
use FluxRestBaseApi\Method\LegacyDefaultMethod;
use FluxRestBaseApi\Method\Method;
use FluxRestBaseApi\Status\LegacyDefaultStatus;

class RemoveUserRoleByIdByRoleImportIdRoute implements Route
{

    private Api $api;


    public static function new(Api $api) : /*static*/ self
    {
        $route = new static();

        $route->api = $api;

        return $route;
    }


    public function getDocuRequestBodyTypes() : ?array
    {
        return null;
    }


    public function getDocuRequestQueryParams() : ?array
    {
        return null;
    }


    public function getMethod() : Method
    {
        return LegacyDefaultMethod::DELETE();
    }


    public function getRoute() : string
    {
        return "/user/by-id/{id}/remove-role/by-import-id/{role_import_id}";
    }


    public function handle(RequestDto $request) : ?ResponseDto
    {
        $id = $this->api->removeUserRoleByIdByRoleImportId(
            $request->getParam(
                "id"
            ),
            $request->getParam(
                "role_import_id"
            )
        );

        if ($id !== null) {
            return ResponseDto::new(
                JsonBodyDto::new(
                    $id
                )
            );
        } else {
            return ResponseDto::new(
                TextBodyDto::new(
                    "User role not found"
                ),
                LegacyDefaultStatus::_404()
            );
        }
    }
}
