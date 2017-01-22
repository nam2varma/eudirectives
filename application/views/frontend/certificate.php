   <link href="assets/admin/css/bootstrap.css" rel="stylesheet" type="text/css">
  <style type="text/css">
      .certificate .kode_newsletter_bg:before{
        background: none;
      }
  </style>
    <!--Bread Crumb Wrap Start-->
    <div class="kode_about_bg">
    	<div class="container">
        	<div class="kode_aboutus_wrap">
            	<h4>Certificate</h4>
                <div class="kode_bread_crumb">
                	<ul>
                		<li><a href="#">Home</a></li>
                    	<li><a href="#">Cerificate</a></li>
                	</ul>
                </div>
            </div>
        </div>
    </div>
    <!--Bread Crumb Wrap Start-->
    <div class="kode_content certificate">
<!--Our Focus Wrap Start-->
        <section>

        <div class="container">
            <div class="kode_newsletter_bg">
                <div class="container">
                    <div class="kode_newsletter_form" style="float: none;">
                        <form id="search_form" method="get">
                            <input name="search" required="true" class="placeholder2" type="text" placeholder="Enter your Certificate Number here">
                            <button type="submit"><i class="fa fa-send"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clearfix">
            <div class="col-md-8 col-md-offset-2" style="padding: 10px;">
            
            <?php if(!empty($certificate)){ ?>
            
                <table class="table-bordered table-striped">
                    <tr>
                        <td class="col-md-4"><b>Certificate No.</b></td>
                        <td class="col-md-8"><?php echo $certificate['certificate_no']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Accreditation</b></td>
                        <td><?php echo $certificate['accreditation']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Standard</b></td>
                        <td><?php echo $certificate['standard']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Scope</b></td>
                        <td><?php echo $certificate['scope']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Organization Name</b></td>
                        <td><?php echo $certificate['org_name']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Organization Address</b></td>
                        <td><?php echo $certificate['org_address']; ?></td>
                    </tr>
                    <tr>
                        <td><b>City</b></td>
                        <td><?php echo $certificate['city']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Country</b></td>
                        <td><?php echo $certificate['country']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Date Of Issue</b></td>
                        <td><?php echo $certificate['issue_date']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Date Of Expiry</b></td>
                        <td><?php echo $certificate['expiry_date']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Next Surveillance Due On</b></td>
                        <td><?php echo $certificate['next_surveillance_due_on']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Status</b></td>
                        <td><?php echo $certificate['status']; ?></td>
                    </tr>
                </table>

            <?php    //pr($certificate);
            } ?>
            </div>
            
        </div>
        </section>
    </div>
    <script type="text/javascript">

    </script>

    