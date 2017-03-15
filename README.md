# yunpian-sms
> 基于laravel5.1.*以上版本的系统集成短信发送功能。

## 安装

1. 安装包文件

在composer.json 加入
  ```shell
  "xiaolong/yunpian-sms":"dev-master"
  ```

## 配置

### Laravel 应用

1. 注册 `ServiceProvider`:

  ```php
  XiaoLong\YunpianSMS\YunpianSMSServiceProvider::class,
  ```

2. 创建配置文件：

  ```shell
  php artisan vendor:publish
  ```

3. 请修改应用根目录下的 `config/yunpian.php` 中对应的项即可；

4. （可选）添加外观到 `config/app.php` 中的 `aliases` 部分:

  ```php
  'YunpianSMS' => XiaoLong\YunpianSMS\Facades\YunpianSMS::class,
  ```
  
5. 在 ENV 中配置以下选项：

  ```php
  SMS_API_KEY=xxx
  SMS_SEND_URL=xxx
  ```
  
6.使用

  ```php
  /*
  * 手机号
  * 短信模板
  */
  \YunpianSMS::sendSMS('183xxxx1235',"【xxx】短信内容");
  ```
  
## License

MIT