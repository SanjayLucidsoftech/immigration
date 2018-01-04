<?php $__env->startSection('content'); ?>
<div class="content">






                    <form class="form-horizontal" method="POST" action="<?php echo e(route('admin.login')); ?>">
                            <h3 class="form-title">Sign In</h3>
                        <?php echo e(csrf_field()); ?>


                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="control-label visible-ie8 visible-ie9">E-Mail Address</label>


                                <input id="email" type="email" class="form-control form-control-solid placeholder-no-fix" placeholder="E-Mail Address" name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>

                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="control-label visible-ie8 visible-ie9">Password</label>


                                <input id="password" type="password" class="form-control form-control-solid placeholder-no-fix" name="password" placeholder="Password"  required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>

                        </div>
                        <div class="form-actions">
                    			<button type="submit" class="btn btn-success uppercase">Login</button>
                          <label class="rememberme check">
                              <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Remember
                          </label>
                          <a class="btn btn-link" href="<?php echo e(route('admin.password.request')); ?>">
                              Forgot Your Password?
                          </a>
                    		</div>






                    </form>


</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.administrator_login', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>