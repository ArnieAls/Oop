
<div class="container">
    <div class="wall">
        <div class="poop-wall">
            <?php foreach ($pixels ?? [] as $pixel): ?>
                <span class="pixel <?php print $pixel['color']; ?>"
                      style="bottom: <?php print $pixel['y']; ?>px;
                              left: <?php print
                          $pixel['x']; ?>px;
                              width: 10px;
                              height: 10px;
                              ">
                </span>
            <?php endforeach; ?>
        </div>
    </div>
</div>