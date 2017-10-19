<?php include( 'header.php' ); ?>

<div class="container">
    <div class="col-ss-12 col-s-12 col-m-12 col-l-12 col-xl-12">
        <table id="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Period</th>
                    <th>Description</th>
                    <th>Due Date</th>
                    <th>Charge (Rp)</th>
                    <th>Payment (Rp)</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody id="tableContent">
                <?php
                    $data = array(
                        "period" => array("2017, Even Semester","2017, Odd Semester"),
                        "description" => array("Textbook Fee","Re-Registration Fee"),
                        "due" => array("15 May 2018","12 April 2017"),
                        "charge" => array("377.500,00","22.500,00"),
                        "payment" => array("0,00","22.500,00"),
                        "status" => array("Unpaid","Paid")
                ); ?>

                <?php for($i=0; $i<count($data["period"]); $i++):?>
                    <tr>
                        <td><?php echo ($i+1) ?></td>
                        <td><?php echo $data["period"][$i] ?></td>
                        <td><?php echo $data["description"][$i] ?></td>
                        <td><?php echo $data["due"][$i] ?></td>
                        <td><?php echo $data["charge"][$i] ?></td>
                        <td><?php echo $data["payment"][$i] ?></td>
                        <td><?php echo $data["status"][$i] ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>
</div>

<?php include( 'footer.php' ); ?>

<script type="text/javascript">
    $(document).ready(function(){
        $('#table').DataTable();

        var tblContent = document.getElementById("tableContent");

    });
</script>