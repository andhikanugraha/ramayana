<header class="page-title">
	<hgroup>
		<?php $ch = $this->session->user->chapter ?>
		<h1><a href="<?php L(array('controller' => 'chapter', 'action' => 'view', 'chapter_code' => $ch->chapter_code)) ?>"><?php echo $ch->get_title() ?></a></h1>
		<h2>Hasil Seleksi Tahap Ketiga</h2>
	</hgroup>
</header>
<?php

$nav_array = array(	'index' => 'Daftar Kelulusan Peserta', 'announce' => 'Ubah Kelulusan' );
$this->actions_nav($nav_array);
