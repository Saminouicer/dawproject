<?php
function componant($name,$price,$ingrediant,$productid,$image) {
    $element='
    <div class="menu1-container-col-item reveal">

                            <div class="menu1-container-col-item-img " 
                            style="
                            width: 100px;
                            height: 100px;
                            border-radius: 50px;
                            overflow: hidden;
                            max-width: 100%;
                            max-height: 100%;
                            display: flex;
                            justify-content: center;
                            margin-right: 10px;
                            ">
                            <img src="'.$image.'">
                            </div>
                            <div class="menu1-container-col-item-description">
                                <h3>'.$name.'</h3> <br>
                                <p>'.$ingrediant.'</p>
                            </div>
                            <div class="menu1-container-col-item-price">
                                <span>'.$price.'$</span>
                                <div class="menu1-conainer-col-item-add-cart">
                                <form action="" method="POST">
                                    <button id="add-cart-input" name="add">Add</button>
                                    <input type="hidden" name="product_id" value="'.$productid.'">
                                   
                                </form>
                                    
                                </div>
                            </div>
                            
                        </div>
    ';
    echo $element;

}





function cartelement($name,$price,$productid,$image) {

$element='
<div class="cart-item-list">
<div class="cart-item-img">
    <img src="'.$image.'" alt="">
</div>
<div class="cart-item-description">
    <h3>'.$name.'</h3>
    <span>ingerdients : tomato viande ffgbtjf jfdijgif</span>
    <span>each price : <span>'.$price.
    '$</span></span>
    
</div >
<div class="remove"> <form action="shoppingcart.php?action=remove&id='.$productid.'" method="POST"> <button name="remove">remove</button> </form> </div>
<div class="cart-item-quantity">
    <span>Quantity : </span>
    <select name="Quantity" id="quantity-select">
        
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
</div>
<div class="cart-item-price">
    <span>Total</span>
    <span>39$</span>
</div>

</div>


';
echo $element;

}

?>


 <!-- <label for="add-cart-input">
         <svg id="add-cart" xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 96 960 960" width="48"><path d="M286.788 975Q257 975 236 953.788q-21-21.213-21-51Q215 873 236.212 852q21.213-21 51-21Q317 831 338 852.212q21 21.213 21 51Q359 933 337.788 954q-21.213 21-51 21Zm400 0Q657 975 636 953.788q-21-21.213-21-51Q615 873 636.212 852q21.213-21 51-21Q717 831 738 852.212q21 21.213 21 51Q759 933 737.788 954q-21.213 21-51 21ZM235 315l110 228h288l125-228H235Zm-30-60h589.074q22.964 0 34.945 21Q841 297 829 318L694 561q-11 19-28.559 30.5Q647.881 603 627 603H324l-56 104h491v60H277q-42 0-60.5-28t.5-63l64-118-152-322H51v-60h117l37 79Zm140 288h288-288Z"/></svg>
</label> -->








