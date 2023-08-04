<?php

namespace Heron\Permission;

/**
 * 统一权限认证接口
 */
interface AuthenticationInterface
{
    /**
     * 是否许可访问
     * @param IdentityInterface $user 想要访问资源的用户（the user that wants to access a resource）
     * @param string $resource 将要被访问的资源（the resource that is going to be accessed）
     * @param string $operation 用户对资源将要进行的操作（the operation that the user performs on the resource）
     * @param int $code 错误状态码
     * @param string $msg 错误提示语
     * @return bool
     */
    public static function canAccess(IdentityInterface $user, string $resource, string $operation = '', int &$code = 0, string &$msg = ''): bool;
}
