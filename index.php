<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8" />
  <meta name="description" content="Seven Tekstil Üretim Bilgi Sistemi<" />
  <meta name="keyword" content="Seven,bilgi,sistemi,tekstil" />
  <title>Seven Tekstil Üretim Bilgi Sistemi</title>
  <link rel="stylesheet" href="css/style.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
  
</head>

<body>
  <div class="kenarCubugu">
    <div class="yanBaslik">
      <a href="#"><img src="images/logo.png" alt="" /></a>
    </div>
    <div class="kullanici">
      <img src="images/kullanici.png" />
      <div class="bilgi">
        <span class="isim">Yasin Seven</span>
        <span class="unvan">CEO</span>
      </div>
    </div>
    <div class="kontrolPaneli">
      <span>Ana Ekran</span>
      <i class="fas fa-home"></i>
    </div>
    <div class="departmanlar">
      <span>Departmanlar</span>
      <i class="fas fa-door-open"></i>
    </div>
    <div class="calisanlar">
      <span>Çalışanlar</span>
      <i class="fas fa-user-md"></i>
    </div>
    <div class="kaynaklar">
      <span>Kaynaklar</span>
      <i class="fas fa-box"></i>
    </div>
    <div class="patentler">
      <span>Patentler</span>
      <i class="fas fa-scroll"></i>
    </div>
    <div class="hesaplama">
      <span>OEE Hesaplama</span>
      <i class="fas fa-calendar-check"></i>
    </div>
    <div class="odemeler">
      <span>Ödemeler</span>
      <i class="fas fa-wallet"></i>
    </div>
    <div class="raporlar">
      <span>Raporlar</span>
      <i class="fas fa-paste"></i>
    </div>
  </div>
  <div class="icerik">
    <div class="baslik">
      <i class="fas fa-bars"></i>
      <div class="arama">
        <i class="fas fa-search"></i>
        <input type="text" placeholder="Arama..." />
      </div>
      <div class="kullanici">
        <img src="images/kullanici.png" />
        <span>Yasin Seven</span>
        <i class="fas fa-chevron-down"></i>
      </div>
      <div class="bildirim">
        <div class="baslikMektup">
          <i class="far fa-envelope"></i>
          <i class="fas fa-circle"></i>
        </div>
        <div class="baslikCan">
          <i class="far fa-bell"></i>
          <i class="fas fa-circle"></i>
        </div>
        <div class="baslikBayrak">
          <i class="far fa-flag"></i>
          <i class="fas fa-circle"></i>
        </div>
      </div>
      <i class="fas fa-cogs"></i>
    </div>
    <div class="anaEkran">
      <div class="ust">
        <h1>
          Ekipman Etkililik Oranı (OEE) Hesaplama
        </h1>
      </div>
      <div class="alt">
        <form action="ekle.php" method="POST">
          <label>Planlanmış Üretim Süresi:</label>
          <input type="text" name="pus">
          <br>
          <br>
          <label>Plansız Duruş:</label>
          <input type="text" name="pd">
          <br>
          <br>
          <label>Standart Çevrim Zamanı:</label>
          <input type="text" name="scz">
          <br>
          <br>
          <label>Üretim Miktarı:</label>
          <input type="text" name="um">
          <br>
          <br>
          <label>Sağlam Ürün Miktarı:</label>
          <input type="text" name="sum">
          <br>
          <br>
          <label>Toplam Üretim Miktarı:</label>
          <input type="text" name="tum">
          <br>
          <br>
          <input type="submit" value="Hesapla & Kaydet">
        </form>
      </div>
      
    </div>
    <div class="footer">
      <div class="sol">
        <span>Site Haritası</span>
        <span>Üretim Raporları</span>
        <span>Geri Bildirim</span>
        <span>İhaleler</span>
        <span>İletişim - Ulaşım</span></div>
      <span class="copyright">2020 Copyright © Tüm hakları saklıdır. - Yasin Seven</span>
    </div>
  </div>

</body>

</html>