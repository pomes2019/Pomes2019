<?php
include 'db.php';
$result = $db->prepare("SELECT * FROM acct_receivable");
$result->execute();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Asterisk Corp.</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="ar_entry.php" class="site_title"><i class="fa fa-asterisk"></i> <span>Asterisk Corp.</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
              
              </div>
              <div class="profile_info">
                <span></span>
                <h2></h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index2.php"><i class="fa fa-home"></i> Home <span></span></a>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="ar_entry_modal.php">Accounts Receivable</a></li>
                      <li><a href="ap_entry_modal.php">Accounts Payable</a></li>
                        <li><a>Invoice<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="billing_invoice.php">Billing Invoice</a>
                            </li>
                            <li><a href="#level2_1">Check Voucher</a>
                            </li>
                          </ul>
                    </ul>
                  </li>

                  <li><a><i class="fa fa-table"></i>Reports<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Chart of Accounts</a></li>
                      <li><a href="collection_balance.php">Balance Sheet</a></li>
                      <li><a href="#">Income Statement</a></li>
                      <li><a href="#">Sales Report</a></li>
                      <li><a href="#">Purchase Report</a></li>                                            
                    </ul>
                  </li>

                   <li><a><i class="fa fa-table"></i>Payroll<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="payroll.php">Manage Payroll</a></li>
                      <li><a href="#"></a></li>
                                     
                    </ul>
                  </li>


                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                   
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green"></span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>A/R Transactions</h3>
              </div>


            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
   <h3 align="center">A/R Transactions</h3>
   <br />
   <div class="table-responsive">
   <br />
    <div align="right">
     <button type="button" data-toggle="modal" data-target="#myModal"  id="add_button" class="btn btn-primary">Add</button>
      <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <form method="POST" id="ar_entry" enctype="multipart/form-data" action="receivable_insert.php">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn btn-pclose" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" align="center">A/R Entry</h4>
        </div>
        <div class="modal-body">
        <div class="row form-group">
        <div class="col-md-3">
          <label>Mode of Payment</label>
          <input type="text" name="mode_of_payment" id="mode_of_payment" class="form-control" required/>
          <br />
        </div>
        <div class="col-md-3">
          <label>Posting Date</label>
          <input type="Date" name="posting_date" id="posting_date" class="form-control" required/>
          <br />
        </div>
        <div class="col-md-3">
          <label>Document Date</label>
          <input type="Date" name="doc_date" id="doc_date" class="form-control" required/>
          <br />
        </div>
        <div class="col-md-3">
          <label>Due Date</label>
          <input type="Date" name="due_date" id="due_date" class="form-control" required/>
          <br />
        </div>
        </div>
        <div class="row form-group">
        <div class="col-md-3">
        <label>Amount Due</label>
        <input type="number" name="total_amount" class="form-control" required/>
        <br />
        </div>
        <div class="col-md-3">
        <label>Remarks</label>
        <input type="text" name="remarks" class="form-control" required/>
        <br />
        </div>
        <div class="col-md-3">
        <label>G/L Code</label>
        <input type="number" name="gl_code" class="form-control" required/>
        <br />
        </div>
        <div class="col-md-3">
        <label>G/L Account Name/BP Name</label>
        <input type="text" name="gl_name" class="form-control" required/>
        <br />
        </div>
        <div class="row form-group">
        <div class="col-md-6">
        <label>Amount Paid</label>
        <input type="number" name="amount_paid" class="form-control" required/>
        <br />
        </div>
        <div class="row form-group">
        <div class="col-md-3">
        <label>Balance Due</label>
        <input type="number" name="balance_due" class="form-control" required/>
        <br />
        </div>
        </div>
    </div>
    	<div class="modal-footer">
   	 <input type="hidden" name="id" id="id" />
     <input type="hidden" name="operation" id="operation" />
     <input type="submit" name="action" id="action" class="btn btn-primary" value="Submit" />
     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
       
  </div>
  </form>
