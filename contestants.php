        <div class="our-feature ptb-100" id="contestants">
            <div class="container">
               <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <div class="section-title text-center">
                            <h2>Contestants</h2>
                            <p> View Information about contestants or vote for them by click on the Contestant of your choice.</p>
                        </div>
                    </div>
                </div>
                <div class="row mb-n-30px">
                    <?php 
                    $contestants = fetch_all_conts();
                    if (!empty($contestants)) {
                        foreach ($contestants as $cont) {
                            
                    ?>
                    <div class="col-lg-4 col-md-6 col-xs-12 mb-30px">
                        <div class="single-feature text-center">
                            <div class="feature-img">
                                <img src="<?= $cont['picture']; ?>" alt="">
                            </div>
                            <div class="feature-desc">
                                <h3><a href="#"><?= $cont['name']; ?></a></h3>
                                <h3>ID: <?= $cont['c_id']; ?></h3>
                                <p>Total Votes : <b><?= $cont['vote']; ?></b></p>
                                <a href="vote?id=<?= $cont['id']; ?>">Vote</a>
                            </div>
                        </div>
                    </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>