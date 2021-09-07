<?php $__env->startSection('content'); ?>


<!-- this portion is for demo only
<style type="text/css">

  nav.navbar a.menu-btn {
    padding: 12 !important;
  }
  .color-switcher {
      background-color: #fff;
      border: 1px solid #e5e5e5;
      border-radius: 2px;
      padding: 10px;
      position: fixed;
      top: 150px;
      transition: all 0.4s ease 0s;
      width: 150px;
      z-index: 99999;
  }
  .hide-color-switcher {
      right: -150px;
  }
  .show-color-switcher {
      right: -1px;
  }
  .color-switcher a.switcher-button {
      background: #fff;
      border-top: #e5e5e5;
      border-right: #e5e5e5;
      border-bottom: #e5e5e5;
      border-left: #e5e5e5;
      border-style: solid solid solid solid;
      border-width: 1px 1px 1px 1px;
      border-radius: 2px;
      color: #161616;
      cursor: pointer;
      font-size: 22px;
      width: 45px;
      height: 45px;
      line-height: 43px;
      position: absolute;
      top: 24px;
      left: -44px;
      text-align: center;
  }
  .color-switcher a.switcher-button i {
    line-height: 40px
  }
  .color-switcher .color-switcher-title {
      color: #666;
      padding: 0px 0 8px;
  }
  .color-switcher .color-switcher-title:after {
      content: "";
      display: block;
      height: 1px;
      margin: 14px 0 0;
      position: relative;
      width: 20px;
  }
  .color-switcher .color-list a.color {
      cursor: pointer;
      display: inline-block;
      height: 30px;
      margin: 10px 0 0 1px;
      width: 28px;
  }
  .purple-theme {
      background-color: #7c5cc4;
  }
  .green-theme {
      background-color: #1abc9c;
  }
  .blue-theme {
      background-color: #3498db;
  }
  .dark-theme {
      background-color: #34495e;
  }
</style>
<div class="color-switcher hide-color-switcher">
    <a class="switcher-button"><i class="fa fa-cog fa-spin"></i></a>
    <h5><?php echo e(trans('file.Theme')); ?></h5>
    <div class="color-list">
        <a class="color purple-theme" title="purple" data-color="default.css"></a>
        <a class="color green-theme" title="green" data-color="green.css"></a>
        <a class="color blue-theme" title="blue" data-color="blue.css"></a>
        <a class="color dark-theme" title="dark" data-color="dark.css"></a>
    </div>
</div> -->

<style>
.dashboard-counts{
  background-color: #f1f1f1;
}
  .hold{
    display: flex;
    flex-wrap: wrap;
    gap:10px;
  }
  .hold>div{
    flex-basis: 250px;
    position: relative;

  }
/*  .hold > div ::after{
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    top:0;
    left: 0;
    background-color: rgba(0,0,0,0.5);
    z-index: -88;
  }
  */

  /*  admin card counter custom */
  .card-counter{
    box-shadow: 2px 2px 10px #DADADA;
    margin: 5px;
    padding: 20px 10px;
    background-color: #fff;
    border-radius: 5px;
    min-height: 160px;
    width: 100%;
  }

  .cards:hover{
    transform: scale(1.1);
    transition: transform 0.5s ease-out;


  }
  .card-counter.primary{
    background-color:#2c2c54;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #b33939;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #227093;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #ff793f;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 5em;
    opacity: 0.2;
  }

  .card-counter .count-numbers{
    position: absolute;
    right: 35px;
    top: 20px;
    font-size: 40px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 35px;
    top: 75px;
    font-style: italic;
    text-transform: capitalize;
    opacity: 0.5;
    display: block;
    font-size: 25px;
    font-weight: bold;
  }


.wrapper {
    margin: 15px auto;
    max-width: 1100px;
}

.container-calendar {
    background: #ffffff;
    padding: 15px;
    max-width: 475px;
    margin: 0 auto;
    overflow: auto;
}

