
/**
 * Created by PhpStorm.
 * User: Ehtezaz
 * Date: 5/19/2018
 * Time: 2:38 PM
 */


<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="<?php echo base_url('admin');?>">K D A F</a>
        <a class="breadcrumb-item" href="<?php echo base_url('customer');?>">Customer</a>
        <span class="breadcrumb-item active">Listing</span>
    </nav>

    <div class="sl-pagebody">
        <div class="sl-page-title">
            <h5>Customers Information</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            <h6 class="card-body-title">Customers Records</h6>

            <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap" width="100%">
                    <thead>
                    <tr>
                        <th class="wd-5p">ID</th>
                        <th class="wd-5p">Action</th>
                        <th class="wd-5p">Name</th>
                        <th class="wd-5p">Mobile No</th>
                        <th class="wd-5p">Telephone No</th>
                        <th class="wd-5p">Address</th>
                        <th class="wd-5p">E-mail</th>
                        <th class="wd-5p">Height</th>
                        <th class="wd-5p">Chest</th>
                        <th class="wd-5p">Collar</th>
                        <th class="wd-5p">Shoulder</th>
                        <th class="wd-5p">Arm</th>
                        <th class="wd-5p">Cuff</th>
                        <th class="wd-5p">Sleeveless</th>
                        <th class="wd-5p">Back</th>
                        <th class="wd-5p">Button</th>
                        <th class="wd-5p">Other</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php
                    $i = 1;
                    foreach ($show->result() as $row) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>

                            <td><a href="<?php echo base_url() . "customer/update/" . $row->customer_id; ?>"><button style="background-color: #faca64;color: white;border-radius: 10px;">Update</button></a><a><button style="border-radius: 10px;background-color: lightcoral;color: white;" onclick="confirm_user_msg('<?php echo $row->customer_id; ?>')">Delete</button></a></td>

                            <td><?php echo $row->customer_name; ?></td>
                            <td><?php echo $row->mobile_number; ?></td>
                            <td><?php echo $row->telephone_number; ?></td>
                            <td><?php echo $row->customer_address; ?></td>
                            <td><?php echo $row->customer_email; ?></td>
                            <td><?php echo $row->height; ?></td>
                            <td><?php echo $row->chest; ?></td>
                            <td><?php echo $row->collar; ?></td>
                            <td><?php echo $row->shoulder; ?></td>
                            <td><?php echo $row->arm; ?></td>
                            <td><?php echo $row->cuff; ?></td>
                            <td><?php echo $row->sleeveless; ?></td>
                            <td><?php echo $row->back; ?></td>
                            <td><?php echo $row->button; ?></td>
                            <td><?php echo $row->other; ?></td>
                        </tr>
                        <?php
                        $i++;
                    }
                    ?>
                    </tbody>
                </table>
            </div><!-- table-wrapper -->
        </div><!-- card -->

    </div><!-- sl-pagebody -->




