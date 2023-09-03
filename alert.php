<div class="bg-slate-200">
    <?php 
    if(isset($_COOKIE['message'])) :?>

    <div class="p-3 bg-sky-700 m-3 rounded-xl text-white">
        <?=$_COOKIE ['message']?>
    </div>
    <?php endif ?>
</div>