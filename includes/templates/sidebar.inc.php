<div class="form-group">
    <img class='border border-dark' style="display: block; margin-left: auto; margin-right: auto; border-radius:50%"
        src="../<?php echo $picture?>" alt="image" width="144" height='144'>
    <input name="picture" value="<?PHP echo $picture;?>" hidden>
</div>

<div class="" style="font-size:14px; line-height:10px">
    <h5 class="">
        <span style="font-weight:bold"><?php echo $lname; ?></span>
        <span><?php echo $fname; ?></span>
        <span><?php echo substr($mname, 0, 1).'.'; ?></span>
    </h5>
    <p style="font-weight:bold"> <?php echo $usertype; ?></p>
    <div class="ml-4" style="text-align:left">

        <p><i class="fas fa-user"> </i> <?php echo $id;?></p>
        <p><i class="fas fa-map-marker-alt"></i> <?php echo $address; ?></p>
        <p><i class="fas fa-envelope"></i> <?php echo $email; ?></p>
    </div>


</div>