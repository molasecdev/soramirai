<style>
.bd-placeholder-img {
	font-size: 1.125rem;
	text-anchor: middle;
	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
}

@media (min-width: 768px) {
	.bd-placeholder-img-lg {
		font-size: 3.5rem;
	}
}
</style>


<main>

<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 240px;">

	<a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
		<svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
		<span class="fs-4">Hai <b><?php echo $_SESSION['sesi']; ?></b> !</span>
	</a>

<hr>

	<ul class="nav nav-pills flex-column mb-auto">
		<li class="nav-item">
			<a href="?hal=home" class="nav-link link-dark <?php
			if ($hal=="home")
				echo "active";?>" aria-current="page"> Home </a>
		</li>
	<li class="nav-item">
			<a href="?hal=siswa-semua" class="nav-link link-dark  <?php
			if ($hal=="siswa-semua")
				echo "active";?>"> Semua Siswa </a>
		</li>


		<li class="nav-item">
			<a href="?hal=siswa-calon" class="nav-link link-dark  <?php
			if ($hal=="siswa-calon")
				echo "active";?>"> Calon Siswa </a>
		</li>
		<li class="nav-item">
			<a href="?hal=siswa-diterima" class="nav-link link-dark  <?php
			if ($hal=="siswa-diterima")
				echo "active";?>"> Siswa Diterima </a>
		</li>
		<li class="nav-item">
			<a href="?hal=siswa-cadangan" class="nav-link link-dark  <?php
			if ($hal=="siswa-cadangan")
				echo "active";?>"> Siswa Cadangan </a>
		</li>
		<li class="nav-item">
			<a href="?hal=siswa-gagal" class="nav-link link-dark  <?php
			if ($hal=="siswa-gagal")
				echo "active";?>"> Siswa Tidak Diterima </a>
		</li>
	</ul>
<hr>

<div>
	<ul class="nav nav-pills flex-column mb-auto">
		<li class="nav-item">
			<a href="../logout.php" class="nav-link link-dark"> Logout </a>
		</li>
</div>
</div>
</main>

<script src="sidebars.js"></script>

