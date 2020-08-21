<?php $__env->startSection('content'); ?>
    <div class="container-fluid app-body">
        <div class="row">
            <div class="col-sm-12 group-col">
                <div class="panel panel-default" style="padding:15px"> 
                    <h3>Recent Posts Sent To Bufer</h3>
                    <hr> 
                    <div class="search-area">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="search">
                                    <input type="text" name="search" placeholder="search" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="search">
                                    <input type="date" name="search" placeholder="search" class="form-control">
                                </div>
                            </div>
                            
                            <div class="col-md-4">
                                <div class="search">
                                   <select name="group" id="group" class="form-control">
                                    <option value="">All groups</option>
                                    <?php $__currentLoopData = $group; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <option value="<?php echo e($key->type); ?>"><?php echo e($key->type); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="table-area">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Group Name</th>
                                    <th>Group Type</th>
                                    <th>Account Name</th>
                                    <th>Post Text</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $buffer_posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($value->groupInfo->name); ?></td>
                                    <td><?php echo e($value->groupinfo->type); ?></td>
                                    <td class="text-center"><img src="<?php echo e($value->accountInfo->avatar); ?>" style="width:60px; height:60x; border-radius:50%"></td>
                                    <td><?php echo e($value->post_text); ?></td>
                                    <td><?php echo e($value->created_at); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right"><?php echo e($buffer_posts->links()); ?></div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>