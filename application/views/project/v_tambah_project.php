<div class="container mt-4">
  <div class="row">
    <div class="col">
      <h4>TAMBAH DATA</h4>

      <form class="" action="<?=base_url('project/tambah_aksi') ?>" method="post">
        <!-- <div class="form-group">
          <label>No</label>
          <input type="number" name="id_p" value="" class="form-control">
        </div> -->

        <div class="form-group">
          <label>Judul Project</label>
          <input type="text" name="judul" value="" class="form-control">
        </div>

        <div class="form-group">
          <label>Nama Client</label>
          <input type="text" name="client" value="" class="form-control">
        </div>

        <div class="form-group">
          <label>Nama Ketua Project</label>
          <input type="text" name="ketua" value="" class="form-control">
        </div>

        <div class="form-group">
          <label>Tanggal Mulai</label>
          <input type="date" name="start" value="" class="form-control">
        </div>

        <div class="form-group">
          <label>Tanggal Akhir</label>
          <input type="date" name="end" value="" class="form-control">
        </div>
        
        <button type="submit" name="button" class="btn btn-primary">Simpan Data</button>
        <a href="<?= base_url('project') ?>" class="btn btn-danger">Kembali </a>
      </form>

    </div>
  </div>
</div>