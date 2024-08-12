        <div class="modal fade" id="paymentMethodModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="paymentMethodModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header" style="border-bottom: unset">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row g-3">
                                <div class="text-center">
                                    <h2 class="fw-bold mb-3">Choose Payment Method</h2>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="text-center">
                                        <form id="form-select-payment">
                                            <div class="form-floating mb-3" style="display: none">
                                                <input type="text" class="form-control" id="userID" placeholder="name@example.com" value="<?php echo $user_id; ?>" disabled />
                                            </div>
                                            <div class="form-floating mb-3" style="display: none">
                                                <input type="text" class="form-control" id="first_name" value="<?php echo $first_name; ?>" disabled />
                                            </div>
                                            <div class="form-floating mb-3" style="display: none">
                                                <input type="text" class="form-control" id="last_name" value="<?php echo $last_name; ?>" disabled />
                                            </div>
                                            <div class="form-floating mb-3" style="display: none">
                                                <input type="text" class="form-control" id="email" value="<?php echo $email; ?>" disabled />
                                            </div>
                                            <div class="form-floating mb-3" style="display: none">
                                                <input type="text" class="form-control" id="property_title" value="<?php echo $title; ?>" disabled />
                                            </div>
                                            <div class="form-floating mb-3" style="display: none">
                                                <input type="text" class="form-control" id="amount" value="<?php echo $amount; ?>" disabled />
                                            </div>
                                            <a class="bg-white card card-lift p-4">
                                                <button type="submit" onclick="payWithPaystack()" class="bg-white border-0">
                                                    <img class="align-self-center" src="./assets/img/credit-card.svg" width="60" alt="">
                                                    <h3 class="mb-0 mt-3 card-text fs-5">Pay Online</h3>
                                                </button>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-12">
                                    <div class="text-center">
                                        <a href="bank-transfer?id=<? echo $property_id; ?>" class="bg-white card card-lift p-4">
                                            <img class="align-self-center mt-1" src="./assets/img/bank.svg" width="45" alt="">
                                            <h3 class="mb-0 mt-4 card-text fs-5">Bank Transfer</h3>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>