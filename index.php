<?php include  "header.php";?>
<!-- page content -->

<style>

</style>
<div class="border border-secondary border-top-0" style="background-color:#b3ada9;padding-top:100px;padding-bottom:50px;">
    <div class="container text-center " style="position:relative;">
  <div class="row px-2">
      <div class="col-md">
    
      </div>

      <div class="col-md-6 bg-light text-warning text-center rounded p-4 my-3 w-md-50 ">
    <h3 class="py-2 font-weight-bold">تسجيل الدخول</h3>
    <hr class="py-1">

    <div class="form-check form-check-inline m-0  pb-1">
                            <label class="form-check-label">
                                <input class="form-check-input" type="radio" name="usertype" checked  value="2"> مدير
                            </label>
                            <label class="form-check-label mx-2">
                                <input class="form-check-input" type="radio" name="usertype"  value="1"> طالبة
                            </label>
                            <label class="form-check-label mx-2">
                                <input class="form-check-input" type="radio" name="usertype"  value="1"> سائق
                            </label>
                            <label class="form-check-label mx-2">
                                <input class="form-check-input" type="radio" name="usertype"  value="1"> مسؤل سائقين
                            </label>
                        </div> 


    <div class="input-group">
      <input type="text"  class="form-control text-right" placeholder="أكتب أكتب أكتب " aria-label="Search for...">
      <span class="input-group-btn">
      </span>
    </div>
<br>
    <div class="input-group">
      <input type="text"  class="form-control text-right" placeholder="أكتب أكتب أكتب " aria-label="Search for...">
      <span class="input-group-btn">
      </span>
    </div>
    <br>
          <a href="user" class="btn btn-primary" ID="Button1">الدخول كزائر</a>
          <button type="button" class="btn btn-success" ID="Button1">دخول</button>


</div>

      <div class="col-md">
      
      </div>
  </div>






    </div>
</div>


<script>

</script>


<?php include  "footer.php";?>