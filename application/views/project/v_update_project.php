<div class="container mt-4">
  <div class="row">
    <div class="col">
      <h4>EDIT DATA</h4>

      <?php foreach ($project as $row) { ?>

      

      <form class="" action="<?=base_url('project/edit_aksi') ?>" method="post">
        <input type="hidden" name="no" value="<?= $row->id_p; ?>">
        <!-- <div class="form-group">
          <label>No</label>
          <input type="number" name="id_p" value="<?= $row->id_p; ?>" class="form-control">
        </div> -->

        <div class="form-group">
          <label>Judul Project</label>
          <input type="text" name="judul" value="<?= $row->judul; ?>" class="form-control">
        </div>

        <div class="form-group">
          <label>Nama Client</label>
          <input type="text" name="client" value="<?= $row->client; ?>" class="form-control">
        </div>

        <div class="form-group">
          <label>Nama Ketua Project</label>
          <input type="text" name="ketua" value="<?= $row->ketua; ?>" class="form-control">
        </div>

        <div class="form-group">
          <label>Tanggal Mulai</label>
          <input type="date" name="start" value="<?= $row->start; ?>" class="form-control">
        </div>

        <div class="form-group">
          <label>Tanggal Akhir</label>
          <input type="date" name="end" value="<?= $row->end; ?>" class="form-control">
        </div>
        
        <button type="submit" name="button" class="btn btn-primary">Simpan Data</button>
        <a href="<?= base_url('project') ?>" class="btn btn-danger">Kembali </a>
      </form>

    <?php } ?>
    </div>
  </div>
</div>