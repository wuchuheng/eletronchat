/** layuiAdmin.pro-v1.2.1 LPPL License By http://www.layui.com/admin/ */
;layui.define(["form"], function(e) {
    var t = layui.$
        ,$     = layui.$
      , i = (layui.layer,
    layui.laytpl,
    layui.setter,
    layui.view,
    layui.admin,
    layui.form)
      , a = t("body");
    $('h2').text(layui.cache.app_name);
    $('p').eq(0).text(layui.cache.app_des);
  $('#LAY-user-get-vercode').attr('src',layui.cache.rest_url + "/verCode");
    i.verify({
        nickname: function(e, t) {
            return new RegExp("^[a-zA-Z0-9_一-龥\\s·]+$").test(e) ? /(^\_)|(\__)|(\_+$)/.test(e) ? "用户名首尾不能出现下划线'_'" : /^\d+\d+\d$/.test(e) ? "用户名不能全为数字" : void 0 : "用户名不能有特殊字符"
        },
        pass: [/^[\S]{6,12}$/, "密码必须6到12位，且不能出现空格"]
    }),
    a.on("click", "#LAY-user-get-vercode", function() {
        t(this);
        this.src = layui.cache.rest_url +"/verCode/" + (new Date).getTime()
    }),
    e("user", {})
});
