<div class="" style="margin: 0 auto; width: 800px; text-align: center;">
    <h2 style="text-transform: uppercase">Database Query Error</h2>
    <hr>
    <p><?php echo $e->getMessage(); ?></p>
    <p>File: <?php echo $e->getFile(); ?></p>
    <p>Line: <?php echo $e->getLine(); ?></p>
</div>