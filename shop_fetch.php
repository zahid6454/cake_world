<?php

include_once('connection.php');

$query = "SELECT * FROM product";

$result = mysqli_query($conn,$query);

$counter = 0;
$output='';
$price='';

$output.= '<header class="section-header-full">
            <h1>All Cakes</h1>
            </header>';

while($row = mysqli_fetch_assoc($result))
{
    $counter++;

    if($counter==1)                
    {
        $output.= '<div class="row">';
        $output.='<div class="col-md-4 onscroll-animate">';        
    }
    else if($counter==2)                
    {
        $output.= '<div class="col-md-4 onscroll-animate" data-delay="400">';             
    }
    else if($counter==3)                
    {
        $output.= '<div class="col-md-4 onscroll-animate" data-delay="600">';         
    }
    
    $output.=   '<div class="product">
                    <div class="product-preview">
                        <a href="gallery_single.html"><img src="images/'.$row['image'].'"></a>
                    </div>
                    <div class="product-detail-container">
                        <div class="product-icons">
                            <div class="product-icon-container">
                                <a href="#"><i class="fa fa-shopping-cart"></i></a>
                            </div>
                        </div>
                        <div class="product-detail">
                            <h2><a href="gallery_single.html">'.$row['type'].'</a></h2>
                            <p>'.$row['name'].'</p>';

    $productid = $row['productid'];
    $query1 = "SELECT * FROM product_price_weight WHERE product_price_weight.productid='$productid' ORDER BY price";
    $result1 = mysqli_query($conn,$query1);
    while($row = mysqli_fetch_assoc($result1))
    {
        $price.= '₹ '.$row['price'].' | ';
    }
    $price = substr_replace($price, "", -1);
    
   
    $output.=               '<p class="product-price">'.$price.'</p>
                        </div>
                    </div>
                </div>
            </div>';

    if($counter==3)
    {
        $output.='</div>';
        $counter=0;
        
    }

    $price = "";
}

echo $output;





// echo '<header class="section-header-full">
// <h1>All Cakes</h1>
// </header>

// <div class="row">
// <div class="col-md-4 onscroll-animate">
//     <div class="product">
//         <div class="product-preview">
//             <a href="gallery_single.html"><img alt="product 1" src="images/product1.jpg"></a>
//         </div>
//         <div class="product-detail-container">
//             <div class="product-icons">
//                 <div class="product-icon-container">
//                     <a href="#"><i class="fa fa-shopping-cart"></i></a>
//                 </div>
//             </div>
//             <div class="product-detail">
//                 <h2><a href="gallery_single.html">Cakes</a></h2>
//                 <p>Sweet Cakes</p>
//                 <p class="product-price">$2.99</p>
//             </div>
//         </div><!-- .product-detail-container -->
//     </div><!-- .product -->
// </div>
// <div class="col-md-4 onscroll-animate" data-delay="400">
//     <div class="product">
//         <div class="product-preview">
//             <a href="gallery_single.html"><img alt="product 2" src="images/product2.jpg"></a>
//         </div>
//         <div class="product-detail-container">
//             <div class="product-icons">
//                 <div class="product-icon-container">
//                     <a href="#"><i class="fa fa-shopping-cart"></i></a>
//                 </div>
//             </div>
//             <div class="product-detail">
//                 <h2><a href="gallery_single.html">Cakes</a></h2>
//                 <p>Sweet Cakes</p>
//                 <p class="product-price">$2.99</p>
//             </div>
//         </div><!-- .product-detail-container -->
//     </div><!-- .product -->
// </div>
// <div class="col-md-4 onscroll-animate" data-delay="600">
//     <div class="product">
//         <div class="product-preview">
//             <a href="gallery_single.html"><img alt="product 3" src="images/product3.jpg"></a>
//         </div>
//         <div class="product-detail-container">
//             <div class="product-icons">
//                 <div class="product-icon-container">
//                     <a href="#"><i class="fa fa-shopping-cart"></i></a>
//                 </div>
//             </div>
//             <div class="product-detail">
//                 <h2><a href="gallery_single.html">Cakes</a></h2>
//                 <p>Sweet Cakes</p>
//                 <p class="product-price">$2.99</p>
//             </div>
//         </div><!-- .product-detail-container -->
//     </div><!-- .product -->
// </div>
// </div><!-- .row -->

// <div class="row">
// <div class="col-md-4 onscroll-animate">
//     <div class="product">
//         <div class="product-preview">
//             <a href="gallery_single.html"><img alt="product 1" src="images/product1.jpg"></a>
//         </div>
//         <div class="product-detail-container">
//             <div class="product-icons">
//                 <div class="product-icon-container">
//                     <a href="#"><i class="fa fa-shopping-cart"></i></a>
//                 </div>
//             </div>
//             <div class="product-detail">
//                 <h2><a href="gallery_single.html">Cakes</a></h2>
//                 <p>Sweet Cakes</p>
//                 <p class="product-price">$2.99</p>
//             </div>
//         </div><!-- .product-detail-container -->
//     </div><!-- .product -->
// </div>
// <div class="col-md-4 onscroll-animate" data-delay="400">
//     <div class="product">
//         <div class="product-preview">
//             <a href="gallery_single.html"><img alt="product 2" src="images/product2.jpg"></a>
//         </div>
//         <div class="product-detail-container">
//             <div class="product-icons">
//                 <div class="product-icon-container">
//                     <a href="#"><i class="fa fa-shopping-cart"></i></a>
//                 </div>
//             </div>
//             <div class="product-detail">
//                 <h2><a href="gallery_single.html">Cakes</a></h2>
//                 <p>Sweet Cakes</p>
//                 <p class="product-price">$2.99</p>
//             </div>
//         </div><!-- .product-detail-container -->
//     </div><!-- .product -->
// </div>
// <div class="col-md-4 onscroll-animate" data-delay="600">
//     <div class="product">
//         <div class="product-preview">
//             <a href="gallery_single.html"><img alt="product 3" src="images/product3.jpg"></a>
//         </div>
//         <div class="product-detail-container">
//             <div class="product-icons">
//                 <div class="product-icon-container">
//                     <a href="#"><i class="fa fa-shopping-cart"></i></a>
//                 </div>
//             </div>
//             <div class="product-detail">
//                 <h2><a href="gallery_single.html">Cakes</a></h2>
//                 <p>Sweet Cakes</p>
//                 <p class="product-price">$2.99</p>
//             </div>
//         </div><!-- .product-detail-container -->
//     </div><!-- .product -->
// </div>
// </div><!-- .row -->';
?>