<!-- Heder  -->
		<?php echo $header;	?>

		<!-- news -->
		<div class="news">
			<div class="container">
				<div class="row">
					<!-- News Posts -->
					<div class="col-lg-7">
						<div class="news_posts">
							<!-- News Post -->

							<div class="news_post">
								<div class="post_title">
									<h2>Top destinations in Europe</h2>
								</div>

								<div class="post_image">
									<img src="<?= base_url()?>public/images/news_1.jpg">

								</div>

								<div class="container p-1 m-0">
									<div class="justify-content-between row ">

										<div class="col-12 col-md-4 p-0 m-0">
											<div class="buttons">
												<div class="buttons_container">
													<div class="button button_1 elements_button" data-toggle="modal" data-target="#agregarDestino">Agregar destino</div>
												</div>
											</div>
										</div>

										<div class="col-12 col-md-4 p-0 m-0">
											<div class="buttons">
												<div class="buttons_container">
													<div class="button button_1 elements_button" data-toggle="modal" data-target="#agregarPlan">Agregar plan</div>
												</div>
											</div>
										</div>

										<div class="col-12 col-md-4 p-0 m-0">
											<div class="buttons">
												<div class="buttons_container">
													<div class="button button_1 elements_button" data-toggle="modal" data-target="#administracion">Administrar</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="modal fade" id="agregarDestino" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Agregar destino</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<form>
												<div class="form-group">
													<label for="exampleInputEmail1">Pais</label>
													<input class="form-control">
												</div>
												<div class="form-group">
													<label for="exampleInputEmail1">Ciudad</label>
													<input class="form-control">
												</div>

												<div class="modal-footer">
													<div class="buttons_container">
														<div class="button button_1 elements_button" data-dismiss="modal" aria-label="Close"> Guardar</div>
													</div>
												</div>
											</form>
										</div>
										</div>
									</div>
								</div>

								<div class="modal fade" id="agregarPlan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-body">
											<form>
												<div class="form-group">
													<label for="exampleFormControlSelect1">Selecione el destino del plan</label>
													<select class="form-control" id="exampleFormControlSelect1">
														<option>Destino 1</option>
														<option>Destino 2</option>
													</select>
												</div>
												<div class="form-group">
													<label for="exampleInputEmail1">Titulo del plan</label>
													<input class="form-control">
												</div>
												<div class="form-group">
													<label for="exampleFormControlTextarea1">Descripcion</label>
													<textarea class="form-control" id="exampleFormControlTextarea1" rows="1"></textarea>
												</div>
												<div class="form-group">
													<label for="exampleInputPassword1">Latitud</label>
													<input class="form-control">
												</div>
												<div class="form-group">
													<label for="exampleInputPassword1">Longitud</label>
													<input class="form-control">
												</div>
												<div class="form-group">
													<label for="exampleInputPassword1">¿Algun link para que podamos encontrar mas info?</label>
													<input class="form-control">
												</div>

												<div class="modal-footer">
													<div class="buttons_container">
														<div class="button button_1 elements_button" data-dismiss="modal" aria-label="Close"> Guardar</div>
													</div>
												</div>
											</form>
										</div>
										</div>
									</div>
								</div>

								<div class="modal fade" id="administracion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Administrar</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
											</button>										
										</div>
										<div class="modal-body">
										<div class="tabs_container">
												<div class="tabs d-flex flex-row align-items-center justify-content-around">
													<div class="tab active">Viajeros</div>
													<div class="tab">Colaboradores</div>
												</div>
												<div class="tab_panels">
													<div class="tab_panel active ">
														<div class="tab_panel_content">
															<div class="menu_search_form_container" >
																<input type="search" class="menu_search_input menu_mm" value= "http://TripDo/viaje/873838" disabled>
															</div>	
															<br>
															<ul class="list-group">
																<li class="list-group-item">
																	<img src="<?= base_url()?>/public/images/news_1.jpg" width="40px" height="40px" class="rounded-circle">
																	Cras justo odio
																</li>
																<li class="list-group-item">
																	<img src="<?= base_url()?>/public/images/news_1.jpg" width="40px" height="40px" class="rounded-circle">
																	Cras justo odio
																</li>
																<li class="list-group-item">
																	<img src="<?= base_url()?>/public/images/news_1.jpg" width="40px" height="40px" class="rounded-circle">
																	Cras justo odio
																</li>
															</ul>	
															<p>¿Quieres invitar a alguien mas?</p> 
															<div class="container p-1 m-0">
																<div class="menu_search_form_container row">
																	<div class="col-9 pt-2">
																		<input type="email" class="form-control" class="menu_search_input menu_mm" >	
																	</div>
																	<div class="col-3  p-0 m-0">
																		<div class="buttons_container w-75 h-75 p-0 m-0">
																			<div class="pb-3 button button_1 elements_button" data-toggle="modal">Enviar</div>
																		</div>
																	</div>
																</div>
															</div>												
														</div>
													</div>
													<div class="tab_panel">
														<div class="tab_panel_content">
															<div class="menu_search_form_container" >
																<input type="search" class="menu_search_input menu_mm" value= "http://TripDo/viaje/873838" disabled>
															</div>	
															<br>
															<ul class="list-group">
																<li class="list-group-item">
																	<img src="<?= base_url()?>/public/images/news_1.jpg" width="40px" height="40px" class="rounded-circle">
																	Cras justo odio
																</li>
																<li class="list-group-item">
																	<img src="<?= base_url()?>/public/images/news_1.jpg" width="40px" height="40px" class="rounded-circle">
																	Cras justo odio
																</li>
																<li class="list-group-item">
																	<img src="<?= base_url()?>/public/images/news_1.jpg" width="40px" height="40px" class="rounded-circle">
																	Cras justo odio
																</li>
																<p>¿Quieres invitar a alguien mas?</p> 
																<div class="container p-1 m-0">
																	<div class="menu_search_form_container row">
																		<div class="col-9 pt-2">
																			<input type="email" class="form-control" class="menu_search_input menu_mm" >	
																		</div>
																		<div class="col-3  p-0 m-0">
																			<div class="buttons_container w-75 h-75 p-0 m-0">
																				<div class="pb-3 button button_1 elements_button" data-toggle="modal">Enviar</div>
																			</div>
																		</div>
																	</div>
															</div>
															</ul>		
														</div>
													</div>
												</div>
											</div>
										</div>
										</div>
									</div>
								</div>

								<hr>
								<div class="post_text">
									<div class="accordions_content">

										<div class="accordion_container">
											<div class="accordion d-flex flex-row align-items-center"><div>Usuario: Destino</div></div>
											<div class="accordion_panel">
												<p>Plan para el siguiente destino</p>
											</div>
										</div>
										<div class="accordion_container">
											<div class="accordion d-flex flex-row align-items-center"><div>Usuario: Destino</div></div>
											<div class="accordion_panel">
												<p>Plan para el siguiente destino</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Sidebar -->
					<div class="col-lg-5">
						<div class="sidebar">
							<!-- Featured Posts -->
							<div class="sidebar_featured">
								<!-- Featured Post -->
								<div class="sidebar_featured_post">
									<div class="tab_panels">
										<div class="sidebar_featured_image"><img src="<?= base_url()?>/public/images/mapa.png" alt=""></div>
									</div>

									<!-- Tabs -->
									<div class="tabs_container">
										<div class="tabs d-flex flex-row align-items-center justify-content-around">
											<div class="tab log">Log</div>
										</div>
										<div class="tab_panels">
											<div class="tab_panel log">
												<div class="tab_panel_content">
													<p>Lorem ipsum dolor sit amet,</p>
													<p>Lorem ipsum dolor sit amet,</p>
													<p>Lorem ipsum dolor sit amet,</p>
													<p>Lorem ipsum dolor sit amet,</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

	
<!-- Footer -->
<?php echo $footer;?>