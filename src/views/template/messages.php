<?php
$message = '';
if ($exception) {
    $message = [
        'type' => 'error',
        'message' => $exception->getMessage()
    ];
}

?>
<?php if($message): ?>
<div role="alert" class="my-3 alert alert-danger">
    <?= $message['message'] ?>
</div>
<?php endif ?>