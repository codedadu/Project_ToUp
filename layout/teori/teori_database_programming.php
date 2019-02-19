    <td colspan=8 style="background-color: white;"></td>
    <tr>
        <th style="text-transform: uppercase;">No</th>
        <th style="text-transform: uppercase;">Mata Pelajaran</th>
        <th style="text-transform: uppercase;">Kategori</th>
        <th style="text-transform: uppercase;" class="penilaian" colspan=5>Penilaian</th>
    </tr>
    <tr>
        <td class="upfortitle" style="text-align: center; background-color: #FF9800; color: white;"><b>2</b></td>

        <td class="upfortitle" style="background-color: #FF9800; color: white;"><b style="text-transform: uppercase;">Pemrograman Database</b></td>
        <td class="upfortitle" style="background-color: #FF9800; color: white;"><b style="text-transform: uppercase;">Test Teori</b></td>
        <td class="leftbor" id="list" style="text-transform: uppercase; background-color: #FF9800; color: white;"><b>No</b></td>
        <td class="upfortitle" style="background-color: #FF9800; color: white;"><b style="text-transform: uppercase;">Berdasarkan</b></td>
        <td class="centerpos" style="background-color: #FF9800; color: white;"><b style="text-transform: uppercase;">Soal</b></td>
        <td class="centerpos" colspan=2 style="background-color: #FF9800; color: white;"><b style="text-transform: uppercase;">Nilai/Soal</b></td>
    </tr>
        <td colspan="3"></td>
        <td class="leftbor"  id="list"> 1 </td>
        <td class="upfortitle">Pilihan Ganda (PG)</td>
        <td class="centerpos"> <?php echo $pg_soal_db ?> </td>
        <td class="centerpos" colspan=2> <?php echo $nilai_pg_db ?> </td>
    </tr>
    <tr>
        <td colspan="3"></td>
        <td class="leftbor"  id="list"> 2 </td>
        <td class="upfortitle">Essay</td>
        <td class="centerpos"> <?php echo $essay_soal_db ?> </td>
        <td class="centerpos" colspan=2> <?php echo $nilai_essay_db ?> </td>
    </tr>
    <tr>
        <td colspan="3"></td>
        <td class="leftbor"  id="list"> 3 </td>
        <td class="upfortitle">Total</td>
        <td class="centerpos"> <?php echo $totalsoal_teori_db ?> </td>
        <td class="centerpos" title="Total didapat dari: Nilai Essay * 8 + Nilai PG" colspan=2> <?php echo $totalnilai_teori_db ?>%</td>
    </tr>
    <td colspan=8 style="background-color: white;"></td>