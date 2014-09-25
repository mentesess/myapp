
<form class="form-signin" action="../control/test.php" method="post">
    <h2 class="form-signin-heading">İşçi Kayıt</h2>
    <!--<label>Kullanıcı Adı</label>-->
    <input class="form-control" type="text" name="userName" placeholder="Kullanıcı Adı" onkeyup="showHint(this.value)"/><span class="label-danger" id="txtHint"></span>
    <!--<label>İsim</label>-->
    <input class="form-control" type="text" name="name" placeholder="İsim">
    <!-- <label>Soyisim</label>-->
    <input class="form-control" type="text" name="surname" placeholder="Soyisim">
    <!--<label>Maaş</label>-->
    <input class="form-control" type="text" name="salary" placeholder="Maaş">
    <input class="btn btn-lg btn-primary btn-block" type="submit" value="Gönder"/>
</form>