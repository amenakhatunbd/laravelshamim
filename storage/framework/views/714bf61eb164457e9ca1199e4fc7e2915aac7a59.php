

<?php $__env->startSection('content'); ?>
    <div class="page-heading">
        <h1>Fari</h1>
    </div>
    <div class="page-body">

        <?php echo $__env->make('include.show_flash_error_message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

        <div class="row clearfix">

            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Fari &nbsp;&nbsp;
                        <a href="<?php echo e(route('fari.create')); ?>" class="btn btn-primary btn-sm"><i
                                    class="fa fa-plus" aria-hidden="true"></i>&nbsp; Add New Fari</a>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover js-exportable dataTable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Fari</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>OC</th>
                                    <th>Long</th>
                                    <th>Lat</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $fari; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(isset($loop->iteration) ? $loop->iteration : $item->id); ?></td>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->phone); ?></td>
                                        <td><?php echo e($item->address); ?></td>
                                        <td><?php echo e($item->oc); ?></td>
                                        <td><?php echo e($item->long); ?></td>
                                        <td><?php echo e($item->lat); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('fari.show', $item->id)); ?>"
                                               title="View Fari" class="btn btn-outline btn-success"><i
                                                        class="fa fa-check" aria-hidden="true"></i> View</a>
                                            <a href="<?php echo e(route('fari.edit', $item->id)); ?>"
                                               title="Edit Fari" class="btn btn-outline btn-primary"><i
                                                        class="fa fa-edit"></i> Edit</a>

                                            <form method="POST"
                                                  action="<?php echo e(route('fari.destroy', $item->id)); ?>"
                                                  accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-outline btn-danger"
                                                        title="Delete Fari"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Fari</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>OC</th>
                                    <th>Long</th>
                                    <th>Lat</th>
                                    <th>Actions</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>