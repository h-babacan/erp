<form method="post" action="{{ url('/register') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <label style="color: #ffffff">Name</label>
        <input type="text" name="name" class="form-control" placeholder="Name" />
    </div>
    <div class="form-group">
        <label style="color: #ffffff">Email</label>
        <input type="email" name="email" class="form-control" placeholder="email" />
    </div>
    <div class="form-group">
        <label style="color: #ffffff">Şifre</label>
        <input type="password" name="password" class="form-control" placeholder="şifre" />
    </div>
    <div class="form-group">
        <label style="color: #ffffff">Şifre</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="şifre tekrar" />
    </div>
    <div class="form-group">
        <input type="submit" name="register" class="btn btn-primary" value="Kaydet" />
    </div>
</form>
