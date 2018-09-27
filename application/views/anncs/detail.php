<section>
        <h1 style="word-wrap:break-word;"><?php if (isset($annc->title)) echo htmlspecialchars($annc->title); ?></h1>
        <?php if (isset($annc->date)) echo $annc->date; ?><br><br>
        <?php if (isset($annc->description)) echo $annc->description; ?>
        <?php if (Auth::isAdmin()) { ?>
          <p>
            <button class="blue button" type="button" onclick='location.href="<?php echo URL; ?>anncs/edit/<?= $annc->id ?>";'>編輯公告</button>
          </p>
        <?php } ?>
</section>
