<?php include  "header.php";?>
    <!-- page content -->

    <style>
        thead,tbody,tfoot,tr,td{
            width:100% !important;
            white-space:nowrap;

        }
    </style>
    <div class="border border-secondary border-top-0" style="background-color:#b3ada9;padding-top:100px;padding-bottom:50px;">
        <div class="container text-right " style="position:relative;">
            <div class="row px-2">
                <div class="col-12 bg-light text-warning text-right rounded p-4 my-3 w-md-50 ">
                    <h3 class="py-2 font-weight-bold">جدول رحلاتي</h3>
                    <hr class="py-1">
                    <table id="myTable" class="table table-responsive table-bordered table-hover ">
                        <thead >
                        <tr>
                            <th>التفاصيل</th>
                            <th>اتجاه</th>
                            <th>وقت الوصول</th>
                            <th>وقت التحرك</th>
                            <th>نقطه البدايه</th>
                            <th>اليوم</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                                Explorer 4.0
                            </td>
                            <td>Win 95+</td>
                            <td> 4</td>
                            <td><a href="trip_edit.php">تعديل</a> </td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                                Explorer 5.0
                            </td>
                            <td>Win 95+</td>
                            <td>5</td>
                            <td>C</td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet
                                Explorer 5.5
                            </td>
                            <td>Win 95+</td>
                            <td>5.5</td>
                            <td>A</td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>التفاصيل</th>
                            <th>اتجاه</th>
                            <th>وقت الوصول</th>
                            <th>وقت التحرك</th>
                            <th>نقطه البدايه</th>
                            <th>اليوم</th>
                        </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>
    </div>


<?php include  "footer.php";?>