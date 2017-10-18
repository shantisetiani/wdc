<?php include( 'header.php' ); ?>

<div class="container">
    <div>
        <div class="col-m-6">
            <div class="forumBox">
                <span class="col-m-12">
                    <h3>Judul</h3>
                </span>
                <span class="col-m-12">
                    <p>Oleh :</p>
                </span>
                <span class="col-m-6" style="margin-top: 20px">
                    <p>Reply :</p>
                    <p>Posted :</p>
                </span>
                <span class="col-m-blank-6"></span>
                <span class="col-m-6">
                    <input type="button" value="Join" class="joinBtn">
                </span>
            </div>
        </div>
        <div class="col-m-6">
            <div class="forumBox">
                <span class="col-m-12">
                    <h3>Judul</h3>
                </span>
                <span class="col-m-12">
                    <p>Oleh :</p>
                </span>
                <span class="col-m-6" style="margin-top: 20px">
                    <p>Reply :</p>
                    <p>Posted :</p>
                </span>
                <span class="col-m-blank-6"></span>
                <span class="col-m-6">
                    <input type="button" value="Join" class="joinBtn">
                </span>
            </div>
        </div>
    </div>
    <div class="col-m-12">
        <div class="pagination">
            <a href="#" id="prev"><</a>
            <?php for($i=1; $i<=5; $i++): ?>
                <a href="#" id="page<?php echo $i ?>"><?php echo $i ?></a>
            <?php endfor; ?>
            <a href="#" id="next">></a>
        </div>
    </div>
</div>

<div class="col-m-12">
<?php include( 'footer.php' ); ?>
</div>

<script type="text/javascript">
    $(document).ready(function(){
    });
</script>