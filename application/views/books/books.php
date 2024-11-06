<!-- Page Content -->
<!-- Items Starts Here -->
<div class="featured-page">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="section-heading">
                    <div class="line-dec"></div>
                    <h1>
                        <?= isset($is_search) && $is_search ? 'Search Results for "' . htmlspecialchars($search_keyword) . '"' : 'Featured Items' ?>
                    </h1>
                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <div id="filters" class="button-group">
                    <button class="btn btn-primary" data-filter="*">All Products</button>
                    <button class="btn btn-primary" data-filter=".new">Newest</button>
                    <button class="btn btn-primary" data-filter=".low">Low Price</button>
                    <button class="btn btn-primary" data-filter=".high">High Price</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="featured container no-gutter">
    <a class="btn btn-success" href="<?= base_url('books/create') ?>" role="button">Add New Book</a>		
        <div class="row posts">
            <?php if (empty($books)) : ?>
                <p>No results found for "<?= htmlspecialchars($search_keyword) ?>".</p>
            <?php else : ?>
                <?php foreach ($books as $book) { ?>
                <div id="1" class="item new col-md-4">
                    <a href="<?= base_url() ?>books/details/<?= $book['_id']->{'$id'} ?>">
                        <div class="featured-item">
                        <img src="<?= $book['cover_image'] ?>" alt="<?= $book['title'] ?>" class="img-fluid" />
                            <h4><?= $book['title'] ?></h4>
                            <p><?= $book['author'] ?></p>
                            <br>
                            <h6>Rp <?= number_format($book['price'], 2, ',', '.') ?></h6>
                        </div>
                    </a>
                </div>
                <?php } ?>
            <?php endif; ?>

    </div>
</div>

<div class="page-navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li class="current-page"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Featured Page Ends Here -->
