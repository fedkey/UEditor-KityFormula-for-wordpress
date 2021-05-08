### 基本信息
UEditor-KityFormula for wordpress基于Ueditor,UEditor 是由百度「FEX前端研发团队」开发的所见即所得富文本web编辑器，轻量，可定制，用户体验好。本插件将wordpress与ueditor编辑器尝试整合,并集成了KityFormula数学公式插件,无论是专心于写博客的普通人还是精于数学研究的各类人才，使用该插件都将获得很好的体验。

* 分类：后台编辑器
* 开发语言： php
* 开放协议：GPLv2 or later
* 使用场景： wordpress

### 功能
1. 文本文字编辑功能
2. 百度地图
3. 集成KityFormula,可轻松添加各式数学公式
4. 所有ueditor功能

### 更新历史：

####  版本： 2.0.1            2016-11-6发布

####  版本： 2.0.2           2017-02-23发布

自从UEditor-KityFormula-for-wordpress 2.0.1版本发布以来，用户反应较好，对某些使用者提出的没有百度地图、google地图及iframe,2.0.2版本进行了补充。现已发布，不过谷歌地图由于某些原因，国内应用不了，需要使用vpn，建议使用百度地图。

说明：http://www.yangshengliang.com/kaiyuan-shijie/zuopin/678.html


#### 版本：  2.0.3         发布时间：2017-12-10

##### 更新/修复内容
1. 开放所有的按钮<br />
2. 解决上传视频文件，视频地址被清空的bug<br />
3. 解决无法使用iframe问题<br />
4. 解决百度动态地图无法插入<br />
5. 随百度ueditor官方修复了一些安全漏洞<br />

#### 版本: 2.04 发布时间 2021-5-8
1. 增加图片删除功能; 
2. 登陆用户验证,非登陆用户禁止使用插件直接访问,增强安全性
3. 修复不能插入锚点的问题(ueditor本身bug)
4. 修复部带多种html格式后不能直接复制粘贴进编辑器的问题
5. 修复全屏编辑被wordpress左侧导航栏遮挡问题
6. 修复百度地图在https不能显示的问题,并升级到api2.0,内置了我的ak,配置有限,为不影响使用,实际应用中请修改成自己的,修改方法见下面的教程



### 安装方法

#### 一：git方式

1. 切换到wordpress网站根目录
2. git clone http://git.oschina.net/fedkey/UEditor-KityFormula-for-wordpress wp-content/plugins/UEditor-KityFormula-for-wordpress
3. 到网站后台启用 [UEditor-KityFormula-for-wordpress] 插件

#### 二：zip方式
1、 访问： http://git.oschina.net/fedkey/UEditor-KityFormula-for-wordpress 左上角找到 zip下载按钮,如下图所示：

![zip压缩包下载指南](http://git.oschina.net/uploads/images/2017/0223/105152_be575a94_322734.png "在这里输入图片标题")


2、 登陆wordpress后台，用上传插件的方式进行安装，并启用。

## 获取百度地图ak的方法
第一步: 注册百度账号并登陆 https://lbsyun.baidu.com/
第二步: 实名认证
第三步：创建应用
第四步：设置应用的api调用权限
第五步：获取ak，并填写到插件中,位置为：该插件目录/ueditor/dialogs/map/show.html和 map.html,使用自己的ak替换掉我的即可
