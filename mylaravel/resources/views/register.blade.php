@extends('layouts.default')

@section('content')
<div class="register-page ">
    <div class="register-box">
        <!-- /.register-logo -->
        <div class="card card-outline card-primary">
          <div class="card-header">
            <a
              href="../index2.html"
              class="link-dark text-center link-offset-2 link-opacity-100 link-opacity-50-hover"
            >
              <h1 class="mb-0"><b>Admin</b>LTE</h1>
            </a>
          </div>
          <div class="card-body register-card-body">
            <p class="register-box-msg">Register a new membership</p>
            <form action="{{ url('/register') }} " onsubmit="return myfunction();"  method="post">
                @csrf
              <div class="input-group mb-1">
                <div class="form-floating">
                  <input  type="text" name="name" id="name" class="form-control" placeholder="" />
                  <label for="registerFullName">Full Name</label>
                </div>
                <div class="input-group-text"><span class="bi bi-person"></span></div>
                <div class="valid-feedback">
                    ok
                </div>
                <div class="invalid-feedback" id="invalid-name">
                    กรุณาระบุข้อมูล name
                </div>
              </div>
              <div class="input-group mb-1">
                <div class="form-floating">
                  <input  type="email" name="email" id="email" class="form-control" placeholder="" />
                  <label for="registerEmail">Email</label>
                </div>
                <div class="input-group-text"><span class="bi bi-envelope"></span></div>
                <div class="valid-feedback">
                    ok
                </div>
                <div class="invalid-feedback" id="invalid-email">
                    กรุณาระบุข้อมูล email
                </div>
              </div>
              <div class="input-group mb-1">
                <div class="form-floating">
                  <input  type="password" name="password" id="pass" class="form-control" placeholder="" />
                  <label for="registerPassword">Password</label>
                </div>
                <div class="input-group-text"><span class="bi bi-lock-fill"></span></div>
                <div class="valid-feedback">
                    ok
                </div>
                <div class="invalid-feedback" id="invalid-pass">
                    กรุณาระบุข้อมูล pass
                </div>
              </div>
              <!--begin::Row-->
              <div class="row">
                <div class="col-8 d-inline-flex align-items-center">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                    <label class="form-check-label" for="flexCheckDefault">
                      I agree to the <a href="#">terms</a>
                    </label>
                    <div class="valid-feedback">
                        ok
                    </div>
                    <div class="invalid-feedback" id="invalid-checkbox">
                        กรุณาระบุข้อมูล pass
                    </div>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-4">
                  <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Sign In</button>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!--end::Row-->
            </form>
            <div>
                <button class="btn" onclick="myfunction()">Click Me</button>
            </div>
          </div>
          <!-- /.register-card-body -->
        </div>
      </div>
      <!-- /.register-box -->
</div>
@endsection

@section('script')
<script>
    let $myval1
    var $myval2 ="value of myval2"


    console.log("Hello world");
    //alert("Hello world");
   //ALERT("Hello world");
   function myfunction(){
    let name = document.getElementById('name');
    name = $('#name')
    let email = document.getElementById('email');
    email = $('#email')
    let pass = document.getElementById('pass');
    pass = $('#pass')

    let mycheckbox = $('#flexCheckDefault');
    //name.val("My Name Value")
    console.log(name.val(), email.val(), pass.val(), mycheckbox.is(':checked'));
    if(name.val().trim() === ""){
        name.addClass('is-invalid');
        $('#invalid-name').html("กรุณากรอกข้อมูล");
        $('#invalid-name').show();
        return false;
    }else{
       name.removeClass('is-invalid');$('#invalid-name').hide();
    }
    let emailValue = email.val().trim();
    if (emailValue === "") {
        email.addClass('is-invalid');
        $('#invalid-email').html("กรุณากรอกอีเมล");
        $('#invalid-email').show();
        return false;
    } else if (emailValue.indexOf('@') === -1 || emailValue.indexOf('.') === -1) {
        email.addClass('is-invalid');
        $('#invalid-email').html("กรุณากรอกอีเมลที่ถูกต้อง");
        $('#invalid-email').show();
        return false;
    } else {
        email.removeClass('is-invalid');
        $('#invalid-email').hide();
    }

    let passValue = pass.val().trim();
    let passRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/;  // ตรวจสอบตัวอักษรพิมพ์เล็ก, พิมพ์ใหญ่, ตัวเลข
    if (passValue === "") {
        pass.addClass('is-invalid');
        $('#invalid-pass').html("กรุณากรอกรหัสผ่าน");
        $('#invalid-pass').show();
        return false;
    } else if (!passRegex.test(passValue)) {
        pass.addClass('is-invalid');
        $('#invalid-pass').html("รหัสผ่านต้องมีตัวอักษรพิมพ์เล็ก, ตัวอักษรพิมพ์ใหญ่ และตัวเลข");
        $('#invalid-pass').show();
        return false;
    } else {
        pass.removeClass('is-invalid');
        $('#invalid-pass').hide();
    }

    if (!mycheckbox.is(":checked")) {
        // หากไม่ติ๊กให้แสดงข้อความผิดพลาด
        $('#invalid-checkbox').html("กรุณายอมรับเงื่อนไข");
        $('#invalid-checkbox').show();
        return false;
    } else {
        // หากติ๊กแล้ว ให้ซ่อนข้อความผิดพลาด
        $('#invalid-checkbox').hide();
    }


    return true;
}

</script>
@endsection
