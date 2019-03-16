<?php
    session_start();
    
    if( isset( $_GET['id_sanpham'])  ){
        $id_sanpham = $_GET['id_sanpham'];
        if(array_key_exists($id_sanpham,$_SESSION['giohang'])){
            unset($_SESSION['giohang'][$id_sanpham]);
        }
    }
 ?>

    <h3>Your Cart</h3>
    <div class="cart-table-warp">
        <table>
        <thead>
            <tr>
                <th class="product-th">Product</th>
                <th class="quy-th">Quantity</th>
                <th class="total-th">Price</th>
                <th class="total-th">Delete</th>
            </tr>
        </thead>
        <tbody class="t_body">
        <?php
            $cart = $_SESSION['giohang'];
            $total_cart = 0;
            foreach($cart as $key => $value){
            $total_cart += $value['thanhtien'];
        ?>
            <tr>
                <td class="product-col">
                    <img src="img/product/<?php echo $value['hinh']?>" alt="">
                    <div class="pc-title">
                        <h4><?php echo $value['tensanpham']?></h4>
                        <p>$<?php echo $value['dongia']?></p>
                    </div>
                </td>
                <td class="quy-col">
                    <div class="quantity">
                        <div class="pro-qty">
                            <input type="button"data-id_sanpham="<?php echo $value['id_sanpham']?>" class="giam  qtybtn" value="-">
                            <input class="input_soluong_<?php echo $value['id_sanpham']?>" type="text" id="input_soluong" value="<?php echo $value['soluong']?>">
                            <input type="button" data-id_sanpham="<?php echo $value['id_sanpham']?>" class="tang  qtybtn" value="+">
                        </div>
                    </div>
                </td>
                <td class="total-col" style="width:100px;"><h4 class="thanhtien_<?php echo $value['id_sanpham']?>">$<?php echo number_format($value['thanhtien'])?></h4></td>
                <td class="total-col"><h4 class="delete_item" data-id_sanpham="<?php echo $value['id_sanpham']?>">x</h4></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    </div>
    <div class="total-cost">
        <h6>Total <span id="total_cart">$<?php echo number_format($total_cart) ?></span></h6>
    </div>
