<?php

namespace Fluxlabs\FluxIliasRestApi\Channel\GroupMember\Port;

use Fluxlabs\FluxIliasRestApi\Adapter\Api\GroupMember\GroupMemberDiffDto;
use Fluxlabs\FluxIliasRestApi\Adapter\Api\GroupMember\GroupMemberIdDto;
use Fluxlabs\FluxIliasRestApi\Channel\Group\Port\GroupService;
use Fluxlabs\FluxIliasRestApi\Channel\GroupMember\Command\AddGroupMemberCommand;
use Fluxlabs\FluxIliasRestApi\Channel\GroupMember\Command\GetGroupMembersCommand;
use Fluxlabs\FluxIliasRestApi\Channel\GroupMember\Command\RemoveGroupMemberCommand;
use Fluxlabs\FluxIliasRestApi\Channel\GroupMember\Command\UpdateGroupMemberCommand;
use Fluxlabs\FluxIliasRestApi\Channel\User\Port\UserService;
use ilDBInterface;

class GroupMemberService
{

    private ilDBInterface $database;
    private GroupService $group;
    private UserService $user;


    public static function new(ilDBInterface $database, GroupService $group, UserService $user) : /*static*/ self
    {
        $service = new static();

        $service->database = $database;
        $service->group = $group;
        $service->user = $user;

        return $service;
    }


    public function addGroupMemberByIdByUserId(int $id, int $user_id, GroupMemberDiffDto $diff) : ?GroupMemberIdDto
    {
        return AddGroupMemberCommand::new(
            $this->group,
            $this->user
        )
            ->addGroupMemberByIdByUserId(
                $id,
                $user_id,
                $diff
            );
    }


    public function addGroupMemberByIdByUserImportId(int $id, string $user_import_id, GroupMemberDiffDto $diff) : ?GroupMemberIdDto
    {
        return AddGroupMemberCommand::new(
            $this->group,
            $this->user
        )
            ->addGroupMemberByIdByUserImportId(
                $id,
                $user_import_id,
                $diff
            );
    }


    public function addGroupMemberByImportIdByUserId(string $import_id, int $user_id, GroupMemberDiffDto $diff) : ?GroupMemberIdDto
    {
        return AddGroupMemberCommand::new(
            $this->group,
            $this->user
        )
            ->addGroupMemberByImportIdByUserId(
                $import_id,
                $user_id,
                $diff
            );
    }


    public function addGroupMemberByImportIdByUserImportId(string $import_id, string $user_import_id, GroupMemberDiffDto $diff) : ?GroupMemberIdDto
    {
        return AddGroupMemberCommand::new(
            $this->group,
            $this->user
        )
            ->addGroupMemberByImportIdByUserImportId(
                $import_id,
                $user_import_id,
                $diff
            );
    }


    public function addGroupMemberByRefIdByUserId(int $ref_id, int $user_id, GroupMemberDiffDto $diff) : ?GroupMemberIdDto
    {
        return AddGroupMemberCommand::new(
            $this->group,
            $this->user
        )
            ->addGroupMemberByRefIdByUserId(
                $ref_id,
                $user_id,
                $diff
            );
    }


    public function addGroupMemberByRefIdByUserImportId(int $ref_id, string $user_import_id, GroupMemberDiffDto $diff) : ?GroupMemberIdDto
    {
        return AddGroupMemberCommand::new(
            $this->group,
            $this->user
        )
            ->addGroupMemberByRefIdByUserImportId(
                $ref_id,
                $user_import_id,
                $diff
            );
    }


    public function getGroupMembers(
        ?int $group_id = null,
        ?string $group_import_id = null,
        ?int $group_ref_id = null,
        ?int $user_id = null,
        ?string $user_import_id = null,
        ?bool $member_role = null,
        ?bool $administrator_role = null,
        ?string $learning_progress = null,
        ?bool $tutorial_support = null,
        ?bool $notification = null
    ) : array {
        return GetGroupMembersCommand::new(
            $this->database
        )
            ->getGroupMembers(
                $group_id,
                $group_import_id,
                $group_ref_id,
                $user_id,
                $user_import_id,
                $member_role,
                $administrator_role,
                $learning_progress,
                $tutorial_support,
                $notification
            );
    }


