<?php
include_once "views /header.php";
require_once "server/config.php";

$sql = "SET NAMES utf8";
$res = mysqli_query($connect, $sql);

$sql = "select * from goods";
$res = mysqli_query($connect, $sql);
?>

	<div class="products">
		<div class="container">
			<div class="info_single">
                <?php
                while ($data = mysqli_fetch_assoc($res)) :
                    if ($data['id'] == $_GET['id']) :
                    ?>
				<div class="info_single_left">
					<img id="example" src="<?= PATH_BIG.$data['img']?>" alt=" " class="img-responsive">
				</div>
				<div class="info_single_right">
				<h2><?= $data['title']?></h2>
					<div class="single_description">
						<h4>Описание:</h4>
						<p><?= $data['full_info']?></p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb info_single_right_snipcart">
							<h4 class="m-sing"><?= $data['price']?> руб</h4>
						</div>
						<div class="snipcart-details info_single_right_details">
							<form action="#" method="post">
								<fieldset>
									<input type="submit" name="submit" value="Купить" data-id="" class="button">
								</fieldset>
							</form>
						</div>
					</div>
				</div>
                <?php
                    endif;
                    endwhile;

                print_r($_POST);
                    ?>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

<?php require_once "views/footer.php";