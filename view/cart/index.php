

        <!-- Single Page Header start -->
        <div class="container-fluid page-header py-5">
            <h1 class="text-center text-white display-6">Cart</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Cart</li>
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
                                foreach($listGH as $item){
                            ?>
                            <tr data-id="<?=$item['id']?>">
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
                                    <button class="btn btn-md rounded-circle bg-light border mt-4" >
                                        <i class="fa fa-times text-danger"></i>
                                    </button>
                                </td>
                            
                            </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
                                    <?php //var_export($listGH) ?>
                <div class="row g-4 justify-content-end">
                    <div class="col-8"></div>
                    <div class="col-sm-8 col-md-7 col-lg-6 col-xl-4">
                        <div class="bg-light rounded">
                            <div class="p-4">
                                <h1 class="display-6 mb-4">Thanh toán</h1>
                                <div class="d-flex justify-content-between mb-4">
                                    <h5 class="mb-0 me-4">Tổng giá:</h5>
                                    <p id="cart-subtt" class="mb-0">0</p>
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
                                <span id="cart-total" class="mb-0 pe-4">0</span>
                            </div>
                            <a href="index.php?act=checkout" class="btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4">Thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart Page End -->
<script>
    document.addEventListener("DOMContentLoaded", function  (){
        let qtyInp =document.querySelectorAll('.quantity-input')

        qtyInp.forEach(inp => {
            inp.addEventListener('input', function  () {
                let qty =parseInt((inp.value))
                let row = inp.closest('tr')
                let price =parseFloat(row.querySelector('#pr').getAttribute('data-price'))
                let total = row.querySelector('#tot');
                let newTT =price *qty
                total.textContent = newTT.toString()+' VND';
                total.setAttribute('data-total',newTT)

                updateTotal()

                let itemID = row.getAttribute('data-id')
                updItem(itemID,qty)
            });
    })
let TTItem =document.querySelectorAll('#tot')
        console.log(TTItem);
    let updateTotal = () => {
        let subtt =0


        TTItem.forEach(item=>{
            subtt += parseFloat(item.getAttribute('data-total'))
        })
        let shipFee = 20000;
        //update this fee later

        let total =subtt + shipFee
        document.getElementById("cart-subtt").textContent = subtt.toString()+' VND';
        document.getElementById("cart-total").textContent = total.toString()+' VND';

    }
    let updItem = (id,qty)=>{
        //trong fetch ghi lệnh update lên db qua ctl và model
        fetch(`?act=updGH&id=${id}&qty=${qty}`,{method:'GET'})
        .then(response=>response.json())
        .then(data=>{
            if(data.success){
                console.log("cart updated successfully");
            }
        })
        .catch(error=>console.error('Error:',error));
    }})
</script>

       