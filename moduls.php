<?php
    include_once './header.php';
?>

			<section id="main" class="wrapper">
				<div class="inner">
                                                     <form method="get" id="moduls" action="#">
										<div class="row uniform">
											<div class="12u">
												<div class="select-wrapper">
													<select name="moduls" action="login.php" id="class" form="moduls">
														<option value="">Izbri želeni predmet</option>
														<option value="1">Matematika</option>
														<option value="2">Slovenščina</option>
														<option value="1">Angleščina</option>
														<option value="1">Zgodovina</option>                                                       
													</select>
												</div>
											</div>
											<div class="12u">
												<ul class="actions">
													<li><input type="submit" value="Potrdi" /></li>
												</ul>
											</div>
										</div>
									</form>
								</div>
                        </section>
<?php
    include_once './footer.php';
?>