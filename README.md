<h1>Proje Açıklaması</h1> 
Bu API, etkinlikleri yönetmek ve kullanıcılar arasında etkileşimleri düzenlemek için geliştirilmiştir. API, kullanıcıların etkinlik oluşturmasına, yorum yapmasına ve etkinliklere katılmasına olanak sağlar. Aşağıda kullanılan önemli bileşenler ve nedenleri açıklanmıştır:

<ul>
    <li>
        1. JWT (JSON Web Token) <br>
        JWT'yi kullanmamın nedeni, API'mizin güvenliğini sağlamaktır. JWT, kullanıcıların API'ye erişim sağlamaları için kimlik doğrulama ve yetkilendirme işlemlerini çok güvenli bir şekilde yapmamıza olanak tanır. Kullanıcılar, giriş yaptıklarında kendilerine bir token verilir ve bu token'ı kullanarak API'ye yaptıkları her istekte kimliklerini doğrularlar. Bu sistem, oturum yönetimini kolaylaştırır ve API'ye yapılan her istekte kimlik doğrulama işlemlerini basit ve güvenli bir şekilde gerçekleştirmemizi sağlar. Böylece, yetkisiz kişilerin API'ye erişimini engeller ve sistemimizin güvenliğini artırır.
    </li>
    <li>2. Laravel Resources <br>
Laravel Resources'u kullanarak API yanıtlarımızı daha düzenli ve anlaşılır hale getirmek istedik. API üzerinden dönen verileri, özellikle etkinlikler, yorumlar ve kullanıcılar gibi karmaşık veri yapılarını, tutarlı bir formatta sunabilmek için bu yapıyı tercih ettik. Örneğin, EventResource sınıfı sayesinde etkinlikler hakkında gerekli tüm bilgileri, yorumları ve katılımcıları uygun bir formatta döndürüyoruz. Bu, hem veri yapısını hem de API yanıtlarını çok daha okunabilir ve anlaşılır hale getirir.</li>
    <li>3. Redis <br>
Redis'i API performansını artırmak amacıyla entegre ettik. Redis, sık erişilen verileri önbelleğe alarak veritabanı sorgularını azaltmamıza yardımcı olur. Bu sayede, veriye erişim süresini önemli ölçüde kısaltır ve API'nin yanıt sürelerini hızlandırır. Etkinlikler gibi sıkça sorgulanan verileri Redis'te saklayarak, her seferinde veritabanına sorgu yapmadan hızlı bir şekilde yanıt alabiliyoruz. Bu da genel API performansını ve kullanıcı deneyimini büyük ölçüde iyileştirir.</li>
</ul>

<h1>API Genel Yapısı</h1> 
<ul>
    <li> <b> Etkinlikler (Events):</b> Etkinliklerin listelenmesi, oluşturulması, güncellenmesi ve silinmesi işlemleri yapılabilir. Her etkinlik, ilgili yorumlar ve katılımcılarla birlikte döndürülür.</li>
    <li> <b>Yorumlar (Comments):</b>  Etkinliklere yapılan yorumları yönetir. Her yorum, ilgili kullanıcı bilgileri ile birlikte döndürülür.</li>
    <li> <b>Katılımcılar (Participants):</b>  Etkinliklere katılan kullanıcıları yönetir. Kullanıcılar etkinliklere katılabilir veya etkinliklerden ayrılabilir.</li>
    
</ul>

<hr>

Bu API, etkinlik yönetimi ve kullanıcı etkileşimlerini modern ve etkili bir şekilde yönetmek için güvenlik, performans ve veri biçimlendirme gibi önemli bileşenleri içerir. JWT kimlik doğrulama, Laravel Resources ile veri biçimlendirme ve Redis önbellekleme ile yüksek performans, API'nin güvenliğini ve verimliliğini sağlar.


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


