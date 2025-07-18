# 使用 Authentik 登录
当您想使用 Authentik 登录皮肤站时，可以使用本插件能让现有用户进行这样的操作。

## 使用方法

本插件没有配置页面，所有配置通过修改 `.env` 来进行。

1. 在 你的Authentik 创建 OAuth 2 应用
2. 增加三条配置项， `AUTHENTIK_BASE_URL`、 `AUTHENTIK_CLIENT_ID`、 `AUTHENTIK_CLIENT_SECRE`、 `AUTHENTIK_REDIRECT_URI`
3. 将  `你Authentik的地址`、  `客户端 ID`、  `客户端 Secret`、  `重定向 URI` 分别填入 `AUTHENTIK_BASE_URL`、 `AUTHENTIK_CLIENT_ID`、 `AUTHENTIK_CLIENT_SECRE`、 `AUTHENTIK_REDIRECT_URI`

## 示例

```
AUTHENTIK_BASE_URL=https://authentik.company/
AUTHENTIK_CLIENT_ID=1
AUTHENTIK_CLIENT_SECRE=xxxxx
AUTHENTIK_REDIRECT_URI=https://skin.blessingskin/auth/login/authentik/callback
```
