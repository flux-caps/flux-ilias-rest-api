<?php

namespace FluxIliasRestApi\Adapter\Route\User\UpdateAvatar;

use FluxIliasRestApi\Libs\FluxIliasApi\Adapter\Api\IliasApi;
use FluxIliasRestApi\Libs\FluxRestApi\Body\FormDataBodyDto;
use FluxIliasRestApi\Libs\FluxRestApi\Body\JsonBodyDto;
use FluxIliasRestApi\Libs\FluxRestApi\Body\LegacyDefaultBodyType;
use FluxIliasRestApi\Libs\FluxRestApi\Body\TextBodyDto;
use FluxIliasRestApi\Libs\FluxRestApi\Method\LegacyDefaultMethod;
use FluxIliasRestApi\Libs\FluxRestApi\Method\Method;
use FluxIliasRestApi\Libs\FluxRestApi\Request\RequestDto;
use FluxIliasRestApi\Libs\FluxRestApi\Response\ResponseDto;
use FluxIliasRestApi\Libs\FluxRestApi\Route\Route;
use FluxIliasRestApi\Libs\FluxRestApi\Status\LegacyDefaultStatus;

class UpdateAvatarByImportIdRoute implements Route
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


    public function getDocuRequestBodyTypes() : ?array
    {
        return [
            LegacyDefaultBodyType::FORM_DATA()
        ];
    }


    public function getDocuRequestQueryParams() : ?array
    {
        return null;
    }


    public function getMethod() : Method
    {
        return LegacyDefaultMethod::PUT();
    }


    public function getRoute() : string
    {
        return "/user/by-import-id/{import_id}/update/avatar";
    }


    public function handle(RequestDto $request) : ?ResponseDto
    {
        if (!($request->getParsedBody() instanceof FormDataBodyDto)) {
            return ResponseDto::new(
                TextBodyDto::new(
                    "No form data body"
                ),
                LegacyDefaultStatus::_400()
            );
        }

        $id = $this->ilias_api->updateAvatarByImportId(
            $request->getParam(
                "import_id"
            ),
            $request->getParsedBody()->getFiles()["file"]["tmp_name"] ?: null
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
                    "User not found"
                ),
                LegacyDefaultStatus::_404()
            );
        }
    }
}
