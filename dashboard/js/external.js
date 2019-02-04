$(document).ready(function() {
 setWebsite();
   detailContact(); 

});
function detailContact(){
             var data_member = $('#dbcontact').dataTable({
            "sAjaxSource": "includes/dbfetchdata.php?oper=SELECT_DETAILCONTACT",
            "bPaginate": true,
            "bLengthChange": true,
            "bFilter": true,
            "bSort": true,
            "bInfo": true,
            "bAutoWidth": false,
                "destroy":true,
                 "dom": 'Bfrtip',
            "buttons": [
             'pdf', 'print','pageLength'
                         ],
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
            "aoColumns": [
            {"sName": "sl_no","sWidth": "2%"},
            {"sName": "name","sWidth": "20%"},
            {"sName": "email","sWidth": "25%"},
            {"sName": "subject" ,"sWidth": "12%"},
            {"sName": "message" ,"sWidth": "12%"},
            {"sName": "date" ,"sWidth": "12%"},
             {"sName": "default","sWidth": "10%", "sDefaultContent": "<button class='btn btn-success btn-sm tooltips' onclick='showUserDtl(event)' title='View'><i class='fa fa-eye'></i></button> <button class='btn btn-danger btn-sm tooltips' onclick='deletedata(event)' title='Delete'><i class='fa fa-trash'></i></button>"},

            ]
            
    });
}

function setWebsite(){
    $("#WebSubmit").click(function(){
        var webimage = $("#webimage");
        var webname = $("#webname").val();
        var weblink = $("#weblink").val();
        var webdesc = $("#webdesc").val();
        console.log(webimage);
        if(webimage ==""){
            $("#webimageError").html("***Please Provide Website Image");
        }
        else if(webname ==""){
        $("#webnameError").html("***Please Provide Website Name");
        }
        else if(weblink ==""){
         $("#weblinkError").html("***Please Provide Website Link");
        }
        else if(webdesc ==""){
          $("#webdescError").html("***Please Provide Website Desc");  
        }
        else{
             $.ajax({
   url:"includes/dbfetchdata.php",
   method:"POST",
   data: {oper:"SETWEBSITEDATA",webimage:webimage,webname:webname,weblink:weblink,webdesc:webdesc},
   success:function(data)
   {
   
   }
  });
        }
    });
}
