<?php include  "header.php";?>
    <!-- page content -->

    <style>

    </style>
    <div class="border border-secondary border-top-0" style="background-color:#2a81c9;padding-top:100px;padding-bottom:50px;">
        <div class="container text-center " style="position:relative;">
            <div class="row px-2">
                <div class="col-md">

                </div>

                <div class="col-md-6 bg-light text-warning text-center rounded p-4 my-3 w-md-50 ">
                    <h3 class="py-2 font-weight-bold">أسم الفورمة </h3>
                    <hr class="py-1"> 
                    <form>
                    <div class="form-check form-check-inline m-0  pb-2" id="radiogroup">
                            <label class="form-check-label">
                                <input type="radio" name="dir" checked value="1"> متجه الي الكليه
                            </label>
                            <label class="form-check-label mx-2">
                                <input type="radio" name="dir" value="2" >متجه من الكليه
                            </label>
                        </div>
                        <div class="input-group">
                            <input type="text" class="form-control text-right" placeholder="وقت الوصول للكليه" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        
                            <span class="input-group-btn">
                            <input type="button" onclick="adddistrict()" class="btn btn-success" value="ضيف حي جديد">
                            </span>
                        </div>
                        <div id="districts">

                        </div>
                        <input type="hidden" value="0" name="districtcount" id="districtcount">
                        <br>
                        <button type="button" class="btn btn-success" ID="Button1">سجل المسار</button>
                    </form>
                </div>

                <div class="col-md">

                </div>
            </div>






        </div>
    </div>



    <script>
        count=0;

        /*
         <div class="input-group">
         <select><option>اختر الحي</option><option>الريان</option><option>االمنار</option></select>
         <input type="text" class="form-control text-right" placeholder="وقت المنطقه" aria-label="Recipient's username" aria-describedby="basic-addon2">
         </div>

         */
        function adddistrict() {
            debugger;
            var districtarr1=[];
            var districtarr2=[];
            for(i=1;i<=count;i++)
            {

                x="districtcombo_"+i.toString();
                y="districttime_"+i.toString();
                districtarr1.push($("#"+x).val());
                districtarr2.push($("#"+y).val());


            }
            $("#districts").empty();
            s="";
            count++;
            districtarr1.push("-1");
            districtarr2.push("");
            for(i=1;i<=count;i++)
            {
                s+='<div class="input-group my-2 "><div class="input-group-prepend"><input onclick="deletedistrict('+i+')" type="button" class="btn btn-danger" value="احذف الحي">';
                s+='<select id="districtcombo_'+i+'" name="districtcombo_'+i+'"> <option value="-1"';
                if(districtarr1[i-1]==-1){ s+="selected ";}
                s+='>الحى </option> <option value="1"';
                if(districtarr1[i-1]==1){ s+="selected ";}
                s+= '>el rayan';
                s+='</option> <option value="2"';
                if(districtarr1[i-1]==2) {s+="selected ";}
                s+= '>el manar'
                s+='</option></select></div>'
                s+='<input type="time" class="form-control text-right" value="'+districtarr2[i-1]+'" id="districttime_'+i+'" name="districttime'+i+'" placeholder="وقت الوصول للحي">';
                s+='<div class="input-group-append"><span class="input-group-text" >وقت وصول الحى</span><span class="input-group-text" >الحي '+i+'</span></div></div>';
            
            }
            $("#districts").html(s);
            $("#districtcount").val(count);

        }

        function deletedistrict(n)
        {
            debugger;
            var districtarr1=[];
            var districtarr2=[];
            for(i=1;i<=count;i++)
            {
                if(i!=n)
                {
                    x="districtcombo_"+i.toString();
                    y="districttime_"+i.toString();
                    districtarr1.push($("#"+x).val());
                    districtarr2.push($("#"+y).val());}
            }
            count--;
            $("#districts").empty();
            s="";
            for(i=1;i<=count;i++)
            {
                //      s+='<div class="form-group"><label>district '+i+'</label> <input class="form-control" value="'+districtarr[i-1]+'" id="district_'+i+'" name="district'+i+'" placeholder="district '+i+'"  /> <input onclick="deletedistrict('+i+')" type="button" class="btn btn-danger" value="Delete district"></div>'
               s+='<div class="input-group my-2 "><div class="input-group-prepend"><input onclick="deletedistrict('+i+')" type="button" class="btn btn-danger" value="احذف الحي">';
                s+='<select id="districtcombo_'+i+'" name="districtcombo_'+i+'"> <option value="-1"';
                if(districtarr1[i-1]==-1){ s+="selected ";}
                s+='>الحى </option> <option value="1"';
                if(districtarr1[i-1]==1){ s+="selected ";}
                s+= '>el rayan';
                s+='</option> <option value="2"';
                if(districtarr1[i-1]==2) {s+="selected ";}
                s+= '>el manar'
                s+='</option></select></div>'
                s+='<input type="time" class="form-control text-right" value="'+districtarr2[i-1]+'" id="districttime_'+i+'" name="districttime'+i+'" placeholder="وقت الوصول للحي">';
                s+='<div class="input-group-append"><span class="input-group-text" >وقت وصول الحى</span><span class="input-group-text" >الحي '+i+'</span></div></div>';
            
            }
            $("#districts").html(s);
            $("#districtcount").val(count);

        }

    </script>
<?php include  "footer.php";?>