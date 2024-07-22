 $("#parentcatid").change(function () {
debugger;
            var Parentcat= $("#parentcatid").val();
			alert(Parentcat);
            $.ajax({
                type: 'POST',
                url: 'add',
                data: {"parentcat":Parentcat},
                success: function (res) {
                    if(res!="")
                    {
                        $('#subcat').html(res);
$('#subcat').material_select();

                    }
                }
            });
        });



  