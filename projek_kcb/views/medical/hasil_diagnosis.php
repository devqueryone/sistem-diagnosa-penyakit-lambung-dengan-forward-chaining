
        <div class="container">
          <div class="card shadow mb-4">
            <div class="card-header">
            	<div class="row">
            		<div class="col">
            			<h5 class="m-0 font-weight-bold text-danger">Hasil Diagnosa</h5>
            		</div>
            		<div class="col text-right">
            			<a href="<?= BASEURL; ?>medical/diagnosis" class="btn btn-outline-danger border-0 rounded-0"><small><i class="fas fa-fw fa-undo"></i> Kembali</small></a>
            		</div>
            	</div>
            </div>
            <div class="card-body">
                <table class="table" width="100%">
					<thead class="bg-danger font-weight-bold text-white">
						<tr>
							<th class="col-sm-2">NAMA PENYAKIT</th>
							<th class="col-sm-10 text-center">SOLUSI</th>
						</tr>
					</thead>
                  	<?php foreach ($data['hasil'] as $key) : ?>
					<tbody>
						<tr>
							<td class="text-danger font-weight-bold">
								<?= $key['penyakit']; ?>
							</td>
							<td><?= $key['solusi']; ?></td>
						</tr>
					</tbody>
              		<?php endforeach; ?>
                </table>
            </div>
          </div>
        </div>
	
