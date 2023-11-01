<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container mt-3">
        <h5>Project List</h5>
        <table class="table table-bordered table-striped mt-3 text-center">
            <thead>
                <tr>
                    <th>Service Type</th>
                    <th>Project Name</th>
                    <th>PIC (Cost Control Team)</th>
                    <th>Project Start Date</th>
                    <th>Project End Date</th>
                    <th>Total Project Value</th>
                    <th>Currency</th>
                </tr>
            </thead>

            <?php $__currentLoopData = $setup_projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sp): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tbody>
                <td><?php echo e($sp->service_type); ?></td>
                <td><?php echo e($sp->project_name); ?></td>
                <td><?php echo e($sp->pic); ?></td>
                <td><?php echo e($sp->project_start_date); ?></td>
                <td><?php echo e($sp->project_end_date); ?></td>
                <td><?php echo e($sp->total_project_type); ?></td>
                <td><?php echo e($sp->currency); ?></td>
            </tbody>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>

        <table class="table table-bordered table-striped mt-3 text-center">
            <!-- <thead>
                <tr>
                    <th>Billing Scheme</th>
                    <th>Contract Type</th>
                    <th>Description</th>
                    <th>%</th>
                    <th>Cum.%</th>
                    <th>Billing Value</th>
                    <th>Action Item</th>
                </tr>
            </thead>
            <tbody>

                <?php $__currentLoopData = $project_informations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <td>1</td>
                <td>2</td>
                <td><?php echo e($pi->description); ?></td>
                <td><?php echo e($pi->biling); ?></td>
                <td><?php echo e($pi->cummulative_billing); ?></td>
                <td><?php echo e($pi->billing_value); ?></td>
                <td width="10%" class="text-center">
                    <a href="#" class="btn btn-success">Ubah</a>
                    <p></p>
                    <form action="#" method="POST">
                        <input class="btn btn-success" type="submit" value="Delete">
                    </form>
                </td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody> -->
        </table>

    </div>
</body>

</html><?php /**PATH C:\Users\Rejeanto\OneDrive\Documents\coba2-laravel\resources\views/project_list.blade.php ENDPATH**/ ?>