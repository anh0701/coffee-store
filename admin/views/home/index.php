<?php require('admin/views/shared/header.php'); ?>
    <div id="page-wrapper">

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Quản lý quán cà phê</h1>
                <img src="http://vimaru.edu.vn/sites/default/files/logots_1.png" alt="" style="margin: 0 520px">
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-comments fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"> <?php echo $total_rows_comment; ?></div>
                                <div>New Comments !</div>
                            </div>
                        </div>
                    </div>
                    <a href="admin.php?controller=comment">
                        <div class="panel-footer">
                            <span class="pull-left">Xem chhi tiết</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div> -->
            <!-- <div class="col-lg-6 col-md-6">
                <div class="panel panel-green">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-tasks fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $total_rows_online;?></div>
                                <div>New Visiter</div>
                            </div>
                        </div>
                    </div>
                    <a href="admin.php?controller=counter">
                        <div class="panel-footer">
                            <span class="pull-left">Xem chi tiết</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div> -->
            <div class="col-lg-12 col-md-4">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-shopping-cart fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $total_order;?></div>
                                <div>New Orders!</div>
                            </div>
                        </div>
                    </div>
                    <a href="admin.php?controller=order">
                        <div class="panel-footer">
                            <span class="pull-left">Xem chi tiết </span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-support fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge"><?php echo $total_feedback;?></div>
                                <div>New Feedback !</div>
                            </div>
                        </div>
                    </div>
                    <a href="admin.php?controller=feedback">
                        <div class="panel-footer">
                            <span class="pull-left">Xem chi tiết</span>
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div> -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <?php require "admin/views/order/tableOrderprocess.php";?>
                <!-- <?php require "admin/views/product/tableNewproduct.php";?> -->
            </div>
            <!-- <div class="col-lg-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bell fa-fw"></i> Notifications Panel
                    </div>
                    <div class="panel-body">
                        <div class="list-group">

                         <a href="admin.php?controller=order&action=view&oid=<?php echo  $order_new['Id'] ; ?>" class="list-group-item">
                                <i class="fa fa-upload fa-fw"></i> Đơn hàng mới
                                    <span class="pull-right text-muted small"><em><?php echo get_time($order_new['Createtime'],gmdate('Y:m:d H:i:s', time() + 7 * 3600))?></em>
                                    </span>
                            </a>

                            <a href="admin.php?controller=order" class="list-group-item">
                                <i class="fa fa-shopping-cart fa-fw"></i> Đơn hàng chưa xử lý
                                    <span class="pull-right text-muted small"><em><?php echo $total_order_inprosess; ?></em>
                                    </span>
                            </a>

                            <a href="#" class="list-group-item">
                                <i class="fa fa-money fa-fw"></i> Đơn hàng đã xử lý
                                    <span class="pull-right text-muted small"><em><?php echo $total_order_prosess; ?></em>
                                    </span>
                            </a>

                            <a href="admin.php?controller=comment&action=edit&comid=<?php echo  $comment_new['Id'] ; ?>" class="list-group-item">
                                <i class="fa fa-comment fa-fw"></i>Bình luận mới
                                    <span class="pull-right text-muted small"><em><?php echo get_time($comment_new['CreateDate'],gmdate('Y:m:d H:i:s', time() + 7 * 3600))?></em>
                                    </span>
                            </a>

                            <a href="admin.php?controller=feedback&action=edit&fid=<?php echo  $feedback_new['Id'] ; ?>" class="list-group-item">
                                <i class="fa fa-envelope fa-fw"></i>Tin nhắn mới
                                    <span class="pull-right text-muted small"><em><?php echo get_time($feedback_new['Createtime'],gmdate('Y:m:d H:i:s', time() + 7 * 3600))?></em>
                                    </span>
                            </a>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Đơn hàng đã xử lý
                    </div>
                    <div class="panel-body">
                        <div class="list-group">
                         <?php foreach ($order_completes as $order_complete): ?>
                         <a href="admin.php?controller=order&amp;action=view&amp;oid=<?php echo $order_complete['Id']; ?>" class="list-group-item">
                                <i class="fa fa-shopping-cart fa-fw"></i> <?php echo $order_complete['Customer']; ?>
                                <span class="pull-right text-muted small"><em><?php echo get_time($feedback_new['Createtime'],gmdate('Y:m:d H:i:s', time() + 7 * 3600))?></em>
                                    </span>
                          </a>
                          <?php endforeach; ?>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Thống kê online
                    </div>
                    <div class="panel-body">
                        <div class="list-group">
                         <a href="admin.php?controller=counter" class="list-group-item">
                                <i class="fa fa-upload fa-fw"></i> Đang truy cập
                                    <span class="pull-right text-muted small"><em><?php echo $total_rows_online;?></em>
                                    </span>
                          </a>
                          <a href="admin.php?controller=counter" class="list-group-item">
                                <i class="fa fa-upload fa-fw"></i> Lượt truy cập
                                    <span class="pull-right text-muted small"><em><?php echo $total_rows_access;?></em>
                                    </span>
                          </a>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-bar-chart-o fa-fw"></i> Trình phát youtube
                    </div>
                    <div class="panel-body">
                        <div class="list-group">
                         <?php foreach ($livesports as $livesport): ?>
                         <a href="admin.php?controller=livesport&amp;action=edit&amp;id=<?php echo $livesport['Id']; ?>" class="list-group-item">
                                <i class="fa fa-youtube-play fa-fw"></i> <?php echo $livesport['Title']; ?>
                          </a>
                          <?php endforeach; ?>
                        </div>
                    </div>
                </div> -->



                <!-- <div class="chat-panel panel panel-default">
                    <div class="panel-heading">
                        <i class="fa fa-comments fa-fw"></i>
                        Phản hồi của khách hàng
                        <div class="btn-group pull-right">
                            <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-chevron-down"></i>
                            </button>
                            <ul class="dropdown-menu slidedown">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-refresh fa-fw"></i> Refresh
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-check-circle fa-fw"></i> Available
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-times fa-fw"></i> Busy
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-clock-o fa-fw"></i> Away
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-sign-out fa-fw"></i> Sign Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div> -->
                    <div class="panel-body">
                        <ul class="chat">
                            <?php foreach ($feedbacks as $feedback): ?>
                            <li class="clearfix">
                                <div class="chat-body ">
                                    <div class="header">
                                        <strong class="primary-font"><?php echo $feedback['Mobile'] ?></strong>
                                        <small class="pull-right text-muted">
                                            <i class="fa fa-clock-o fa-fw"></i> <?php echo $feedback['Createtime'] ?>
                                        </small>
                                    </div>
                                    <p>
                                    <?php echo substring($feedback['Subject'],50); ?>
                                    </p>
                                </div>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- /#wrapper -->
<?php require('admin/views/shared/footer.php'); ?>