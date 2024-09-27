@props(['promo_code' => ''])

<!--MAIN--->
<section class="main d-flex flex-wrap align-items-end align-items-md-center ">
    <div class="container py-5">
        <div class="row">
            <div class="main-box col-md-6 text-center text-md-start">
                <h4 class="hero-pretitle fw-bold"> {{--Insert a query that gets the welcome text + appropriate language--}} </h4>
                <!-- Welcome text -->
                <h1 class="hero-title fw-bold display-4"> {{--Insert a query that gets the main text--}} </h1>

                @if($promo_code != '')
                    <!-- Coupon code -->
                    <div class="coupon-code py-2 px-3 mb-3 fw-bold" onclick="copy('{{$promo_code}}');">
                        <img class="coupon-code-img" src="https://starbasecdn.co/upload/?dist=4iiWaL8aUb88QC2exO" alt=""/>
                        <span id="coupon_code">{{$promo_code}}</span>
                    </div>
                @endif
                <!-- CTA -->
                <div class="container px-0">
                    <div class="row align-items-center gy-2 gy-md-0">
                        <div class="col-12 col-md-auto">
                            @php
                                var_dump(config('load_core_files.cta_include_once'));
//                                loadRemoteFiles(config('load_core_files.cta_include_once'));
                            @endphp
                        </div>
                        <div class="col-12 col-md-auto ">

                            <?php
                            $terms_default_file_to_load = __DIR__ .'/terms_en.html';
                            $terms_file_to_load = __DIR__ .'/terms_'.$lang.'.html';

                            $file_to_load = '';
                            if(file_exists($terms_file_to_load)){
                                $file_to_load = $terms_file_to_load;
                            }else if(file_exists($terms_default_file_to_load)){
                                $file_to_load = $terms_default_file_to_load;
                            }

                            if($file_to_load != '')
                            {

                                ?>
                                <!-- Button trigger modal -->
                            <a class="hero-title mx-2 btn" data-bs-toggle="modal" data-bs-target="#termsmodal">
                                    <?php echo $termsText[$lang]; ?>
                            </a>

                            <!-- Modal -->
                            <div class="modal fade" id="termsmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">
                                                    <?php echo $termsAndConditionsText[$lang]; ?>
                                            </h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" style="white-space: pre-line; text-align: left;">
                                                <?php include($file_to_load); ?>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                                    <?php echo $closeBtnText[$lang]; ?>
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                                <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--MAIN--->
