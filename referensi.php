
<?php
include("function/parsing.php");



function dateFormat($date){
  $timestamp = strtotime($date);
  
  $formatter = new IntlDateFormatter('id_ID', IntlDateFormatter::FULL, IntlDateFormatter::NONE);
  return $formatter->format($timestamp);
}


$url_asset = "https://undangan.jadimudah.id/";
$root_path = "/tema/20/";

// bd($pengantin->json->gallery_video);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <script>
    <?php if (isset($root_path)) : ?>
        var root_path = <?= json_encode($root_path) ?>;
    <?php endif; ?>
    <?php if (isset($pengantin)) : ?>
        var pengantin = <?= json_encode($pengantin) ?>;
    <?php endif; ?>
    <?php if (isset($tamu)) : ?>
        var tamu = <?= json_encode($tamu) ?>;
    <?php endif; ?>
    <?php if (isset($user)) : ?>
        var user = <?= json_encode($user) ?>;
    <?php endif; ?>
  </script>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title><?= $pengantin->json->nama_panggilan_pengantin_wanita ?> & <?= $pengantin->json->nama_panggilan_pengantin_pria ?> - Undangan Digital by Jadimudah.id</title>
  <meta name="title" content="<?= $pengantin->json->nama_pengantin_wanita ?> & <?= $pengantin->json->nama_pengantin_pria ?> - Undangan Digital by Jadimudah.id" />
  <meta name="description" content="Dengan penuh rasa syukur dan kebahagiaan, kami mengundang Bapak/Ibu/Saudara/i untuk hadir dan memberikan doa restu pada acara pernikahan kami." />

  <!-- Open Graph / Facebook -->

  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://jadimudah.id/" />
  <meta property="og:title" content="<?= $pengantin->json->nama_panggilan_pengantin_wanita ?> & <?= $pengantin->json->nama_panggilan_pengantin_pria ?> - Undangan Digital by Jadimudah.id" />
  <meta property="og:description" content="Dengan penuh rasa syukur dan kebahagiaan, kami mengundang Bapak/Ibu/Saudara/i untuk hadir dan memberikan doa restu pada acara pernikahan kami." />
  <meta property="og:image" content="<?= rep_url($pengantin->json->foto_sampul_depan) ?>" />

  <!-- <link rel="icon" type="image/x-icon" href="<?= $root_path ?>assets/img/favicon.ico" /> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="<?= $root_path ?>assets/css/aos.css" />
  <link rel="stylesheet" href="<?= $root_path ?>assets/css/splide.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="<?= $root_path ?>assets/css/loader.css" />
  <link rel="stylesheet" href="<?= $root_path ?>assets/css/style.css?v=8.3" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="/assets/css/player.css">

  <style>
    .active>.page-link,
    .page-link.active {
      background-color: #617BA1 !important;
      border-color: #617BA1;
    }

    .cover-large {
      background-image: url('<?= rep_url($pengantin->json->foto_sampul_depan) ?>') !important;
    }
  </style>
</head>