    public function removeGroupMemberByIdByUserId(int $id, int $user_id) : ?GroupMemberIdDto
    {
        return RemoveGroupMemberCommand::new(
            $this->group,
            $this->user
        )
            ->removeGroupMemberByIdByUserId(
                $id,
                $user_id
            );
    }


    public function removeGroupMemberByIdByUserImportId(int $id, string $user_import_id) : ?GroupMemberIdDto
    {
        return RemoveGroupMemberCommand::new(
            $this->group,
            $this->user
        )
            ->removeGroupMemberByIdByUserImportId(
                $id,
                $user_import_id
            );
    }


    public function removeGroupMemberByImportIdByUserId(string $import_id, int $user_id) : ?GroupMemberIdDto
    {
        return RemoveGroupMemberCommand::new(
            $this->group,
            $this->user
        )
            ->removeGroupMemberByImportIdByUserId(
                $import_id,
                $user_id
            );
    }


    public function removeGroupMemberByImportIdByUserImportId(string $import_id, string $user_import_id) : ?GroupMemberIdDto
    {
        return RemoveGroupMemberCommand::new(
            $this->group,
            $this->user
        )
            ->removeGroupMemberByImportIdByUserImportId(
                $import_id,
                $user_import_id
            );
    }


    public function removeGroupMemberByRefIdByUserId(int $ref_id, int $user_id) : ?GroupMemberIdDto
    {
        return RemoveGroupMemberCommand::new(
            $this->group,
            $this->user
        )
            ->removeGroupMemberByRefIdByUserId(
                $ref_id,
                $user_id
            );
    }


    public function removeGroupMemberByRefIdByUserImportId(int $ref_id, string $user_import_id) : ?GroupMemberIdDto
    {
        return RemoveGroupMemberCommand::new(
            $this->group,
            $this->user
        )
            ->removeGroupMemberByRefIdByUserImportId(
                $ref_id,
                $user_import_id
            );
    }


    public function updateGroupMemberByIdByUserId(int $id, int $user_id, GroupMemberDiffDto $diff) : ?GroupMemberIdDto
    {
        return UpdateGroupMemberCommand::new(
            $this->group,
            $this->user
        )
            ->updateGroupMemberByIdByUserId(
                $id,
                $user_id,
                $diff
            );
    }


    public function updateGroupMemberByIdByUserImportId(int $id, string $user_import_id, GroupMemberDiffDto $diff) : ?GroupMemberIdDto
    {
        return UpdateGroupMemberCommand::new(
            $this->group,
            $this->user
        )
            ->updateGroupMemberByIdByUserImportId(
                $id,
                $user_import_id,
                $diff
            );
    }


    public function updateGroupMemberByImportIdByUserId(string $import_id, int $user_id, GroupMemberDiffDto $diff) : ?GroupMemberIdDto
    {
        return UpdateGroupMemberCommand::new(
            $this->group,
            $this->user
        )
            ->updateGroupMemberByImportIdByUserId(
                $import_id,
                $user_id,
                $diff
            );
    }


    public function updateGroupMemberByImportIdByUserImportId(string $import_id, string $user_import_id, GroupMemberDiffDto $diff) : ?GroupMemberIdDto
    {
        return UpdateGroupMemberCommand::new(
            $this->group,
            $this->user
        )
            ->updateGroupMemberByImportIdByUserImportId(
                $import_id,
                $user_import_id,
                $diff
            );
    }


    public function updateGroupMemberByRefIdByUserId(int $ref_id, int $user_id, GroupMemberDiffDto $diff) : ?GroupMemberIdDto
    {
        return UpdateGroupMemberCommand::new(
            $this->group,
            $this->user
        )
            ->updateGroupMemberByRefIdByUserId(
                $ref_id,
                $user_id,
                $diff
            );
    }


    public function updateGroupMemberByRefIdByUserImportId(int $ref_id, string $user_import_id, GroupMemberDiffDto $diff) : ?GroupMemberIdDto
    {
        return UpdateGroupMemberCommand::new(
            $this->group,
            $this->user
        )
            ->updateGroupMemberByRefIdByUserImportId(
                $ref_id,
                $user_import_id,
                $diff
            );
    }
}