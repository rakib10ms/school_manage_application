<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//school management system routes

Route::get('/clear/route', 'ConfigController@clearRoute');



 
Route::view('/', 'welcome');

//student registration
	Route::get('/reg/view', 'Backend\Student\RegController@view')->name('students.registration.view');
	Route::get('/reg/add', 'Backend\Student\RegController@add')->name('students.registration.add');
    Route::post('/reg/store', 'Backend\Student\RegController@store')->name('students.registration.store');
    Route::get('/reg/edit/{student_id}', 'Backend\Student\RegController@edit')->name('students.registration.edit');
    Route::post('/reg/update/{student_id}', 'Backend\Student\RegController@update')->name('students.registration.update');
    Route::get('/year-class-wise', 'Backend\Student\RegController@YearClassWise')->name('students.year.class.wise');
    Route::get('/reg/promotion/{student_id}', 'Backend\Student\RegController@promotion')->name('students.registration.promotion');
    Route::post('/reg/promotion/{student_id}', 'Backend\Student\RegController@promotionstore')->name('students.registration.promotion.store');
    Route::get('/reg/details/{student_id}', 'Backend\Student\RegController@details')->name('students.registration.details');
//student class
Route::get('/student/class/view', 'Backend\Setup\StudentClassController@view')->name('setups.student.class.view');
Route::get('/student/class/add', 'Backend\Setup\StudentClassController@add')->name('setups.student.class.add');
Route::post('/student/class/store', 'Backend\Setup\StudentClassController@store')->name('setups.student.class.store');
 Route::get('/student/class/edit/{id}', 'Backend\Setup\StudentClassController@edit')->name('setups.student.class.edit');
 Route::post('/student/class/update/{id}', 'Backend\Setup\StudentClassController@update')->name('setups.student.class.update');
 Route::post('/student/class/delete/{id}', 'Backend\Setup\StudentClassController@delete')->name('setups.student.class.delete');

 //year
 Route::get('/student/year/view', 'Backend\Setup\YearController@view')->name('setups.student.year.view');
 Route::get('/student/year/add', 'Backend\Setup\YearController@add')->name('setups.student.year.add');
 Route::post('/student/year/store', 'Backend\Setup\YearController@store')->name('setups.student.year.store');
 Route::get('/student/year/edit/{id}', 'Backend\Setup\YearController@edit')->name('setups.student.year.edit');
    Route::post('/student/year/update/{id}', 'Backend\Setup\YearController@update')->name('setups.student.year.update');
    Route::post('/student/year/delete/{id}', 'Backend\Setup\YearController@delete')->name('setups.student.year.delete');

//group
Route::get('/student/group/view', 'Backend\Setup\GroupController@view')->name('setups.student.group.view');
Route::get('/student/group/add', 'Backend\Setup\GroupController@add')->name('setups.student.group.add');
Route::post('/student/group/store', 'Backend\Setup\GroupController@store')->name('setups.student.group.store');
Route::get('/student/group/edit/{id}', 'Backend\Setup\GroupController@edit')->name('setups.student.group.edit');
Route::post('/student/group/update/{id}', 'Backend\Setup\GroupController@update')->name('setups.student.group.update');
Route::post('/student/group/delete/{id}', 'Backend\Setup\GroupController@delete')->name('setups.student.group.delete');

 //Student Shift
Route::get('/student/shift/view', 'Backend\Setup\ShiftController@view')->name('setups.student.shift.view');
Route::get('/student/shift/add', 'Backend\Setup\ShiftController@add')->name('setups.student.shift.add');
Route::post('/student/shift/store', 'Backend\Setup\ShiftController@store')->name('setups.student.shift.store');
Route::get('/student/shift/edit/{id}', 'Backend\Setup\ShiftController@edit')->name('setups.student.shift.edit');
Route::post('/student/shift/update/{id}', 'Backend\Setup\ShiftController@update')->name('setups.student.shift.update');
Route::post('/student/shift/delete/{id}', 'Backend\Setup\ShiftController@delete')->name('setups.student.shift.delete');

//subject view
Route::get('/subject/view', 'Backend\Setup\SubjectController@view')->name('setups.subject.view');
Route::get('/subject/view/add', 'Backend\Setup\SubjectController@add')->name('setups.subject.add');
Route::post('/subject/view/store', 'Backend\Setup\SubjectController@store')->name('setups.subject.store');
Route::get('/subject/view/edit/{id}', 'Backend\Setup\SubjectController@edit')->name('setups.subject.edit');
Route::post('/subject/view/update/{id}', 'Backend\Setup\SubjectController@update')->name('setups.subject.update');
Route::post('/subject/view/delete/{id}', 'Backend\Setup\SubjectController@delete')->name('setups.subject.delete');


//Assign Subject
    Route::get('/assign/subject/view', 'Backend\Setup\AssignSubjectController@view')->name('setups.assign.subject.view');
    Route::get('/assign/subject/add', 'Backend\Setup\AssignSubjectController@add')->name('setups.assign.subject.add');
    Route::post('/assign/subject/store', 'Backend\Setup\AssignSubjectController@store')->name('setups.assign.subject.store');
    Route::get('/assign/subject/edit/{class_id}', 'Backend\Setup\AssignSubjectController@edit')->name('setups.assign.subject.edit');
    Route::post('/assign/subject/update/{class_id}', 'Backend\Setup\AssignSubjectController@update')->name('setups.assign.subject.update');
    Route::post('/assign/subject/delete/{id}', 'Backend\Setup\AssignSubjectController@delete')->name('setups.assign.subject.delete');
    Route::get('/assign/subject/details/{class_id}', 'Backend\Setup\AssignSubjectController@details')->name('setups.assign.subject.details');






