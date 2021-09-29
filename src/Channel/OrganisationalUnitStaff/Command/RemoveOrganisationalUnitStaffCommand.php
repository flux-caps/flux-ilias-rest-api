<?php

namespace Fluxlabs\FluxIliasRestApi\Channel\OrganisationalUnitStaff\Command;

use Fluxlabs\FluxIliasRestApi\Adapter\Api\OrganisationalUnit\OrganisationalUnitDto;
use Fluxlabs\FluxIliasRestApi\Adapter\Api\OrganisationalUnitPosition\OrganisationalUnitPositionDto;
use Fluxlabs\FluxIliasRestApi\Adapter\Api\OrganisationalUnitStaff\StaffDto;
use Fluxlabs\FluxIliasRestApi\Adapter\Api\User\UserDto;
use Fluxlabs\FluxIliasRestApi\Channel\OrganisationalUnit\Port\OrganisationalUnitService;
use Fluxlabs\FluxIliasRestApi\Channel\OrganisationalUnitPosition\Port\OrganisationalUnitPositionService;
use Fluxlabs\FluxIliasRestApi\Channel\OrganisationalUnitStaff\OrganisationalUnitStaffQuery;
use Fluxlabs\FluxIliasRestApi\Channel\User\Port\UserService;
use ilDBInterface;

class RemoveOrganisationalUnitStaffCommand
{

    use OrganisationalUnitStaffQuery;

    private ilDBInterface $database;
    private OrganisationalUnitService $organisational_unit;
    private OrganisationalUnitPositionService $organisational_unit_position;
    private UserService $user;


    public static function new(
        ilDBInterface $database,
        OrganisationalUnitService $organisational_unit,
        UserService $user,
        OrganisationalUnitPositionService $organisational_unit_position
    ) : /*static*/ self
    {
        $command = new static();

        $command->database = $database;
        $command->organisational_unit = $organisational_unit;
        $command->user = $user;
        $command->organisational_unit_position = $organisational_unit_position;

        return $command;
    }


    public function removeOrganisationalUnitStaffByExternalIdByUserId(string $external_id, int $user_id, int $position_id) : ?StaffDto
    {
        return $this->removeOrganisationalUnitStaff(
            $this->organisational_unit->getOrganisationalUnitByExternalId(
                $external_id
            ),
            $this->user->getUserById(
                $user_id
            ),
            $this->organisational_unit_position->getOrganisationalUnitPositionById(
                $position_id
            )
        );
    }


    public function removeOrganisationalUnitStaffByExternalIdByUserImportId(string $external_id, string $user_import_id, int $position_id) : ?StaffDto
    {
        return $this->removeOrganisationalUnitStaff(
            $this->organisational_unit->getOrganisationalUnitByExternalId(
                $external_id
            ),
            $this->user->getUserByImportId(
                $user_import_id
            ),
            $this->organisational_unit_position->getOrganisationalUnitPositionById(
                $position_id
            )
        );
    }


    public function removeOrganisationalUnitStaffByIdByUserId(int $id, int $user_id, int $position_id) : ?StaffDto
    {
        return $this->removeOrganisationalUnitStaff(
            $this->organisational_unit->getOrganisationalUnitById(
                $id
            ),
            $this->user->getUserById(
                $user_id
            ),
            $this->organisational_unit_position->getOrganisationalUnitPositionById(
                $position_id
            )
        );
    }


    public function removeOrganisationalUnitStaffByIdByUserImportId(int $id, string $user_import_id, int $position_id) : ?StaffDto
    {
        return $this->removeOrganisationalUnitStaff(
            $this->organisational_unit->getOrganisationalUnitById(
                $id
            ),
            $this->user->getUserByImportId(
                $user_import_id
            ),
            $this->organisational_unit_position->getOrganisationalUnitPositionById(
                $position_id
            )
        );
    }


    public function removeOrganisationalUnitStaffByRefIdByUserId(int $ref_id, int $user_id, int $position_id) : ?StaffDto
    {
        return $this->removeOrganisationalUnitStaff(
            $this->organisational_unit->getOrganisationalUnitByRefId(
                $ref_id
            ),
            $this->user->getUserById(
                $user_id
            ),
            $this->organisational_unit_position->getOrganisationalUnitPositionById(
                $position_id
            )
        );
    }


    public function removeOrganisationalUnitStaffByRefIdByUserImportId(int $ref_id, string $user_import_id, int $position_id) : ?StaffDto
    {
        return $this->removeOrganisationalUnitStaff(
            $this->organisational_unit->getOrganisationalUnitByRefId(
                $ref_id
            ),
            $this->user->getUserByImportId(
                $user_import_id
            ),
            $this->organisational_unit_position->getOrganisationalUnitPositionById(
                $position_id
            )
        );
    }


    private function removeOrganisationalUnitStaff(?OrganisationalUnitDto $organisational_unit, ?UserDto $user, ?OrganisationalUnitPositionDto $organisational_unit_position) : ?StaffDto
    {
        if ($organisational_unit === null || $user === null || $organisational_unit_position === null) {
            return null;
        }

        $ilias_organisational_unit_staff = $this->getIliasOrganisationalUnitStaff(
            $organisational_unit->getRefId(),
            $user->getId(),
            $organisational_unit_position->getId()
        );
        if ($ilias_organisational_unit_staff !== null) {
            $ilias_organisational_unit_staff->delete();
        }

        return StaffDto::new(
            $organisational_unit->getId(),
            $organisational_unit->getExternalId(),
            $organisational_unit->getRefId(),
            $user->getId(),
            $user->getImportId(),
            $organisational_unit_position->getId()
        );
    }
}