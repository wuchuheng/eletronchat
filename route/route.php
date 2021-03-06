<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

//api 后台模式菜单
Route::group('api/:version', function(){
  //自动切换模式
  Route::get('/menu', 'api/:version.Menu/list');
  //管理模式和客服模式选择
  Route::get('/menu/:mode',  'api/:version.Menu/list');
});

//api 客服管理
Route::Group('api/:version', function(){
  //客服分类目录树
  Route::get('/group', 'api/:version.Role/getAllGroup');
  //客服分类目录树
  Route::post('/group', 'api/:version.Role/addNode');
  //修改节点
  Route::put('/group', 'api/:version.Role/editNode');
  //删除节点
  Route::delete('/group', 'api/:version.Role/delNode');
});

//权限管理
Route::Group('api/:version', function(){
  //所有权限角色列表
  Route::get('/roleList', 'api/:version.Role/getRoleList');
  //单个角色权限目录树
  Route::get('/roleList/:id', 'api/:version.Role/getRoleById');
  //更新角色
  Route::put('/roleList/:id', 'api/:version.Role/uploadRoleById');
});

//成员管理
Route::Group('api/:version', function(){
  //添加成员
  Route::post('/members', 'api/:version.Role/addMember');
  //读取成员
  Route::get('/members', 'api/:version.Role/getMembers');
  //修改成员
  Route::put('/members/:uid', 'api/:version.Role/editMember');
  //删除成员
  Route::delete('/members/:uid', 'api/:version.Role/del');
});
//获取token
Route::Group('api/:version', function(){
  //获取token
  Route::get('/token', 'api/:version.Token/getToken');
  //获取验证码
  Route::get('/verCode/:time', 'api/:version.Token/getVerCode');
  //登出
  Route::put('/logout', 'api/:version.Token/logout');
});

//上传
Route::post('api/:version/upload', 'api/:version.');

return [

];
