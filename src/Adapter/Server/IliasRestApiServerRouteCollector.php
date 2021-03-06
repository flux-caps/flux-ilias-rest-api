<?php

namespace FluxIliasRestApi\Adapter\Server;

use FluxIliasRestApi\Adapter\Route\Category\CreateCategory\CreateCategoryToIdRoute;
use FluxIliasRestApi\Adapter\Route\Category\CreateCategory\CreateCategoryToImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Category\CreateCategory\CreateCategoryToRefIdRoute;
use FluxIliasRestApi\Adapter\Route\Category\GetCategoriesRoute;
use FluxIliasRestApi\Adapter\Route\Category\GetCategory\GetCategoryByIdRoute;
use FluxIliasRestApi\Adapter\Route\Category\GetCategory\GetCategoryByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Category\GetCategory\GetCategoryByRefIdRoute;
use FluxIliasRestApi\Adapter\Route\Category\UpdateCategory\UpdateCategoryByIdRoute;
use FluxIliasRestApi\Adapter\Route\Category\UpdateCategory\UpdateCategoryByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Category\UpdateCategory\UpdateCategoryByRefIdRoute;
use FluxIliasRestApi\Adapter\Route\Change\GetChangesRoute;
use FluxIliasRestApi\Adapter\Route\Course\CreateCourse\CreateCourseToIdRoute;
use FluxIliasRestApi\Adapter\Route\Course\CreateCourse\CreateCourseToImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Course\CreateCourse\CreateCourseToRefIdRoute;
use FluxIliasRestApi\Adapter\Route\Course\GetCourse\GetCourseByIdRoute;
use FluxIliasRestApi\Adapter\Route\Course\GetCourse\GetCourseByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Course\GetCourse\GetCourseByRefIdRoute;
use FluxIliasRestApi\Adapter\Route\Course\GetCoursesRoute;
use FluxIliasRestApi\Adapter\Route\Course\UpdateCourse\UpdateCourseByIdRoute;
use FluxIliasRestApi\Adapter\Route\Course\UpdateCourse\UpdateCourseByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Course\UpdateCourse\UpdateCourseByRefIdRoute;
use FluxIliasRestApi\Adapter\Route\CourseMember\AddCourseMember\AddCourseMemberByIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\CourseMember\AddCourseMember\AddCourseMemberByIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\CourseMember\AddCourseMember\AddCourseMemberByImportIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\CourseMember\AddCourseMember\AddCourseMemberByImportIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\CourseMember\AddCourseMember\AddCourseMemberByRefIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\CourseMember\AddCourseMember\AddCourseMemberByRefIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\CourseMember\GetCourseMembersRoute;
use FluxIliasRestApi\Adapter\Route\CourseMember\RemoveCourseMember\RemoveCourseMemberByIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\CourseMember\RemoveCourseMember\RemoveCourseMemberByIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\CourseMember\RemoveCourseMember\RemoveCourseMemberByImportIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\CourseMember\RemoveCourseMember\RemoveCourseMemberByImportIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\CourseMember\RemoveCourseMember\RemoveCourseMemberByRefIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\CourseMember\RemoveCourseMember\RemoveCourseMemberByRefIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\CourseMember\UpdateCourseMember\UpdateCourseMemberByIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\CourseMember\UpdateCourseMember\UpdateCourseMemberByIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\CourseMember\UpdateCourseMember\UpdateCourseMemberByImportIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\CourseMember\UpdateCourseMember\UpdateCourseMemberByImportIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\CourseMember\UpdateCourseMember\UpdateCourseMemberByRefIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\CourseMember\UpdateCourseMember\UpdateCourseMemberByRefIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\File\CreateFile\CreateFileToIdRoute;
use FluxIliasRestApi\Adapter\Route\File\CreateFile\CreateFileToImportIdRoute;
use FluxIliasRestApi\Adapter\Route\File\CreateFile\CreateFileToRefIdRoute;
use FluxIliasRestApi\Adapter\Route\File\GetFile\GetFileByIdRoute;
use FluxIliasRestApi\Adapter\Route\File\GetFile\GetFileByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\File\GetFile\GetFileByRefIdRoute;
use FluxIliasRestApi\Adapter\Route\File\GetFilesRoute;
use FluxIliasRestApi\Adapter\Route\File\UpdateFile\UpdateFileByIdRoute;
use FluxIliasRestApi\Adapter\Route\File\UpdateFile\UpdateFileByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\File\UpdateFile\UpdateFileByRefIdRoute;
use FluxIliasRestApi\Adapter\Route\File\UploadFile\UploadFileByIdRoute;
use FluxIliasRestApi\Adapter\Route\File\UploadFile\UploadFileByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\File\UploadFile\UploadFileByRefIdRoute;
use FluxIliasRestApi\Adapter\Route\FluxIliasRestObject\CreateFluxIliasRestObject\CreateFluxIliasRestObjectToIdRoute;
use FluxIliasRestApi\Adapter\Route\FluxIliasRestObject\CreateFluxIliasRestObject\CreateFluxIliasRestObjectToImportIdRoute;
use FluxIliasRestApi\Adapter\Route\FluxIliasRestObject\CreateFluxIliasRestObject\CreateFluxIliasRestObjectToRefIdRoute;
use FluxIliasRestApi\Adapter\Route\FluxIliasRestObject\GetFluxIliasRestObject\GetFluxIliasRestObjectByIdRoute;
use FluxIliasRestApi\Adapter\Route\FluxIliasRestObject\GetFluxIliasRestObject\GetFluxIliasRestObjectByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\FluxIliasRestObject\GetFluxIliasRestObject\GetFluxIliasRestObjectByRefIdRoute;
use FluxIliasRestApi\Adapter\Route\FluxIliasRestObject\GetFluxIliasRestObjectsRoute;
use FluxIliasRestApi\Adapter\Route\FluxIliasRestObject\UpdateFluxIliasRestObject\UpdateFluxIliasRestObjectByIdRoute;
use FluxIliasRestApi\Adapter\Route\FluxIliasRestObject\UpdateFluxIliasRestObject\UpdateFluxIliasRestObjectByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\FluxIliasRestObject\UpdateFluxIliasRestObject\UpdateFluxIliasRestObjectByRefIdRoute;
use FluxIliasRestApi\Adapter\Route\Group\CreateGroup\CreateGroupToIdRoute;
use FluxIliasRestApi\Adapter\Route\Group\CreateGroup\CreateGroupToImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Group\CreateGroup\CreateGroupToRefIdRoute;
use FluxIliasRestApi\Adapter\Route\Group\GetGroup\GetGroupByIdRoute;
use FluxIliasRestApi\Adapter\Route\Group\GetGroup\GetGroupByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Group\GetGroup\GetGroupByRefIdRoute;
use FluxIliasRestApi\Adapter\Route\Group\GetGroupsRoute;
use FluxIliasRestApi\Adapter\Route\Group\UpdateGroup\UpdateGroupByIdRoute;
use FluxIliasRestApi\Adapter\Route\Group\UpdateGroup\UpdateGroupByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Group\UpdateGroup\UpdateGroupByRefIdRoute;
use FluxIliasRestApi\Adapter\Route\GroupMember\AddGroupMember\AddGroupMemberByIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\GroupMember\AddGroupMember\AddGroupMemberByIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\GroupMember\AddGroupMember\AddGroupMemberByImportIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\GroupMember\AddGroupMember\AddGroupMemberByImportIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\GroupMember\AddGroupMember\AddGroupMemberByRefIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\GroupMember\AddGroupMember\AddGroupMemberByRefIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\GroupMember\GetGroupMembersRoute;
use FluxIliasRestApi\Adapter\Route\GroupMember\RemoveGroupMember\RemoveGroupMemberByIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\GroupMember\RemoveGroupMember\RemoveGroupMemberByIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\GroupMember\RemoveGroupMember\RemoveGroupMemberByImportIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\GroupMember\RemoveGroupMember\RemoveGroupMemberByImportIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\GroupMember\RemoveGroupMember\RemoveGroupMemberByRefIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\GroupMember\RemoveGroupMember\RemoveGroupMemberByRefIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\GroupMember\UpdateGroupMember\UpdateGroupMemberByIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\GroupMember\UpdateGroupMember\UpdateGroupMemberByIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\GroupMember\UpdateGroupMember\UpdateGroupMemberByImportIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\GroupMember\UpdateGroupMember\UpdateGroupMemberByImportIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\GroupMember\UpdateGroupMember\UpdateGroupMemberByRefIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\GroupMember\UpdateGroupMember\UpdateGroupMemberByRefIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\CloneObject\CloneObjectByIdToIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\CloneObject\CloneObjectByIdToImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\CloneObject\CloneObjectByIdToRefIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\CloneObject\CloneObjectByImportIdToIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\CloneObject\CloneObjectByImportIdToImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\CloneObject\CloneObjectByImportIdToRefIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\CloneObject\CloneObjectByRefIdToIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\CloneObject\CloneObjectByRefIdToImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\CloneObject\CloneObjectByRefIdToRefIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\CreateObject\CreateObjectToIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\CreateObject\CreateObjectToImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\CreateObject\CreateObjectToRefIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\DeleteObject\DeleteObjectByIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\DeleteObject\DeleteObjectByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\DeleteObject\DeleteObjectByRefIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\GetChildren\GetChildrenByIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\GetChildren\GetChildrenByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\GetChildren\GetChildrenByRefIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\GetObject\GetObjectByIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\GetObject\GetObjectByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\GetObject\GetObjectByRefIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\GetObjectsRoute;
use FluxIliasRestApi\Adapter\Route\Object\GetPath\GetPathByIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\GetPath\GetPathByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\GetPath\GetPathByRefIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\GetRootObjectRoute;
use FluxIliasRestApi\Adapter\Route\Object\HasAccessByRefIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\LinkObject\LinkObjectByIdToIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\LinkObject\LinkObjectByIdToImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\LinkObject\LinkObjectByIdToRefIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\LinkObject\LinkObjectByImportIdToIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\LinkObject\LinkObjectByImportIdToImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\LinkObject\LinkObjectByImportIdToRefIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\LinkObject\LinkObjectByRefIdToIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\LinkObject\LinkObjectByRefIdToImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\LinkObject\LinkObjectByRefIdToRefIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\MoveObject\MoveObjectByIdToIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\MoveObject\MoveObjectByIdToImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\MoveObject\MoveObjectByIdToRefIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\MoveObject\MoveObjectByImportIdToIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\MoveObject\MoveObjectByImportIdToImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\MoveObject\MoveObjectByImportIdToRefIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\MoveObject\MoveObjectByRefIdToIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\MoveObject\MoveObjectByRefIdToImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\MoveObject\MoveObjectByRefIdToRefIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\UpdateObject\UpdateObjectByIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\UpdateObject\UpdateObjectByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Object\UpdateObject\UpdateObjectByRefIdRoute;
use FluxIliasRestApi\Adapter\Route\ObjectLearningProgress\GetObjectLearningProgressRoute;
use FluxIliasRestApi\Adapter\Route\ObjectLearningProgress\UpdateObjectLearningProgress\UpdateObjectLearningProgressByIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\ObjectLearningProgress\UpdateObjectLearningProgress\UpdateObjectLearningProgressByIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\ObjectLearningProgress\UpdateObjectLearningProgress\UpdateObjectLearningProgressByImportIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\ObjectLearningProgress\UpdateObjectLearningProgress\UpdateObjectLearningProgressByImportIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\ObjectLearningProgress\UpdateObjectLearningProgress\UpdateObjectLearningProgressByRefIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\ObjectLearningProgress\UpdateObjectLearningProgress\UpdateObjectLearningProgressByRefIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnit\CreateOrganisationalUnit\CreateOrganisationalUnitToExternalIdRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnit\CreateOrganisationalUnit\CreateOrganisationalUnitToIdRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnit\CreateOrganisationalUnit\CreateOrganisationalUnitToRefIdRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnit\GetOrganisationalUnit\GetOrganisationalUnitByExternalIdRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnit\GetOrganisationalUnit\GetOrganisationalUnitByIdRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnit\GetOrganisationalUnit\GetOrganisationalUnitByRefIdRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnit\GetOrganisationalUnitRootRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnit\GetOrganisationalUnitsRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnit\UpdateOrganisationalUnit\UpdateOrganisationalUnitByExternalIdRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnit\UpdateOrganisationalUnit\UpdateOrganisationalUnitByIdRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnit\UpdateOrganisationalUnit\UpdateOrganisationalUnitByRefIdRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnitPosition\CreateOrganisationalUnitPositionRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnitPosition\DeleteOrganisationalUnitPositionByIdRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnitPosition\GetOrganisationalUnitPosition\GetOrganisationalUnitPositionByCoreIdentifierRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnitPosition\GetOrganisationalUnitPosition\GetOrganisationalUnitPositionByIdRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnitPosition\GetOrganisationalUnitPositionsRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnitPosition\UpdateOrganisationalUnitPositionByIdRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnitStaff\AddOrganisationalUnitStaff\AddOrganisationalUnitStaffByExternalIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnitStaff\AddOrganisationalUnitStaff\AddOrganisationalUnitStaffByExternalIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnitStaff\AddOrganisationalUnitStaff\AddOrganisationalUnitStaffByIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnitStaff\AddOrganisationalUnitStaff\AddOrganisationalUnitStaffByIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnitStaff\AddOrganisationalUnitStaff\AddOrganisationalUnitStaffByRefIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnitStaff\AddOrganisationalUnitStaff\AddOrganisationalUnitStaffByRefIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnitStaff\GetOrganisationalUnitStaffRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnitStaff\RemoveOrganisationalUnitStaff\RemoveOrganisationalUnitStaffByExternalIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnitStaff\RemoveOrganisationalUnitStaff\RemoveOrganisationalUnitStaffByExternalIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnitStaff\RemoveOrganisationalUnitStaff\RemoveOrganisationalUnitStaffByIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnitStaff\RemoveOrganisationalUnitStaff\RemoveOrganisationalUnitStaffByIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnitStaff\RemoveOrganisationalUnitStaff\RemoveOrganisationalUnitStaffByRefIdByUserIdRoute;
use FluxIliasRestApi\Adapter\Route\OrganisationalUnitStaff\RemoveOrganisationalUnitStaff\RemoveOrganisationalUnitStaffByRefIdByUserImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Role\CreateRole\CreateRoleToIdRoute;
use FluxIliasRestApi\Adapter\Route\Role\CreateRole\CreateRoleToImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Role\CreateRole\CreateRoleToRefIdRoute;
use FluxIliasRestApi\Adapter\Route\Role\GetGlobalRoleObjectRoute;
use FluxIliasRestApi\Adapter\Route\Role\GetRole\GetRoleByIdRoute;
use FluxIliasRestApi\Adapter\Route\Role\GetRole\GetRoleByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\Role\GetRolesRoute;
use FluxIliasRestApi\Adapter\Route\Role\UpdateRole\UpdateRoleByIdRoute;
use FluxIliasRestApi\Adapter\Route\Role\UpdateRole\UpdateRoleByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\ScormLearningModule\CreateScormLearningModule\CreateScormLearningModuleToIdRoute;
use FluxIliasRestApi\Adapter\Route\ScormLearningModule\CreateScormLearningModule\CreateScormLearningModuleToImportIdRoute;
use FluxIliasRestApi\Adapter\Route\ScormLearningModule\CreateScormLearningModule\CreateScormLearningModuleToRefIdRoute;
use FluxIliasRestApi\Adapter\Route\ScormLearningModule\GetScormLearningModule\GetScormLearningModuleByIdRoute;
use FluxIliasRestApi\Adapter\Route\ScormLearningModule\GetScormLearningModule\GetScormLearningModuleByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\ScormLearningModule\GetScormLearningModule\GetScormLearningModuleByRefIdRoute;
use FluxIliasRestApi\Adapter\Route\ScormLearningModule\GetScormLearningModulesRoute;
use FluxIliasRestApi\Adapter\Route\ScormLearningModule\UpdateScormLearningModule\UpdateScormLearningModuleByIdRoute;
use FluxIliasRestApi\Adapter\Route\ScormLearningModule\UpdateScormLearningModule\UpdateScormLearningModuleByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\ScormLearningModule\UpdateScormLearningModule\UpdateScormLearningModuleByRefIdRoute;
use FluxIliasRestApi\Adapter\Route\ScormLearningModule\UploadScormLearningModule\UploadScormLearningModuleByIdRoute;
use FluxIliasRestApi\Adapter\Route\ScormLearningModule\UploadScormLearningModule\UploadScormLearningModuleByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\ScormLearningModule\UploadScormLearningModule\UploadScormLearningModuleByRefIdRoute;
use FluxIliasRestApi\Adapter\Route\User\CreateUserRoute;
use FluxIliasRestApi\Adapter\Route\User\GetCurrentUser\GetCurrentApiUserRoute;
use FluxIliasRestApi\Adapter\Route\User\GetCurrentUser\GetCurrentWebUserRoute;
use FluxIliasRestApi\Adapter\Route\User\GetUser\GetUserByIdRoute;
use FluxIliasRestApi\Adapter\Route\User\GetUser\GetUserByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\User\GetUsersRoute;
use FluxIliasRestApi\Adapter\Route\User\UpdateAvatar\UpdateAvatarByIdRoute;
use FluxIliasRestApi\Adapter\Route\User\UpdateAvatar\UpdateAvatarByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\User\UpdateUser\UpdateUserByIdRoute;
use FluxIliasRestApi\Adapter\Route\User\UpdateUser\UpdateUserByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\UserFavourite\AddUserFavourite\AddUserFavouriteByIdByObjectIdRoute;
use FluxIliasRestApi\Adapter\Route\UserFavourite\AddUserFavourite\AddUserFavouriteByIdByObjectImportIdRoute;
use FluxIliasRestApi\Adapter\Route\UserFavourite\AddUserFavourite\AddUserFavouriteByIdByObjectRefIdRoute;
use FluxIliasRestApi\Adapter\Route\UserFavourite\AddUserFavourite\AddUserFavouriteByImportIdByObjectIdRoute;
use FluxIliasRestApi\Adapter\Route\UserFavourite\AddUserFavourite\AddUserFavouriteByImportIdByObjectImportIdRoute;
use FluxIliasRestApi\Adapter\Route\UserFavourite\AddUserFavourite\AddUserFavouriteByImportIdByObjectRefIdRoute;
use FluxIliasRestApi\Adapter\Route\UserFavourite\GetUserFavouritesRoute;
use FluxIliasRestApi\Adapter\Route\UserFavourite\RemoveUserFavourite\RemoveUserFavouriteByIdByObjectIdRoute;
use FluxIliasRestApi\Adapter\Route\UserFavourite\RemoveUserFavourite\RemoveUserFavouriteByIdByObjectImportIdRoute;
use FluxIliasRestApi\Adapter\Route\UserFavourite\RemoveUserFavourite\RemoveUserFavouriteByIdByObjectRefIdRoute;
use FluxIliasRestApi\Adapter\Route\UserFavourite\RemoveUserFavourite\RemoveUserFavouriteByImportIdByObjectIdRoute;
use FluxIliasRestApi\Adapter\Route\UserFavourite\RemoveUserFavourite\RemoveUserFavouriteByImportIdByObjectImportIdRoute;
use FluxIliasRestApi\Adapter\Route\UserFavourite\RemoveUserFavourite\RemoveUserFavouriteByImportIdByObjectRefIdRoute;
use FluxIliasRestApi\Adapter\Route\UserMail\GetUnreadMailsCount\GetUnreadMailsCountByIdRoute;
use FluxIliasRestApi\Adapter\Route\UserMail\GetUnreadMailsCount\GetUnreadMailsCountByImportIdRoute;
use FluxIliasRestApi\Adapter\Route\UserRole\AddUserRole\AddUserRoleByIdByRoleIdRoute;
use FluxIliasRestApi\Adapter\Route\UserRole\AddUserRole\AddUserRoleByIdByRoleImportIdRoute;
use FluxIliasRestApi\Adapter\Route\UserRole\AddUserRole\AddUserRoleByImportIdByRoleIdRoute;
use FluxIliasRestApi\Adapter\Route\UserRole\AddUserRole\AddUserRoleByImportIdByRoleImportIdRoute;
use FluxIliasRestApi\Adapter\Route\UserRole\GetUserRolesRoute;
use FluxIliasRestApi\Adapter\Route\UserRole\RemoveUserRole\RemoveUserRoleByIdByRoleIdRoute;
use FluxIliasRestApi\Adapter\Route\UserRole\RemoveUserRole\RemoveUserRoleByIdByRoleImportIdRoute;
use FluxIliasRestApi\Adapter\Route\UserRole\RemoveUserRole\RemoveUserRoleByImportIdByRoleIdRoute;
use FluxIliasRestApi\Adapter\Route\UserRole\RemoveUserRole\RemoveUserRoleByImportIdByRoleImportIdRoute;
use FluxIliasRestApi\Libs\FluxIliasApi\Adapter\Api\IliasApi;
use FluxIliasRestApi\Libs\FluxRestApi\Adapter\Route\Collector\RouteCollector;

