<?php include( 'header.php' ); ?>

<div class="container">
    <div>
        <div class="col-ss-12 col-s-12 col-m-6 col-l-6 col-xl-6">
            <div class="forumBox">
                <span class="col-ss-12 col-s-12 col-m-12 col-l-12 col-xl-12">
                    <h3>Judul</h3>
                </span>
                <span class="col-ss-12 col-s-12 col-m-12 col-l-12 col-xl-12">
                    <p>Oleh :</p>
                </span>
                <span class="col-ss-6 col-s-6 col-m-6 col-l-6 col-xl-6" style="margin-top: 20px">
                    <p>Reply :</p>
                    <p>Posted :</p>
                </span>
                <span class="col-ss-blank-6 col-s-blank-6 col-m-blank-6 col-l-blank-6 col-xl-blank-6"></span>
                <span class="col-ss-6 col-s-6 col-m-6 col-l-6 col-xl-6">
                    <input type="button" value="Join" class="joinBtn">
                </span>
            </div>
        </div>
        <div class="col-ss-12 col-s-12 col-m-6 col-l-6 col-xl-6">
            <div class="forumBox">
                <span class="col-ss-12 col-s-12 col-m-12 col-l-12 col-xl-12">
                    <h3>Judul</h3>
                </span>
                <span class="col-ss-12 col-s-12 col-m-12 col-l-12 col-xl-12">
                    <p>Oleh :</p>
                </span>
                <span class="col-ss-6 col-s-6 col-m-6 col-l-6 col-xl-6" style="margin-top: 20px">
                    <p>Reply :</p>
                    <p>Posted :</p>
                </span>
                <span class="col-ss-blank-6 col-s-blank-6 col-m-blank-6 col-l-blank-6 col-xl-blank-6"></span>
                <span class="col-ss-6 col-s-6 col-m-6 col-l-6 col-xl-6">
                    <input type="button" value="Join" class="joinBtn">
                </span>
            </div>
        </div>
    </div>
    <div class="col-ss-12 col-s-12 col-m-12 col-l-12 col-xl-12">
        <div class="pagination">
            <a href="#" id="prev"><</a>
            <?php for($i=1; $i<=5; $i++): ?>
                <a href="#" id="page<?php echo $i ?>"><?php echo $i ?></a>
            <?php endfor; ?>
            <a href="#" id="next">></a>
        </div>
    </div>
</div>

<?php include( 'footer.php' ); ?>

<script type="text/javascript">
    $(document).ready(function(){
    });
</script>