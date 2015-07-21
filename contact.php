---
layout: page
title: Contact
permalink: /contact/
---

<form class="form-horizontal" role="form" method="post" action="send.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 control-label">Your Name:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="">
            <?php echo "<p class='text-danger'>$errname</p>";?>
        </div>
    </div>

<div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email:</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="email" name="email" placeholder="Your email address" value="">
            <?php echo "<p class='text-danger'>$erremail</p>";?>
        </div>
    </div>

<div class="form-group">
        <label for="subject" class="col-sm-2 control-label">Subject:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" value="">
            <?php echo "<p class='text-danger'>$errsubject</p>";?>
        </div>
    </div>

<div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message:</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="4" name="message" placeholder="Your message here"></textarea>
            <?php echo "<p class='text-danger'>$errmessage</p>";?>
        </div>
    </div>

<div class="form-group">
        <label for="verify" class="col-sm-2 control-label">2 + 6 = ?</label>
        <div class="col-sm-4">
            <input type="text" class="form-control" id="verify" name="verify" placeholder="Your answer">
            <?php echo "<p class='text-danger'>$errverify</p>";?>
        </div>
    </div>

<div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-send" aria-hidden="true"> Submit </span></button>
        </div>
    </div>

<div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php echo $result; ?>
        </div>
    </div>
</form>
