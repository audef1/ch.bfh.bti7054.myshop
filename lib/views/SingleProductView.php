<?php

/**
 * Created by PhpStorm.
 * User: florianauderset
 * Date: 04.12.15
 * Time: 11:11
 */
class SingleProductView
{
    private $model;
    private $features;
    private $details;
    private $images;

    public function __construct(Product $model) {
        $this->model = $model;

        //generate featurelist
        $this->features = "<ul>";
        foreach ($this->model->__get('features') as $feature){
            $this->features .= "<li>" . $feature . "</li>";
        }
        $this->features .= "</ul>";

        //generate detaillist
        $this->details = "";
        foreach ($this->model->__get('details') as $detail){
            $this->details .= "<p>" . $detail . "</p>";
        }

        //generate imagelist
        $this->images = "<ul id='etalage'>";
        foreach ($this->model->__get('images') as $image){
            $this->images .=   "<li>
                                    <img class='etalage_thumb_image' src='/myshop/images/products/". $image ."_thumb.jpg' />
                                    <img class='etalage_source_image' src='/myshop/images/products/". $image ."_large.jpg' />
                                </li>";
        }
        $this->images .= "</ul>";

    }

    public function render() {

        echo "
            <!----content---->
			<div class='content'>
				<div class='container'>
				<!----product-details--->
				<div class='product-details'>
					<div class='container'>
					<div class='product-details-row1'>
						<div class='product-details-row1-head'>
							<h2>" . $this->model->__get('name1') . "</h2>
							<p>" . $this->model->__get('name2') . "</p>
						</div>
						<div class='col-md-4 product-details-row1-col1'>
						<div class='details-left'>
						    <!--- images --->
							<div class='details-left-slider'>
                                " . $this->images . "
							</div>
						</div>
					</div>
					<div class='col-md-8 product-details-row1-col2'>
						<div class='product-price'>
						    <span class='bargain'>" . $this->model->__get('price1') . "</span>
							<h5>" . $this->model->__get('price2') . " CHF</h5>
						</div>
						<div class='product-price-details'>
							<a class='shipping' href='#'><span></span>" . _('Free shipping') . "</a>
							<div class='clearfix'> </div>
							<div class='product-size-qty'>
								<div class='pro-qty'>
									<span>" . _('Stock') . ": " . $this->model->__get('stock') . "</span>
								</div>
								<div class='pro-size'>
									<span>Size:</span>
									<select>
										<option>7</option>
										<option>8</option>
										<option>9</option>
										<option>10</option>
										<option>11</option>
									</select>
								</div>
								<div class='pro-qty'>
									<span>" . _('Quantity') . ":</span>
									<select id='qty'>
										<option>1</option>
										<option>2</option>
										<option>3</option>
										<option>4</option>
										<option>5</option>
									</select>
								</div>
								<div class='clearfix'> </div>
							</div>
							<div class='clearfix'> </div>
							<div class='product-cart-share'>
								<div class='message'></div>
								<div class='add-cart-btn'>
									<input type='button' id='addtocart' value='" . _('Add to cart') . "' />
									<script>
                                        $( '#addtocart' ).click(function() {

                                        var qty = $('#qty').find(\":selected\").text();
                                        carturl = \"/myshop/". _('cart') ."/add/". $this->model->__get('number') ."/\" + qty + \"\";

                                        $.ajax({
                                                method: 'GET',
                                                url: carturl,
                                            })
                                            .done(function( msg ) {
                                                $('.badge').html(parseInt($('.badge').text()) + 1);
                                                $('.message').html('Hallo');
                                            });
                                        });
									</script>
								</div>
							</div>
						</div>
					</div>
					<div class='clearfix'></div>
				<!--//product-details--->
				</div>
				<!---- product-details ---->
				<div class='product-tabs'>
					<!--Horizontal Tab-->
				    <div id='horizontalTab'>
				        <ul>
				            <li><a href='#tab-1'>" . _('Product overview') . "</a></li>
				            <li><a href='#tab-2'>" . _('Features') . "</a></li>
				        </ul>
				        <div id='tab-1' class='product-complete-info'>
				        	<h3>" . _('Description') . ":</h3>
				        	<p>" . $this->model->__get('description') . "</p>
				       		<span>" . _('Details') . ":</span>
				       		<div class='product-fea'>
				       			" . $this->details . "
				       		</div>
				        </div>
				        <div id='tab-2' class='product-complete-info'>
				        	<h3>" . _('Description') . "</h3>
				        	" . $this->features . "
				        </div>
				    </div>
				</div>
				<!-- //product-details ---->
				</div>
				</div>
			    <div class='clearfix'></div>
		    </div>

		    <!-- Images etalage -->
		    <script>
			    $(document).ready(function($){
                    $('#etalage').etalage({
		    	    thumb_image_width: 300,
			    	    thumb_image_height: 400,
			    	    source_image_width: 900,
			    	    source_image_height: 1000,
			    	    show_hint: true,
			    	    click_callback: function(image_anchor, instance_id){
                            alert('achtung!');
                        }
			        });
                    // This is for the dropdown list example:
                    $('.dropdownlist').change(function(){
                        etalage_show( $(this).find('option:selected').attr('class') );
                    });
                });
            </script>

		    <!-- Responsive Tabs JS -->
			<script type='text/javascript'>
                $(document).ready(function () {
                    $('#horizontalTab').responsiveTabs({
                        rotate: false,
                        startCollapsed: 'accordion',
                        collapsible: 'accordion',
                        setHash: true,
                        disabled: [3,4],
                        activate: function(e, tab) {
                            $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
                        }
                    });
                    $('#start-rotation').on('click', function() {
                        $('#horizontalTab').responsiveTabs('active');
                    });
                    $('#stop-rotation').on('click', function() {
                        $('#horizontalTab').responsiveTabs('stopRotation');
                    });
                    $('#start-rotation').on('click', function() {
                        $('#horizontalTab').responsiveTabs('active');
                    });
                    $('.select-tab').on('click', function() {
                        $('#horizontalTab').responsiveTabs('activate', $(this).val());
                    });
                });
		    </script>
		    ";
    }

}