<h1><?php echo trans('community/fansites.title'); ?></h1>
<p>
    <img src="<?php echo e($chocolatey->hotelUrl); ?>/habbo-web/assets/web-images/habbo_friends.png" alt="Fansites" class="align-right">
</p>
<p><?php echo trans('community/fansites.heading',['hotelName' => $chocolatey->hotelName]); ?></p>
<ul>
    <li>
        <a href="http://ragezone.com/" target="_blank">RaGEZONE</a>
    </li>
</ul>
<p><?php echo trans('community/fansites.policy',['hotelName' => $chocolatey->hotelName]); ?></p>
<p><?php echo trans('community/fansites.remember', ['hotelName' => $chocolatey->hotelName]); ?></p>