<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>月歌首页</title>
    <link rel="Shortcut Icon" href="<?php echo (H_UI_PATH); ?>favicon.ico" />
    <style>
      a:link {
          color:purple;
          text-decoration: none;
      }
      a:visited {
          color:purple;
          text-decoration: none;
      }
      a:hover {
          color:purple;
          text-decoration: none
      }
    </style>
</head>
<body>
<h><?php echo ($blogTitle); ?></h> <div style="float:right;" ><?php if(empty($user)): ?><a href="<?php echo U('Home/Login/login');?>">登录</a><?php endif; if(!empty($user)): echo ($user); endif; ?>&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Home/Register/register');?>">注册</a>&nbsp;&nbsp;<a href="<?php echo U('Home/Login/logout');?>">退出</a></div>
      <div>
          <h3>文章分类</h3>
          <table>
           <?php if(is_array($type)): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
                   <td><a href="<?php echo U('Home/SendBlog/showList',array( 'id' => $data['id']));?>"><?php echo ($data["category"]); ?></a></td>
               </tr><?php endforeach; endif; else: echo "" ;endif; ?>
          </table>
      </div>
       <?php echo ($rn[0]['id']); ?>
    <br/>
    <br/>
    <div style="position: absolute;left:200px;">
        <span style="font-size:26px;color:green;"> <?php echo ($words); ?></span>
    </div>
</body>
</html>