class IliasRestApiServerRouteCollector implements RouteCollector
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


    public function collectRoutes() : array
    {
        return [
            GetCategoriesRoute::new(
                $this->ilias_api
            ),
            CreateCategoryToIdRoute::new(
                $this->ilias_api
            ),
            CreateCategoryToImportIdRoute::new(
                $this->ilias_api
            ),
            CreateCategoryToRefIdRoute::new(
                $this->ilias_api
            ),
            GetCategoryByIdRoute::new(
                $this->ilias_api
            ),
            GetCategoryByImportIdRoute::new(
                $this->ilias_api
            ),
            GetCategoryByRefIdRoute::new(
                $this->ilias_api
            ),
            UpdateCategoryByIdRoute::new(
                $this->ilias_api
            ),
            UpdateCategoryByImportIdRoute::new(
                $this->ilias_api
            ),
            UpdateCategoryByRefIdRoute::new(
                $this->ilias_api
            ),

            GetChangesRoute::new(
                $this->ilias_api
            ),

            GetCoursesRoute::new(
                $this->ilias_api
            ),
            CreateCourseToIdRoute::new(
                $this->ilias_api
            ),
            CreateCourseToImportIdRoute::new(
                $this->ilias_api
            ),
            CreateCourseToRefIdRoute::new(
                $this->ilias_api
            ),
            GetCourseByIdRoute::new(
                $this->ilias_api
            ),
            GetCourseByImportIdRoute::new(
                $this->ilias_api
            ),
            GetCourseByRefIdRoute::new(
                $this->ilias_api
            ),
            UpdateCourseByIdRoute::new(
                $this->ilias_api
            ),
            UpdateCourseByImportIdRoute::new(
                $this->ilias_api
            ),
            UpdateCourseByRefIdRoute::new(
                $this->ilias_api
            ),

            GetCourseMembersRoute::new(
                $this->ilias_api
            ),
            AddCourseMemberByIdByUserIdRoute::new(
                $this->ilias_api
            ),
            AddCourseMemberByIdByUserImportIdRoute::new(
                $this->ilias_api
            ),
            AddCourseMemberByImportIdByUserIdRoute::new(
                $this->ilias_api
            ),
            AddCourseMemberByImportIdByUserImportIdRoute::new(
                $this->ilias_api
            ),
            AddCourseMemberByRefIdByUserIdRoute::new(
                $this->ilias_api
            ),
            AddCourseMemberByRefIdByUserImportIdRoute::new(
                $this->ilias_api
            ),
            RemoveCourseMemberByIdByUserIdRoute::new(
                $this->ilias_api
            ),
            RemoveCourseMemberByIdByUserImportIdRoute::new(
                $this->ilias_api
            ),
            RemoveCourseMemberByImportIdByUserIdRoute::new(
                $this->ilias_api
            ),
            RemoveCourseMemberByImportIdByUserImportIdRoute::new(
                $this->ilias_api
            ),
            RemoveCourseMemberByRefIdByUserIdRoute::new(
                $this->ilias_api
            ),
            RemoveCourseMemberByRefIdByUserImportIdRoute::new(
                $this->ilias_api
            ),
            UpdateCourseMemberByIdByUserIdRoute::new(
                $this->ilias_api
            ),
            UpdateCourseMemberByIdByUserImportIdRoute::new(
                $this->ilias_api
            ),
            UpdateCourseMemberByImportIdByUserIdRoute::new(
                $this->ilias_api
            ),
            UpdateCourseMemberByImportIdByUserImportIdRoute::new(
                $this->ilias_api
            ),
            UpdateCourseMemberByRefIdByUserIdRoute::new(
                $this->ilias_api
            ),
            UpdateCourseMemberByRefIdByUserImportIdRoute::new(
                $this->ilias_api
            ),

            GetFilesRoute::new(
                $this->ilias_api
            ),
            CreateFileToIdRoute::new(
                $this->ilias_api
            ),
            CreateFileToImportIdRoute::new(
                $this->ilias_api
            ),
            CreateFileToRefIdRoute::new(
                $this->ilias_api
            ),
            GetFileByIdRoute::new(
                $this->ilias_api
            ),
            GetFileByImportIdRoute::new(
                $this->ilias_api
            ),
            GetFileByRefIdRoute::new(
                $this->ilias_api
            ),
            UpdateFileByIdRoute::new(
                $this->ilias_api
            ),
            UpdateFileByImportIdRoute::new(
                $this->ilias_api
            ),
            UpdateFileByRefIdRoute::new(
                $this->ilias_api
            ),
            UploadFileByIdRoute::new(
                $this->ilias_api
            ),
            UploadFileByImportIdRoute::new(
                $this->ilias_api
            ),
            UploadFileByRefIdRoute::new(
                $this->ilias_api
            ),

            GetFluxIliasRestObjectsRoute::new(
                $this->ilias_api
            ),
            CreateFluxIliasRestObjectToIdRoute::new(
                $this->ilias_api
            ),
            CreateFluxIliasRestObjectToImportIdRoute::new(
                $this->ilias_api
            ),
            CreateFluxIliasRestObjectToRefIdRoute::new(
                $this->ilias_api
            ),
            GetFluxIliasRestObjectByIdRoute::new(
                $this->ilias_api
            ),
            GetFluxIliasRestObjectByImportIdRoute::new(
                $this->ilias_api
            ),
            GetFluxIliasRestObjectByRefIdRoute::new(
                $this->ilias_api
            ),
            UpdateFluxIliasRestObjectByIdRoute::new(
                $this->ilias_api
            ),
            UpdateFluxIliasRestObjectByImportIdRoute::new(
                $this->ilias_api
            ),
            UpdateFluxIliasRestObjectByRefIdRoute::new(
                $this->ilias_api
            ),

            GetGroupsRoute::new(
                $this->ilias_api
            ),
            CreateGroupToIdRoute::new(
                $this->ilias_api
            ),
            CreateGroupToImportIdRoute::new(
                $this->ilias_api
            ),
            CreateGroupToRefIdRoute::new(
                $this->ilias_api
            ),
            GetGroupByIdRoute::new(
                $this->ilias_api
            ),
            GetGroupByImportIdRoute::new(
                $this->ilias_api
            ),
            GetGroupByRefIdRoute::new(
                $this->ilias_api
            ),
            UpdateGroupByIdRoute::new(
                $this->ilias_api
            ),
            UpdateGroupByImportIdRoute::new(
                $this->ilias_api
            ),
            UpdateGroupByRefIdRoute::new(
                $this->ilias_api
            ),

            GetGroupMembersRoute::new(
                $this->ilias_api
            ),
            AddGroupMemberByIdByUserIdRoute::new(
                $this->ilias_api
            ),
            AddGroupMemberByIdByUserImportIdRoute::new(
                $this->ilias_api
            ),
            AddGroupMemberByImportIdByUserIdRoute::new(
                $this->ilias_api
            ),
            AddGroupMemberByImportIdByUserImportIdRoute::new(
                $this->ilias_api
            ),
            AddGroupMemberByRefIdByUserIdRoute::new(
                $this->ilias_api
            ),
            AddGroupMemberByRefIdByUserImportIdRoute::new(
                $this->ilias_api
            ),
            RemoveGroupMemberByIdByUserIdRoute::new(
                $this->ilias_api
            ),
            RemoveGroupMemberByIdByUserImportIdRoute::new(
                $this->ilias_api
            ),
            RemoveGroupMemberByImportIdByUserIdRoute::new(
                $this->ilias_api
            ),
            RemoveGroupMemberByImportIdByUserImportIdRoute::new(
                $this->ilias_api
            ),
            RemoveGroupMemberByRefIdByUserIdRoute::new(
                $this->ilias_api
            ),
            RemoveGroupMemberByRefIdByUserImportIdRoute::new(
                $this->ilias_api
            ),
            UpdateGroupMemberByIdByUserIdRoute::new(
                $this->ilias_api
            ),
            UpdateGroupMemberByIdByUserImportIdRoute::new(
                $this->ilias_api
            ),
            UpdateGroupMemberByImportIdByUserIdRoute::new(
                $this->ilias_api
            ),
            UpdateGroupMemberByImportIdByUserImportIdRoute::new(
                $this->ilias_api
            ),
            UpdateGroupMemberByRefIdByUserIdRoute::new(
                $this->ilias_api
            ),
            UpdateGroupMemberByRefIdByUserImportIdRoute::new(
                $this->ilias_api
            ),

            GetObjectsRoute::new(
                $this->ilias_api
            ),
            GetRootObjectRoute::new(
                $this->ilias_api
            ),
            HasAccessByRefIdByUserIdRoute::new(
                $this->ilias_api
            ),
            CloneObjectByIdToIdRoute::new(
                $this->ilias_api
            ),
            CloneObjectByIdToImportIdRoute::new(
                $this->ilias_api
            ),
            CloneObjectByIdToRefIdRoute::new(
                $this->ilias_api
            ),
            CloneObjectByImportIdToIdRoute::new(
                $this->ilias_api
            ),
            CloneObjectByImportIdToImportIdRoute::new(
                $this->ilias_api
            ),
            CloneObjectByImportIdToRefIdRoute::new(
                $this->ilias_api
            ),
            CloneObjectByRefIdToIdRoute::new(
                $this->ilias_api
            ),
            CloneObjectByRefIdToImportIdRoute::new(
                $this->ilias_api
            ),
            CloneObjectByRefIdToRefIdRoute::new(
                $this->ilias_api
            ),
            CreateObjectToIdRoute::new(
                $this->ilias_api
            ),
            CreateObjectToImportIdRoute::new(
                $this->ilias_api
            ),
            CreateObjectToRefIdRoute::new(
                $this->ilias_api
            ),
            DeleteObjectByIdRoute::new(
                $this->ilias_api
            ),
            DeleteObjectByImportIdRoute::new(
                $this->ilias_api
            ),
            DeleteObjectByRefIdRoute::new(
                $this->ilias_api
            ),
            GetChildrenByIdRoute::new(
                $this->ilias_api
            ),
            GetChildrenByImportIdRoute::new(
                $this->ilias_api
            ),
            GetChildrenByRefIdRoute::new(
                $this->ilias_api
            ),
            GetObjectByIdRoute::new(
                $this->ilias_api
            ),
            GetObjectByImportIdRoute::new(
                $this->ilias_api
            ),
            GetObjectByRefIdRoute::new(
                $this->ilias_api
            ),
            GetPathByIdRoute::new(
                $this->ilias_api
            ),
            GetPathByImportIdRoute::new(
                $this->ilias_api
            ),
            GetPathByRefIdRoute::new(
                $this->ilias_api
            ),
            LinkObjectByIdToIdRoute::new(
                $this->ilias_api
            ),
            LinkObjectByIdToImportIdRoute::new(
                $this->ilias_api
            ),
            LinkObjectByIdToRefIdRoute::new(
                $this->ilias_api
            ),
            LinkObjectByImportIdToIdRoute::new(
                $this->ilias_api
            ),
            LinkObjectByImportIdToImportIdRoute::new(
                $this->ilias_api
            ),
            LinkObjectByImportIdToRefIdRoute::new(
                $this->ilias_api
            ),
            LinkObjectByRefIdToIdRoute::new(
                $this->ilias_api
            ),
            LinkObjectByRefIdToImportIdRoute::new(
                $this->ilias_api
            ),
            LinkObjectByRefIdToRefIdRoute::new(
                $this->ilias_api
            ),
            MoveObjectByIdToIdRoute::new(
                $this->ilias_api
            ),
            MoveObjectByIdToImportIdRoute::new(
                $this->ilias_api
            ),
            MoveObjectByIdToRefIdRoute::new(
                $this->ilias_api
            ),
            MoveObjectByImportIdToIdRoute::new(
                $this->ilias_api
            ),
            MoveObjectByImportIdToImportIdRoute::new(
                $this->ilias_api
            ),
            MoveObjectByImportIdToRefIdRoute::new(
                $this->ilias_api
            ),
            MoveObjectByRefIdToIdRoute::new(
                $this->ilias_api
            ),
            MoveObjectByRefIdToImportIdRoute::new(
                $this->ilias_api
            ),
            MoveObjectByRefIdToRefIdRoute::new(
                $this->ilias_api
            ),
            UpdateObjectByIdRoute::new(
                $this->ilias_api
            ),
            UpdateObjectByImportIdRoute::new(
                $this->ilias_api
            ),
            UpdateObjectByRefIdRoute::new(
                $this->ilias_api
            ),

            GetObjectLearningProgressRoute::new(
                $this->ilias_api
            ),
            UpdateObjectLearningProgressByIdByUserIdRoute::new(
                $this->ilias_api
            ),
            UpdateObjectLearningProgressByIdByUserImportIdRoute::new(
                $this->ilias_api
            ),
            UpdateObjectLearningProgressByImportIdByUserIdRoute::new(
                $this->ilias_api
            ),
            UpdateObjectLearningProgressByImportIdByUserImportIdRoute::new(
                $this->ilias_api
            ),
            UpdateObjectLearningProgressByRefIdByUserIdRoute::new(
                $this->ilias_api
            ),
            UpdateObjectLearningProgressByRefIdByUserImportIdRoute::new(
                $this->ilias_api
            ),

            GetOrganisationalUnitRootRoute::new(
                $this->ilias_api
            ),
            GetOrganisationalUnitsRoute::new(
                $this->ilias_api
            ),
            CreateOrganisationalUnitToExternalIdRoute::new(
                $this->ilias_api
            ),
            CreateOrganisationalUnitToIdRoute::new(
                $this->ilias_api
            ),
            CreateOrganisationalUnitToRefIdRoute::new(
                $this->ilias_api
            ),
            GetOrganisationalUnitByExternalIdRoute::new(
                $this->ilias_api
            ),
            GetOrganisationalUnitByIdRoute::new(
                $this->ilias_api
            ),
            GetOrganisationalUnitByRefIdRoute::new(
                $this->ilias_api
            ),
            UpdateOrganisationalUnitByExternalIdRoute::new(
                $this->ilias_api
            ),
            UpdateOrganisationalUnitByIdRoute::new(
                $this->ilias_api
            ),
            UpdateOrganisationalUnitByRefIdRoute::new(
                $this->ilias_api
            ),

            CreateOrganisationalUnitPositionRoute::new(
                $this->ilias_api
            ),
            DeleteOrganisationalUnitPositionByIdRoute::new(
                $this->ilias_api
            ),
            GetOrganisationalUnitPositionsRoute::new(
                $this->ilias_api
            ),
            UpdateOrganisationalUnitPositionByIdRoute::new(
                $this->ilias_api
            ),
            GetOrganisationalUnitPositionByCoreIdentifierRoute::new(
                $this->ilias_api
            ),
            GetOrganisationalUnitPositionByIdRoute::new(
                $this->ilias_api
            ),

            GetOrganisationalUnitStaffRoute::new(
                $this->ilias_api
            ),
            AddOrganisationalUnitStaffByExternalIdByUserIdRoute::new(
                $this->ilias_api
            ),
            AddOrganisationalUnitStaffByExternalIdByUserImportIdRoute::new(
                $this->ilias_api
            ),
            AddOrganisationalUnitStaffByIdByUserIdRoute::new(
                $this->ilias_api
            ),
            AddOrganisationalUnitStaffByIdByUserImportIdRoute::new(
                $this->ilias_api
            ),
            AddOrganisationalUnitStaffByRefIdByUserIdRoute::new(
                $this->ilias_api
            ),
            AddOrganisationalUnitStaffByRefIdByUserImportIdRoute::new(
                $this->ilias_api
            ),
            RemoveOrganisationalUnitStaffByExternalIdByUserIdRoute::new(
                $this->ilias_api
            ),
            RemoveOrganisationalUnitStaffByExternalIdByUserImportIdRoute::new(
                $this->ilias_api
            ),
            RemoveOrganisationalUnitStaffByIdByUserIdRoute::new(
                $this->ilias_api
            ),
            RemoveOrganisationalUnitStaffByIdByUserImportIdRoute::new(
                $this->ilias_api
            ),
            RemoveOrganisationalUnitStaffByRefIdByUserIdRoute::new(
                $this->ilias_api
            ),
            RemoveOrganisationalUnitStaffByRefIdByUserImportIdRoute::new(
                $this->ilias_api
            ),

            GetGlobalRoleObjectRoute::new(
                $this->ilias_api
            ),
            GetRolesRoute::new(
                $this->ilias_api
            ),
            CreateRoleToIdRoute::new(
                $this->ilias_api
            ),
            CreateRoleToImportIdRoute::new(
                $this->ilias_api
            ),
            CreateRoleToRefIdRoute::new(
                $this->ilias_api
            ),
            GetRoleByIdRoute::new(
                $this->ilias_api
            ),
            GetRoleByImportIdRoute::new(
                $this->ilias_api
            ),
            UpdateRoleByIdRoute::new(
                $this->ilias_api
            ),
            UpdateRoleByImportIdRoute::new(
                $this->ilias_api
            ),

            GetScormLearningModulesRoute::new(
                $this->ilias_api
            ),
            CreateScormLearningModuleToIdRoute::new(
                $this->ilias_api
            ),
            CreateScormLearningModuleToImportIdRoute::new(
                $this->ilias_api
            ),
            CreateScormLearningModuleToRefIdRoute::new(
                $this->ilias_api
            ),
            GetScormLearningModuleByIdRoute::new(
                $this->ilias_api
            ),
            GetScormLearningModuleByImportIdRoute::new(
                $this->ilias_api
            ),
            GetScormLearningModuleByRefIdRoute::new(
                $this->ilias_api
            ),
            UpdateScormLearningModuleByIdRoute::new(
                $this->ilias_api
            ),
            UpdateScormLearningModuleByImportIdRoute::new(
                $this->ilias_api
            ),
            UpdateScormLearningModuleByRefIdRoute::new(
                $this->ilias_api
            ),
            UploadScormLearningModuleByIdRoute::new(
                $this->ilias_api
            ),
            UploadScormLearningModuleByImportIdRoute::new(
                $this->ilias_api
            ),
            UploadScormLearningModuleByRefIdRoute::new(
                $this->ilias_api
            ),

            CreateUserRoute::new(
                $this->ilias_api
            ),
            GetUsersRoute::new(
                $this->ilias_api
            ),
            GetCurrentApiUserRoute::new(
                $this->ilias_api
            ),
            GetCurrentWebUserRoute::new(
                $this->ilias_api
            ),
            GetUserByIdRoute::new(
                $this->ilias_api
            ),
            GetUserByImportIdRoute::new(
                $this->ilias_api
            ),
            UpdateAvatarByIdRoute::new(
                $this->ilias_api
            ),
            UpdateAvatarByImportIdRoute::new(
                $this->ilias_api
            ),
            UpdateUserByIdRoute::new(
                $this->ilias_api
            ),
            UpdateUserByImportIdRoute::new(
                $this->ilias_api
            ),

            GetUserFavouritesRoute::new(
                $this->ilias_api
            ),
            AddUserFavouriteByIdByObjectIdRoute::new(
                $this->ilias_api
            ),
            AddUserFavouriteByIdByObjectImportIdRoute::new(
                $this->ilias_api
            ),
            AddUserFavouriteByIdByObjectRefIdRoute::new(
                $this->ilias_api
            ),
            AddUserFavouriteByImportIdByObjectIdRoute::new(
                $this->ilias_api
            ),
            AddUserFavouriteByImportIdByObjectImportIdRoute::new(
                $this->ilias_api
            ),
            AddUserFavouriteByImportIdByObjectRefIdRoute::new(
                $this->ilias_api
            ),
            RemoveUserFavouriteByIdByObjectIdRoute::new(
                $this->ilias_api
            ),
            RemoveUserFavouriteByIdByObjectImportIdRoute::new(
                $this->ilias_api
            ),
            RemoveUserFavouriteByIdByObjectRefIdRoute::new(
                $this->ilias_api
            ),
            RemoveUserFavouriteByImportIdByObjectIdRoute::new(
                $this->ilias_api
            ),
            RemoveUserFavouriteByImportIdByObjectImportIdRoute::new(
                $this->ilias_api
            ),
            RemoveUserFavouriteByImportIdByObjectRefIdRoute::new(
                $this->ilias_api
            ),

            GetUnreadMailsCountByIdRoute::new(
                $this->ilias_api
            ),
            GetUnreadMailsCountByImportIdRoute::new(
                $this->ilias_api
            ),

            GetUserRolesRoute::new(
                $this->ilias_api
            ),
            AddUserRoleByIdByRoleIdRoute::new(
                $this->ilias_api
            ),
            AddUserRoleByIdByRoleImportIdRoute::new(
                $this->ilias_api
            ),
            AddUserRoleByImportIdByRoleIdRoute::new(
                $this->ilias_api
            ),
            AddUserRoleByImportIdByRoleImportIdRoute::new(
                $this->ilias_api
            ),
            RemoveUserRoleByIdByRoleIdRoute::new(
                $this->ilias_api
            ),
            RemoveUserRoleByIdByRoleImportIdRoute::new(
                $this->ilias_api
            ),
            RemoveUserRoleByImportIdByRoleIdRoute::new(
                $this->ilias_api
            ),
            RemoveUserRoleByImportIdByRoleImportIdRoute::new(
                $this->ilias_api
            )
        ];
    }
}
