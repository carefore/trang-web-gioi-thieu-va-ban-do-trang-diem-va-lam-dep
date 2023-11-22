$(document).ready(function(){
    // Xử lý khi form được submit
    $("#addProductForm").submit(function(event){
        event.preventDefault();

        // Lấy giá trị từ form
        var productName = $("#productName").val();
        var productPrice = $("#productPrice").val();

        // Gửi dữ liệu đến server để xử lý và lưu vào cơ sở dữ liệu
        $.ajax({
            type: "POST",
            url: "process.php",
            data: { 
                productName: productName, 
                productPrice: productPrice 
            },
            success: function(data){
                // Hiển thị thông báo
                alert("Sản phẩm đã được thêm thành công!");

                // Hiển thị sản phẩm trong danh sách
                $("#products").append("<li><strong>" + productName + "</strong> - $" + productPrice + "</li>");

                // Reset form
                $("#addProductForm")[0].reset();
            }
        });
    });
});
