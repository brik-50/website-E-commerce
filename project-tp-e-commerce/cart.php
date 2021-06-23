  
  <?php 
    include('./database/Cart.php');
  ?>
  
  <!--Cart section-->
  <section class="section cart__area" >
          <div class="container">
            <div class="category__container section" >
            <div class="title__container" id="cart">
              <div class="section__title active" data-id="Latest Products">
                <span class="dot"></span>
                <h1 class="primary__title">Cart</h1>
              </div>
            </div>

              <div class="responsive__cart-area">
                  <form class="cart__form">
                      <div class="cart__table table-responsive">
                          <table width="100%" class="table">
                              <thead>
                                  <tr>
                                      <th>PRODUCT</th>
                                      <th>NAME</th>
                                      <th>UNIT PRICE</th>
                                      <th>QUANTITY</th>
                                      <th>REMOVE ITEM</th>
                                  </tr>
                              </thead>
                              <tbody class="cart-items cart_products">
                                  
                                  <!-- <tr class="cart-row">
                                      <td class="product__thumbnail">
                                          <a href="#">
                                              <img src="./images/products/iPhone/iphone4.jpeg" alt="">
                                          </a>
                                      </td>
                                      <td class="product__name">
                                          <a href="#">Apple iPhone 11</a>
                                          <br><br>
                                          <small>White/6.25</small>
                                      </td>
                                      <td class="product__price">
                                          <div class="price">
                                              <span class="price cart-price">$250.99</span>
                                          </div>
                                      </td>
                                      <td class="product__quantity">
                                          <div class="input-counter">
                                              <div>
                                                  
                                                  <input type="number" min="1" value="1" class="counter-btn cart-quantity-input">
                                                  
                                              </div>
                                          </div>
                                      </td>
                                      <td class="product__subtotal">
                                          
                                              
                                          
                                          <button class="btn btn-danger remove-btn" type="button">REMOVE</button>
                                      </td>
                                  </tr>

                                  <tr class="cart-row">
                                    <td class="product__thumbnail">
                                        <a href="#">
                                            <img src="./images/products/iPhone/iphone5.jpeg" alt="">
                                        </a>
                                    </td>
                                    <td class="product__name">
                                        <a href="#">Apple iPhone 11</a>
                                        <br><br>
                                        <small>White/6.25</small>
                                    </td>
                                    <td class="product__price">
                                        <div class="price">
                                            <span class="price cart-price">$299.99</span>
                                        </div>
                                    </td>
                                    <td class="product__quantity">
                                        <div class="input-counter">
                                            <div>
                                                
                                                <input type="number" min="1" value="1" class="counter-btn cart-quantity-input">
                                                
                                            </div>
                                        </div>
                                    </td>
                                    <td class="product__subtotal">
                                        
                                            
                                        
                                        <button class="btn btn-danger remove-btn" type="button">REMOVE</button>
                                    </td>
                                </tr> -->

                              </tbody> 
                          
                          </table>
                      </div>

                      <div class="cart-btns">
                          <div class="continue__shopping">
                              <a href="#phone">Continue Shopping</a>
                          </div>
                          
                      </div>

                      <div class="cart__totals">
                          <h3>Cart Totals</h3>
                          <ul>
                              <li>
                                  Total
                                  <span class="total cart-total-price">$0.00</span>
                              </li>
                          </ul>
                          <a href="#cart" class="btn-purchase" id="purchase">PURCHASE</a>
                      </div>
                  </form>
              </div>
            </div>
          </div>
      </section>