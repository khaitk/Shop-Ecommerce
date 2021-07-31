<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Print</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript">
        $("#btnPrint").live("click", function () {
            var divContents = $("#dvContainer").html();
            var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<html><head><title>Hoá Đơn</title>');
            printWindow.document.write('<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">');
            printWindow.document.write('</head><body>');
            printWindow.document.write('<div class="container">');
            printWindow.document.write(divContents);
            printWindow.document.write('</div>');
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
        });
    </script>
</head>
<body>
<div class="container">
    <button type="button" class="btn btn-secondary" id="btnPrint">Print</button>
    <div id="dvContainer">
        <div class="row justify-content-center">

            <div class="col-sm-5">
                <table class="table">
                    <tr>
                        <td ><h6>Shop Vegetable</h6></td>
                        <td ><h6>Ngày : <?php echo date('Y-m-d');?></h6></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center"><h3>Hoá Đơn</h3></td>
                    </tr>

                    <tr>
                        <td>Họ Tên : </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Số điện thoại : </td>
                        <td>{{$bills->phone}}</td>
                    </tr>
                    <tr>
                        <td>Địa chỉ :  </td>
                        <td>{{$bills->address}}</td>
                    </tr>

                    <tr>
                        <td>Sản phẩm</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Tổng : </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center"><i>Cảm ơn quý khách rất nhiều !</i></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>