<body class="mfahmialif no-scroll">
  <!-- Wedding Loader -->
  <div id="loader">
    <div class="heart-loader"></div>
    <p id="progress-text">Preparing the big day... 0%</p>
  </div>


  <section class="cover-large" data-aos="fade-down"></section>

  <section class="main" id="main">
    <video class="background-video" autoplay muted loop playsinline >
      <source src="<?= $root_path ?>assets/img/video/bg-1.mp4" type="video/mp4" />
      Your browser does not support the video tag.
    </video>
    <section id="welcome" data-aos="fade-down">
      <div class="custom-container welcome-content">
        <img loading="lazy"  src="<?= rep_url($pengantin->json->foto_sampul_depan) ?>" class="img-couple welcome frame-rounded mb-3" alt="" />
        <div>
          <h2 class="header-2 font-body text-light">THE WEDDING OF</h2>
          <h1 class="header-1 font-heading text-light"><?= $pengantin->json->nama_panggilan_pengantin_wanita ?><br />&<br /><?= $pengantin->json->nama_panggilan_pengantin_pria ?></h1>
          <p class="text-body-2" data-aos="fade-down"><?= $pengantin->json->hashtag_acara ?></p>
        </div>

        <hr style="opacity: 1; width: 80%;color:#eae2d5" />

        <div>
          <h2 class="header-2 font-body text-light">Kepada Yth.</h2>
          <h1 class="header-2 font-body text-light"><?= $tamu->nama ?? "Tamu Undangan" ?></h1>
          <button class="btn btn-invites mx-auto d-block mt-4" style="margin-top: 10px !important;"
            onclick="openInvites()">
            Buka Undangan
          </button>
        </div>
      </div>
    </section>

    <section id="content-wedding">
      <section id="header" class="custom-container" data-aos="fade-down">
        <video class="opening-video" muted playsinline disablePictureInPicture
          controlsList="nodownload nofullscreen noremoteplayback">
          <source src="<?= $root_path ?>assets/img/video/1.mp4" type="video/mp4" />
          Your browser does not support the video tag.
        </video>
        <div class="header-2 font-body text-light hidden-element">
          THE WEDDING OF
        </div>
        <div class="font-heading hidden-element"><?= $pengantin->json->nama_panggilan_pengantin_wanita ?></div>
        <div class="font-heading-latin-1 hidden-element">and</div>
        <div class="font-heading hidden-element"><?= $pengantin->json->nama_panggilan_pengantin_pria ?></div>
        <div class="font-heading-date hidden-element"><?= date('d.m.y', strtotime($pengantin->json->tanggal_akad)) ?></div>
        <dotlottie-player class="hidden-element" src="<?= $root_path ?>assets/img/lottie/1.lottie" background="transparent" speed="1"
          style="width: 50px; height: 50px;" loop autoplay></dotlottie-player>
      </section>

       <section id="quote" class="custom-container" data-aos="fade-down">
        <div class="quote-container">
          <div class="text-body-2">
            "Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan
            pasangan-pasangan untukmu dari jenismu sendiri, agar kamu
            cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di
            antaramu rasa kasih dan sayang."
          </div>
          <div class="text-body-2">(QS. Ar-Rum: 21)</div>
        </div>
      </section>

      <section id="wedding-of" class="custom-container" data-aos="fade-down">
        <div class="salam-container">
          <img loading="lazy"  src="<?= $root_path ?>assets/img/bismillahw.png" class="mt-3" style="width: 56%" alt="Bismillah">
          <p class="text-body-1 mt-3">Assalamu'alaikum Warahmatullahi Wabarakaatuh</p>
          <p class="text-body-4">Dengan memohon rahmat dan ridho Allah Subhanahu Wata'ala</p>
          <p class="text-body-4">Kami bermaksud mengundang Bapak/Ibu/Saudara/i dalam acara pernikahan putra-putri kami</p>
        </div>

        <h1 class="font-heading mt-3">The Wedding Of</h1>

        <div class="couple girl mt-3" data-aos="fade-left">
          <img loading="lazy"  src="<?= rep_url($pengantin->json->foto_pengantin_wanita) ?>" style="height: 500px;width: 300px;" class="img-couple frame-rounded" alt="" />
          
          <div class="couple-details mt-3">
            <div class="font-heading-latin-2 text-center"><?= $pengantin->json->nama_panggilan_pengantin_wanita ?></div>
            <p class="text-body-1"><?= $pengantin->json->nama_pengantin_wanita ?></p>
            <p class="text-body-4">Putri dari<br>Bapak <?= $pengantin->json->nama_bapak_pengantin_wanita ?><br>Ibu <?= $pengantin->json->nama_ibu_pengantin_wanita ?></p>
            <div class="invites-icon" onclick="window.location=`https://instagram.com/<?= $pengantin->json->instagram_pengantin_wanita ?>`">
              <i class="bi bi-instagram"></i>
            </div>
          </div>
        </div>

        <img loading="lazy"  src="<?= $root_path ?>assets/img/hr.webp" class="my-5 hr-1" alt="" />

        <div class="couple man mt-3" data-aos="fade-left">
          <img loading="lazy"  src="<?= rep_url($pengantin->json->foto_pengantin_pria) ?>" style="height: 500px;width: 300px;" class="img-couple frame-rounded" alt="" />

          <div class="couple-details mt-3">
            <div class="font-heading-latin-2 text-center"><?= $pengantin->json->nama_panggilan_pengantin_pria ?></div>
            <p class="text-body-1"><?= $pengantin->json->nama_pengantin_pria ?></p>
            <p class="text-body-4">Putra dari<br>Bapak <?= $pengantin->json->nama_bapak_pengantin_pria ?><br>Ibu <?= $pengantin->json->nama_ibu_pengantin_pria ?></p>
            <div class="invites-icon" onclick="window.location=`https://instagram.com/<?= $pengantin->json->instagram_pengantin_pria ?>`">
              <i class="bi bi-instagram"></i>
            </div>
          </div>
        </div>        
      </section>

      <section id="countdown" class="custom-container" data-aos="fade-down">
        <img loading="lazy"  src="<?= $root_path ?>assets/img/countdown-bg.png" class="countdown-bg" alt="" />
        <div class="ornament-top" style="width: 100%">
          <img loading="lazy"  src="<?= $root_path ?>assets/img/countdown-header.png" alt="" />
        </div>
        <div class="frame-container" style="top: 47%">
          <img loading="lazy"  src="<?= rep_url($pengantin->json->foto_sampul_depan) ?>" class="countdown-frame" alt="" />
          <div class="item-container mt-2">
            <div class="item text-center">
              <span class="number" id="count-day">00</span>
              <span class="desc">Hari</span>
            </div>
            <div class="item text-center">
              <span class="number" id="count-hour">00</span>
              <span class="desc">Jam</span>
            </div>
            <div class="item text-center">
              <span class="number" id="count-minute">00</span>
              <span class="desc">Menit</span>
            </div>
            <div class="item text-center">
              <span class="number" id="count-second">00</span>
              <span class="desc">Detik</span>
            </div>
          </div>

          <button id="btn-add-calendar" class="btn btn-invites mt-4">
            Add to Calendar
            <i class="bi bi-calendar" style="margin-left: 4px"></i>
          </button>

          <p class="text-body-4 mt-4">We look forward to celebrating this joyous occasion with you, surrounded by love,
            laughter, and cherished memories.</p>
        </div>
        <div class="ornament-fl-bottom">
          <img loading="lazy"  src="<?= $root_path ?>assets/img/countdown-footer.webp" alt="" />
        </div>
        <!-- <button class="btn-invites mt-3">Add to Calendar</button> -->
      </section>

      <section id="wedding-day" class="custom-container" data-aos="fade-down">
        <div class="wd-container frame-rounded" data-aos="fade-down">
          <div class="custom-container wd-content">
            <h1 class="font-heading">Akad</h1>
            <hr class="hr-2">
            <div class="text-body-5"><?= dateFormat($pengantin->json->tanggal_akad) ?></div>
            <div class="text-body-5 mt-2"><?= $pengantin->json->waktu_akad ?> - <?= $pengantin->json->waktu_akad_selesai ?></div>
            <div class="divider mt-3">
              <i class="bi bi-building"></i>
            </div>
            <div class="text-body-1 mt-3"><?= $pengantin->json->patokan_akad ?></div>
            <div class="text-body-5 mt-2">
              <?= $pengantin->json->alamat_akad ?>
            </div>
            <button class="btn-invites my-3" onclick="window.location=`<?= $pengantin->json->maps_akad ?>`"><i class="bi bi-geo-alt"></i> View Maps</button>
          </div>
        </div>

        <br />
        <div class="wd-container frame-rounded" data-aos="fade-down">
          <div class="custom-container wd-content">
            <h1 class="font-heading">Resepsi</h1>
            <hr class="hr-2">
            <div class="text-body-5"><?= dateFormat($pengantin->json->tanggal_resepsi) ?></div>
            <div class="text-body-5 mt-2"><?= $pengantin->json->waktu_resepsi ?> - <?= $pengantin->json->waktu_resepsi_selesai ?></div>
            <div class="divider mt-3">
              <i class="bi bi-building"></i>
            </div>
            <div class="text-body-1 mt-3"><?= $pengantin->json->patokan_resepsi ?></div>
            <div class="text-body-5 mt-2">
              <?= $pengantin->json->alamat_resepsi ?>
            </div>
            <button class="btn-invites my-3" onclick="window.location=`<?= $pengantin->json->maps_resepsi ?>`"><i class="bi bi-geo-alt"></i> View Maps</button>
          </div>
        </div>

      </section>

      <?php if (($pengantin->json->fitur_ourstory ?? "0") === "1") : ?>
      <section id="our-story" class="d-flex justify-content-center flex-column align-items-center position-relative">
        <h1>Our Story</h1>
        <br />
        <div class="splide our-story" id="splide-our-story" aria-label="Splide Basic HTML Example">
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide our-story">
                <a href="<?= rep_url($pengantin->json->foto_ourstory_1) ?>" data-fancybox="our-story" data-caption="<?= $pengantin->json->judul_ourstory_1 ?>">
                  <img  data-splide-lazy="<?= rep_url($pengantin->json->foto_ourstory_1) ?>" alt="" />
                </a>
                <div class="caption">
                  <div class="title"><?= html_entity_decode($pengantin->json->judul_ourstory_1) ?></div>
                  <div class="body">
                    <?= html_entity_decode($pengantin->json->isi_ourstory_1) ?>
                  </div>
                </div>
              </li>
              
              <li class="splide__slide our-story">
                <a href="<?= rep_url($pengantin->json->foto_ourstory_2) ?>" data-fancybox="our-story" data-caption="<?= $pengantin->json->judul_ourstory_2 ?>">
                  <img data-splide-lazy="<?= rep_url($pengantin->json->foto_ourstory_2) ?>" alt="" />
                </a>
                <div class="caption">
                  <div class="title"><?= $pengantin->json->judul_ourstory_2 ?></div>
                  <div class="body">
                    <?= html_entity_decode($pengantin->json->isi_ourstory_2) ?>
                  </div>
                </div>
              </li>
              
              <li class="splide__slide our-story">
                <a href="<?= rep_url($pengantin->json->foto_ourstory_3) ?>" data-fancybox="our-story" data-caption="<?= $pengantin->json->judul_ourstory_3 ?>">
                  <img data-splide-lazy="<?= rep_url($pengantin->json->foto_ourstory_3) ?>" alt="" />
                </a>
                <div class="caption">
                  <div class="title"><?= $pengantin->json->judul_ourstory_3 ?></div>
                  <div class="body">
                    <?= html_entity_decode($pengantin->json->isi_ourstory_3) ?>
                  </div>
                </div>
              </li>
              <li class="splide__slide our-story">
                <a href="<?= rep_url($pengantin->json->foto_ourstory_4) ?>" data-fancybox="our-story" data-caption="<?= $pengantin->json->judul_ourstory_4 ?>">
                  <img data-splide-lazy="<?= rep_url($pengantin->json->foto_ourstory_4) ?>" alt="" />
                </a>
                <div class="caption">
                  <div class="title"><?= html_entity_decode($pengantin->json->judul_ourstory_4) ?></div>
                  <div class="body">
                    <?= html_entity_decode($pengantin->json->isi_ourstory_4) ?>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <?php endif; ?>
      <section id="gallery" data-aos="fade-down">
        <div id="photo"></div>
        <div class="bg-overlay-0"></div>
        <h1 class="font-heading pt-5">Gallery</h1>
        <br />

        <?php if ($pengantin->json->fitur_gallery_video === "1"){?>
          <div class="video mt-2">
            <iframe loading="lazy" width="100%" id="video-frame" class="video-content" height="100%" src="<?= $pengantin->json->gallery_video ?>" title="YouTube video player" frameborder="0" allowfullscreen>
            </iframe>
            
          </div>
        <?php }?>

        <div class="row g-1 m-0 mx-md-2 position-relative z-3 gallery-list">
          <div class="col-md-12 gallery-item">
            <div class="row g-2">
              
              <?php for ($i = 1; $i <= 12; $i++): ?>
                <?php
                      $galleryUrl = rep_url($pengantin->json->{"gallery_$i"});
                      $totalImages = 12; // Ganti ini sesuai jumlah gambar galeri kamu

                      if ($i <= 3 || $i > $totalImages - 3) {
                        // 3 pertama dan 3 terakhir
                        $colClass = 'col-4';
                      } else {
                        $patternIndex = ($i - 4) % 4; // mulai pola dari $i = 4
                        $colClass = ($patternIndex == 0 || $patternIndex == 3) ? 'col-4' : 'col-8';
                      }
                    ?>
                <div class="<?= $colClass ?> gallery-item">
                  <a href="<?= $galleryUrl ?>" data-fancybox="gallery" data-caption="#<?= $i ?>">
                    <img loading="lazy"  src="<?= $galleryUrl ?>" alt="Image Gallery" class="gallery-img" />
                  </a>
                </div>
              <?php endfor; ?>
            </div>
          </div>
        </div>

        <!-- <img loading="lazy"  src="<?= $root_path ?>assets/img/hr.webp" class="my-5 hr-1" alt="" /> -->
      </section>

      <!-- <section id="video" data-aos="fade-down">
        <div class="bg-overlay-0"></div>
        <h1 class="font-heading pt-5">Our Video</h1>
        <br />

        <div class="video-footer">
          <div class="animate">
            <img loading="lazy"  src="<?= $root_path ?>assets/img/animate/1.gif" alt="">
          </div>
        </div>
      </section> -->

      <section id="attendance">
        <div class="bg-overlay-5"></div>

        <?php if (isset($tamu)) : ?>
        <section id="reservation" class="custom-container" data-aos="fade-down">
          <h1>Reservation</h1>
          <div class="form-container">
            <div class="input-group">
              <span class="input-group-text">
                <i class="bi bi-person"></i>
              </span>
              <input type="text" id="name" name="name" value="<?=$tamu->nama ?? "Tamu Undangan"?>" class="form-control" placeholder="Name" disabled/>
            </div>
            <div class="input-group mt-1">
              <span class="input-group-text"> Kehadiran </span>
              <select class="form-select" id="status" name="status" aria-label="status">
                <option selected value="unknown">Apakah kamu akan hadir?</option>
                <option value="konfirmasi_hadir">Ya, aku akan hadir.</option>
                <option value="konfirmasi_tidak_hadir">Tidak, saya tidak bisa hadir.</option>
              </select>
            </div>
            <div id="group_jumlah_tamu" style="display:none;" class="input-group">
              <span class="input-group-text">
                Jumlah Tamu <!-- Bootstrap Icons -->
              </span>
              <input type="number" id="jumlah_tamu" name="jumlah_tamu" value="1" class="form-control" placeholder="Jumlah Tamu" required>
            </div>
            <div id="group_pesan" style="display:none;" class="input-group">
              <span class="input-group-text">
                Pesan <!-- Bootstrap Icons -->
              </span>
              <textarea type="text" id="pesan" name="pesan" class="form-control" placeholder="Ketikan Pesan" required></textarea>
            </div>
            <button id="btn-rsvp" type="submit" class="btn btn-invites w-100">
              Send <i class="bi bi-send"></i>
            </button>
          </div>
        </section>
        <?php endif; ?>

        <section id="message_rsvp" style="display:none;" class="custom-container" data-aos="fade-down">
          <h1>RSVP</h1>
          <div class="form-container">
            <p class="text-body-2">Kamu sudah mengisi RSVP Sebelumnya</p>
            <button id="btn-guestbook" class='btn-invites'><i class="fa-solid fa-file-pdf"></i> Download Guest-Book</button>
          </div>
        </section>

        <section id="comment" class="custom-container" data-aos="fade-down">
          <h1>Comment</h1>
          <!-- <div class="form-comment-container">
            <div class="input-group">
              <input type="text" name="comment" class="form-control" placeholder="Give your wish" />
            </div>
            <button type="submit" class="btn btn-invites w-100">
              Send <i class="bi bi-send"></i>
            </button>
          </div> -->
          <div id="comment_content" style="display:none;">
            <div id="list_comment" class="comment-container" >
              
            </div>
          </div>
          <div class="comment-container">
            <nav aria-label="Page navigation example" align="center">
              <ul id="comment-pagination" class="pagination justify-content-center" align="center">
              </ul>
            </nav>
          </div>
        </section>
      </section>

      <section id="wedding-gift" class="custom-container" data-aos="fade-down">
        <div class="wg-container">
          <h1 class="font-heading">Wedding Gift</h1>
          <div class="text-body-2" style="padding: 0 20px">
            Your blessing and coming to our wedding are enough for us.
            However, if you want to give a gift we provide a Digital Envelope
            to make it easier for you. thank you
          </div>
          <hr class="w-100" />
          <div class="form-container w-100">
            <ul class="nav nav-tabs flex justify-content-center" id="wg-nav-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bank" type="button"
                  role="tab" aria-controls="home" aria-selected="true">
                  E-Angpao
                </button>
              </li>
              <!-- <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button"
                  role="tab" aria-controls="profile" aria-selected="false">
                  Gift Registry
                </button>
              </li> -->
            </ul>
            <div class="tab-content w-100" id="wg-tab">
              <div class="tab-pane fade show active" id="bank" role="tabpanel" aria-labelledby="home-tab">
                <div class="reservation-status w-100">
                  <div class="text-body-2">
                      - Via Transfer -
                    </div>


                  <?php if (($pengantin->json->fitur_bank ?? null) === "1"): ?>
                  <div class="card-atm mt-3">
                      <div class="d-flex justify-content-between">
                        <img loading="lazy"  class="chip" src="<?= $root_path ?>assets/img/Chip.png" />
  
                        <div class="logo-atm">
                            <img loading="lazy"  src="<?= rep_url($pengantin->json->logo_bank) ?>" alt="Bank Logo">
                        </div>
                      </div>

                      <div class="account-number"><?= $pengantin->json->rekening_bank ?></div>

                      <button class="copy-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to Copy" onclick="copyToClipboard(this, '<?= $pengantin->json->rekening_bank ?>')">Copy Nomor</button>

                      <div class="account-name">BANK <b><i><?= $pengantin->json->nama_bank?></b></i> a.n <strong><?= $pengantin->json->nama_rekening ?></strong></div>
                  </div>
                  <?php endif; ?>

                  <?php if (($pengantin->json->fitur_bank2 ?? null) === "1"): ?>
                  <div class="card-atm mt-3">
                      <div class="d-flex justify-content-between">
                        <img loading="lazy"  class="chip" src="<?= $root_path ?>assets/img/Chip.png" />
  
                        <div class="logo-atm">
                            <img loading="lazy"  src="<?= rep_url($pengantin->json->logo_bank2) ?>" alt="Bank Logo">
                        </div>
                      </div>

                      <div class="account-number"><?= $pengantin->json->rekening_bank2 ?></div>

                      <button class="copy-button" data-bs-toggle="tooltip" data-bs-placement="top" title="Click to Copy" onclick="copyToClipboard(this, '<?= $pengantin->json->rekening_bank2 ?>')">Copy Nomor</button>

                      <div class="account-name">BANK <b><i><?= $pengantin->json->nama_bank2?></b></i> a.n <strong><?= $pengantin->json->nama_rekening2 ?></strong></div>
                  </div>
                  <?php endif; ?>
                

                <?php if ($pengantin->json->fitur_qris === "1"){?>
                
                  <div class="form-bank">
                  <div class="text-body-2 mb-3">
                    - Via QRIS -
                  </div>

                  <div class="input-group">
                    <span class="input-group-text custom-input">
                      <i class="bi bi-person"></i>
                      <!-- Bootstrap Icons -->
                    </span>
                    <input type="text" id="bank-name" name="bank-name" class="form-control custom-input"
                      placeholder="Name" />
                  </div>
                  <div class="input-group mt-1">
                    <span class="input-group-text custom-input">
                      <i class="bi bi-cash"></i>
                      <!-- Bootstrap Icons -->
                    </span>
                    <input type="number" id="bank-amount" name="bank-amount" class="form-control custom-input"
                      placeholder="Jumlah Rp." />
                  </div>
                  <div class="input-group mt-1">
                    <span class="input-group-text custom-input">
                      <i class="bi bi-envelope"></i>
                      <!-- Bootstrap Icons -->
                    </span>
                    <input type="email" id="bank-email" name="bank-email" class="form-control custom-input"
                      placeholder="Email" />
                  </div>
                  <button type="submit" id="bank-btn" class="btn-invites mt-3 mx-auto d-block w-100">Proses <i
                      class="bi bi-send"></i></button>
                </div>

                <?php }?>
              </div>
     
            </div>
          </div>
        </div>
      </section>

      <section id="thanks" data-aos="fade-down">
        <div class="custom-container thanks-content">
          <img loading="lazy"  src="<?= rep_url($pengantin->json->foto_sampul_depan) ?>" class="img-couple welcome frame-rounded mb-3" alt="" />
          <div style="padding: 0 50px">

            <div class="text-body-6 mt-3">Merupakan suatu kehormatan dan kebahagiaan bagi kami, apabila
              Bapak/Ibu/Saudara/i berkenan hadir dan
              memberikan doa restu. Atas kehadiran dan doa restunya, kami mengucapkan terima kasih.</div>
            <div>
              <div class="text-body-6 my-5">Kami yang berbahagia.</div>
            </div>
          </div>
          <div>
            <h1 class="header-1 font-heading text-light" style="color: #fff !important;font-size: 22px !important"><?= $pengantin->json->nama_panggilan_pengantin_wanita ?><br>&<br><?= $pengantin->json->nama_panggilan_pengantin_pria ?></h1>
          </div>
      </section>

      <section id="footer-right" class="custom-container">
          
        <?php if ($organizer->status): ?>
            <div class="container" align="center">
                <img loading="lazy" src="<?= rep_url($organizer->data->image) ?>" width="70%" alt="Organizer Image">
            </div>
        <?php endif; ?>
         
        
        
        <div class="text-body-2 text-dark">Designed by Jadi Mudah</div>
        <div class="social-media my-2">
          <a href="https://www.instagram.com/jadimudah.co/#" class="invites-icon">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="http://jadimudah.id" class="invites-icon">
            <i class="bi bi-globe"></i>
          </a>
          <a href="" class="invites-icon">
            <i class="bi bi-whatsapp"></i>
          </a>
        </div>
        <div class="text-body-2 text-dark">
          © jadimudah.id. All rights reserved.
        </div>
      </section>

      <!-- Bottom Navigation
      <nav class="navbar fixed-bottom navbar-expand navbar-light bg-light" style="height: 70px;">
        <div class="container-fluid justify-content-around">
          <a class="nav-link text-center active" href="#main">
            <i class="bi bi-house-door"></i>
            <div class="small">Home</div>
          </a>
          <a class="nav-link text-center" href="#wedding-of">
            <i class="bi bi-people"></i>
            <div class="small">Mempelai</div>
          </a>
          <a class="nav-link text-center" href="#wedding-day">
            <i class="bi bi-calendar-event"></i>
            <div class="small">Event</div>
          </a>
          <a class="nav-link text-center" href="#photo">
            <i class="bi bi-image"></i>
            <div class="small">Gallery</div>
          </a>
          <a class="nav-link text-center" href="#attendance">
            <i class="bi bi-chat-square-heart"></i>
            <div class="small">Wishes</div>
          </a>
        </div>
      </nav> -->
    </section>
  </section>

  <div class="modal fade" id="modal-wg" tabindex="-1" aria-labelledby="modal-wg" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="background-color: #f3f1e9">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="d-flex justify-content-center flex-wrap gap-2">
            <div class="card bg-wg">
              <img loading="lazy"  src="<?= $root_path ?>assets/img/karangan.jpg" class="card-img-top" alt="image wg gift">
              <div class="card-body">
                <p class="card-title text-bold text-white">Karangan Bunga</p>
                <p class="card-text text-white">Rp. 500.000 - Rp.798.000</p>
                <button id="giftbutton" target="_blank" class="btn btn-invites w-100">Give as a give</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>









<!-- maintenance here -->


  





  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="<?= $root_path ?>assets/js/aos.js"></script>
  <script src="<?= $root_path ?>assets/js/splide.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
  <!-- <script src="<?= $root_path ?>assets/js/snow.js"></script> -->
  <!-- <script
      src="https://unpkg.com/@dotlottie/player-component@2.7.12/dist/dotlottie-player.mjs"
      type="module"
    ></script> -->


  <script src="<?= $root_path ?>assets/js/dotlottie-player.js"></script>
  <script src="<?= $root_path ?>assets/js/loader.js?v=21"></script>
  <script src="<?= $root_path ?>assets/js/jquery.loading.min.js"></script>
  <?= view('components/music-qr') ?>
  <script src="<?= $root_path ?>assets/js/script.js?v=11.5"></script>
  
  <script>
    
  </script>
</body>

</html>