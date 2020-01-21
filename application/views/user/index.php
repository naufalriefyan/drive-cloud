		<div class="main cf">
			<div class="container">
				<div class="main-about">
					<div class="row">
						<img src="<?= base_url('asset/img/21.png'); ?>" alt="" class="main-p">
						<div class="col-lg">
							<h1>Welcome <?= $user['username']; ?> to Drive Cloud</h1>
							<p>Drive Cloud is a service for keep save your data job or personal, keep your data in Drive Cloud for being your backup data </p>
						</div>
					</div>
				</div>

				<div class="upload">
					<div class="col-md">

						<?= form_open_multipart('User/upload'); ?>
						<h5>Upload Your File in here:</h5>
						<div class="input-group">
							<div class="custom-file">
								<input type="file" class="custom-file-input form-control" id="image" name="image" required>
								<label class="custom-file-label" for="image">Choose file</label>
							</div>
							<div class="input-group-append">
								<button class="btn btn-dark" type="submit">Upload</button>
							</div>
							<?= $error; ?>
						</div>
						</form>
					</div>
				</div>

				<div class="row">
					<div class="col-md">
						<!-- File -->
						<div class="header-file">
							<h3 class="embed">File</h3>
							<section class="file-body">
								<div class="row">
									<?php if (!empty($foto)) : ?>
										<?php foreach ($foto as $f) : ?>
											<?php
											$name_array = $f['file'];
											$ekstensilain = ['php', 'html', 'js', 'ai', 'xlsx'];
											$ekstensifoto = ['jpg', 'jpeg', 'png'];
											$ekstensipdf = ['pdf'];
											$ekstensidoc = ['doc', 'docx'];
											$ekstensi = explode('.', $name_array);
											$ekstensi = strtolower(end($ekstensi));
											?>

											<?php if (in_array($ekstensi, $ekstensifoto)) : ?>
												<div class="card-file">
													<div class="dropdown">
														&nbsp;&nbsp;&nbsp;<a data-toggle="dropdown" title="Pilih Kelas" href="" style="color: #000; size: 20px;"><i class="icon-ellipsis"></i></a>
														<div class="dropdown-menu ">
															<a href="<?= base_url(); ?>User/download/<?= $f['id_drive']; ?>" class="dropdown-item">Download</a>
															<a href="<?= base_url(); ?>User/delete/<?= $f['id_drive']; ?>" class="dropdown-item">Delete</a>
														</div>
													</div>
													<a href="<?= base_url(); ?>User/download/<?= $f['id_drive']; ?>">
														<img src="<?= base_url(); ?>asset/img/file-blank-icon.png" alt="folder" class="file-image">
													</a>
													<div class="name">
														<?php if ($f['file'] > substr($f['file'], 0, 10)) : ?>
															<h3 class="title-name"><?= substr($f['file'], 0, 10); ?>... </h3>
														<?php else : ?>
															<h3 class="title-name"><?= $f['file'] ?></h3>
														<?php endif; ?>
													</div>
												</div>

												<!-- end card-folder-embed  -->
											<?php elseif (in_array($ekstensi, $ekstensipdf)) : ?>
												<div class="card-file">
													<div class="dropdown">
														&nbsp;&nbsp;&nbsp;<a data-toggle="dropdown" title="Pilih Kelas" href="" style="color: #000; size: 20px;"><i class="icon-ellipsis"></i></a>
														<div class="dropdown-menu ">
															<a href="<?= base_url(); ?>User/download/<?= $f['id_drive']; ?>" class="dropdown-item">Download</a>
															<a href="<?= base_url(); ?>User/delete/<?= $f['id_drive']; ?>" class="dropdown-item">Delete</a>
														</div>
													</div>
													<a href="<?= base_url(); ?>User/download/<?= $f['id_drive']; ?>" class="link-embed">
														<img src="<?= base_url(); ?>asset/img/pdf.png" alt="folder" class="file-image">
													</a>
													<div class="name">
														<?php if ($f['file'] > substr($f['file'], 0, 10)) : ?>
															<h3 class="title-name"><?= substr($f['file'], 0, 10); ?>... </h3>
														<?php else : ?>
															<h3 class="title-name"><?= $f['file'] ?></h3>
														<?php endif; ?>
													</div>
												</div>


												<!-- end card-folder-embed  -->
											<?php elseif (in_array($ekstensi, $ekstensilain)) : ?>
												<div class="card-file">
													<div class="dropdown">
														&nbsp;&nbsp;&nbsp;<a data-toggle="dropdown" title="Pilih Kelas" href="" style="color: #000; size: 20px;"><i class="icon-ellipsis"></i></a>
														<div class="dropdown-menu ">
															<a href="<?= base_url(); ?>User/download/<?= $f['id_drive']; ?>" class="dropdown-item">Download</a>
															<a href="<?= base_url(); ?>User/delete/<?= $f['id_drive']; ?>" class="dropdown-item">Delete</a>
														</div>
													</div>
													<a href="<?= base_url(); ?>User/download/<?= $f['id_drive']; ?>" class="link-embed">
														<img src="<?= base_url(); ?>asset/img/lain.jpg" alt="folder" class="file-image">
													</a>
													<div class="name">
														<?php if ($f['file'] > substr($f['file'], 0, 10)) : ?>
															<h3 class="title-name"><?= substr($f['file'], 0, 10); ?>... </h3>
														<?php else : ?>
															<h3 class="title-name"><?= $f['file'] ?></h3>
														<?php endif; ?>
													</div>
												</div>



												<!-- end card-folder-embed  -->
											<?php elseif (in_array($ekstensi, $ekstensidoc)) : ?>
												<div class="card-file">
													<div class="dropdown">
														&nbsp;&nbsp;&nbsp;<a data-toggle="dropdown" title="Pilih Kelas" href="" style="color: #000; size: 20px;"><i class="icon-ellipsis"></i></a>
														<div class="dropdown-menu ">
															<a href="<?= base_url(); ?>User/download/<?= $f['id_drive']; ?>" class="dropdown-item">Download</a>
															<a href="<?= base_url(); ?>User/delete/<?= $f['id_drive']; ?>" class="dropdown-item">Delete</a>
														</div>
													</div>
													<a href="<?= base_url(); ?>User/download/<?= $f['id_drive']; ?>" class="link-embed">
														<img src="<?= base_url(); ?>asset/img/Word-Icon.jpg" alt="folder" class="file-image">
													</a>
													<div class="name">
														<?php if ($f['file'] > substr($f['file'], 0, 10)) : ?>
															<h3 class="title-name"><?= substr($f['file'], 0, 10); ?>... </h3>
														<?php else : ?>
															<h3 class="title-name"><?= $f['file'] ?></h3>
														<?php endif; ?>
													</div>
												</div>
												<!-- end card-folder-embed  -->
											<?php endif; ?>
										<?php endforeach; ?>
									<?php else : ?>
										<section class="header-empty-file">
											<div class="container">
												<h1>Opps You dont have Data !</h1>
												<hr>
											</div>
										</section>
									<?php endif; ?>
								</div>
							</section>
							<!-- end section card file body -->
						</div>
					</div>
				</div>
			</div>
		</div>

		</div>
		<!-- end wrapper -->




		</body>

		</html>