//Student Roll Genarate Part
    Route::get('/roll/view', 'Backend\Student\RollController@view')->name('students.roll.view');
    Route::get('/roll/get-student', 'Backend\Student\RollController@getstudent')->name('students.roll.get-student');
    Route::post('/roll/store', 'Backend\Student\RollController@store')->name('students.roll.store');



 //Exam Type
    Route::get('/exam/type/view', 'Backend\Setup\ExamTypeController@view')->name('setups.exam.type.view');
    Route::get('/exam/type/add', 'Backend\Setup\ExamTypeController@add')->name('setups.exam.type.add');
    Route::post('/exam/type/store', 'Backend\Setup\ExamTypeController@store')->name('setups.exam.type.store');
    Route::get('/exam/type/edit/{id}', 'Backend\Setup\ExamTypeController@edit')->name('setups.exam.type.edit');
    Route::post('/exam/type/update/{id}', 'Backend\Setup\ExamTypeController@update')->name('setups.exam.type.update');
    Route::post('/exam/type/delete/{id}', 'Backend\Setup\ExamTypeController@delete')->name('setups.exam.type.delete');

    //marks
    Route::get('/add', 'Backend\Marks\MarksController@add')->name('marks.add');
    Route::post('/store', 'Backend\Marks\MarksController@store')->name('marks.store');
    Route::get('/edit', 'Backend\Marks\MarksController@edit')->name('marks.edit');
    Route::get('/get-student-marks', 'Backend\Marks\MarksController@getMarks')->name('get-student-marks');
    Route::post('/update', 'Backend\Marks\MarksController@update')->name('marks.update');


    Route::get('/get-student', 'Backend\DefaultController@getStudent')->name('get-student');
	Route::get('/get-subject', 'Backend\DefaultController@getSubject')->name('get-subject');


//Grade Point
    Route::get('/grade/view', 'Backend\Marks\GradeController@view')->name('marks.grade.view');
    Route::get('/grade/add', 'Backend\Marks\GradeController@add')->name('marks.grade.add');
    Route::post('/grade/store', 'Backend\Marks\GradeController@store')->name('marks.grade.store');
    Route::get('/grade/edit/{id}', 'Backend\Marks\GradeController@edit')->name('marks.grade.edit');
    Route::post('/grade/update/{id}', 'Backend\Marks\GradeController@update')->name('marks.grade.update');


//Fee Category
    Route::get('/fee/category/view', 'Backend\Setup\FeeCategoryController@view')->name('setups.fee.category.view');
    Route::get('/fee/category/add', 'Backend\Setup\FeeCategoryController@add')->name('setups.fee.category.add');
    Route::post('/fee/category/store', 'Backend\Setup\FeeCategoryController@store')->name('setups.fee.category.store');
    Route::get('/fee/category/edit/{id}', 'Backend\Setup\FeeCategoryController@edit')->name('setups.fee.category.edit');
    Route::post('/fee/category/update/{id}', 'Backend\Setup\FeeCategoryController@update')->name('setups.fee.category.update');
    Route::post('/fee/category/delete/{id}', 'Backend\Setup\FeeCategoryController@delete')->name('setups.fee.category.delete');


//Fee Category Amount
    Route::get('/fee/amount/view', 'Backend\Setup\FeeAmountController@view')->name('setups.fee.amount.view');
    Route::get('/fee/amount/add', 'Backend\Setup\FeeAmountController@add')->name('setups.fee.amount.add');
    Route::post('/fee/amount/store', 'Backend\Setup\FeeAmountController@store')->name('setups.fee.amount.store');
    Route::get('/fee/amount/edit/{fee_category_id}', 'Backend\Setup\FeeAmountController@edit')->name('setups.fee.amount.edit');
    Route::post('/fee/amount/update/{fee_category_id}', 'Backend\Setup\FeeAmountController@update')->name('setups.fee.amount.update');
    Route::post('/fee/amount/delete/{id}', 'Backend\Setup\FeeAmountController@delete')->name('setups.fee.amount.delete');
    Route::get('/fee/amount/details/{fee_category_id}', 'Backend\Setup\FeeAmountController@details')->name('setups.fee.amount.details');


//Student Fee
    Route::get('/student/fee/view', 'Backend\Account\StudentFeeController@view')->name('accounts.fee.view');
    Route::get('/student/fee/add', 'Backend\Account\StudentFeeController@add')->name('accounts.fee.add');
    Route::post('/student/fee/store', 'Backend\Account\StudentFeeController@store')->name('accounts.fee.store');
    Route::get('/student/getstudent', 'Backend\Account\StudentFeeController@getstudent')->name('accounts.fee.getstudent');

