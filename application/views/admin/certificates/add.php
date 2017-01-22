<link rel="stylesheet" type="text/css" href="assets/admin/css/datepicker.css">
<script type="text/javascript" src="assets/admin/js/bootstrap-datepicker.js"></script>
<div class="page-header page-header-default">
    <div class="page-header-content">
        <div class="page-title">
            <h4><i class="icon-magazine position-left"></i> <span class="text-semibold"><?php echo $title; ?></h4>
        </div>
    </div>
    <div class="breadcrumb-line">
        <ul class="breadcrumb">
            <li><a href="<?php echo site_url('admin'); ?>"><i class="icon-home2 position-left"></i> Home</a></li>
            <li><a href="<?php echo site_url('admin/certificates'); ?>"><i class="icon-magazine position-left"></i> Certificates</a></li>
            <li class="active"><?php echo $title; ?></li>
        </ul>
    </div>
</div>

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <?php
            

            if (isset($certificate)) {
                $action = base_url() . "admin/edit_certificate/" . $certificate['certificate_no'];
            } else {
                $action = base_url() . "admin/add_certificate";
            }
            ?>
            <form class="form-validate-jquery" method="post" id="certificate_add" enctype="multipart/form-data" action="<?php echo $action ?>" >            
                <div class="row">

                    <div class="col-md-12">
                        <div class="panel panel-flat">
                            <div class="panel-heading">
                                <h5 class="panel-title"><?php echo (isset($certificate)) ? 'Certificate No: '.$certificate['certificate_no'] : '' ?></h5>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <div class="form-group col-xs-12">
                                            <label>Accreditation<font color="red">*</font></label>
                                            <input type="text" name="accreditation" class="form-control" placeholder="Accreditation" required="required" value="<?php
                                            if (isset($certificate)) {
                                                echo trim($certificate['accreditation']);
                                            } else {
                                                if ($this->input->post('accreditation')) {
                                                    echo $this->input->post('accreditation');
                                                } else {
                                                    echo '';
                                                }
                                            }
                                            ?>">
                                        </div>

                                        <div class="form-group col-xs-12">
                                            <label>Standard<font color="red">*</font></label>
                                            <input type="text" name="standard" class="form-control" placeholder="Standard" required="required" value="<?php
                                            if (isset($certificate)) {
                                                echo trim($certificate['standard']);
                                            } else {
                                                if ($this->input->post('standard')) {
                                                    echo $this->input->post('standard');
                                                } else {
                                                    echo '';
                                                }
                                            }
                                            ?>">
                                        </div>

                                        <div class="form-group col-xs-12">
                                            <label>Scope<font color="red">*</font></label>

                                            <textarea rows="5" cols="5" name="scope" class="form-control" required="required" placeholder="Scope" aria-required="true" aria-invalid="true"><?php
                                                if (isset($certificate)) {
                                                    echo trim($certificate['scope']);
                                                } else {
                                                    if ($this->input->post('scope')) {
                                                        echo $this->input->post('scope');
                                                    } else {
                                                        echo '';
                                                    }
                                                }
                                                ?></textarea>
                                            
                                        </div>

                                        <div class="form-group col-xs-12">
                                            <label>Organization Name<font color="red">*</font></label>
                                            <input type="text" name="org_name" class="form-control" placeholder="Organization Name" required="required" value="<?php
                                            if (isset($certificate)) {
                                                echo trim($certificate['org_name']);
                                            } else {
                                                if ($this->input->post('org_name')) {
                                                    echo $this->input->post('org_name');
                                                } else {
                                                    echo '';
                                                }
                                            }
                                            ?>">
                                        </div>

                                        <div class="form-group col-xs-12">
                                            <label>Organization Address<font color="red">*</font></label>

                                            <textarea rows="5" cols="5" name="org_address" class="form-control" required="required" placeholder="Organization Address" aria-required="true" aria-invalid="true"><?php
                                                if (isset($certificate)) {
                                                    echo trim($certificate['org_address']);
                                                } else {
                                                    if ($this->input->post('org_address')) {
                                                        echo $this->input->post('org_address');
                                                    } else {
                                                        echo '';
                                                    }
                                                }
                                                ?></textarea>
                                            
                                        </div>

                                        <div class="form-group col-xs-12">
                                            <label>City<font color="red">*</font></label>
                                            <input type="text" name="city" class="form-control" placeholder="City" required="required" value="<?php
                                            if (isset($certificate)) {
                                                echo trim($certificate['city']);
                                            } else {
                                                if ($this->input->post('city')) {
                                                    echo $this->input->post('city');
                                                } else {
                                                    echo '';
                                                }
                                            }
                                            ?>">
                                        </div> 

                                        <div class="form-group col-xs-12">
                                            <label>Country<font color="red">*</font></label>
                                            <input type="text" name="country" class="form-control" placeholder="Country" required="required" value="<?php
                                            if (isset($certificate)) {
                                                echo trim($certificate['country']);
                                            } else {
                                                if ($this->input->post('country')) {
                                                    echo $this->input->post('country');
                                                } else {
                                                    echo '';
                                                }
                                            }
                                            ?>">
                                        </div>


                                        <div class="form-group col-xs-12">
                                            <label>Date Of Issue<font color="red">*</font></label>
                                            <input type="text" name="issue_date" class="datepicker form-control" placeholder="yyyy-mm-dd" data-date-format="yyyy-mm-dd" required="required" value="<?php
                                            if (isset($certificate)) {
                                                echo trim($certificate['issue_date']);
                                            } else {
                                                if ($this->input->post('issue_date')) {
                                                    echo $this->input->post('issue_date');
                                                } else {
                                                    echo '';
                                                }
                                            }
                                            ?>">
                                        </div>

                                        <div class="form-group col-xs-12">
                                            <label>Date Of Expiry<font color="red">*</font></label>
                                            <input type="text" name="expiry_date" class="datepicker form-control" placeholder="yyyy-mm-dd" data-date-format="yyyy-mm-dd" required="required" value="<?php
                                            if (isset($certificate)) {
                                                echo trim($certificate['expiry_date']);
                                            } else {
                                                if ($this->input->post('expiry_date')) {
                                                    echo $this->input->post('expiry_date');
                                                } else {
                                                    echo '';
                                                }
                                            }
                                            ?>">
                                        </div>

                                        <div class="form-group col-xs-12">
                                            <label>Next Surveillance Due On<font color="red">*</font></label>
                                            <input type="text" name="next_surveillance_due_on" class="datepicker form-control" placeholder="yyyy-mm-dd" data-date-format="yyyy-mm-dd" required="required" value="<?php
                                            if (isset($certificate)) {
                                                echo trim($certificate['next_surveillance_due_on']);
                                            } else {
                                                if ($this->input->post('next_surveillance_due_on')) {
                                                    echo $this->input->post('next_surveillance_due_on');
                                                } else {
                                                    echo '';
                                                }
                                            }
                                            ?>">
                                        </div>

                                        
 

                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="text-center">
                                        <button type="button" class="btn border-slate btn-flat cancel-btn" onclick="window.history.back()">Cancel</button>
                                        <button type="submit" class="btn bg-teal">Save<i class="icon-arrow-right14 position-right"></i></button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(".datepicker").datepicker();
    $("#certificate_add").validate();
</script> 