<?php
/**
 * Created by PhpStorm.
 * User: compaq
 * Date: 22/02/2015
 * Time: 12:41
 */
?>
<div role="main" class="main shop">

    <section class="main-content-wrap">
        <div class="container" style="padding-left:30px; padding-right: 30px;">
            <div class="row">
                <div class="col-md-12 main-content main-content-full">
                    <div class="featured-boxes">

                        <h3>Shopping cart</h3>
                        <div class="featured-box featured-box-cart">
                            <div class="box-content">
                                <form>
                                    <table class="shop_table">
                                        <thead>
                                        <tr>
                                            <th class="thumb-item-img">
                                                Item
                                            </th>
                                            <th class="product-name">
                                                Product name
                                            </th>
                                            <th class="product-price">
                                                Price
                                            </th>
                                            <th class="product-quantity">
                                                Quantity
                                            </th>
                                            <th class="product-subtotal">
                                                SubTotal
                                            </th>
                                            <th class="product-remove">
                                                &nbsp;
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr class="cart_table_item">

                                            <td class="thumb-item-img">
                                                <a href="shop-product-sidebar.html">
                                                    <img alt="" width="80" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-1.jpg">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="shop-product-sidebar.html">Linen shirt with ribbon at the front</a>
                                            </td>
                                            <td class="product-price">
                                                <span class="amount">$299</span>
                                            </td>
                                            <td class="product-quantity">

                                                <div class="quantity">
                                                    <input type="button" class="minus" value="-">
                                                    <input type="text" class="input-text qty text" title="Qty" value="1" name="quantity">
                                                    <input type="button" class="plus" value="+">
                                                </div>

                                            </td>
                                            <td class="product-subtotal">
                                                <span class="amount">$299</span>
                                            </td>
                                            <td class="product-remove">
                                                <a title="Remove this item" class="remove" href="#">
                                                    <i class="fa fa-times-circle"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="cart_table_item">

                                            <td class="thumb-item-img">
                                                <a href="shop-product-sidebar.html">
                                                    <img alt="" width="80" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-2.jpg">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="shop-product-sidebar.html">Poplin shirt with fine pleated bands</a>
                                            </td>
                                            <td class="product-price">
                                                <span class="amount">$72</span>
                                            </td>
                                            <td class="product-quantity">

                                                <div class="quantity">
                                                    <input type="button" class="minus" value="-">
                                                    <input type="text" class="input-text qty text" title="Qty" value="1" name="quantity">
                                                    <input type="button" class="plus" value="+">
                                                </div>

                                            </td>
                                            <td class="product-subtotal">
                                                <span class="amount">$72</span>
                                            </td>
                                            <td class="product-remove">
                                                <a title="Remove this item" class="remove" href="#">
                                                    <i class="fa fa-times-circle"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="cart_table_item">

                                            <td class="thumb-item-img">
                                                <a href="shop-product-sidebar.html">
                                                    <img alt="" width="80" src="<?php echo $this->getBaseTheme('front','marvel');?>images/products/product-3.jpg">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="shop-product-sidebar.html">Contrasting shirt</a>
                                            </td>
                                            <td class="product-price">
                                                <span class="amount">$60</span>
                                            </td>
                                            <td class="product-quantity">

                                                <div class="quantity">
                                                    <input type="button" class="minus" value="-">
                                                    <input type="text" class="input-text qty text" title="Qty" value="1" name="quantity">
                                                    <input type="button" class="plus" value="+">
                                                </div>

                                            </td>
                                            <td class="product-subtotal">
                                                <span class="amount">$60</span>
                                            </td>
                                            <td class="product-remove">
                                                <a title="Remove this item" class="remove" href="#">
                                                    <i class="fa fa-times-circle"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>

                    </div>

                    <div class="row featured-boxes">
                        <div class="col-sm-4">
                            <div class="featured-box featured-box-secondary">
                                <div class="box-content">
                                    <h4>Promotional Code</h4>
                                    <p>Enter promotional code if you have one</p>
                                    <form>
                                        <div class="form-group">
                                            <label class="sr-only">Promotional code</label>
                                            <input type="text" value="" class="form-control" placeholder="Enter promotional code here">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Apply Promotion" class="btn btn-grey" data-loading-text="Loading...">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="featured-box featured-box-secondary">
                                <div class="box-content">
                                    <h4>Calculate Shipping</h4>
                                    <p>Enter your destination to get a shipping estimate.</p>
                                    <form>
                                        <div class="form-group">
                                            <label class="sr-only">Country</label>
                                            <select class="chosen-select">
                                                <option value="">Select a country</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only">State/Province</label>
                                            <select class="chosen-select">
                                                <option value="">Select State/Province</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only">Zip/Postal Code</label>
                                            <input type="text" value="" class="form-control" placeholder="Zip/Postal Code">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" value="Update Totals" class="btn btn-grey" data-loading-text="Loading...">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="featured-box featured-box-secondary">
                                <div class="box-content">
                                    <h4>Shopping bag summary</h4>
                                    <table class="cart-totals">
                                        <tbody>
                                        <tr class="cart-subtotal">
                                            <th>
                                                Cart Subtotal
                                            </th>
                                            <td>
                                                <span class="amount">$431</span>
                                            </td>
                                        </tr>
                                        <tr class="shipping">
                                            <th>
                                                Shipping
                                            </th>
                                            <td>
                                                Free Shipping<input type="hidden" value="free_shipping" id="shipping_method" name="shipping_method">
                                            </td>
                                        </tr>
                                        <tr class="total">
                                            <th>
                                                Total
                                            </th>
                                            <td>
                                                <span class="amount">$431</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <p><input type="submit" value="Update Shopping Bag" class="btn btn-default btn-block" data-loading-text="Loading..."></p>
                                    <p><input type="submit" value="Proceed To checkout" class="btn btn-primary btn-block" data-loading-text="Loading..."></p>
                                    <p><input type="submit" value="Continue Shopping" class="btn btn-grey btn-block" data-loading-text="Loading..."></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>