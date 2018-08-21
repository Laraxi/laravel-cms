<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta name="description" content="Responsive Admin Template"/>
    <meta name="author" content="SmartUniversity"/>
    <title>登录</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css"/>
    <!-- icons -->
    <link href="/admin/ThirdParty/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet" href="/admin/ThirdParty/assets/plugins/iconic/css/material-design-iconic-font.min.css">
    <!-- bootstrap -->
    <link href="/admin/ThirdParty/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <!-- style -->
    <link rel="stylesheet" href="/admin/ThirdParty/assets/css/pages/extra_pages.css">
    <!-- favicon -->
    <link rel="shortcut icon" href="/admin/ThirdParty/assets/img/favicon.ico"/>
</head>
<body>
<div class="limiter">
    <div class="container-login100 page-background">
        <div class="wrap-login100">
            <form class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-flower"></i>
					</span>
                <div class="wrap-input100 validate-input" data-validate="Enter username">
                    <input class="input100" type="text" id="username" name="username" placeholder="用户名">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" id="password" type="password" name="password" placeholder="密码">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" id="login" type="button">
                        登录
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- start js include path -->
<script src="/admin/ThirdParty/assets/plugins/jquery/jquery.min.js"></script>
<!-- bootstrap -->
<script src="/admin/ThirdParty/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/admin/ThirdParty/assets/js/pages/extra_pages/login.js"></script>
<!-- end js include path -->
</body>
</html>
<script>
    $('#login').click(function () {
        var username = $('#username').val();
        var password = $('#password').val();
        $.ajax({
                url: '/admin/login',
                type: 'post',
                data: {username: username, password: password,_token:"{{csrf_token()}}"},
                dataType: 'json',
                cache: false,
                success: function (data) {
                    console.log(data);
                    if (data.code == 0) {
                        alert(data.message);
                        location.href = '/admin/index';
                    } else {
                        alert(data.message);
                        return false;
                    }
                },
                error: function (xhr, error) {
                    alert('网络错误');
                }
            }
        );
    });
</script>