.button-container-calendar button {
    cursor: pointer;
    display: inline-block;
    zoom: 1;
    background: #00a2b7;
    color: #fff;
    border: 1px solid #0aa2b5;
    border-radius: 4px;
    padding: 5px 10px;
}

.table-calendar {
    border-collapse: collapse;
    width: 100%;
}

.table-calendar td, .table-calendar th {
    padding: 5px;
    border: 1px solid #e2e2e2;
    text-align: center;
    vertical-align: top;
}

.date-picker.selected {
    font-weight: bold;
    outline: 1px dashed #00BCD4;
}

.date-picker.selected span {
    border-bottom: 2px solid currentColor;
}

/* sunday */
.date-picker:nth-child(1) {
  color: red;
}

/* friday */
.date-picker:nth-child(6) {
  color: green;
}

#monthAndYear {
    text-align: center;
    margin-top: 0;
}

.button-container-calendar {
    position: relative;
    margin-bottom: 1em;
    overflow: hidden;
    clear: both;
}

#previous {
    float: left;
}

#next {
    float: right;
}

.footer-container-calendar {
    margin-top: 1em;
    border-top: 1px solid #dadada;
    padding: 10px 0;
}

.footer-container-calendar {
display: none;
}
.footer-container-calendar select {
    cursor: pointer;
    display: inline-block;
    zoom: 1;
    background: #ffffff;
    color: #585858;
    border: 1px solid #bfc5c5;
    border-radius: 3px;
    padding: 5px 1em;
}
.events-one{
  position: relative;
}
.events-one:before{
  position: absolute;
   font-family: "Font Awesome 5 Free";
   content: "--";
  left:-15px;
  top:3px;
  font-weight: bold;
}
</style>

<?php if(session()->has('not_permitted')): ?>
  <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e(session()->get('not_permitted')); ?></div> 
<?php endif; ?>
<?php if(session()->has('message')): ?>
  <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e(session()->get('message')); ?></div> 