</div>
</div>
</div>
</div>
    <div id="alert_message"></div>
    <table id="receivable_data" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Payment Terms</th>
       <th>Posting Date</th>
       <th>Document Date</th>
       <th>Due Date</th>
       <th>Amount Due</th>
       <th>Remarks</th> 
       <th>GL Code</th>             
       <th>GL Account Name/BP Name</th>
       <th>Amount Paid</th>             
       <th>Balance Due</th>
       <th></th>
      </tr>
     </thead>
     <tbody>
      <?php
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
          echo
          "<tr>
            <td>{$row['mode_of_payment']}</td>
            <td>{$row['posting_date']}</td>
            <td>{$row['doc_date']}</td>
            <td>{$row['due_date']}</td>
            <td>{$row['total_amount']}</td>
            <td>{$row['remarks']}</td>
            <td>{$row['gl_code']}</td>
            <td>{$row['gl_name']}</td>
            <td>{$row['amount_paid']}</td>
            <td>{$row['balance_due']}</td>
            <td><button class='btn btn-default' id='edit'>Edit</button><button class='btn btn-primary' id='delete' onclick='delete_data({$row['id']})'>Delete</button></td>
          </tr>";
        }
      ?>
     </tbody>
    </table>
</div>
        <!-- /page content -->
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>
<script type="text/javascript" language="javascript" >
function delete_data($id){
 if(confirm("Are you sure you want to remove this?"))
 {
  console.log(id);
  $.ajax({
   url:"receivable_delete.php",
   method:"POST",
   data:{id:id},
   success:function(data){
    $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
    $('#receivable_data').DataTable().destroy();
    fetch_data();
   }
  });
  setInterval(function(){
   $('#alert_message').html('');
  }, 5000);
 }
};
 $(document).ready(function(){
  
  fetch_data();

  function fetch_data()
  {
   var dataTable = $('#receivable_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"receivable_fetch.php",
     type:"POST"
    }
   });
  }
  
  function update_data(id, column_name, value)
  {
   $.ajax({
    url:"receivable_update.php",
    method:"POST",
    data:{id:id, column_name:column_name, value:value},
    success:function(data)
    {
     $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
     $('#receivable_data').DataTable().destroy();
     fetch_data();
    }
   });
   setInterval(function(){
    $('#alert_message').html('');
   }, 5000);
  }

  $(document).on('blur', '.update', function(){
   var id = $(this).data("id");
   var column_name = $(this).data("column");
   var value = $(this).text();
   update_data(id, column_name, value);
  });
  
  $('#add').click(function(){
   var html = '<tr>';
   html += '<td contenteditable id="data1"></td>';
   html += '<td contenteditable id="data2"></td>';
   html += '<td contenteditable id="data3"></td>';
   html += '<td contenteditable id="data4"></td>';
   html += '<td contenteditable id="data5"></td>';
   html += '<td contenteditable id="data6"></td>';
   html += '<td contenteditable id="data7"></td>';
   html += '<td contenteditable id="data8"></td>';
   html += '<td contenteditable id="data9"></td>';
   html += '<td contenteditable id="data10"></td>';
   html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
   html += '</tr>';
   $('#receivable_data tbody').prepend(html);
  });
  
  $(document).on('click', '#insert', function(){
   var mode_of_payment = $('#data1').text();
   var posting_date = $('#data2').text();
   var doc_date = $('#data3').text();
   var due_date = $('#data4').text();
   var total_amount = $('#data5').text();
   var remarks = $('#data6').text();         
   var gl_code = $('#data7').text();   
   var gl_name = $('#data8').text();
   var amount_paid = $('#data9').text();
   var balance_due = $('#data10').text();

   if(mode_of_payment != '' && posting_date != '' && doc_date != '' && due_date != '' && total_amount != '' && remarks != '' && gl_code != '' && gl_name != '' && amount_paid != '' && balance_due != '')
   {
    $.ajax({
     url:"receivable_insert.php",
     method:"POST",
     data:{mode_of_payment:mode_of_payment, posting_date:posting_date, doc_date:doc_date, due_date:due_date, total_amount:total_amount, remarks:remarks, gl_code:gl_code, gl_name:gl_name, amount_paid:amount_paid, balance_due:balance_due },
     success:function(data)
     {
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#receivable_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
   else
   {
    alert("Both Fields is required");
   }
  });
 });
</script>