<?php

namespace Fluxlabs\FluxIliasRestApi\Adapter\Api\OrganisationalUnitStaff;

use JsonSerializable;

class StaffIdDto implements JsonSerializable
{

    private ?string $organisational_unit_external_id;
    private ?int $organisational_unit_id;
    private ?int $organisational_unit_ref_id;
    private ?int $user_id;
    private ?string $user_import_id;


    public static function new(
        ?int $organisational_unit_id = null,
        ?string $organisational_unit_external_id = null,
        ?int $organisational_unit_ref_id = null,
        ?int $user_id = null,
        ?string $user_import_id = null
    ) : /*static*/ self
    {
        $dto = new static();

        $dto->organisational_unit_id = $organisational_unit_id;
        $dto->organisational_unit_external_id = $organisational_unit_external_id;
        $dto->organisational_unit_ref_id = $organisational_unit_ref_id;
        $dto->user_id = $user_id;
        $dto->user_import_id = $user_import_id;

        return $dto;
    }


    public function getOrganisationalUnitExternalId() : ?string
    {
        return $this->organisational_unit_external_id;
    }


    public function getOrganisationalUnitId() : ?int
    {
        return $this->organisational_unit_id;
    }


    public function getOrganisationalUnitRefId() : ?int
    {
        return $this->organisational_unit_ref_id;
    }


    public function getUserId() : ?int
    {
        return $this->user_id;
    }


    public function getUserImportId() : ?string
    {
        return $this->user_import_id;
    }


    public function jsonSerialize() : array
    {
        return get_object_vars($this);
    }
}
