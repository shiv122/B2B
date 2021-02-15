  <?php 
include 'dbcon.php';
//session_start();

 ?>
 <html>
<head>
 <link rel="icon" href="assets/img/basic/favicon.ico" type="image/x-icon">
    <title>Paper</title>
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/app.css">
    <style>
        .loader {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #F5F8FA;
            z-index: 9998;
            text-align: center;
        }

        .plane-container {
            position: absolute;
            top: 50%;
            left: 50%;
        }
    </style>
    <!-- Js -->
    <!--
    --- Head Part - Use Jquery anywhere at page.
    --- http://writing.colin-gourlay.com/safely-using-ready-before-including-jquery/
    -->
    <script>(function(w,d,u){w.readyQ=[];w.bindReadyQ=[];function p(x,y){if(x=="ready"){w.bindReadyQ.push(y);}else{w.readyQ.push(x);}};var a={ready:p,bind:p};w.$=w.jQuery=function(f){if(f===d||f===u){return a}else{p(f)}}})(window,document)</script>
</head>
<body>
 <div class="tab-pane fade" id="v-pills-payments" role="tabpanel" aria-labelledby="v-pills-payments-tab">
                   <div class="row">
                       <div class="col-md-12">
                           <div class="card no-b">
                               <div class="card-header white b-0 p-3">
                                   <h4 class="card-title">Invoices</h4>
                                   <small class="card-subtitle mb-2 text-muted">Items purchase by users.</small>
                               </div>
                               <div class="collapse show" id="invoiceCard">
                                   <div class="card-body p-0">
                                       <div class="table-responsive">
                                           <table id="recent-orders"
                                                  class="table table-hover mb-0 ps-container ps-theme-default">
                                               <thead class="bg-light">

                                               <tr>
                                                   <th>PAYMENT ID</th>
                                                   <th>Invoice </th>
                                                   <th>Customer Name</th>
                                                   <th>Status</th>
                                                   <th>Amount</th>
                                               </tr>
                                               </thead>
                                               <tbody>
                                                <?php


                                            $sql="SELECT * from payment";
                                             $res = mysqli_query($conn ,$sql); 
                                         if (mysqli_num_rows($res) > 0)
                                            {

                                                while($row = mysqli_fetch_assoc($res))
                                                {




                                            ?>
 
         <tr>
                                                   <td><?php echo $row['tr_id']; ?></td>
                                                   <td><a href="#"><?php echo $row['invoice']; ?></a></td>
                                                   <td><?php echo $row['c_name']; ?></td>
                                                   <td><span class="badge badge-<?php  switch ($row['status']) {
                                                     case '0':
                                                    echo "danger";
                                                       break;
                                                     case '1':
                                                       echo "success";
                                                       break;
                                                     default:
                                                       # code...
                                                       break;
                                                   } ?>"><?php  switch ($row['status']) {
                                                     case '0':
                                                    echo "Due";
                                                       break;
                                                     case '1':
                                                       echo "Paid";
                                                       break;
                                                     default:
                                                       # code...
                                                       break;
                                                   } ?></span></td>
                                                   <td><?php echo $row['amount']; ?></td>
                                               </tr>
                                               <?php }} ?>
                                               </tbody>
                                           </table>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

               </div></body>
               </html>