<?php endif; ?>
      <div class="row">
        <div class="container-fluid ">
          <div class="col-md-12 ">
           <!--  <div class="brand-text float-left ">
                <h3 class="" style="display: inline-block;padding: 1rem 2rem;border-radius:5px;background-color:black; color: white"><?php echo e(trans('file.welcome')); ?> <span class="text-danger"><?php echo e(Auth::user()->name); ?></span></h3>
            </div>
 -->            <!-- <div class="filter-toggle btn-group">
              <button class="btn btn-secondary date-btn" data-start_date="<?php echo e(date('Y-m-d')); ?>" data-end_date="<?php echo e(date('Y-m-d')); ?>"><?php echo e(trans('file.Today')); ?></button>
              <button class="btn btn-secondary date-btn" data-start_date="<?php echo e(date('Y-m-d', strtotime(' -7 day'))); ?>" data-end_date="<?php echo e(date('Y-m-d')); ?>"><?php echo e(trans('file.Last 7 Days')); ?></button>
              <button class="btn btn-secondary date-btn active" data-start_date="<?php echo e(date('Y').'-'.date('m').'-'.'01'); ?>" data-end_date="<?php echo e(date('Y-m-d')); ?>"><?php echo e(trans('file.This Month')); ?></button>
              <button class="btn btn-secondary date-btn" data-start_date="<?php echo e(date('Y').'-01'.'-01'); ?>" data-end_date="<?php echo e(date('Y').'-12'.'-31'); ?>"><?php echo e(trans('file.This Year')); ?></button>
            </div> -->
          </div>
        </div>
      </div>

      <!-- Counts Section -->
      <section class="dashboard-counts">
        <div class="container-fluid mb-4">
          <div class="row mb-4">

              <div class="col-md-7">
                <div class="row">
                      <div class="col-md-6 cards">
                        <div class="card-counter primary">
                          <i class="fa fa-graduation-cap"></i>
                          <span class="count-numbers"><?php echo e(number_format((float)$revenue, 2, '.', '')); ?></span>
                          <span class="count-name">Total Students</span>
                        </div>
                      </div>

                      <div class="col-md-6 cards">
                        <div class="card-counter danger">
                          <i class="fa fa-user-plus" ></i>
                          <span class="count-numbers"><?php echo e(number_format((float)$return, 2, '.', '')); ?></span>
                          <span class="count-name">Total Teachers</span>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 cards">
                        <div class="card-counter success">
                          <i class="fa fa-database"></i>
                          <span class="count-numbers"><?php echo e(number_format((float)$purchase_return, 2, '.', '')); ?></span>
                          <span class="count-name">Parents</span>
                        </div>
                      </div>

                      <div class="col-md-6 cards">
                        <div class="card-counter info">
                          <i class="fa fa-users"></i>
                          <span class="count-numbers"><?php echo e(number_format((float)$profit, 2, '.', '')); ?></span>
                          <span class="count-name">Staffs</span>
                        </div>
                      </div>
                    </div>
                    </div>
                  
           

        <!--graph start -->
                 <!-- Area Chart Example-->
                 <div class="col-md-5">
                        <div class="card mb-3">
                          <div class="card-header">
                             <h5 class="p-1 text-center bg-info text-light"><i class="fa fa-area-chart"></i> 
                             Student Area Chart</h5>
                          </div>
                          <div class="card-body " >
                            <canvas id="myAreaChart" width="100%"></canvas>
                          </div>
                          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                        </div>

               </div>

        </div>
       </div>
     </section>


       <div class="container-fluid">
        <div class="row mt-4">
          <div class="col-md-6"  style="overflow-x: scroll;">

            <h5 class="p-2 text-center bg-info text-light">  Total Income of This month </h5>
            <hr class="py-2">
             <!--table Integrate starts for amdin-->
   <table id="example1" class="table table-bordered table-hover dataTable no-footer dtr-inline  custom-table " role="grid" aria-describedby="example1_info">

                                    <thead>
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="SL: activate to sort column descending">SL</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label=" Fee Category: activate to sort column ascending"> Student</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Class</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Invoice Tittle</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Total Amount</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Paid Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>                                                       
                                    

                                    <tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1">1</td>
                                            <td>Regestration Fee</td>
                                            <td>Regestration Fee</td>
                                            <td>Regestration Fee</td>
                                            <td>Regestration Fee</td>
                                            <td>Regestration Fee</td>
                                            
                                      
                                        </tr>
                                        <tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1">2</td>
                                            <td>Monthly Fee</td>
                                            <td>Monthly Fee</td>
                                            <td>Monthly Fee</td>
                                            <td>Monthly Fee</td>
                                            <td>Monthly Fee</td>
                                               
                                            
                                    
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1">3</td>
                                            <td>Exam Fee</td>
                                            <td>Exam Fee</td>
                                            <td>Exam Fee</td>
                                            <td>Exam Fee</td>
                                            <td>Exam Fee</td>
                                         

                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1">4</td>
                                            <td>Certificate Cost Fee</td>
                                            <td>Certificate Cost Fee</td>
                                            <td>Certificate Cost Fee</td>
                                            <td>Certificate Cost Fee</td>
                                            <td>Certificate Cost Fee</td>
                                            
                                     

                                        </tr>
                                      </tbody>



                                </table>


          </div>
           <div class="col-md-6" style="overflow-x: scroll;">

                        <h5 class="p-2 text-center bg-info text-light">  Total Expense of This month </h5>
                        <hr class="py-2">

             <!--table Integrate starts for amdin-->
   <table id="example2" class="table table-bordered table-hover dataTable no-footer dtr-inline" role="grid" aria-describedby="example2_info">

                                    <thead>
                                    <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="SL: activate to sort column descending">SL</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label=" Fee Category: activate to sort column ascending"> Student</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Class</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Invoice Tittle</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Total Amount</th><th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Paid Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>                                                       
                                    

                                    <tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1">1</td>
                                            <td>Regestration Fee</td>
                                            <td>Regestration Fee</td>
                                            <td>Regestration Fee</td>
                                            <td>Regestration Fee</td>
                                            <td>Regestration Fee</td>
                                            
                                      
                                        </tr>
                                        <tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1">2</td>
                                            <td>Monthly Fee</td>
                                            <td>Monthly Fee</td>
                                            <td>Monthly Fee</td>
                                            <td>Monthly Fee</td>
                                            <td>Monthly Fee</td>
                                            
                                   
                                        </tr><tr role="row" class="odd">
                                            <td tabindex="0" class="sorting_1">3</td>
                                            <td>Exam Fee</td>
                                            <td>Exam Fee</td>
                                            <td>Exam Fee</td>
                                            <td>Exam Fee</td>
                                            <td>Exam Fee</td>
                                              
                                    
                                        </tr><tr role="row" class="even">
                                            <td tabindex="0" class="sorting_1">4</td>
                                            <td>Certificate Cost Fee</td>
                                            <td>Certificate Cost Fee</td>
                                            <td>Certificate Cost Fee</td>
                                            <td>Certificate Cost Fee</td>
                                            <td>Certificate Cost Fee</td>
                                              
                                    
                                        </tr></tbody>
                                </table>
          </div>
         
     </div>
   </div>



   <!--events and calendar section starts-->

      <div class="container-fluid">
        <div class="row mt-5">
          <div class="col-md-6 p-3">
