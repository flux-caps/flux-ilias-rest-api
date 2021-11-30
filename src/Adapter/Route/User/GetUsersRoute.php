<?php

namespace FluxIliasRestApi\Adapter\Route\User;

use FluxIliasRestApi\Adapter\Api\Api;
use FluxRestApi\Body\JsonBodyDto;
use FluxRestApi\Request\RequestDto;
use FluxRestApi\Response\ResponseDto;
use FluxRestApi\Route\Route;
use FluxRestBaseApi\Method\LegacyDefaultMethod;
use FluxRestBaseApi\Method\Method;

class GetUsersRoute implements Route
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
        return [
            "access_limited_object_ids",
            "multi_fields",
            "preferences",
            "user_defined_fields"
        ];
    }


    public function getMethod() : Method
    {
        return LegacyDefaultMethod::GET();
    }


    public function getRoute() : string
    {
        return "/users";
    }


    public function handle(RequestDto $request) : ?ResponseDto
    {
        return ResponseDto::new(
            JsonBodyDto::new(
                $this->api->getUsers(
                    $request->getQueryParam(
                        "access_limited_object_ids"
                    ) === "true",
                    $request->getQueryParam(
                        "multi_fields"
                    ) === "true",
                    $request->getQueryParam(
                        "preferences"
                    ) === "true",
                    $request->getQueryParam(
                        "user_defined_fields"
                    ) === "true"
                )
            )
        );
    }
}
