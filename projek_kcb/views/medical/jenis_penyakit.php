
        <div class="container">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h5 class="m-0 font-weight-bold text-danger">Data Jenis Penyakit</h5>
            </div>
            <div class="card-body">
                <table class="table" width="100%">
					<thead class="bg-danger font-weight-bold text-white">
						<tr>
							<th class="col-sm-1">NO</th>
							<th class="col-sm-2">NAMA PENYAKIT</th>
							<th class="col-sm-10 text-center">INFO</th>
						</tr>
					</thead>
					<?php $i=1; ?>
                  	<?php foreach ($data['penyakit'] as $key) : ?>
					<tbody>
						<tr>
							<td><?= $i; ?></td>
							<td><?= $key['penyakit']; ?></td>
							<td><?= $key['info']; ?></td>
						</tr>
					</tbody>
					<?php $i++; ?>
              		<?php endforeach; ?>
                </table>
            </div>
          </div>
        </div>