<?php include( 'header.php' ); ?>

<div class="container">
    <!-- <div class="filter">
        <ul class="dataTable left" id="tab_length"><label>Show
            <select name="tab_length" aria-controls="tab" class="">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select> entries</label>
        </ul>
        <ul class="right">
            <input type="text" id="searchText" onkeyup="search()" placeholder="Search for names..">
        </ul>
    </div> -->
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
            <tr>
                <td>1</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Germany</td>
                <td>sdnsk</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Germany</td>
                <td>tre</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
                <td>Germany</td>
            </tr>
        </tbody>
    </table>
</div>

<?php include( 'footer.php' ); ?>

<script type="text/javascript">
    $(document).ready(function(){
    $('#table').DataTable();
});
</script>