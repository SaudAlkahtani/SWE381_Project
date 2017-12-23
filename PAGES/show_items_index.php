<html>
<head>
    <title>Live Table Data Edit</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <br />
    <br />
    <br />
    <div class="table-responsive " >
        <div style = 'background-color: black; color: white; padding-bottom: 20px; padding-top: 20px;'><h1  align="center">MY Items Table<h6 style="text-align: center">in this table you can add, edit, delete directley</h6>  </h1></div><br/>
        <div id="live_data"></div>
    </div>
</div>
<div>
    <script>
        $(document).ready(function(){
            function fetch_data()
            {
                $.ajax({
                    url:"../page_parts/Show_Items_System/select.php",
                    method:"POST",
                    success:function(data){
                        $('#live_data').html(data);
                    }
                });
            }
            fetch_data();
            $(document).on('click', '#btn_add', function(){
                var img = $('#img').image();
                var name = $('#name').text();
                var discription = $('#discription').text();
                var price = $('#price').text();
                if(img == null)
                {
                    alert("no img");
                    return false;
                }
                if(name == '')
                {
                    alert("Enter Name");
                    return false;
                }
                if(discription == '')
                {
                    alert("Enter discription");
                    return false;
                }
                if(price == '')
                {
                    alert("Enter price");
                    return false;
                }
                $.ajax({
                    url:"../page_parts/Show_Items_System/insert.php",
                    method:"POST",
                    data:{img:img, name:name,discription:discription,price:price},
                    dataType:"text",
                    success:function(data)
                    {
                        alert(data);
                        fetch_data();
                    }
                })
            });
            function edit_data(id, text, column_name)
            {
                $.ajax({
                    url:"../page_parts/Show_Items_System/edit.php",
                    method:"POST",
                    data:{id:id, text:text, column_name:column_name},
                    dataType:"text",
                    success:function(data){
                        alert(data);
                    }
                });
            }
            $(document).on('blur', '.name', function(){
                var id = $(this).data("id1");
                var name = $(this).text();
                edit_data(id, name, "name");
            });
            $(document).on('blur', '.discription', function(){
                var id = $(this).data("id2");
                var discription = $(this).text();
                edit_data(id,discription, "discription");
            });
            $(document).on('blur', '.price', function(){
                var id = $(this).data("id2");
                var price = $(this).text();
                edit_data(id,price, "price");
            });

            $(document).on('click', '.btn_delete', function(){
                var id=$(this).data("id4");
                if(confirm("Are you sure you want to delete this?"))
                {
                    $.ajax({
                        url:"../page_parts/Show_Items_System/delete.php",
                        method:"POST",
                        data:{id:id},
                        dataType:"text",
                        success:function(data){
                            alert(data);
                            fetch_data();
                        }
                    });
                }
            });
        });

    </script>
</div>
</body>

</html>
