<section>
    <div>
        <h1>編輯公告</h1>
        <script src="<?=URL?>public/js/preventleave.js"></script>
        <form onchange="preventLeave()" action="<?php echo URL; ?>anncs/edit/<?= $annc->id ?>" id="add_anncs_form" method="POST">
            <p>
                <label>標題</label>
                <input class="wide" type="text" name="title" value="" id="title" required>
            </p>
            <p>
                <label>日期</label>
                <input class="wide" type="date" name="date" id="date" required>
            </p>
            <p>
                <label>內容</label>
                <textarea class="wide" name="description" form="add_anncs_form" id="description"></textarea></p>
            <p>
            <input class="button cyan" type="submit" name="submit_edit_anncs" value="發布" onclick="canNowLeave()" />
            <input class="button red" type="button" value="取消" onclick="history.go(-1)">
            </p>
        </form>

    </div>
</section>
<!-- passing event data from server to client -->
<script>
(function(){
    function seti(i,v){document.getElementById(i).value=v;}
    seti("title",<?=json_encode($annc->title)?>);
    seti("date",<?=json_encode($annc->date)?>);
    seti("description",<?=json_encode($annc->description)?>);
})();
</script>
