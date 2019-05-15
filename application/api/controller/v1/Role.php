<?php 
/**
 * 客服用户管理
 * @name    wuchuheng
 * @email   wuchuehng@163.com
 * @data    2019/05/13
 * @blog    www.wuchuheng.com
 */
namespace app\api\controller\v1;

use app\api\service\Role as RoleService;
 
class Role extends Base
{
    /**
     * 获取客服所有分类
     * @url     /api/v1/group
     * @http    get
     * @return  json
     **/ 
    public function getAllGroup()
    {
        $result = (new RoleService())->getAllUser();
        dump($result->isEmpty());
    }


    /**
     * 获取单组用户详情
     * @id=0 代表所有用户 
     * @id=-0 代表未分组用户
     *
     */
    

}

