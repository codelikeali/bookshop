<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

    public function dashboard(){

        $this->load->view('admin/admin-dash');

    }


         
    //Fetch Dashboard Data from DB
        function fetch()
        {
        $output = '';
        $query = '';
        $this->load->model('AdminModel');
        if($this->input->post('query'))
        {
        $query = $this->input->post('query');
        }
        $data = $this->AdminModel->fetch_data($query);
        $output .= '
        <ul class="products list-unstyled mb-0 row row-cols-2 row-cols-md-3 row-cols-xl-4 row-cols-wd-5">
        ';
        if($data->num_rows() > 0)
        {
        foreach($data->result() as $row)
        {
            $output .= '
            <li class="col">
                <div class="product product__space product__space-primary border rounded-md bg-white mb-5">
                    <div class="product__inner overflow-hidden p-3 p-md-4d875">
                        <div
                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link d-block position-relative">
                            <div class="woocommerce-loop-product__thumbnail">
                                <a  href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v3.html"
                                    class="d-block"><img  src="'.base_url().'upload/'.$row->book_image.'"
                                        class="d-block mx-auto attachment-shop_catalog size-shop_catalog wp-post-image img-fluid"
                                        alt="image-description"></a>
                            </div>
                            <div class="woocommerce-loop-product__body product__body pt-3 bg-white">
                                <div class="text-uppercase font-size-1 mb-1 text-truncate"><a
                                        href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v3.html">'.$row->book_category.'</a>
                                </div>
                                <h2
                                    class="woocommerce-loop-product__title product__title h6 text-lh-md mb-1 text-height-2 crop-text-2 h-dark">
                                    <a
                                        href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v3.html">'.$row->book_title.'</a></h2>
                                <div class="font-size-2  mb-1 text-truncate"><a
                                        href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/others/authors-single.html"
                                        class="text-gray-700">'.$row->author_name.'</a></div>
                                <div class="price d-flex align-items-center font-weight-medium font-size-3">
                                    <span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">pkr</span>'.$row->book_price.'</span>
                                </div>
                            </div>
                            <div class="product__hover d-flex align-items-center">
                                <a href="https://demo2.madrasthemes.com/bookworm-html/redesigned-octo-fiesta/html-demo/shop/single-product-v3.html"
                                    class="text-uppercase text-dark h-dark font-weight-medium mr-auto">
                                    <span class="product__add-to-cart">ADD TO CART
                                    
                                    </span>
                                    <span class="product__add-to-cart-icon font-size-4"><i
                                            class="flaticon-icon-126515"></i></span>
                                </a>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            ';
        }
        }
        else
        {
        $output .= ' </ul>';
        }
        echo $output;
        }

            //check user login or not
 
    

}

?>