<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">
        <div class="panel panel-default">
    <div class="panel-heading text-center">
       <b>Đang Online</b>
    </div>
    <div class="panel-body">
        <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover" id="dataTables-counter">
                <thead>
                <tr>
                    <th>sesion</th>
                    <th>time</th>
                    <th>ip</th>
                    <th>browser</th>
                     <th>dateonline</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($user_onlines as $counter): ?>
                    <tr class="odd gradeX">
                        <td><h4 class="item_name"><?php echo $counter['session'] ?></h4></td>
                        <td><h4 class="item_name"> <?php echo $counter['time']; ?></h4></td>
                        <td><h4 class="item_name"><?php echo $counter['ip'] ?></h4></td>
                        <td class="center"><?php echo $counter['browser'] ?></td>
                         <td class="center"><?php echo $counter['dateonline'] ?></td>

                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <div class="panel-heading text-center">
       <b>Lượt truy cập</b>
    </div>
    <div class="panel-body">
        <div class="dataTable_wrapper">
            <table class="table table-striped table-bordered table-hover" id="dataTables-visiter">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>time</th>
                    <th>ip</th>
                    <th>browser</th>
                     <th>dateonline</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($user_visiter as $visiter): ?>
                    <tr class="odd gradeX">
                        <td><h4 class="item_name"><?php echo $visiter['Id'] ?></h4></td>
                        <td><h4 class="item_name"> <?php echo $visiter['time']; ?></h4></td>
                        <td><h4 class="item_name"><?php echo $visiter['ip'] ?></h4></td>
                        <td class="center"><?php echo $visiter['browser'] ?></td>
                         <td class="center"><?php echo $visiter['dateonline'] ?></td>

                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<script>
    $(document).ready(function () {
        $('#dataTables-counter').DataTable({
           responsive: true,  "order":[[0, 'desc']]
        });
        $('#dataTables-visiter').DataTable({
           responsive: true,  "order":[[0, 'desc']]
        });
    });
</script>

</div>
</div>
<?php require('admin/views/shared/footer.php'); ?>