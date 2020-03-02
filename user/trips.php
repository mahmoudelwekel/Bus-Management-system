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
                        <h3 class="py-2 font-weight-bold">جدول الرحلات </h3>
                        <hr class="py-1">
                    <table id="myTable" class="table table-responsive table-bordered table-hover ">
                        <thead >
                        <thead >
                        <tr>
                            <th>اتجاه</th>
                            <th>وقت الوصول</th>
                            <th>وقت التحرك</th>
                            <th>نقطه البدايه</th>
                            <th>اليوم</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>الي الكليه</td>
                            <td>10 صباحا</td>
                            <td>9 صباحا</td>
                            <td>حي العزيزيه</td>
                            <td>الاحد</td>
                        </tr>
                        <tr>
                            <td>من الكليه</td>
                            <td>3 مساء</td>
                            <td>2 مساء</td>
                            <td>حي العزيزيه</td>
                            <td>الاحد</td>
                        </tr>
                        </tbody>
                    </table>


                </div>
            </div>






        </div>
    </div>


    <script>

        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>


<?php include  "footer.php";?>