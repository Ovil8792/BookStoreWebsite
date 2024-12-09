

        <!-- Single Page Header start -->
        <div class="container-fluid page-header py-5" style="background: url(../assets/img/img.webp) !important;">
            <h1 class="text-center" style="font-size:4rem;color:black;">Giỏ hàng</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-ite me-2 mt-1 fs-5 fw-boldm"><a href="index.php">Trang chủ</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> --><span class="text-white fs-3 ">/ </span>
                <li class="breadcrumb-item active ms-2 mt-1 fs-5 fw-bold" style="color:black!important;"> Giỏ hàng</li>
            </ol>
        </div>
        <!-- Single Page Header End -->


        <!-- Cart Page Start -->
        <div class="container-fluid py-5">
            <div class="container py-5">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Ảnh sản phẩm</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Tổng giá</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                            // var_export($_SESSION['gioHang']);
                            // var_export($listGH[0]);
                                foreach($listGH as $key=> $item){
                            ?>

                            <tr class="cart-row" data-id="<?=$item['id']?>">
                                <th scope="row">
                                    <div class="d-flex align-items-center">
                                        <img src="/admin/uploads/<?=$item['anh_sp']?>" class="img-fluid me-5 rounded-circle" style="width: 80px; height: 80px;" alt="">
                                    </div>
                                </th>
                                <td>
                                    <p class="mb-0 mt-4"><?=$item['ten_sp']?></p>
                                </td>
                                <td >
                                    <p id="pr" data-price="<?=$item['gia']?>" class="mb-0 mt-4"><?=number_format($item['gia'],0,",",".")?></p>
                                </td>
                                <td>
                                    <div class="input-group quantity mt-4" style="width: 100px;">
                                        <!-- <div class="input-group-btn">
                                            <button class="btn btn-sm btn-minus rounded-circle bg-light border" >
                                            <i class="fa fa-minus"></i>
                                            </button>
                                        </div> -->
                                        <input type="number" min="1" class="quantity-input form-control form-control-sm text-center border-0" value="<?=$item['soLuong']?>">
                                        <!-- <div class="input-group-btn">
                                            <button class="btn btn-sm btn-plus rounded-circle bg-light border">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div> -->
                                    </div>
                                </td>
                                <td>
                                    <p id="tot" data-total="<?=$item['gia']*$item['soLuong']?>" class="mb-0 mt-4"><?=number_format($item['gia'] * $item['soLuong'])?> VND</p>
                                </td>
                                <td>
                                    <a href="index.php?act=delGH&id=<?=$key?>" class="btn btn-md rounded-circle bg-light border mt-4" >
                                        <i class="fa fa-times text-danger"></i>
                                </a>
                                </td>
                            
                            </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
                                    <?php //var_export($listGH) ?>
                <div class="row g-4 justify-content-end">
                    <div class="col-8">
                        <a href="index.php?act=shop" class="btn btn-primary rounded-pill px-4 py-3 text-uppercase mb-4">Tiếp tục mua hàng</a>
                    </div>
                    <div class="col-sm-8 col-md-7 col-lg-6 col-xl-4">
                        <div class="bg-light rounded">
                            <div class="p-4">
                                <h1 class="display-6 mb-4">Thanh toán</h1>
                                <div class="d-flex justify-content-between mb-4">
                                    <h5 class="mb-0 me-4">Tổng giá:</h5>
                                    <p id="cart-subtt" class="mb-0"></p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <h5 class="mb-0 me-4"></h5>
                                    <div class="">
                                        <p class="mb-0"></p>
                                    </div>
                                </div>
                                <p class="mb-0 text-end">Phí ship: 20.000 VND</p>
                            </div>
                            <div class="py-4 mb-4 border-top border-bottom d-flex justify-content-between">
                                <h5 class="mb-0 ps-4 me-4">Tổng:</h5>
                                <span id="cart-total" class="mb-0 pe-4"></span>
                            </div>
                            <a href="index.php?act=checkout" id="checkout-button" class="btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4">Thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Page End -->
<script>

//     document.addEventListener("DOMContentLoaded", ()=>{
//         let qtyInputs =document.querySelectorAll('.quantity-input')
//         let stt =  document.querySelector('#cart-subtt')
//     let ctt = document.querySelector('#cart-total')
// // let TTItem =document.querySelectorAll('#tot')

// let updateRowTT = (row,qty)=>{
//     let price =parseInt(row.querySelector('#pr').getAttribute('data-price'));
//     let total = row.querySelector('#tot')
//     let newTota = price*qty
//     total.textContent = newTota.toString();
//     total.setAttribute('data-total',newTota)
// }
// let updateCTT = ()=>{
//     let subtt = 0
//     document.querySelectorAll('#tot').forEach(item=>{
//         subtt += parseInt(item.getAttribute('data-total'))
//     })
//     let tota = subtt+ 20000;

//     stt.textContent = subtt.toString()+" VND";
//     ctt.textContent = tota.toString()+" VND";
// }
// qtyInputs.forEach(input=>{
//     input.addEventListener('input',(event)=>{
//         let inpEl = event.target
//         let rows = inpEl.closest('tr')
//         if(rows){
//             let qty = parseInt(inpEl.value)
//             if(qty>0){
//             updateRowTT(rows,qty)
//             updateCTT()
//             }
//         }
//     })
// })
// updateCTT();
// })







document.addEventListener("DOMContentLoaded", () => {
    // Lấy nút "Thanh toán"
    const checkoutButton = document.querySelector("#checkout-button"); // Thay bằng id thực tế
    checkoutButton.addEventListener("click", (event) => {
        event.preventDefault(); // Ngăn chuyển trang mặc định

        // Thu thập dữ liệu giỏ hàng
        const cartItems = [];
        document.querySelectorAll("tr.cart-row").forEach((row) => {
            const productId = row.getAttribute("data-id");
            const quantity = row.querySelector(".quantity-input").value;
            const price = row.querySelector("#pr").getAttribute("data-price");
            const total = row.querySelector("#tot").getAttribute("data-total");

            cartItems.push({
                id: productId,
                quantity: parseInt(quantity),
                price: parseInt(price),
                total: parseInt(total),
            });
        });

        // Gửi AJAX request
        fetch("/controller/checkout-handler.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify({
                cart: cartItems,
            }),
        })
        .then((response) => response.json())
        .then((data) => {
            if (data.success) {
                // Chuyển hướng tới trang thanh toán
                window.location.href = "";
            } else {
                alert("Thanh toán thất bại! Vui lòng thử lại.");
            }
        })
        .catch((error) => console.error("Lỗi khi gửi dữ liệu:", error));
    });
});



</script>

       