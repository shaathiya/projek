<div class="container mt-4">
  <div class="row">
    <div class="col">
      <h4>TABEL PROJECT</h4>
     
     <a href="<?= base_url('project/tambah') ?>" class="btn btn-primary mb-3">Tambah Data</a>
     <!--menampilkan tabel dari database--> 
      <table class="table table-hover table-striped table-bordered">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Project</th>
            <th scope="col">Nama Client</th>
            <th scope="col">Ketua Project</th>
            <th scope="col">Tanggal Mulai</th>
            <th scope="col">Tanggal Berakhir</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>

        <tbody>
          <?php $id_p=1; foreach ($project as $row){ ?>
          <tr>
          <td><?= $id_p; ?></td>
          <td><?= $row->judul ?></td>
          <td><?= $row->client?></td>
          <td><?= $row->ketua ?></td>
          <td><?= $row->start ?></td>
          <td><?= $row->end ?></td>
          <td>
            <a href="<?= base_url('project/edit/').$row->id_p; ?>" class="btn btn-warning btn-sm">Update</a>
            <a href="<?= base_url('project/hapus/').$row->id_p; ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
          </tr>
          <?php $id_p++;} ?>
        </tbody>

      </table>
    </div>
  </div>
</div>