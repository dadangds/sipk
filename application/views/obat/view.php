<?php $this->load->view('sidebar'); ?>
<div id="content">
	<div id="content-body">
		<h2>Daftar Obat</h2>
		<?php
			foreach ($data as $row)
			{
		?>
		<div class="post-list">
			<div class="post-list-thumb">
				<a href="<?php echo site_url('obat/detail/'.$row->id); ?>">
					<img src="<?php echo base_url('uploads/obat/obat.jpg'); ?>" width="100" alt="Minim Katalis, Euro Terjepit di Bawah $1.25" />
				</a>
			</div>
			<div class="post-list-content">
				<h3>
					<a href="<?php echo site_url('obat/detail/'.$row->id); ?>"><?php echo $row->nama; ?></a>
				</h3>
				<span class="date"><?php echo $row->created; ?></span><br />
				<p><?php echo $row->deskripsi; ?></p>
			</div>
		</div>
		<?php
			}
		?>
	</div>
</div>
		    