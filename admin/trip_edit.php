<?php include  "header.php";?>
    <!-- page content -->

    <style>

    </style>
    <div class="border border-secondary border-top-0" style="background-color:#2a81c9;padding-top:100px;padding-bottom:50px;">
        <div class="container text-center " style="position:relative;">
            <div class="row px-2">
                <div class="col-md">

                </div>

                <div class="col-md bg-light text-warning text-center rounded p-4 my-3 w-md-50 ">
                    <h3 class="py-2 font-weight-bold text-warning">أسم الفورمة </h3>
                    <hr class="py-1">

                    <form class="text-right">
                        <div class="input-group">
                            <select name="day_no" class="btn btn-secondary w-100 my-1">
                                <option value="-1">اختر يوم الاسبوع</option>
                                <option value="1">السبت</option>
                                <option value="2">الاحد</option>
                                <option value="3">الاثنين</option>
                                <option value="4">الثلاثاء</option>
                                <option value="5">الاربع</option>
                                <option value="6">الخميس</option>
                                <option value="7">االجمعه</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <select name="bus" class="btn btn-secondary w-100 my-1">
                                <option value="-1">اختر رقم الحافله</option>
                                <option value="1">123</option>
                                <option value="2">232</option>
                                <option value="3">333</option>
                                <option value="4">555</option>
                                <option value="5">111</option>
                                <option value="6">222</option>
                                <option value="7">334</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <select name="line" class="btn btn-secondary w-100 my-1">
                                <option value="-1">اختر مسار الرحله</option>
                                <option value="1">123</option>
                                <option value="2">232</option>
                                <option value="3">333</option>
                                <option value="4">555</option>
                                <option value="5">111</option>
                                <option value="6">222</option>
                                <option value="7">334</option>
                            </select>
                        </div>
                        <br>
                    </form>
                    <button type="button" class="btn btn-success" ID="Button1">submit</button>


                </div>

                <div class="col-md">

                </div>
            </div>






        </div>
    </div>


    <script>

    </script>


<?php include  "footer.php";?>