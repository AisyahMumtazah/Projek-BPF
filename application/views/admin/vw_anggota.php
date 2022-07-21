<div class="container">
    <br class="my-2" />
    <div class="card">
        <h5 class="card-header">Anggota</h5>
        <div class="table-responsive text-nowrap">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>No Telepon</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <?php $i=1; ?>
                    <?php foreach ($anggota as $us):?>
                    <tr>
                        <td><strong><?=$i;?></strong></td>
                        <td><?=$us['id_anggota'];?></td>
                        <td><?=$us['username'];?></td>
                        <td><?=$us['nama_anggota'];?></td>
                        <td><?=$us['email_anggota'];?></td>
                        <td><?=$us['no_telp_anggota'];?></td>
                        <td>
                        <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?=base_url('Anggota/edit').$us['id_anggota'];?>"><i class="bx bx-edit-alt me-1"></i>
                                        Edit</a>
                                    <a class="dropdown-item" href="<?=base_url('Anggota/hapus').$us['id_anggota'];?>"><i class="bx bx-trash me-1"></i>
                                        Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <?php $i++;?>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>