<?php
$message = null;
if ($exception) {
    $message = [

        'type' => 'error',
        'message' => $exception->getMessage()

    ];
}
?>

<?php if($message): ?>
    <did class="my-3 alert alert-danger" role="alert">
        <?= $message['message'] ?>
    </did>
<?php endif ?>