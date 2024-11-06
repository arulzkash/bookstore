    <!-- Page Content -->
    <!-- Single Starts Here -->
    <div class="single-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>Single Product</h1>
                            <div class="d-flex align-items-center">
                                <div class="main-button" style="margin-right: 30px;">
                                    <a href="<?= base_url('books/edit/'.$book['_id']->{'$id'}) ?>">Edit Book</a>
                                </div>
                                <div>
                                    <a class="btn btn-danger" href="<?= base_url('books/delete/'.$book['_id']->{'$id'}) ?>" 
                                    onclick="return confirm('Are you sure you want to delete this?');" role="button">Delete Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="col-md-6">
                    <div class="product-slider">
                        <div id="slider" class="flexslider">
                            <ul class="slides">
                                <li>
                                    <img src="<?= base_url() ?>assets/images/big-01.jpg" />
                                </li>
                                <li>
                                    <img src="<?= base_url() ?>assets/images/big-02.jpg" />
                                </li>
                                <li>
                                    <img src="<?= base_url() ?>assets/images/big-03.jpg" />
                                </li>
                                <li>
                                    <img src="<?= base_url() ?>assets/images/big-04.jpg" />
                                </li>
                                <!-- items mirrored twice, total of 12 -->
                            </ul>
                        </div>
                        <div id="carousel" class="flexslider">
                            <ul class="slides">
                                <li>
                                    <img src="<?= base_url() ?>assets/images/thumb-01.jpg" />
                                </li>
                                <li>
                                    <img src="<?= base_url() ?>assets/images/thumb-02.jpg" />
                                </li>
                                <li>
                                    <img src="<?= base_url() ?>assets/images/thumb-03.jpg" />
                                </li>
                                <li>
                                    <img src="<?= base_url() ?>assets/images/thumb-04.jpg" />
                                </li>
                                <!-- items mirrored twice, total of 12 -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <h4><?= $book['title'] ?></h4>
                        <p>By: <?= $book['author'] ?></p>
                        <h6>Rp <?= number_format($book['price'], 2, ',', '.') ?></h6>
                        <p><?= $book['description'] ?></p>
                        <span><?= $book['stock'] ?> left on stock</span>
                        <form action="" method="get">
                            <label for="quantity">Quantity:</label>
                            <input name="quantity" type="quantity" class="quantity-text" id="quantity"
                                onfocus="if(this.value == '1') { this.value = ''; }"
                                onBlur="if(this.value == '') { this.value = '1';}"
                                value="1">
                            <input type="submit" class="button" value="Order Now!">
                        </form>
                        <div class="down-content">
                            <div class="categories">
                                <h6>Category: <span><a href="#"><?= $book['category'] ?></a></h6>
                            </div>
                            <div class="share">
                                <h6>Share: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <h6>Product Details</h6>
                    <p><b>ISBN : </b><?= $book['ISBN'] ?></p>
                    <p><b>Publisher : </b><?= $book['publisher'] ?></p>
                    <p><b>Published Date : </b><?= $book['published_date'] ?></p>
                    <p><b>Number of Pages : </b><?= $book['pages'] ?></p>
                    <p><b>Language : </b><?= $book['language'] ?></p>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <!-- Single Page Ends Here -->


    <!-- Similar Starts Here -->
    <div class="featured-items">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>You May Also Like</h1>
                    </div>
                </div>
                <class="col-md-12">
                    <div class="owl-carousel owl-theme" style="margin-right: 1000px;>
                        <?php foreach ($booklist as $books): ?>
                            <a href="<?= base_url('books/details/' . $books['_id']->{'$id'}) ?>">  <!-- Link untuk menuju detail buku -->
                                <div class="featured-item">
                                    <img src="assets/images/item-01.jpg" alt="Item 1">
                                    <h4><?= $books['title'] ?></h4>
                                    <p><?= $books['author'] ?></p>
                                    <h6>Rp <?= number_format($books['price'], 2, ',', '.') ?></h6>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Similar Ends Here -->