# 是什么
是一个把 {{ mustache }} 模板引擎作为 Slim 框架后台的种子项目。
# 安装Slim
```

composer require slim/slim

```

# 配置个测试路由
省略了。
# 配置mustache
https://github.com/danjam/slim-mustache-view

```

composer require danjam/slim-mustache-view

```

这个包是基于 [mustache.php](https://github.com/bobthecow/mustache.php) 的。

# Design

https://startbootstrap.com/template-overviews/sb-admin/

https://blackrockdigital.github.io/startbootstrap-sb-admin-2/pages/index.html

http://demo.patternlab.io/

# Git
```

git remote add origin https://github.com/suifengtec/slim-bootstrap-dashboard
git remote -v
git remote rm origin
git remote add origin https://github.com/suifengtec/slim-bootstrap-dashboard

git pull origin master

//看到
fatal: refusing to merge unrelated histories

git push origin master
//看到
... See the 'Note about fast-forwards' in 'git push --help' for details.

//执行
git pull origin master --allow-unrelated-histories

git push origin master
```
