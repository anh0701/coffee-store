<?php require('website/views/shared/header.php'); ?>
<section class="page-title">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-md-2 text-center">
				<!-- Title text -->
				<h3>Liên hệ</h3>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>
<!-- page title -->

<!-- contact us start-->
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-us-content p-4">
                    <h5>Liên hệ với chúng tôi</h5>
                    <h1 class="pt-3">Xin chào, bạn đang nghĩ gì vậy?</h1>
                    <p class="pt-3 pb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla elit dolor, blandit vel euismod ac, lentesque et dolor. Ut id tempus ipsum.</p>
                </div>
            </div>
            <div class="col-md-6">
                    <form id="userForm" method="post" action="index.php?controller=contact&amp;action=index" >
                        <fieldset class="p-4">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-6 py-2">
                                        <input type="text" name="userName" placeholder="Name *" class="form-control" required>
                                    </div>
                                    <div class="col-lg-6 pt-2">
                                        <input type="text" name="userPhone" placeholder="Phone *" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="w-100 pb-4 mt-3 mt-lg-4">
                                        <input type="email" name="userEmail" placeholder="Email *" class="form-control" required>
                                    </div>
                            <select name="" id="" class="form-control w-100">
                                <option value="1">Danh mục</option>
                                <option value="1"></option>
                                <option value="1"></option>
                                <option value="1"></option>
                                <option value="1"></option>
                            </select>
                            <textarea name="userMsg" id=""  placeholder="Message *" class="border w-100 p-3 mt-3 mt-lg-4"></textarea>
                            <div class="btn-grounp">
                                <button type="submit" class="btn btn-warning mt-2 float-right">GỬI</button>
                            </div>
                        </fieldset>
                    </form>
            </div>
        </div>
    </div>
</section>
<!-- contact us end -->
<?php require('website/views/shared/footer.php'); ?>