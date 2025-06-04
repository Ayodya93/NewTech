<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Invoice | NewTech</title>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="bootstrap.css" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <?php include "header.php"; ?>

            <div class="col-12">
                <hr />
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 btn-toolbar justify-content-end mt-2">
                        <button class="btn bg-dark me-2 text-white"><i class="bi bi-printer-fill"></i> Print</button>
                        <button class="btn btn-danger me-2"><i class="bi bi-filetype-pdf"></i> Export as PDF</button>
                    </div>
                    <div class="col-12">
                        <hr />
                    </div>
                    <div class="col-12">
                        <div class="row">

                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 text-warning text-decoration-underline text-end">
                                        <h2>NewTech</h2>
                                    </div>
                                    <div class="col-12 fw-bold text-end">
                                        <span>Mount Lavinia, Colombo, Sri Lanka</span><br />
                                        <span>+947712344567</span><br />
                                        <span>newtech@gmail.com</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <hr class="border border-1 border-dark" />
                            </div>
                            <div class="col-12 mb-3">
                                <div class="row">
                                    <div class="col-6">
                                        <h5 class="fw-bold">INVOICE TO :</h5>
                                        <h4>Ayodya</h4>
                                        <span>ayodya@gmail.com</span>
                                    </div>
                                    <div class="col-6 text-end mt-1">
                                        <h3 class="text-warning">INVOICE 01</h3>
                                        <span class="fw-bold">Date & Time of Invoice :</span><br />
                                        <span>01-01-2022 00:00:00</span>
                                    </div>
                                </div>
                            </div>
                            <!-- table -->
                            <div class="col-12">
                                <table class="table">

                                    <thead>
                                        <tr class="border border-1 border-secondary">
                                            <th>#</th>
                                            <th>Order ID & Product</th>
                                            <th class="text-end">Unit Price</th>
                                            <th class="text-end">Quantity</th>
                                            <th class="text-end">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="bg-secondary text-white fs-4">01</td>
                                            <td>
                                                <span class="fw-bold text-dark text-decoration-underline p-1">000431</span>
                                                <span class="fw-bold text-dark fs-5 p-1">Apple iPhone 12</span>
                                            </td>
                                            <td class="fw-bold fs-6 text-end pt-3 bg-secondary text-white">Rs. 254000.00</td>
                                            <td class="fw-bold fs-6 text-end pt-3">01</td>
                                            <td class="fw-bold fs-6 text-end pt-3 bg-secondary text-white">Rs. 254000.00</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="3" class="border-0"></td>
                                            <td class="fs-5 text-end fw-bold text-black-50">SUBTOTAL</td>
                                            <td class="text-end">Rs. 254000.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="border-0"></td>
                                            <td class="fs-5 text-end fw-bold border-dark text-black-50">Delivery Fee</td>
                                            <td class="text-end border-dark">Rs. 500.00</td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="border-0"></td>
                                            <td class="fs-5 text-end fw-bold border-dark text-dark">GRAND TOTAL</td>
                                            <td class="text-end border-dark text-dark">Rs. 254500.00</td>
                                        </tr>
                                    </tfoot>

                                </table>
                            </div>
                            <!-- table -->

                        </div>
                    </div>
                    <hr />
                    <div class="col-12">
                        <div class="row">

                            <div class="col-12 text-center">
                                <span class="fs-2 fw-bold text-warning">Thnak you!</span>
                            </div>
                            <div class="col-12 border-start border-5 border-warning mt-3 mb-3 rounded" style="background-color: #feff89;">
                                <div class="row">
                                    <div class="col-12 mt-2 mb-2">
                                        <label class="form-label fs-5 fw-bold">NOTICE :</label><br />
                                        <lable class="form-label fs-6">Purchased items can return before 7 days of delivery.</lable>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <hr class="border border-1 border-dark" />
                            </div>
                            <div class="col-12 text-center mb-3">
                                <label class="form-label fs-6 text-black-50 fw-bold">
                                    Invoice was created on a computer and is valid without the signature and seal.
                                </label>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>

</body>

</html>