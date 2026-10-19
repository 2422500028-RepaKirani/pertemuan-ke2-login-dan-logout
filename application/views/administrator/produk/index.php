<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Produk</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('admin/dashboard') ?>">Home</a></li>
            <li class="breadcrumb-item active">Produk</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            
            <!-- Card Header dengan Tombol Tambah -->
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-table mr-1"></i>
                Semua Produk
              </h3>
              <div class="card-tools">
                <a href="<?= base_url('admin/produk/tambah') ?>" class="btn btn-primary btn-sm">
                  <i class="fas fa-plus"></i> Tambah Produk
                </a>
              </div>
            </div>

            <!-- Card Body dengan Tabel -->
            <div class="card-body">

              <?php if ($this->session->flashdata('message')) : ?>
                <?= $this->session->flashdata('message') ?>
              <?php endif ?>

              <table class="table table-bordered table-striped table-hover">
                <thead>
                  <tr>
                    <th width="50" class="text-center">No</th>
                    <th>Kategori</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th width="80" class="text-center">Stok</th>
                    <th>Deskripsi</th>
                    <th width="150" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  $no = 1;
                  if (!empty($list_produk)) :
                    foreach ($list_produk as $produk) : 
                  ?>
                  <tr>
                    <td class="text-center"><?= $no++ ?></td>
                    <td><?= $produk['pd_nama'] ?></td>
                    <td><?= $produk['kt_nama'] ?></td>
                    <td>Rp. <?= number_format($produk['harga'], 0, ',', '.') ?></td>
                    <td class="text-center"><?= $produk['stok'] ?></td>
                    <td><?= $produk['deskripsi'] ?></td>
                    <td class="text-center">
                      <a href="<?= base_url('admin/produk/ubah/' . $produk['id_produk']) ?>" class="btn btn-success btn-sm">
                        <i class="fas fa-edit"></i> Ubah
                      </a>
                      <a href="<?= base_url('admin/produk/hapus/' . $produk['id_produk']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus produk ini?');">
                        <i class="fas fa-trash"></i> Hapus
                      </a>
                    </td>
                  </tr>
                  <?php 
                    endforeach;
                  else :
                  ?>
                  <tr>
                    <td colspan="7" class="text-center text-muted">
                      Belum ada data produk. Silakan tambah produk baru.
                    </td>
                  </tr>
                  <?php endif; ?>
                </tbody>
              </table>

            </div>
            <!-- /.card-body -->

          </div>
          <!-- /.card -->
        </div>
        <!-- /.col-lg-12 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->