<!--           <div class="events-wrapper bg-light p-3" >
 -->            <h5 class="text-light bg-info p-2">Recent Events </h5>

            <div class="events p-3">
              <div class="events-one"> New Year's Day and New Year's Eve.  </div>
              <hr>
              <div class="events-one"> Memorial Day.  </div>
              <hr>
              <div class="events-one">  Independence Day. </div>
              <hr>
              <div class="events-one"> Thanksgiving and the day after.  </div>
          </div>
<!--         </div>
 -->      </div>
          <div class="col-md-6">
                <div class="wrapper">
                 <h5 class="text-light bg-info p-2">Calendar </h5>


                <div class="container-calendar">
                    <h3 id="monthAndYear"></h3>
                    
                    <div class="button-container-calendar">
                        <button id="previous" onclick="previous()">&#8249;</button>
                        <button id="next" onclick="next()">&#8250;</button>
                    </div>
                    
                    <table class="table-calendar" id="calendar" data-lang="en">
                        <thead id="thead-month"></thead>
                        <tbody id="calendar-body"></tbody>
                    </table>
                    
                    <div class="footer-container-calendar">
                         <label for="month">Jump To: </label>
                         <select id="month" onchange="jump()">
                             <option value=0>Jan</option>
                             <option value=1>Feb</option>
                             <option value=2>Mar</option>
                             <option value=3>Apr</option>
                             <option value=4>May</option>
                             <option value=5>Jun</option>
                             <option value=6>Jul</option>
                             <option value=7>Aug</option>
                             <option value=8>Sep</option>
                             <option value=9>Oct</option>
                             <option value=10>Nov</option>
                             <option value=11>Dec</option>
                         </select>
                         <select id="year" onchange="jump()"></select>       
                    </div>

                </div>
    
