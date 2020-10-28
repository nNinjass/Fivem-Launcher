**The project has been terminated. See you in other projects.**

**Proje sonlandırıldı. Başka projelerde görüşmek üzere.**

# Fivem-Launcher  
  
**Özellikleri**  
- Launcher çalıştığı zaman hile programlarını kapatır. Belirli aralıklarla düzenli olarak kontrol eder.  
- Launcher kapandığında, Fivem'i de otomatik olarak kapatır.  
- Steam'in açık olup olmadığını kontrol eder. Açık değilse açar. Steam bilgilerini okur.  
- Sunucu içerisindeki online oyuncu sayısını gösterir.  
- Otomatik güncelleme özelliği ile güncelleme yapar.  
- Discord ve Teamspeak3 linklerinizi uzaktan yönetebilirsiniz.  
- Renkli haritayı oyuncu bilgisayarına kopyalama özelliği vardır. Bu sayede zoom yapıldığındaki hata giderilir.  
- Kendi içerisinde whitelist barındırır. Dilerseniz bunu kullanabilir, dilerseniz kendi whitelist scriptinizi kullanabilirsiniz.  
- PHP dosyalarını Fivem oyun sunucunuzda da çalıştırabilirsiniz, ayrı bir hosting üzerinde de çalıştırabilirsiniz.  
- Oyuncuların ip adreslerini kayıt eder. PHP dosyaları cloudflare arkasında çalışsa da IP adresini doğru alır.  
- Duyurular kısmı sunucudan yönetilebilir.
  
  
**Kurulum**
- C# projesinde ***MainWindow.xaml.cs*** dosyasindaki 5 adet linki kendi sunucunuza gore degistirin  
- C# projesinde dilerseniz tasarimi degistirin ve Release modda derleyin  
- PHP klasorundeki ***ayarlar.php*** dosyasinda bulunan ayarlari degistirin  
- PHP dosyalarini Fivem sunucunuzda ilgili yerlere (XAMPP Apache için muhtemelen ***C:\xampp\htdocs*** klasörü) atabilirsiniz veya ayri bir hosting uzerinde barindirabilirsiniz  
- PHP klasorundaki ***LauncherStatuses.sql*** SQL dosyasi ile veritabani tablolarinizi olusturun  
- PHP klasorundaki ***LauncherStatuses_update1.sql*** SQL dosyasi ile veritabani tablonuzu guncelleyin  
- LauncherKontrol klasorundeki ***server.lua*** dosyasi icerisindeki linkleri kendi PHP sunucunuza gore ayarlayin  
- ***LauncherKontrol*** klasorunu ***resources*** klasorunuze kopyalayin ve *config* dosyanizdan start verin    
  
Discord: [https://discord.gg/e9URnEe](https://discord.gg/e9URnEe)  
