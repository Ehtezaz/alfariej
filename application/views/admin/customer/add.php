
/**
 * Created by PhpStorm.
 * User: Ehtezaz
 * Date: 8/15/2018
 * Time: 2:10 PM
 */

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="<?php echo base_url('admin');?>">K D A F</a>
        <a class="breadcrumb-item" href="<?php echo base_url('customer');?>">Customer</a>
        <span class="breadcrumb-item active">Add</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Add Customers</h5>
            <span id="success_msg"></span>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Adding Customer Record</h6>
            <div class="container">
                <form id="customer_submit_form"  method="post"
                      enctype="multipart/form-data" autocomplete="on">
                    <div class="form-group">
                        <input type="hidden" id="base_url" name="base_url" value="<?php echo base_url();?>"/>
                        <input type="hidden" class="form-control" id="id" name="id">
                    </div>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <span id="name_msg"></span>
                        <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <span id="address_msg"></span>
                        <input type="text" class="form-control" id="address" placeholder="Enter Address" name="address">
                    </div>
                    <div class="form-group">
                        <label for="mobile_no">Mobile No:</label>
                        <span id="mobile_no_msg"></span>
                        <input type="text" class="form-control" id="mobile_no" placeholder="Enter Mobile Number" name="mobile_no">
                    </div>
                    <div class="form-group">
                        <label for="telephone_no">Telephone No:</label>
                        <span id="telephone_no_msg"></span>
                        <input type="text" class="form-control" id="telephone_no" placeholder="Enter Telephone Number" name="telephone_no">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <span id="email_msg"></span>
                        <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="email">Height:</label>
                        <span id="name_msg"></span>
                        <input type="text" class="form-control" id="height" placeholder="Enter Height" name="height">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Chest:</label>
                        <span id="name_msg"></span>
                        <input type="text" class="form-control" id="chest" placeholder="Enter Chest" name="chest">
                    </div>
                    <div class="form-group">
                        <label for="email">Collar:</label><span id="name_msg"></span>
                        <input type="text" class="form-control" id="collar" placeholder="Enter Collar" name="collar">
                    </div>
                    <div class="form-group">
                        <label for="email">Shoulder:</label><span id="name_msg"></span>
                        <input type="text" class="form-control" id="shoulder" placeholder="Enter Shoulder" name="shoulder">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Arm:</label><span id="name_msg"></span>
                        <input type="text" class="form-control" id="arm" placeholder="Enter Arm" name="arm">
                    </div>
                    <div class="form-group">
                        <label for="email">Cuff:</label><span id="name_msg"></span>
                        <input type="text" class="form-control" id="cuff" placeholder="Enter Cuff" name="cuff">
                    </div>
                    <div class="form-group">
                        <label for="email">Sleeveless:</label><span id="name_msg"></span>
                        <input type="text" class="form-control" id="sleeveless" placeholder="Enter Sleeveless" name="sleeveless">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Back:</label><span id="name_msg"></span>
                        <input type="text" class="form-control" id="back" placeholder="Enter Back" name="back">
                    </div>
                    <div class="form-group">
                        <label for="email">Button:</label><span id="name_msg"></span>
                        <input type="text" class="form-control" id="button" placeholder="Enter Button" name="button">
                    </div>
                    <div class="form-group">
                        <label for="email">Other:</label><span id="name_msg"></span>
                        <input type="text" class="form-control" id="other" placeholder="Enter Other" name="other">
                    </div>

                    <button type="submit" class="btn btn-primary" id="submit_new_customer">Submit</button>
                </form>
            </div>

        </div><!-- card -->
    </div><!-- sl-pagebody -->


    <script src="<?php echo base_url(); ?>/assets/js/tailor_jquery.js"></script>

