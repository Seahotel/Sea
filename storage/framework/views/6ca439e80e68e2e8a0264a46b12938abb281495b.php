<h1><?php echo trans('common/staff_team.title'); ?></h1>
<?php $__currentLoopData = \App\Models\Permissions::where('id', '>=', config('chocolatey.minRank'))->orderBy('id', 'desc')->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if(\App\Models\User::where('rank', $rank->id)->count() > 0): ?>
        <h3><?php echo e($rank->rank_name); ?></h3>
        <hr>
        <blockquote>
            <?php $__currentLoopData = \App\Models\User::where('rank', $rank->id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="profile-header__avatar" style="display:inline-block">
                    <div class="profile-header__link">
                        <habbo-imager figure="<?php echo e($user->look); ?>" action="stand"
                                      class="profile-header__image"></habbo-imager>
                    </div>
                </div>
                <div class="profile-header__details" style="display:inline-block">
                    <div>
                        <h1><?php echo e($user->username); ?></h1>
                        <div class="profile__motto"><?php echo e($user->motto); ?></div>
                    </div>
                </div>
                <br>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </blockquote>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
