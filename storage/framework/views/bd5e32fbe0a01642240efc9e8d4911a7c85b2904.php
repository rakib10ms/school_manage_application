
<html>
<head>
    <title>Student Details Info</title>



    <style type="text/css">

        table{
            border-collapse:collapse;
        }
        h2 h3{

            margin:0;
            padding:0;
        }
        table{
            width: 100%;
            margin-bottom: 1rem;
            background-color: transparent;
        }
        .table th,
        .table td{
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid#dee2e6;
        }
        .table thead th{
            vertical-align: bottom;
            border-bottom: 2px solid#dee2e6;
        }
        .table tbody+tbody{

            border-top:2px solid#dee2e6;
        }
        .table table{
            background-color: #fff;
        }
        .table-bordered th,
        .table-bordered td {
            border:1px solid#dee2e6;
        }

        .table-bordered thead th,
        .table-bordered thead td{
            border-bottom-width: 2px;
        }
        .text-center{
            text-align: center;
        }
        .text-right{
            text-align: right;
        }
        table tr td{
            padding:5px;
        }
        .table-bordered thead th, .table-bordered td , .table-bordered th{
            border: 1px; solid: black !important;

        }
        .table-bordered thead th{
            background-color: #cacaca;
        }

    </style>
</head>
<body>












<div class="row">

    <div class="col-md-12 text-center">
        <h5 style="font-weight: bold;padding-top: -25px;">Student Registration Card</h5>

    </div>
    <div class="col-md-12">
        <table border="1" width="100%">
            <tbody>
            <tr>
                <td style="width: 50%">Student Name</td>
                <td><?php echo e($details['student']['name']); ?></td>
            </tr>
            <tr>
                <td style="width: 50%">Father's Name</td>
                <td><?php echo e($details['student']['fname']); ?></td>
            </tr>
            <tr>
                <td style="width: 50%">Mothers's Name</td>
                <td><?php echo e($details['student']['mname']); ?></td>
            </tr>
            <tr>
                <td style="width: 50%">Year</td>
                <td><?php echo e($details['year']['name']); ?></td>
            </tr>
            <tr>
                <td style="width: 50%">Class</td>
                <td><?php echo e($details['student_class']['name']); ?></td>
            </tr>
            <tr>
                <td style="width: 50%">ID No</td>
                <td><?php echo e($details['student']['id_no']); ?></td>
            </tr>
            <tr>
                <td style="width: 50%">Roll</td>
                <td><?php echo e($details->roll); ?></td>
            </tr>
            <tr>
                <td style="width: 50%">Mobile</td>
                <td><?php echo e($details['student']['mobile']); ?></td>
            </tr>
            <tr>
                <td style="width: 50%">Address</td>
                <td><?php echo e($details['student']['address']); ?></td>
            </tr>
            <tr>
                <td style="width: 50%">Gender</td>
                <td><?php echo e($details['student']['gender']); ?></td>
            </tr>
            <tr>
                <td style="width: 50%">Religion</td>
                <td><?php echo e($details['student']['religion']); ?></td>
            </tr>
            <tr>
                <td style="width: 50%">Birth Day</td>
                <td><?php echo e($details['student']['dob']); ?></td>
            </tr>

            </tbody>

        </table>



        <i style="font-size: 10px;float: right;">Print Date:<?php echo e(date("d m y")); ?></i>
    </div>
</div><br/>
<div class="col-md-12">
    <table border="0" width="100%">
        <tbody>
        <tr>

            <td style="width: 30%"></td>
            <td style="width: 30%"></td>
            <td style="width: 40%; text-align: center;">
                <hr style="border:solid 1px;width: 60%;color: #000;margin-bottom: 0px;">
                <p style="text-align: center;">Principal/Head Master</p>
            </td>
        </tr>
        </tbody>

    </table>
</div>
</body>
</html><?php /**PATH C:\laragon\www\schoolmng\resources\views/backend/student/student_reg/student-details-pdf.blade.php ENDPATH**/ ?>