<?
//die;

require_once 'includes/global.inc.php';
session_start();
$l = $_SESSION['lang'];
?>
<!--<script src="vendor/jquery/jquery-3.2.1.min.js"></script>-->
<!--<script src="js/main.js"></script>-->
<script src="/js/jquery-1.9.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {

        $('label.q1-checkbox').click(function () {
            var thisCheckBox = $(this).find('input[type=checkbox]');

            if($(this).find('textarea').val() != '') {
                thisCheckBox.prop('checked', true);
            }
        });

        $('textarea').keyup(function () {
            var thisCheckBox = $(this).parents('label.q1-checkbox').find('input[type=checkbox]');
            if($(this).val() != '') {
                thisCheckBox.prop('checked', true);
            }
        });

        $('#poll-form').submit(function () {
            if ($('#q3').val() == '') {
                window.location.hash = 'dsc';
                swal('Sweet!', 'Here\'s a custom image.', 'error');
                return false;
            }
        });

    });
</script>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/style1.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
<form action="/send.php" method="post" id="poll-form"  accept-charset="utf-8" enctype="multipart/form-data">
	<div class="limiter">
		<div class="container-login100">
			<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
<!--                <div class="fullscreen-bg">
                    <video loop muted autoplay poster="video/plane.jpg" class="fullscreen-bg__video">
                        <source src="video/plane.mp4" type="video/mp4">
                        <source src="video/plane.webm" type="video/webm">
                    </video>
                </div>-->
            </div>
			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50" id="poll-form">

				<form class="login100-form" id="dsc">
					<span class="login100-form-title p-b-59">
						“Mamlakatimiz rivojiga qo'shayotgan hissasingizni yuksak qadrlaymiz”
					</span>

					<label class="wrap-input100 validate-input q1-checkbox" data-validate="">
                        <input type="checkbox" class="hidden-inputs" name="q1[]" value="1">
						<span class="label-input100">Davlat va jamiyat qurilishi tizimini takomillashtirish</span>
                        <textarea class="input100" type="text" name="q1_1" id="q1_1" maxlength="1500" placeholder="Taklifni kiriting"></textarea>
						<span class="focus-input100"></span>
					</label>

					<label class="wrap-input100 validate-input q1-checkbox" >
                        <input type="checkbox" class="hidden-inputs" name="q1[]" value="2">
						<span class="label-input100">Qonun ustuvorligini ta’minlash va sud-huquq tizimini yanada isloh qilish</span>
                        <textarea class="input100" type="text" name="q1_2" id="q1_2" maxlength="1500"  placeholder="Taklifni kiriting"></textarea>
						<span class="focus-input100"></span>
					</label>

					<label class="wrap-input100 validate-input q1-checkbox" data-validate="">
                        <input type="checkbox" class="hidden-inputs" name="q1[]" value="3">
						<span class="label-input100">Iqtisodiyotni rivojlantirish va liberallashtirish</span>
                        <textarea class="input100" type="text" name="q1_3" maxlength="1500" placeholder="Taklifni kiriting"></textarea>
						<span class="focus-input100"></span>
					</label>

					<label class="wrap-input100 validate-input q1-checkbox" data-validate = "">
                        <input type="checkbox" class="hidden-inputs" name="q1[]" value="4">
						<span class="label-input100">Ijtimoiy sohani rivojlantirish</span>
                        <textarea class="input100" type="text" name="q1_4" maxlength="1500" placeholder="Taklifni kiriting"></textarea>
						<span class="focus-input100"></span>
					</label>
					<label class="wrap-input100 validate-input q1-checkbox" data-validate = "">
                        <input type="checkbox" class="hidden-inputs" name="q1[]" value="5">
						<span class="label-input100">Xavfsizlik, millatlararo totuvlik va diniy bag‘rikenglikni ta’minlash hamda tashqi siyosat</span>
                        <textarea class="input100" type="text" name="q1_5" maxlength="1500" placeholder="Taklifni kiriting"></textarea>
						<span class="focus-input100"></span>
					</label>
                    <fieldset class="">
                        <h2>
                            <div class="title-part">
                                <span class="number"></span>
                                <span class="label-input100">Shaxsiy ma'lumot (telefon va/yoki el-pochta)</span>

                                <div class="require smallipop-initialized smallipop3" title="">
                        <span class="smallipop-hint">
                        </span>
                                </div>
                            </div>
                        </h2>

                        <div class="special-padding-row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-pad-0 inner-align">
                                <label class="input-group input-group-text" data-for="q3">
                                    <span class="input-group-addon"></span>
                                    <input type="text" class="form-control  validate" id="q3" name="q3" value=""
                                           maxlength="50" placeholder="+998991234567 / email@email.uz">
                                </label>
                                <span>Taklifingiz yuzasidan qo‘shimcha ma’lumot zarur bo‘lgandagina Siz bilan bog‘lanish maqsadida foydalaniladi.</span>
                            </div>
                        </div>

                    </fieldset>
                    <hr>
                    <fieldset class="">
                        <div class="special-padding-row">
                            <div class="label-cont">
                                <span class="label-input100">Fayl ko'rinishidagi taklifni yuklang</span>
                                <label class="input-group input-group-radio row">
                                    <input type="file" class="hidden-inputs" name="q2">
                                    <span class="input-group-title"></span>
                                <label>
                            </div>
                        </div>
                    </fieldset>

<!--					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									I agree to the
									<a href="#" class="txt2 hov1">
										Terms of User
									</a>
								</span>
							</label>
						</div>


					</div>-->

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" type="submit">
								Yuborish
							</button>
						</div>



<!--						<a href="#" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Sign in
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>-->
					</div>
				</form>
			</div>
		</div>
	</div>
</form>
<!--===============================================================================================-->
	<!--<script src="vendor/jquery/jquery-3.2.1.min.js"></script>-->
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>