//Student Exam Fee
    Route::get('/exam/fee/view', 'Backend\Student\ExamFeeController@view')->name('students.exam.fee.view');
    Route::get('/exam/get-student', 'Backend\Student\ExamFeeController@getstudent')->name('students.exam.fee.get-student');
    Route::get('/exam/fee/payslip', 'Backend\Student\ExamFeeController@payslip')->name('students.exam.fee.payslip');

//Student Monthly Fee
    Route::get('/month/fee/view', 'Backend\Student\MonthlyFeeController@view')->name('students.monthly.fee.view');
    Route::get('/month/get-student', 'Backend\Student\MonthlyFeeController@getstudent')->name('students.monthly.fee.get-student');
    Route::get('/month/fee/payslip', 'Backend\Student\MonthlyFeeController@payslip')->name('students.monthly.fee.payslip');



//Designation
    Route::get('/designation/view', 'Backend\Setup\DesignationController@view')->name('setups.designation.view');
    Route::get('/designation/view/add', 'Backend\Setup\DesignationController@add')->name('setups.designation.add');
    Route::post('/designation/view/store', 'Backend\Setup\DesignationController@store')->name('setups.designation.store');
    Route::get('/designation/view/edit/{id}', 'Backend\Setup\DesignationController@edit')->name('setups.designation.edit');
    Route::post('/designation/view/update/{id}', 'Backend\Setup\DesignationController@update')->name('setups.designation.update');
    Route::post('/designation/view/delete/{id}', 'Backend\Setup\DesignationController@delete')->name('setups.designation.delete');





    //account other costs
Route::get('/othercosts','Backend\OtherCosts\OtherCostController@index')->name('othercosts.index');
Route::get('/othercosts/create','Backend\OtherCosts\OtherCostController@create')->name('othercosts.create');
Route::post('/othercosts/store','Backend\OtherCosts\OtherCostController@store')->name('othercosts.store');
Route::get('/othercosts/edit/{id}','Backend\OtherCosts\OtherCostController@edit')->name('othercosts.edit');
Route::post('/othercosts/update/{id}','Backend\OtherCosts\OtherCostController@update')->name('othercosts.update');
Route::get('/othercosts/delete/{id}','Backend\OtherCosts\OtherCostController@destroy')->name('othercosts.delete');




    //holidays
Route::get('/holidays','Backend\Holidays\HolidayController@index')->name('holiday.index');
Route::get('/holidays/add','Backend\Holidays\HolidayController@create')->name('add.holiday');
Route::post('/holidays/add','Backend\Holidays\HolidayController@store')->name('holiday.store');
Route::get('/holidays/edit/{id}','Backend\Holidays\HolidayController@edit')->name('holiday.edit');
Route::post('/holidays/update/{id}','Backend\Holidays\HolidayController@update')->name('holiday.update');
Route::get('/holidays/delete/{id}','Backend\Holidays\HolidayController@destroy')->name('holiday.delete');



    //contact
Route::get('/contact','Backend\Contact\ContactController@index')->name('contact');
Route::get('/contact/add','Backend\Contact\ContactController@create')->name('add.contact');
Route::post('/contact/add','Backend\Contact\ContactController@store')->name('contact.store');
Route::get('/contact/edit/{id}','Backend\Contact\ContactController@edit')->name('contact.edit');
Route::post('/contact/update/{id}','Backend\Contact\ContactController@update')->name('contact.update');
Route::get('/contact/delete/{id}','Backend\Contact\ContactController@destroy')->name('contact.delete');



    //leave purpose
Route::get('/leaves','Backend\Leave\LeaveController@index')->name('leave.index');
Route::get('/leaves/add','Backend\Leave\LeaveController@create')->name('add.leave');
Route::post('/leaves/add','Backend\Leave\LeaveController@store')->name('leave.store');
Route::get('/leaves/edit/{id}','Backend\Leave\LeaveController@edit')->name('leave.edit');
Route::post('/leaves/update/{id}','Backend\Leave\LeaveController@update')->name('leave.update');
Route::get('/leaves/delete/{id}','Backend\Leave\LeaveController@destroy')->name('leave.delete');





    //view  all Users
Route::get('/view/allUsers','Backend\User\UserController@index')->name('viewUsers');
Route::get('/view/allParents','Backend\Parent\ParentController@index')->name('viewParent');
// Route::get('/create/allUsers','Backend\User\UserController@index')->name('addUser');
// Route::get('/viewpdf/allUsers/','Backend\User\UserController@createPDF')->name('viewUsersPdf');





































//eshop website routes 
//home page
Route::get('/eshop', 'WebsiteController@index')->name('eshop');

//category
Route::get('/eshop/category', 'WebsiteController@category')->name('eshop-category');
//product detail
Route::get('/eshop/detail/{id}', 'WebsiteController@detail')->name('eshop-detail');

