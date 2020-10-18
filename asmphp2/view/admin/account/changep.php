<form method="POST" action="admin.php?ctrller=user&act=change">
        <table style="margin: 0 auto;">
            <tr>
                <td colspan="2" style="text-align: center;"><span style="font-weight:bold;font-size:30px;">Thay mật khẩu</span></td>
            </tr>
            <tr>
                <td>Tài khoản</td>
                <td><input class="inacc" type="text" name="username" size="20" value="<?php echo $_SESSION['admin'];?>"></td>
            </tr>
            <tr>
                <td>Mật khẩu cũ</td>
                <td><input class="inacc" type="password" name="opassword" size="20"></td>
            </tr>
            <tr>
                <td>Mật khẩu mới</td>
                <td><input class="inacc" type="password" name="npassword" size="20"></td>
            </tr>
            <tr>
                <td colspan="2" align="right"> <input name="btn_submit" class="btnacc" type="submit" value="Change"></td>
            </tr>
        </table>
    </form>