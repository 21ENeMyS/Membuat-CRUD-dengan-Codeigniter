<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container">
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Penerbit</th>
        <th>Penerbit</th>
        <th>aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Naruto</td>
        <td>Mashashi Kishomoto</td>
        <td>Grand media</td>
        <td>
          <button type="submit" name="hapus" id="hapus" class="tmbl-hapus">Hapus</button>
          <button type="submit" name="edit" id="edit" class="tmbl-edit">Edit</button>
          <button type="submit" name="detail" id="detail" class="tmbl-detail">Detail</button>
      </tr>
    </tbody>
  </table>
</div>


<?= $this->endSection(); ?>