//cart add
Route::post('/eshop/cart/{id}', 'WebsiteController@add_to_cart')->name('add-to-cart');
//view cart
Route::get('/eshop/cart-page', 'WebsiteController@cart_page')->name('cart-page');
// cart add from detail with quantity
Route::post('/add-cart-quantity/{id}', 'WebsiteController@add_cart_quantity')->name('add-cart-quantity');
//cart quantity update
Route::post('/cart-quantity-update/{id}', 'WebsiteController@cart_quantity_update')->name('cart-quantity-update');
//cart destroy
Route::get('/cart-destroy/{id}', 'WebsiteController@cart_destroy')->name('cart-destroy');
//cart destroy
Route::get('/cart-destroy-master/{id}', 'WebsiteController@cart_destroy_master')->name('cart-destroy-master');
//category products
Route::get('/eshop/all-categories/{id}', 'WebsiteController@category')->name('all-categories');
//category page
Route::get('/eshop/categories/', 'WebsiteController@category_page')->name('eshop-category-page');
//checkout page
Route::post('/eshop/checkout/{user_ip}', 'WebsiteController@checkout')->name('checkout');

//order place
Route::post('/place-order', 'WebsiteController@place_order')->name('place-order');

//confirmation
Route::get('/eshop/confirmation/', 'WebsiteController@confirmation')->name('confirmation');

//login
Route::get('/eshop/login/', 'WebsiteController@login')->name('eshop-login');
Route::post('/eshop/login/', 'LoginController@login')->name('eshop-post-login');
//logout
Route::post('/eshop/logout', 'WebsiteController@logout')->name('customer-logout');
//register
Route::post('/eshop/register/', 'RegisterController@register')->name('eshop-post-register');
//brands
Route::get('/eshop/brands/{id}/{category_id}', 'WebsiteController@brands')->name('eshop-brands');
Route::get('/eshop/brands-product/{id}/', 'WebsiteController@brands_product')->name('brands-product');

//offer
Route::get('/eshop/offer/', 'WebsiteController@offer')->name('eshop-offer');
//search
Route::post('/eshop/search/', 'WebsiteController@search')->name('search');
//newsletter
Route::post('/eshop/newsletter/', 'WebsiteController@newsletter')->name('newsletter');

//cart clear
Route::get('/eshop/clear-cart/', 'WebsiteController@clear_cart')->name('clear-cart');
//blog post
Route::get('/eshop/blog-post/{id}/', 'WebsiteController@blog_post')->name('blog-post');
Route::get('/eshop/blogs/', 'WebsiteController@blogs')->name('eshop-blogs');

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    Route::get('/dashboard', 'HomeController@dashboard');
    //expire date
    Route::get('/expire', 'HomeController@expire')->name('expire-date');

    //profile
    Route::get('/eshop/profile/', 'WebsiteController@profile')->name('eshop-profile');
    Route::get('/edit-profile/{id}', 'WebsiteController@edit_profile')->name('edit-profile');
    Route::post('/update-profile/', 'WebsiteController@update_profile')->name('update-profile');
    Route::post('/update-password/', 'WebsiteController@update_password')->name('update-password');
    Route::get('/eshop/orders/', 'WebsiteController@orders')->name('orders');
});

