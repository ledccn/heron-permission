<?php

namespace Heron\Permission;

/**
 * 用户对象接口
 */
abstract class UserAbstract implements IdentityInterface
{
    /**
     * 获取当前登录用户
     * @return null|object|\think\Model|\Illuminate\Database\Eloquent\Model
     */
    abstract public function getUser();
}
