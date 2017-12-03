
    <?php include "header.php" ?>
    <h2>Đổi mật khẩu</h2>

  <form class="form-horizontal" role="form" method="post" action="changePass.php">                             
    <div class="form-group">
          <label for="oldpass1" class="col-sm-3 control-label">Mật khẩu cũ</label>
        <div class="col-sm-4">
            <input type="password" name="oldpass" class="form-control" id="opass" placeholder="Mật khẩu cũ" required="">
        </div>
    </div>

    <div class="form-group">
        <label for="newpass1" class="col-sm-3 control-label">Mật khẩu mới</label>
            <div class="col-sm-4">
                <input type="password" name="newpass" class="form-control" id="npass" placeholder="Mật khẩu mới" required="">
            </div>
    </div>

    <div class="form-group">
        <label for="renewpass1" class="col-sm-3 control-label">Nhập lại mật khẩu mới</label>
            <div class="col-sm-4">
                <input type="password" name="renewpass" class="form-control" id="renpass" placeholder="Nhập lại mật khẩu mới" required="">
            </div>
    </div>
                        
    <div class="form-group last">
        <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-success btn-sm" name="submit">Đổi mật khẩu</button>
            <button type="reset" class="btn btn-default btn-sm">Reset</button>
        </div>
    </div>
</form>

    <?php include "footer.php" ?>