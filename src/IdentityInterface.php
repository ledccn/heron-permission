<?php

namespace Heron\Permission;

/**
 * 用户身份接口
 */
interface IdentityInterface
{
    /**
     * 获取 ID
     * @return string|null
     */
    public function getId(): ?string;

    /**
     * 是否未登录
     * @return bool
     */
    public function isGuest(): bool;
}
