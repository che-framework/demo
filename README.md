# demo
test library required by composer project

## required liabrary
```
"repositories": [
      {
          "packagist": false # 禁用官方仓库检索
      },
      {
          "type": "composer",
          "url": "http://packagist.che.com" # 私服仓库
      },
      {
          "type": "composer",
          "url": "https://packagist.phpcomposer.com" # 镜像仓库
      }
  ],
```

## test
```
php index.php

# 测试私服中的 library 引入
# "che/demo-lib": "dev-master"
this is rose flower
this is lily flower%    

# 测试公共仓库的 library 引入
# "monolog/monolog": "1.0.*"
在项目中输入 my.log 文件
```