</div>
                    
        </div>
      </div>
    </div>


            <!-- <div class="col-md-7 mt-4">
              <div class="card line-chart-example">
                <div class="card-header d-flex align-items-center">
                  <h4><?php echo e(trans('file.Cash Flow')); ?></h4>
                </div>
                <div class="card-body">
                  <?php
                    if($general_setting->theme == 'default.css'){
                      $color = '#733686';
                      $color_rgba = 'rgba(115, 54, 134, 0.8)';
                    }
                    elseif($general_setting->theme == 'green.css'){
                        $color = '#2ecc71';
                        $color_rgba = 'rgba(46, 204, 113, 0.8)';
                    }
                    elseif($general_setting->theme == 'blue.css'){
                        $color = '#3498db';
                        $color_rgba = 'rgba(52, 152, 219, 0.8)';
                    }
                    elseif($general_setting->theme == 'dark.css'){
                        $color = '#34495e';
                        $color_rgba = 'rgba(52, 73, 94, 0.8)';
                    }
                  ?>
                  <canvas id="cashFlow" data-color = "<?php echo e($color); ?>" data-color_rgba = "<?php echo e($color_rgba); ?>" data-recieved = "<?php echo e(json_encode($payment_recieved)); ?>" data-sent = "<?php echo e(json_encode($payment_sent)); ?>" data-month = "<?php echo e(json_encode($month)); ?>" data-label1="<?php echo e(trans('file.Payment Recieved')); ?>" data-label2="<?php echo e(trans('file.Payment Sent')); ?>"></canvas>
                </div>
              </div>
            </div> -->
            <!-- <div class="col-md-5 mt-4">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4><?php echo e(date('F')); ?> <?php echo e(date('Y')); ?></h4>
                </div>
                <div class="pie-chart mb-2">
                    <canvas id="transactionChart" data-color = "<?php echo e($color); ?>" data-color_rgba = "<?php echo e($color_rgba); ?>" data-revenue=<?php echo e($revenue); ?> data-purchase=<?php echo e($purchase); ?> data-expense=<?php echo e($expense); ?> data-label1="<?php echo e(trans('file.Purchase')); ?>" data-label2="<?php echo e(trans('file.revenue')); ?>" data-label3="<?php echo e(trans('file.Expense')); ?>" width="100" height="95"> </canvas>
                </div>
              </div>
            </div> -->
       
        <!-- <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4><?php echo e(trans('file.yearly report')); ?></h4>
                </div>
                <div class="card-body">
                  <canvas id="saleChart" data-sale_chart_value = "<?php echo e(json_encode($yearly_sale_amount)); ?>" data-purchase_chart_value = "<?php echo e(json_encode($yearly_purchase_amount)); ?>" data-label1="<?php echo e(trans('file.Purchased Amount')); ?>" data-label2="<?php echo e(trans('file.Sold Amount')); ?>"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4><?php echo e(trans('file.Recent Transaction')); ?></h4>
                  <div class="right-column">
                    <div class="badge badge-primary"><?php echo e(trans('file.latest')); ?> 5</div>
                  </div>
                </div>
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" href="#sale-latest" role="tab" data-toggle="tab"><?php echo e(trans('file.Sale')); ?></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#purchase-latest" role="tab" data-toggle="tab"><?php echo e(trans('file.Purchase')); ?></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#quotation-latest" role="tab" data-toggle="tab"><?php echo e(trans('file.Quotation')); ?></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#payment-latest" role="tab" data-toggle="tab"><?php echo e(trans('file.Payment')); ?></a>
                  </li>
                </ul>

                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane fade show active" id="sale-latest">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th><?php echo e(trans('file.date')); ?></th>
                              <th><?php echo e(trans('file.reference')); ?></th>
                              <th><?php echo e(trans('file.customer')); ?></th>
                              <th><?php echo e(trans('file.status')); ?></th>
                              <th><?php echo e(trans('file.grand total')); ?></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $__currentLoopData = $recent_sale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $customer = DB::table('customers')->find($sale->customer_id); ?>
                            <tr>
                              <td><?php echo e(date($general_setting->date_format, strtotime($sale->created_at->toDateString()))); ?></td>
                              <td><?php echo e($sale->reference_no); ?></td>
                              <td><?php echo e($customer->name); ?></td>
                              <?php if($sale->sale_status == 1): ?>
                              <td><div class="badge badge-success"><?php echo e(trans('file.Completed')); ?></div></td>
                              <?php elseif($sale->sale_status == 2): ?>
                              <td><div class="badge badge-danger"><?php echo e(trans('file.Pending')); ?></div></td>
                              <?php else: ?>
                              <td><div class="badge badge-warning"><?php echo e(trans('file.Draft')); ?></div></td>
                              <?php endif; ?>
                              <td><?php echo e($sale->grand_total); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                        </table>
                      </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="purchase-latest">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th><?php echo e(trans('file.date')); ?></th>
                              <th><?php echo e(trans('file.reference')); ?></th>
                              <th><?php echo e(trans('file.Supplier')); ?></th>
                              <th><?php echo e(trans('file.status')); ?></th>
                              <th><?php echo e(trans('file.grand total')); ?></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $__currentLoopData = $recent_purchase; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $supplier = DB::table('suppliers')->find($purchase->supplier_id); ?>
                            <tr>
                              <td><?php echo e(date($general_setting->date_format, strtotime($purchase->created_at->toDateString()))); ?></td>
                              <td><?php echo e($purchase->reference_no); ?></td>
                              <?php if($supplier): ?>
                                <td><?php echo e($supplier->name); ?></td>
                              <?php else: ?>
                                <td>N/A</td>
                              <?php endif; ?>
                              <?php if($purchase->status == 1): ?>
                              <td><div class="badge badge-success">Recieved</div></td>
                              <?php elseif($purchase->status == 2): ?>
                              <td><div class="badge badge-success">Partial</div></td>
                              <?php elseif($purchase->status == 3): ?>
                              <td><div class="badge badge-danger">Pending</div></td>
                              <?php else: ?>
                              <td><div class="badge badge-danger">Ordered</div></td>
                              <?php endif; ?>
                              <td><?php echo e($purchase->grand_total); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                        </table>
                      </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="quotation-latest">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th><?php echo e(trans('file.date')); ?></th>
                              <th><?php echo e(trans('file.reference')); ?></th>
                              <th><?php echo e(trans('file.customer')); ?></th>
                              <th><?php echo e(trans('file.status')); ?></th>
                              <th><?php echo e(trans('file.grand total')); ?></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $__currentLoopData = $recent_quotation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quotation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php $customer = DB::table('customers')->find($quotation->customer_id); ?>
                            <tr>
                              <td><?php echo e(date($general_setting->date_format, strtotime($quotation->created_at->toDateString()))); ?></td>
                              <td><?php echo e($quotation->reference_no); ?></td>
                              <td><?php echo e($customer->name); ?></td>
                              <?php if($quotation->quotation_status == 1): ?>
                              <td><div class="badge badge-danger">Pending</div></td>
                              <?php else: ?>
                              <td><div class="badge badge-success">Sent</div></td>
                              <?php endif; ?>
                              <td><?php echo e($quotation->grand_total); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                        </table>
                      </div>
                  </div>
                  <div role="tabpanel" class="tab-pane fade" id="payment-latest">
                      <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th><?php echo e(trans('file.date')); ?></th>
                              <th><?php echo e(trans('file.reference')); ?></th>
                              <th><?php echo e(trans('file.Amount')); ?></th>
                              <th><?php echo e(trans('file.Paid By')); ?></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $__currentLoopData = $recent_payment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                              <td><?php echo e(date($general_setting->date_format, strtotime($payment->created_at->toDateString()))); ?></td>
                              <td><?php echo e($payment->payment_reference); ?></td>
                              <td><?php echo e($payment->amount); ?></td>
                              <td><?php echo e($payment->paying_method); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                        </table>
                      </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4><?php echo e(trans('file.Best Seller').' '.date('F')); ?></h4>
                  <div class="right-column">
                    <div class="badge badge-primary"><?php echo e(trans('file.top')); ?> 5</div>
                  </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>SL No</th>
                          <th><?php echo e(trans('file.Product Details')); ?></th>
                          <th><?php echo e(trans('file.qty')); ?></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $__currentLoopData = $best_selling_qty; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $product = DB::table('products')->find($sale->product_id); ?>
                        <tr>
                          <td><?php echo e($key + 1); ?></td>
                          <td><?php echo e($sale->name); ?><br>[<?php echo e($sale->code); ?>]</td>
                          <td><?php echo e($sale->sold_qty); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4><?php echo e(trans('file.Best Seller').' '.date('Y'). '('.trans('file.qty').')'); ?></h4>
                  <div class="right-column">
                    <div class="badge badge-primary"><?php echo e(trans('file.top')); ?> 5</div>
                  </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>SL No</th>
                          <th><?php echo e(trans('file.Product Details')); ?></th>
                          <th><?php echo e(trans('file.qty')); ?></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $__currentLoopData = $yearly_best_selling_qty; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $product = DB::table('products')->find($sale->product_id); ?>
                        <tr>
                          <td><?php echo e($key + 1); ?></td>
                          <td><?php echo e($product->name); ?><br>[<?php echo e($product->code); ?>]</td>
                          <td><?php echo e($sale->sold_qty); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4><?php echo e(trans('file.Best Seller').' '.date('Y') . '('.trans('file.price').')'); ?></h4>
                  <div class="right-column">
                    <div class="badge badge-primary"><?php echo e(trans('file.top')); ?> 5</div>
                  </div>
                </div>
                <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>SL No</th>
                          <th><?php echo e(trans('file.Product Details')); ?></th>
                          <th><?php echo e(trans('file.grand total')); ?></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $__currentLoopData = $yearly_best_selling_price; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $product = DB::table('products')->find($sale->product_id); ?>
                        <tr>
                          <td><?php echo e($key + 1); ?></td>
                          <td><?php echo e($sale->name); ?><br>[<?php echo e($sale->code); ?>]</td>
                          <td><?php echo e(number_format((float)$sale->total_price, 2, '.', '')); ?></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </tbody>
                    </table>
                  </div>
              </div>
            </div>
          </div>
        </div> -->
      </section>


