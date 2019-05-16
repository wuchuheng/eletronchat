<?php 
/* 
 *  Role 控制器服务层
 *  @author wuchuheng
 *  @data 2019/05/16
 *  @email wuchuheng@163.com
 *  @blog  www.wuchuheng.com
 */
namespace app\api\service;

use app\api\model\Member; 
use app\api\service\Base;
use think\Db;

class Role extends Base
{
    /**
     * 获取客服组数据树
     * @return obj
     */
    public function getAllUser()
    {
        $count = Member::count();
        $count_no_count = (new Member())->countNotBelong();
        $data[] = [
          'title'    => "所有({$count})",
          'id'       => 0,
          'spread'   => true,
          'parentId' => 0,
          'children' => [[
            'title'    => "未分组({$count_no_count})",
            'id'       => -1,
            'parentId' => 0-1 
          ]]
        ];
        return $data;
    } 

  
}