Route::group(['middleware' => ['auth', 'active']], function() {

    

    Route::get('/', 'HomeController@index');
    Route::get('/dashboard-filter/{start_date}/{end_date}', 'HomeController@dashboardFilter');

    Route::get('language_switch/{locale}', 'LanguageController@switchLanguage');

    Route::get('role/permission/{id}', 'RoleController@permission')->name('role.permission');
    Route::post('role/set_permission', 'RoleController@setPermission')->name('role.setPermission');
    Route::resource('role', 'RoleController');

    Route::post('importunit', 'UnitController@importUnit')->name('unit.import');
    Route::post('unit/deletebyselection', 'UnitController@deleteBySelection');
    Route::get('unit/lims_unit_search', 'UnitController@limsUnitSearch')->name('unit.search');
    Route::resource('unit', 'UnitController');

    Route::post('category/import', 'CategoryController@import')->name('category.import');
    Route::post('category/deletebyselection', 'CategoryController@deleteBySelection');
    Route::post('category/category-data', 'CategoryController@categoryData');
    Route::resource('category', 'CategoryController');

    Route::post('importbrand', 'BrandController@importBrand')->name('brand.import');
    Route::post('brand/deletebyselection', 'BrandController@deleteBySelection');
    Route::get('brand/lims_brand_search', 'BrandController@limsBrandSearch')->name('brand.search');
    Route::resource('brand', 'BrandController');

    Route::post('importsupplier', 'SupplierController@importSupplier')->name('supplier.import');
    Route::post('supplier/deletebyselection', 'SupplierController@deleteBySelection');
    Route::get('supplier/lims_supplier_search', 'SupplierController@limsSupplierSearch')->name('supplier.search');
    Route::resource('supplier', 'SupplierController');

    Route::post('importwarehouse', 'WarehouseController@importWarehouse')->name('warehouse.import');
    Route::post('warehouse/deletebyselection', 'WarehouseController@deleteBySelection');
    Route::get('warehouse/lims_warehouse_search', 'WarehouseController@limsWarehouseSearch')->name('warehouse.search');
    Route::resource('warehouse', 'WarehouseController');

    Route::post('importtax', 'TaxController@importTax')->name('tax.import');
    Route::post('tax/deletebyselection', 'TaxController@deleteBySelection');
    Route::get('tax/lims_tax_search', 'TaxController@limsTaxSearch')->name('tax.search');
    Route::resource('tax', 'TaxController');

    //color
    Route::get('add-color', 'ColorController@add_color')->name('add-color');
    Route::post('save-color', 'ColorController@save_color')->name('save-color');
    Route::get('edit-color/{id}', 'ColorController@edit_color')->name('edit-color');
    Route::post('update-color', 'ColorController@update_color')->name('update-color');
    Route::get('delete-color/{id}', 'ColorController@delete_color')->name('delete-color');

    //product detail
    Route::get('product-detail/{id}', 'ProductController@product_detail')->name('product-detail');

    //Route::get('products/getbarcode', 'ProductController@getBarcode');
    Route::post('products/product-data', 'ProductController@productData');
    Route::get('products/gencode', 'ProductController@generateCode');
    Route::get('products/search', 'ProductController@search');
    Route::get('products/saleunit/{id}', 'ProductController@saleUnit');
    Route::get('products/getdata/{id}', 'ProductController@getData');
    Route::get('products/product_warehouse/{id}', 'ProductController@productWarehouseData');
    Route::post('importproduct', 'ProductController@importProduct')->name('product.import');
    Route::post('exportproduct', 'ProductController@exportProduct')->name('product.export');
    Route::get('products/print_barcode','ProductController@printBarcode')->name('product.printBarcode');
    
    Route::get('products/lims_product_search', 'ProductController@limsProductSearch')->name('product.search');
    Route::post('products/deletebyselection', 'ProductController@deleteBySelection');
    Route::post('products/update', 'ProductController@updateProduct');
    Route::resource('products', 'ProductController');

    Route::post('importcustomer_group', 'CustomerGroupController@importCustomerGroup')->name('customer_group.import');
    Route::post('customer_group/deletebyselection', 'CustomerGroupController@deleteBySelection');
    Route::get('customer_group/lims_customer_group_search', 'CustomerGroupController@limsCustomerGroupSearch')->name('customer_group.search');
    Route::resource('customer_group', 'CustomerGroupController');

    Route::post('importcustomer', 'CustomerController@importCustomer')->name('customer.import');
    Route::get('customer/getDeposit/{id}', 'CustomerController@getDeposit');
    Route::post('customer/add_deposit', 'CustomerController@addDeposit')->name('customer.addDeposit');
    Route::post('customer/update_deposit', 'CustomerController@updateDeposit')->name('customer.updateDeposit');
    Route::post('customer/deleteDeposit', 'CustomerController@deleteDeposit')->name('customer.deleteDeposit');
    Route::post('customer/deletebyselection', 'CustomerController@deleteBySelection');
    Route::get('customer/lims_customer_search', 'CustomerController@limsCustomerSearch')->name('customer.search');
    Route::resource('customer', 'CustomerController');

    Route::post('importbiller', 'BillerController@importBiller')->name('biller.import');
    Route::post('biller/deletebyselection', 'BillerController@deleteBySelection');
    Route::get('biller/lims_biller_search', 'BillerController@limsBillerSearch')->name('biller.search');
    Route::resource('biller', 'BillerController');

    Route::post('sales/sale-data', 'SaleController@saleData');
    Route::post('sales/sendmail', 'SaleController@sendMail')->name('sale.sendmail');
    Route::get('sales/sale_by_csv', 'SaleController@saleByCsv');
    Route::get('sales/product_sale/{id}','SaleController@productSaleData');
    Route::post('importsale', 'SaleController@importSale')->name('sale.import');
    Route::get('pos', 'SaleController@posSale')->name('sale.pos');
    Route::get('sales/lims_sale_search', 'SaleController@limsSaleSearch')->name('sale.search');
    Route::get('sales/lims_product_search', 'SaleController@limsProductSearch')->name('product_sale.search');
    Route::get('sales/getcustomergroup/{id}', 'SaleController@getCustomerGroup')->name('sale.getcustomergroup');
    Route::get('sales/getproduct/{id}', 'SaleController@getProduct')->name('sale.getproduct');
    Route::get('sales/getproduct/{category_id}/{brand_id}', 'SaleController@getProductByFilter');
    Route::get('sales/getfeatured', 'SaleController@getFeatured');
    Route::get('sales/get_gift_card', 'SaleController@getGiftCard');
    Route::get('sales/paypalSuccess', 'SaleController@paypalSuccess');
    Route::get('sales/paypalPaymentSuccess/{id}', 'SaleController@paypalPaymentSuccess');
    Route::get('sales/gen_invoice/{id}', 'SaleController@genInvoice')->name('sale.invoice');
    Route::post('sales/add_payment', 'SaleController@addPayment')->name('sale.add-payment');
    Route::get('sales/getpayment/{id}', 'SaleController@getPayment')->name('sale.get-payment');
    Route::post('sales/updatepayment', 'SaleController@updatePayment')->name('sale.update-payment');
    Route::post('sales/deletepayment', 'SaleController@deletePayment')->name('sale.delete-payment');
    Route::get('sales/{id}/create', 'SaleController@createSale');
    Route::post('sales/deletebyselection', 'SaleController@deleteBySelection');
    Route::get('sales/print-last-reciept', 'SaleController@printLastReciept')->name('sales.printLastReciept');
    Route::get('sales/today-sale', 'SaleController@todaySale');
    Route::get('sales/today-profit/{warehouse_id}', 'SaleController@todayProfit');
    Route::resource('sales', 'SaleController');

    Route::get('delivery', 'DeliveryController@index')->name('delivery.index');
    Route::get('delivery/product_delivery/{id}','DeliveryController@productDeliveryData');
    Route::get('delivery/create/{id}', 'DeliveryController@create');
    Route::post('delivery/store', 'DeliveryController@store')->name('delivery.store');
    Route::post('delivery/sendmail', 'DeliveryController@sendMail')->name('delivery.sendMail');
    Route::get('delivery/{id}/edit', 'DeliveryController@edit');
    Route::post('delivery/update', 'DeliveryController@update')->name('delivery.update');
    Route::post('delivery/deletebyselection', 'DeliveryController@deleteBySelection');
    Route::post('delivery/delete/{id}', 'DeliveryController@delete')->name('delivery.delete');

    Route::get('quotations/product_quotation/{id}','QuotationController@productQuotationData');
    Route::get('quotations/lims_product_search', 'QuotationController@limsProductSearch')->name('product_quotation.search');
    Route::get('quotations/getcustomergroup/{id}', 'QuotationController@getCustomerGroup')->name('quotation.getcustomergroup');
    Route::get('quotations/getproduct/{id}', 'QuotationController@getProduct')->name('quotation.getproduct');
    Route::get('quotations/{id}/create_sale', 'QuotationController@createSale')->name('quotation.create_sale');
    Route::get('quotations/{id}/create_purchase', 'QuotationController@createPurchase')->name('quotation.create_purchase');
    Route::post('quotations/sendmail', 'QuotationController@sendMail')->name('quotation.sendmail');
    Route::post('quotations/deletebyselection', 'QuotationController@deleteBySelection');
    Route::resource('quotations', 'QuotationController');

    Route::post('purchases/purchase-data', 'PurchaseController@purchaseData');
    Route::get('purchases/product_purchase/{id}','PurchaseController@productPurchaseData');
    Route::get('purchases/lims_product_search', 'PurchaseController@limsProductSearch')->name('product_purchase.search');
    Route::post('purchases/add_payment', 'PurchaseController@addPayment')->name('purchase.add-payment');
    Route::get('purchases/getpayment/{id}', 'PurchaseController@getPayment')->name('purchase.get-payment');
    Route::post('purchases/updatepayment', 'PurchaseController@updatePayment')->name('purchase.update-payment');
    Route::post('purchases/deletepayment', 'PurchaseController@deletePayment')->name('purchase.delete-payment');
    Route::get('purchases/purchase_by_csv', 'PurchaseController@purchaseByCsv');
    Route::post('importpurchase', 'PurchaseController@importPurchase')->name('purchase.import');
    Route::post('purchases/deletebyselection', 'PurchaseController@deleteBySelection');
    Route::resource('purchases', 'PurchaseController');

    Route::get('transfers/product_transfer/{id}','TransferController@productTransferData');
    Route::get('transfers/transfer_by_csv', 'TransferController@transferByCsv');
    Route::post('importtransfer', 'TransferController@importTransfer')->name('transfer.import');
    Route::get('transfers/getproduct/{id}', 'TransferController@getProduct')->name('transfer.getproduct');
    Route::get('transfers/lims_product_search', 'TransferController@limsProductSearch')->name('product_transfer.search');
    Route::post('transfers/deletebyselection', 'TransferController@deleteBySelection');
    Route::resource('transfers', 'TransferController');

    Route::get('qty_adjustment/getproduct/{id}', 'AdjustmentController@getProduct')->name('adjustment.getproduct');
    Route::get('qty_adjustment/lims_product_search', 'AdjustmentController@limsProductSearch')->name('product_adjustment.search');
    Route::post('qty_adjustment/deletebyselection', 'AdjustmentController@deleteBySelection');
    Route::resource('qty_adjustment', 'AdjustmentController');

    Route::get('return-sale/getcustomergroup/{id}', 'ReturnController@getCustomerGroup')->name('return-sale.getcustomergroup');
    Route::post('return-sale/sendmail', 'ReturnController@sendMail')->name('return-sale.sendmail');
    Route::get('return-sale/getproduct/{id}', 'ReturnController@getProduct')->name('return-sale.getproduct');
    Route::get('return-sale/lims_product_search', 'ReturnController@limsProductSearch')->name('product_return-sale.search');
    Route::get('return-sale/product_return/{id}','ReturnController@productReturnData');
    Route::post('return-sale/deletebyselection', 'ReturnController@deleteBySelection');
    Route::resource('return-sale', 'ReturnController');

    Route::get('return-purchase/getcustomergroup/{id}', 'ReturnPurchaseController@getCustomerGroup')->name('return-purchase.getcustomergroup');
    Route::post('return-purchase/sendmail', 'ReturnPurchaseController@sendMail')->name('return-purchase.sendmail');
    Route::get('return-purchase/getproduct/{id}', 'ReturnPurchaseController@getProduct')->name('return-purchase.getproduct');
    Route::get('return-purchase/lims_product_search', 'ReturnPurchaseController@limsProductSearch')->name('product_return-purchase.search');
    Route::get('return-purchase/product_return/{id}','ReturnPurchaseController@productReturnData');
    Route::post('return-purchase/deletebyselection', 'ReturnPurchaseController@deleteBySelection');
    Route::resource('return-purchase', 'ReturnPurchaseController');

    Route::get('report/product_quantity_alert', 'ReportController@productQuantityAlert')->name('report.qtyAlert');
    Route::get('report/warehouse_stock', 'ReportController@warehouseStock')->name('report.warehouseStock');
    Route::post('report/warehouse_stock', 'ReportController@warehouseStockById')->name('report.warehouseStock');
    Route::get('report/daily_sale/{year}/{month}', 'ReportController@dailySale');
    Route::post('report/daily_sale/{year}/{month}', 'ReportController@dailySaleByWarehouse')->name('report.dailySaleByWarehouse');
    Route::get('report/monthly_sale/{year}', 'ReportController@monthlySale');
    Route::post('report/monthly_sale/{year}', 'ReportController@monthlySaleByWarehouse')->name('report.monthlySaleByWarehouse');
    Route::get('report/daily_purchase/{year}/{month}', 'ReportController@dailyPurchase');
    Route::post('report/daily_purchase/{year}/{month}', 'ReportController@dailyPurchaseByWarehouse')->name('report.dailyPurchaseByWarehouse');
    Route::get('report/monthly_purchase/{year}', 'ReportController@monthlyPurchase');
    Route::post('report/monthly_purchase/{year}', 'ReportController@monthlyPurchaseByWarehouse')->name('report.monthlyPurchaseByWarehouse');
    Route::get('report/best_seller', 'ReportController@bestSeller');
    Route::post('report/best_seller', 'ReportController@bestSellerByWarehouse')->name('report.bestSellerByWarehouse');
    Route::post('report/profit_loss', 'ReportController@profitLoss')->name('report.profitLoss');

    //pdf report summary
    Route::get('export-pdf/{start_date}/{end_date}', 'ReportController@export_pdf')->name('export-pdf');
    //pdf daily sale
    Route::get('daily-sale-pdf/{year}/{month}', 'ReportController@daily_sale_pdf')->name('daily-sale-pdf');
    //pdf monthly sale
    Route::get('monthly-sale-pdf/{year}', 'ReportController@monthly_sale_pdf')->name('monthly-sale-pdf');
    //pdf daily purchase 
    Route::get('daily-purchase-pdf/{year}/{month}', 'ReportController@daily_purchase_pdf')->name('daily-purchase-pdf');
    //pdf monthly purchase
    Route::get('monthly-purchase-pdf/{year}', 'ReportController@monthly_purchase_pdf')->name('monthly-purchase-pdf');

    //print monthly purchase
    Route::get('monthly-purchase-print/{year}', 'ReportController@monthly_purchase_print')->name('monthly-purchase-print');

    //print monthly sale
    Route::get('monthly-sale-print/{year}', 'ReportController@monthly_sale_print')->name('monthly-sale-print'); 

    //print daily purchase 
    Route::get('daily-purchase-print/{year}/{month}', 'ReportController@daily_purchase_print')->name('daily-purchase-print');

    //print daily sale
    Route::get('daily-sale-print/{year}/{month}', 'ReportController@daily_sale_print')->name('daily-sale-print');

    //print report summary
    Route::get('summary-print/{start_date}/{end_date}', 'ReportController@summary_print')->name('summary-print');

    //customers message
    Route::get('customers-message', 'ReportController@customers_message')->name('customers-message');

    //newsletter view
    Route::get('view-newsletter', 'ReportController@view_newsletter')->name('view-newsletter');

    //expire report
    Route::get('expire-report', 'ReportController@expire_report')->name('expire-report');

    //expire date filter
    Route::post('expire-report-filter', 'ReportController@expire_date_filter')->name('expire-date-filter');

    Route::post('report/product_report', 'ReportController@productReport')->name('report.product');
    Route::post('report/purchase', 'ReportController@purchaseReport')->name('report.purchase');
    Route::post('report/sale_report', 'ReportController@saleReport')->name('report.sale');
    Route::post('report/payment_report_by_date', 'ReportController@paymentReportByDate')->name('report.paymentByDate');
    Route::post('report/warehouse_report', 'ReportController@warehouseReport')->name('report.warehouse');
    Route::post('report/user_report', 'ReportController@userReport')->name('report.user');
    Route::post('report/customer_report', 'ReportController@customerReport')->name('report.customer');
    Route::post('report/supplier', 'ReportController@supplierReport')->name('report.supplier');
    Route::post('report/due_report_by_date', 'ReportController@dueReportByDate')->name('report.dueByDate');

    Route::get('user/profile/{id}', 'UserController@profile')->name('user.profile');
    Route::put('user/update_profile/{id}', 'UserController@profileUpdate')->name('user.profileUpdate');
    Route::put('user/changepass/{id}', 'UserController@changePassword')->name('user.password');
    Route::get('user/genpass', 'UserController@generatePassword');
    Route::post('user/deletebyselection', 'UserController@deleteBySelection');
    Route::resource('user','UserController');

    Route::get('setting/general_setting', 'SettingController@generalSetting')->name('setting.general');
    Route::post('setting/general_setting_store', 'SettingController@generalSettingStore')->name('setting.generalStore');

    //report setting
    Route::get('setting/report_setting', 'SettingController@report_setting')->name('setting.report');
    Route::post('setting/report_setting_store', 'SettingController@report_setting_store')->name('report-setting-store');


    Route::get('backup', 'SettingController@backup')->name('setting.backup');
    Route::get('setting/general_setting/change-theme/{theme}', 'SettingController@changeTheme');
    Route::get('setting/mail_setting', 'SettingController@mailSetting')->name('setting.mail');
    Route::get('setting/sms_setting', 'SettingController@smsSetting')->name('setting.sms');
    Route::get('setting/createsms', 'SettingController@createSms')->name('setting.createSms');
    Route::post('setting/sendsms', 'SettingController@sendSms')->name('setting.sendSms');
    Route::get('setting/hrm_setting', 'SettingController@hrmSetting')->name('setting.hrm');
    Route::post('setting/hrm_setting_store', 'SettingController@hrmSettingStore')->name('setting.hrmStore');
    Route::post('setting/mail_setting_store', 'SettingController@mailSettingStore')->name('setting.mailStore');
    Route::post('setting/sms_setting_store', 'SettingController@smsSettingStore')->name('setting.smsStore');
    Route::get('setting/pos_setting', 'SettingController@posSetting')->name('setting.pos');
    Route::post('setting/pos_setting_store', 'SettingController@posSettingStore')->name('setting.posStore');
    Route::get('setting/empty-database', 'SettingController@emptyDatabase')->name('setting.emptyDatabase');

    Route::get('expense_categories/gencode', 'ExpenseCategoryController@generateCode');
    Route::post('expense_categories/import', 'ExpenseCategoryController@import')->name('expense_category.import');
    Route::post('expense_categories/deletebyselection', 'ExpenseCategoryController@deleteBySelection');
    Route::resource('expense_categories', 'ExpenseCategoryController');

    Route::post('expenses/deletebyselection', 'ExpenseController@deleteBySelection');
    Route::resource('expenses', 'ExpenseController');

    Route::get('gift_cards/gencode', 'GiftCardController@generateCode');
    Route::post('gift_cards/recharge/{id}', 'GiftCardController@recharge')->name('gift_cards.recharge');
    Route::post('gift_cards/deletebyselection', 'GiftCardController@deleteBySelection');
    Route::resource('gift_cards', 'GiftCardController');

    Route::get('coupons/gencode', 'CouponController@generateCode');
    Route::post('coupons/deletebyselection', 'CouponController@deleteBySelection');
    Route::resource('coupons', 'CouponController');
    //accounting routes
    Route::get('accounts/make-default/{id}', 'AccountsController@makeDefault');
    Route::get('accounts/balancesheet', 'AccountsController@balanceSheet')->name('accounts.balancesheet');
    Route::post('accounts/account-statement', 'AccountsController@accountStatement')->name('accounts.statement');
    Route::resource('accounts', 'AccountsController');
    Route::resource('money-transfers', 'MoneyTransferController');
    
    //HRM routes
    Route::post('departments/deletebyselection', 'DepartmentController@deleteBySelection');
    Route::resource('departments', 'DepartmentController');

    Route::post('employees/deletebyselection', 'EmployeeController@deleteBySelection');
    Route::resource('employees', 'EmployeeController');

    Route::post('payroll/deletebyselection', 'PayrollController@deleteBySelection');
    Route::resource('payroll', 'PayrollController');

    Route::post('attendance/deletebyselection', 'AttendanceController@deleteBySelection');
    Route::resource('attendance', 'AttendanceController');

    Route::resource('stock-count', 'StockCountController');
    Route::post('stock-count/finalize', 'StockCountController@finalize')->name('stock-count.finalize');
    Route::get('stock-count/stockdif/{id}', 'StockCountController@stockDif');
    Route::get('stock-count/{id}/qty_adjustment', 'StockCountController@qtyAdjustment')->name('stock-count.adjustment');


    Route::get('cash-register', 'CashRegisterController@index')->name('cashRegister.index');
    Route::get('cash-register/check-availability/{warehouse_id}', 'CashRegisterController@checkAvailability')->name('cashRegister.checkAvailability');
    Route::post('cash-register/store', 'CashRegisterController@store')->name('cashRegister.store');
    Route::get('cash-register/getDetails/{id}', 'CashRegisterController@getDetails');
    Route::get('cash-register/showDetails/{warehouse_id}', 'CashRegisterController@showDetails');
    Route::post('cash-register/close', 'CashRegisterController@close')->name('cashRegister.close');

    Route::post('notifications/store', 'NotificationController@store')->name('notifications.store');
    Route::get('notifications/mark-as-read', 'NotificationController@markAsRead');

    Route::resource('currency', 'CurrencyController');

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('my-transactions/{year}/{month}', 'HomeController@myTransaction');


    //blog roures
     Route::get('/blog', 'HomeController@add_blog')->name('add-blog');
     Route::post('/save-blog', 'HomeController@save_blog')->name('save-blog');
     Route::get('/blog-list', 'HomeController@blog_list')->name('blog-list');
     Route::get('/edit-blog/{id}', 'HomeController@edit_blog')->name('edit-blog');
     Route::post('/update-blog', 'HomeController@update_blog')->name('update-blog');
     Route::get('/delete-blog/{id}', 'HomeController@delete_blog')->name('delete-blog');
});

















