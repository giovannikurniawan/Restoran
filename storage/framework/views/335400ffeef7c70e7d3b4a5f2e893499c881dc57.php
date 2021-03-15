

<?php $__env->startSection('title'); ?>
    User 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div
            class="section-content section-dashboard-home"
            data-aos="fade-up"
          >
            <div class="container-fluid">
              <div class="dashboard-heading">
                <h2 class="dashboard-title">User</h2>
                <p class="dashboard-subtitle">Create New User</p>
              </div>
              <div class="dashboard-content">
                <div class="row">
                    <div class="col-md-12">
                        <?php if($errors->any()): ?>
                            <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                        <?php endif; ?>
                      <div class="card">
                        <div class="card-body">
                                <form action="<?php echo e(route('user.store')); ?>" method="POST" enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="from-group">
                                                    <label>Nama User</label>
                                                    <input type="text" name="name" class="from-control" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-12">
                                                <div class="from-group">
                                                    <label>Email User</label>
                                                    <input type="email" name="email" class="from-control" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                            <div class="col-md-12">
                                                <div class="from-group">
                                                    <label>Password User</label>
                                                    <input type="password" name="password" class="from-control" required>
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="from-group">
                                                    <label>Roles</label>
                                                    <select name="roles" required class="form-control">
                                                        <option value="ADMIN">Admin</option>
                                                        <option value="USER">User</option>
                                                    </select>
                                                </div>
                                            </div>
                                        
                                        <div class="row">
                                            <div class="col text-right">
                                            <button type="submit" class="btn btn-success px-5">
                                                Save Now
                                            </button>
                                            </div>
                                        </div>
                                   </form>
                            </div>
                         </div>
                    </div>
                </div>
             </div>
          </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\UTSIF430Restaurant-Laravel\resources\views/pages/admin/user/create.blade.php ENDPATH**/ ?>