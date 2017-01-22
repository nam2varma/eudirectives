<!--<script type="text/javascript" src="assets/admin/js/pages/datatables_basic.js"></script>-->
<script type="text/javascript" src="assets/admin/js/plugins/tables/datatables/datatables.min.js"></script>
<script type="text/javascript" src="assets/admin/js/plugins/loaders/progressbar.min.js"></script>

<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-magazine position-left"></i> <span class="text-semibold">Certificates</span></h4>
        </div>
    </div>
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('admin'); ?>"><i class="icon-home2 position-left"></i> Home</a></li>
            <li class="active">Certificates</li>
        </ul>
    </div>
</div>

<div class="content">
    
    <!-- Table header styling -->
    <div class="panel panel-flat">
        <div class="panel-heading tic-listing">
            <div class="col-md-12"> 
                <div class="pull-right">
                    <a href="admin/add_certificate" class="btn btn-success btn-labeled"><b><i class="icon-plus-circle2"></i></b> Add New Certificate</a>
                </div>
            </div>
            <div class="col-md-12">
            <?php if($this->session->flashdata('msg')){ ?>
                <div class="alert alert-success">
                  <?php echo $this->session->flashdata('msg'); ?>
                </div>
              <?php  }
            ?>
            </div>
        </div>
       
        <div class="panel-body">
            <div class="row">
                <!--<div class="table-responsive ticket_table">-->
                <table class="table datatable-basic table-bordered" id="ticket_table">
                    <thead>
                        <tr class="bg-teal">
                            <th>Certificate No.</th>
                            <th>Accreditation</th>
                            <th>Standard / Scope</th>
                            
                            <th>Organization Name / Address</th>
                            
                            <th>City / Country</th>
                            <th>Date Of Issue</th>
                            <th>Date Of Expiry</th>
                            <th>Next Surveillance Due On</th>
                            <th>Status</th>
                            <!-- <th>State</th> -->
                            <th style="width:12%;text-align: left;">Actions</th>
                            <!--<th>Actions</th>-->
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($certificates as $certificate) { ?>
                        <tr>
                            <td><?php echo $certificate['certificate_no']; ?></td>
                            <td><?php echo $certificate['accreditation']; ?></td>
                            <td><?php echo '<b>Std: </b>'.$certificate['standard']; ?><br/><?php echo '<b>Scope: </b>'.$certificate['scope']; ?></td>
                            <td><?php echo '<b>Name: </b>'.$certificate['org_name']; ?><br/><?php echo '<b>Address: </b>'.$certificate['org_address']; ?></td>
                            
                            <td><?php echo '<b>City:</b> '. $certificate['city']; ?><br/><?php echo '<b>Country:</b> '. $certificate['country']; ?></td>
                            <td><?php echo $certificate['issue_date']; ?></td>
                            <td><?php echo $certificate['expiry_date']; ?></td>
                            <td><?php echo $certificate['next_surveillance_due_on']; ?></td>
                            <td><?php echo $certificate['status']; ?></td>
                            <td><a title="Edit" href="admin/edit_certificate/<?php echo $certificate['certificate_no']; ?>"><i class="icon-pencil7"></i></a>
                            <a onclick="return confirm('Are you sure you want to delete this Certificate?')" href="admin/delete_certificate/<?php echo $certificate['certificate_no']; ?>" title='Delete' class="delete"><i class="icon-trash"></i></a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>

                <!--</div>-->
            </div>
        </div>
    </div>
</div>
<!-- /table header styling -->
