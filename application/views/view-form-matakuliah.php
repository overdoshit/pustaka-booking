<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Input Matakuliah</title>
	<style>
        .error {
            color: red;
			font-size: 12px;
			text-align: left;
        }
    </style>
</head>

<body>
	<center>
		<form action="<?= base_url('Matakuliah/cetak'); ?>" method="post">
			<table>
				<tr>
					<th colspan="3">Form Input Data Mata Kuliah</th>
				</tr>
				<tr>
					<td colspan="3">
						<hr/>
					</td>
				</tr>
				<tr>
					<th>Kode MTK</th>
					<th>:</th>
					<td>
						<input type="text" name="kode" id="kode" value="<?= set_value('kode'); ?>"/>
					</td>
				</tr>
				<tr>
					<td colspan="2"></td>
					<td>
						<?= form_error('kode', '<div class="error">', '</div>'); ?>
					</td>
				</tr>
				<tr>
					<th>Nama MTK</th>
					<th>:</th>
					<td>
						<input type="text" name="nama" id="nama" value="<?= set_value('nama'); ?>"/>
					</td>
				</tr>
				<tr>
					<td colspan="2"></td>
					<td>
						<?= form_error('nama', '<div class="error">', '</div>'); ?>
					</td>
				</tr>
				<tr>
					<th>SKS</th>
					<th>:</th>
					<td>
						<select name="sks" id="sks">
                            <option value=>Pilih SKS</option>
                            <option value=1 <?= set_select('sks', 1); ?>>1</option>
                            <option value=2 <?= set_select('sks', 2); ?>>2</option>
                            <option value=3 <?= set_select('sks', 3); ?>>3</option>
                            <option value=4 <?= set_select('sks', 4); ?>>4</option>
                        </select>
					</td>
				</tr>
				<tr>
					<td colspan="2"></td>
					<td>
						<?= form_error('sks', '<div class="error">', '</div>'); ?>
					</td>
				</tr>
				<tr>
					<th>Status MTK</th>
					<th>:</th>
					<td>
						<input type="radio" name="status" id="status" value="Unggulan" <?= set_radio('status', 'Unggulan'); ?>>Unggulan
						<input type="radio" name="status" id="status" value="Tidak Unggulan" <?= set_radio('status', 'Tidak Unggulan'); ?>>Tidak Unggulan
					</td>
				</tr>
				<tr>
					<td colspan="2"></td>
					<td>
						<?= form_error('status', '<div class="error">', '</div>'); ?>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<button type="submit" value="submit">Submit</button>
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>

</html>
