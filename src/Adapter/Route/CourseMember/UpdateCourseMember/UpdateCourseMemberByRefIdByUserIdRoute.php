<?php

namespace FluxIliasRestApi\Adapter\Route\CourseMember\UpdateCourseMember;

use FluxIliasRestApi\Libs\FluxIliasApi\Adapter\Api\IliasApi;
use FluxIliasRestApi\Libs\FluxIliasApi\Libs\FluxIliasBaseApi\Adapter\CourseMember\CourseMemberDiffDto;
use FluxIliasRestApi\Libs\FluxIliasApi\Libs\FluxIliasBaseApi\Adapter\CourseMember\CourseMemberDto;
use FluxIliasRestApi\Libs\FluxIliasApi\Libs\FluxIliasBaseApi\Adapter\CourseMember\CourseMemberIdDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Body\JsonBodyDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Body\TextBodyDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Body\Type\DefaultBodyType;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Method\DefaultMethod;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Method\Method;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Route\Documentation\RouteContentTypeDocumentationDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Route\Documentation\RouteDocumentationDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Route\Documentation\RouteParamDocumentationDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Route\Documentation\RouteResponseDocumentationDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Route\Route;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Server\ServerRequestDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Server\ServerResponseDto;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Status\DefaultStatus;

class UpdateCourseMemberByRefIdByUserIdRoute implements Route
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
            "Update course member by course ref id and user id",
            null,
            [
                RouteParamDocumentationDto::new(
                    "ref_id",
                    "int",
                    "Course ref id"
                ),
                RouteParamDocumentationDto::new(
                    "user_id",
                    "int",
                    "User id"
                )
            ],
            null,
            [
                RouteContentTypeDocumentationDto::new(
                    DefaultBodyType::JSON,
                    CourseMemberDto::class,
                    "Course member"
                )
            ],
            [
                RouteResponseDocumentationDto::new(
                    DefaultBodyType::JSON,
                    null,
                    CourseMemberIdDto::class,
                    "Course member ids"
                ),
                RouteResponseDocumentationDto::new(
                    DefaultBodyType::TEXT,
                    DefaultStatus::_404,
                    null,
                    "Course member not found"
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
        return DefaultMethod::PATCH;
    }


    public function getRoute() : string
    {
        return "/course/by-ref-id/{ref_id}/update-member/by-id/{user_id}";
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

        $id = $this->ilias_api->updateCourseMemberByRefIdByUserId(
            $request->getParam(
                "ref_id"
            ),
            $request->getParam(
                "user_id"
            ),
            CourseMemberDiffDto::newFromObject(
                $request->parsed_body->data
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
                    "Course member not found"
                ),
                DefaultStatus::_404
            );
        }
    }
}
