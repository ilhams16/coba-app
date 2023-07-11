@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded">    
        @auth
        <h3 class="mx-auto text-center">{{auth()->user()->payment_confirmation}} melakukan pembayaran</h3>
        @endauth

        @guest
        <h3 class="mx-auto text-center">Anda Belum Login</h3>
        @endguest
        <div class="container border border-2 rounded-4 p-4">
            <h1 class="mx-auto text-center">JENIS-JENIS PAJAK DAERAH</h1>
          <div class="row">
            <div class="col-sm-4 text-center"><h5>Pajak</h5></div>
            <div class="col-sm-8 text-center"><h5>Definisi</h5></div>
          </div>
          <div class="row align-items-center">
          <div class="d-flex align-items-start my-3 col">
            <div class="nav flex-column p-3 nav-pills mx-5 border border-2 rounded-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <button class="nav-link active" id="v-pills-hotel-tab" data-bs-toggle="pill" data-bs-target="#v-pills-hotel" type="button" role="tab" aria-controls="v-pills-hotel" aria-selected="true">Hotel</button>
              <button class="nav-link" id="v-pills-restoran-tab" data-bs-toggle="pill" data-bs-target="#v-pills-restoran" type="button" role="tab" aria-controls="v-pills-restoran" aria-selected="false">Restoran</button>
              <button class="nav-link" id="v-pills-hiburan-tab" data-bs-toggle="pill" data-bs-target="#v-pills-hiburan" type="button" role="tab" aria-controls="v-pills-hiburan" aria-selected="false">Hiburan</button>
              <button class="nav-link" id="v-pills-reklame-tab" data-bs-toggle="pill" data-bs-target="#v-pills-reklame" type="button" role="tab" aria-controls="v-pills-reklame" aria-selected="false">Reklame</button>
              <button class="nav-link" id="v-pills-penerangan-tab" data-bs-toggle="pill" data-bs-target="#v-pills-penerangan" type="button" role="tab" aria-controls="v-pills-penerangan" aria-selected="false">Penerangan Jalan</button>
              <button class="nav-link" id="v-pills-mineral-tab" data-bs-toggle="pill" data-bs-target="#v-pills-mineral" type="button" role="tab" aria-controls="v-pills-mineral" aria-selected="false">Mineral Bukan Logam</button>
              <button class="nav-link" id="v-pills-parkir-tab" data-bs-toggle="pill" data-bs-target="#v-pills-parkir" type="button" role="tab" aria-controls="v-pills-parkir" aria-selected="false">Parkir</button>
              <button class="nav-link" id="v-pills-air-tab" data-bs-toggle="pill" data-bs-target="#v-pills-air" type="button" role="tab" aria-controls="v-pills-air" aria-selected="false">Air Tanah</button>
              <button class="nav-link" id="v-pills-bphtb-tab" data-bs-toggle="pill" data-bs-target="#v-pills-bphtb" type="button" role="tab" aria-controls="v-pills-bphtb" aria-selected="false">BPHTB</button>
              </div>
          <div class="tab-content col" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-hotel" role="tabpanel" aria-labelledby="v-pills-hotel-tab">
              <div class="m-2 text-start">
                <p>Pajak Hotel adalah pajak yang dipungut atas pelayanan yang disediakan oleh hotel dengan pembayaran, termasuk jasa penunjang sebagai kelengkapan hotel yang sifatnya memberikan kemudahan dan kenyamanan termasuk fasilitas olahraga dan hiburan.
                <br>Jasa penunjang sebagaimana dimaksud fasilitas telepon, faxsimile, teleks, internet, fotokopi, pelayanan cuci, seterika, transportasi, dan fasilitas sejenis lainnya yang disediakan atau dikelola Hotel.</p>
                <ol>
                  <li>Jasa tempat tinggal asrama yang diselenggarakan oleh Pemerintah, Pemerintah Provinsi atau Pemerintah Daerah</li>
                  <li>Jasa sewa apartemen, kondominium</li>
                  <li>Jasa tempat tinggal di pusat pendidikan atau kegiatan keagamaan</li>
                  <li>Jasa tempat tinggal di rumah sakit, asrama perawat, panti jompo, panti asuhan, dan panti sosial lainnya yang sejenis</li>
                  <li>Jasa biro perjalanan atau perjalanan wisata yang diselenggarakan oleh hotel yang dapat dimanfaatkan oleh umum</li>
                </ol>
                </div>
                </div>
            <div class="tab-pane fade" id="v-pills-restoran" role="tabpanel" aria-labelledby="v-pills-restoran-tab">
              <div class="m-2 text-start">
                <p> Pajak Restoran adalah pajak yang dipungut sebagai pembayaran atas jasa pelayanan yang disediakan oleh restoran. Pelayanan yang dimaksud meliputi pelayanan penjualan makanan dan/ atau minuman yang dikonsumsi oleh pembeli, baik di konsumsi di tempat pelayanan maupun ditempat lain.
                  <br>Tidak termasuk obyek Pajak adalah pelayanan yang disediakan oleh Restoran yang nilai penjualannya tidak lebih dari Rp. 5.000.000,- (lima juta rupiah) per bulan.</p>
                </div>
              </div>
            <div class="tab-pane fade" id="v-pills-hiburan" role="tabpanel" aria-labelledby="v-pills-hiburan-tab">
              <div class="m-2 text-start">
                <p>Pajak Hiburan adalah pajak yang dipungut atas jasa penyelenggaraan hiburan di daerah dengan dipungut bayaran. Obyek Pajak Hiburan yang dimaksud :</p>
                <ol>
                  <li>Tontonan film</li>
                  <li>Pagelaran kesenian, musik, dan tari</li>
                  <li>Kontes kecantikan, pagelaran busana, binaraga dan sejenisnya</li>
                  <li>Pameran</li>
                  <li>Diskotek, karaoke, dan klab malam</li>
                  <li>Sirkus, akrobat, sulap</li>
                  <li>Permainan bilyar, golf, futsal dan bowling</li>
                  <li>Pacuan kuda, kendaraan bermotor dan permainan ketangkasan</li>
                  <li>Panti mandi uap/ <span class='fst-italic'>spa</span>, refleksi dan pusat kebugaran atau <span class='fst-italic'>fitsness center</span>, dan</li>
                  <li>Pertandingan olah raga</li>
                </ol>
                <p>Yang tidak termasuk pajak hiburan adalah penyelenggaraan hiburan yang tidak dipungut bayaran seperti hiburan yang diselenggarakan dalam rangka pernikahan, upacara adat dan kegiatan keagamaan.</p>
                </div>
              </div>
            <div class="tab-pane fade" id="v-pills-reklame" role="tabpanel" aria-labelledby="v-pills-reklame-tab">
              <div class="m-2 text-start">
                <p>Pajak Reklame adalah pajak yang dipungut atas penyelenggaraan reklame. Obyek Pajak Reklame meliputi :</p>
                <ol>
                  <li>Reklame papan / <span class='fst-italic'>shopsign</span></li>
                  <li>Reklame <span class='fst-italic'>billboard</span></li>
                  <li>Reklame <span class='fst-italic'>videotron / megatron</span></li>
                  <li>Reklame kain/ spanduk dan sejenisnya</li>
                  <li>Reklame baliho</li>
                  <li>Reklame melekat, stiker/ poster</li>
                  <li>Reklame selebaran</li>
                  <li>Reklame berjalan, termasuk pada kendaraan</li>
                  <li>Reklame udara</li>
                  <li>Reklame apung, dan</li>
                  <li>Reklame film/ slide</li>
                </ol>
                </div>
              </div>
            <div class="tab-pane fade" id="v-pills-penerangan" role="tabpanel" aria-labelledby="v-pills-penerangan-tab">
              <div class='m-2 text-start'>
              <p>Pajak Penerangan Jalan dipungut Pajak sebagai pembayaran atas setiap penggunaan tenaga listrik baik yang dihasilkan sendiri maupun yang diperoleh dari sumber lain.</p>
                </div>
              </div>
            <div class="tab-pane fade" id="v-pills-mineral" role="tabpanel" aria-labelledby="v-pills-mineral-tab">
              <div class="m-2 text-start">
                <p>Pajak Mineral Bukan Logam dan Batuan dipungut Pajak sebagai pembayaran atas kegiatan pengambilan mineral bukan logam dan batuan.</p>
                <ol>
                  <li>Bentonit</li>
                  <li>Kaolin</li>
                  <li>Andesit/ basalt(batu gunung, batu kali)</li>
                  <li>Kerikil sungai</li>
                  <li>Pasir batu(sirtu)</li>
                  <li>Pasir urug</li>
                  <li>Tanah liat/ tanah lempung</li>
                  <li>Tanah urug</li>
                  <li>Tanah pilihan</li>
                  <li>Tanah gambut</li>
                  <li>Batu gamping/ batu kapur/ kalsit, dan</li>
                  <li>Tras</li>
                </ol>
                </div>
              </div>
            <div class="tab-pane fade" id="v-pills-parkir" role="tabpanel" aria-labelledby="v-pills-parkir-tab">
              <div class="m-2 text-start">
                <p>Pajak Parkir adalah pajak yang dipungut atas penyelenggaraan tempat parkir. Yang tidak termasuk obyek Pajak Parkir adalah :</p>
                <ol>
                  <li>Penyelenggaraan tempat parkir oleh Pemerintah, Pemerintah Provinsi dan Pemerintah Daerah</li>
                  <li>Penyelenggaraan tempat parkir oleh perkantoran yang hanya digunakan untuk karyawannya sendiri, dan</li>
                  <li>Penyelenggaraan tempat parkir oleh kedutaan, konsulat, dan perwakilan negara asing dengan asas timbal balik.</li>
                </ol>
                </div>
              </div>
            <div class="tab-pane fade" id="v-pills-air" role="tabpanel" aria-labelledby="v-pills-air-tab">
              <div class="m-2 text-start">
                <p>Pajak Air Tanah adalah pajak yang dipungut atas pengambilan dan/atau pemanfaatan air tanah.
                  <br>Dikecualikan dari obyek Pajak Air Tanah adalah :</p>
                <ol>
                  <li>Pengambilan dan/ atau pemanfaatan air tanah untuk keperluan dasar rumah tangga, pengairan pertanian dan perikanan rakyat, serta peribadatan, dan</li>
                  <li>Pengambilan dan/ atau pemanfaatan air tanah untuk keperluan sosial lainnya.</li>
                </ol>
                </div>
              </div>
            <div class="tab-pane fade" id="v-pills-bphtb" role="tabpanel" aria-labelledby="v-pills-bphtb-tab">
              <div class="m-2 text-start">
                <p>Bea Perolehan Hak Atas Tanah dan / atau Bangunan (BPHTB) adalah Pajak atas perolehan Hak Atas Tanah dan/atau Bangunan. 
                  <br>Perolehan hak atas tanah dan/atau bangunan meliputi :</p>
                <ol>
                  <li>Pemindahan hak karena:
                    <ul>
                      <li>Jual beli,</li>
                      <li>Tukar menukar,</li>
                      <li>Hibah,</li>
                      <li>Hibah wasiat,</li>
                      <li>Waris,</li>
                      <li>Pemasukan dalam perseroan atau badan hukum lain,</li>
                      <li>Pemisahan hak yang mengakibatkan peralihan,</li>
                      <li>Penunjukan pembeli dalam lelang,</li>
                      <li>Pelaksanaan putusan hakim yang mempunyai kekuatan hukum,</li>
                      <li>Penggabungan usaha,</li>
                      <li>Peleburan usaha,</li>
                      <li>Pemekaran usaha, atau</li>
                      <li>Hadiah,</li>
                    </ul>
                  </li>
                  <li>Pemberian hak baru karena:
                    <ul>
                      <li>Kelanjutan pelepasan hak, atau</li>
                      <li>Diluar pelepasan hak.</li>
                    </ul>
                  </li>
                </ol>
                </div>
              </div>
          </div>
      </div>
    
@endsection