<script type="text/javascript">
    // Show and hide color-switcher
    $(".color-switcher .switcher-button").on('click', function() {
        $(".color-switcher").toggleClass("show-color-switcher", "hide-color-switcher", 300);
    });

    // Color Skins
    $('a.color').on('click', function() {
        /*var title = $(this).attr('title');
        $('#style-colors').attr('href', 'css/skin-' + title + '.css');
        return false;*/
        $.get('setting/general_setting/change-theme/' + $(this).data('color'), function(data) {
        });
        var style_link= $('#custom-style').attr('href').replace(/([^-]*)$/, $(this).data('color') );
        $('#custom-style').attr('href', style_link);
    });

    $(".date-btn").on("click", function() {
        $(".date-btn").removeClass("active");
        $(this).addClass("active");
        var start_date = $(this).data('start_date');
        var end_date = $(this).data('end_date');
        $.get('dashboard-filter/' + start_date + '/' + end_date, function(data) {
            dashboardFilter(data);
        });
    });

    function dashboardFilter(data){
        $('.revenue-data').hide();
        $('.revenue-data').html(parseFloat(data[0]).toFixed(2));
        $('.revenue-data').show(500);

        $('.return-data').hide();
        $('.return-data').html(parseFloat(data[1]).toFixed(2));
        $('.return-data').show(500);

        $('.profit-data').hide();
        $('.profit-data').html(parseFloat(data[2]).toFixed(2));
        $('.profit-data').show(500);

        $('.purchase_return-data').hide();
        $('.purchase_return-data').html(parseFloat(data[3]).toFixed(2));
        $('.purchase_return-data').show(500);
    }
</script>


<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\schoolmng\resources\views/index.blade.php ENDPATH**/ ?>