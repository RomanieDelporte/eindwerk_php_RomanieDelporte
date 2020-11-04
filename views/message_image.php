<?php 
    $message = (object) $message;
    $formatted_date = strftime("%A %e %B %k:%M", strtotime($message->created_on) );
?>
<div class="message">
    <div class="content">
        <div class="card">

        <div class="tweet"> 
           
            <div class="message__content">
            <?php if($message->photo) : ?>
                <img class="card-img-top" alt="Card image cap" src="/images/<?= $message->user_id ?>/<?= $message->photo ?>">
            <?php endif; ?>
        </div> 
        <div class="card-body">
        <div class="card-title">
        <?= $message->message ?>
        </div>
     </div>
        </div>
    
    </div>
    </div>
</div>