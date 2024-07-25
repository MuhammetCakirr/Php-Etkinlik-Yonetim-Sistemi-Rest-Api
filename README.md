<h1>Proje Açıklaması</h1> 
Bu API, etkinlikleri yönetmek ve kullanıcılar arasında etkileşimleri düzenlemek için geliştirilmiştir. API, kullanıcıların etkinlik oluşturmasına, yorum yapmasına ve etkinliklere katılmasına olanak sağlar. Aşağıda kullanılan önemli bileşenler ve nedenleri açıklanmıştır:

<ul>
    <li>
        1. JWT (JSON Web Token) <br>
        JWT, API'de güvenli bir kimlik doğrulama ve yetkilendirme sistemi sağlamak için kullanılır. Kullanıcılar API'ye erişim sağlamak için JWT token'ları kullanarak kimliklerini doğrularlar. Bu, kullanıcıların oturumlarını         yönetmeye ve API'ye yapılan her istekte kimlik doğrulama yapmaya olanak tanır. JWT'nin kullanımı, API'nin güvenliğini artırır ve yetkisiz erişimleri engeller.
    </li>
    <li>2. Laravel Resources <br>
Laravel Resources (API Resources), API yanıtlarının biçimlendirilmesini sağlar. Etkinlikler, yorumlar ve kullanıcılar gibi veriler, API yanıtlarında düzenli ve anlaşılır bir formatta sunulur. Bu, verilerin hem okunabilirliğini artırır hem de API yanıtlarının tutarlılığını sağlar. Örneğin, EventResource sınıfı, etkinliklerin yorumlar ve katılımcılarla birlikte uygun formatta döndürülmesini sağlar.</li>
    <li>3. Redis <br>
Redis, API performansını artırmak ve yanıt sürelerini azaltmak için kullanılan bir önbellekleme sistemi olarak entegre edilmiştir. Redis, etkinlik verilerini ve diğer sık erişilen verileri önbelleğe alarak veritabanı sorgularını azaltır. Bu, verilerin hızlı bir şekilde erişilmesini ve API'nin yüksek performansla çalışmasını sağlar. Önbellekten veri alındığında, Redis'in etkili bir şekilde çalıştığını ve performansı artırdığını görürsünüz.</li>
</ul>


<h1>API Genel Yapısı</h1> 
<ul>
    <li>Etkinlikler (Events): Etkinliklerin listelenmesi, oluşturulması, güncellenmesi ve silinmesi işlemleri yapılabilir. Her etkinlik, ilgili yorumlar ve katılımcılarla birlikte döndürülür.</li>
    <li>Yorumlar (Comments): Etkinliklere yapılan yorumları yönetir. Her yorum, ilgili kullanıcı bilgileri ile birlikte döndürülür.</li>
    <li>Katılımcılar (Participants): Etkinliklere katılan kullanıcıları yönetir. Kullanıcılar etkinliklere katılabilir veya etkinliklerden ayrılabilir.</li>
    
</ul>

<hr>

Bu API, etkinlik yönetimi ve kullanıcı etkileşimlerini modern ve etkili bir şekilde yönetmek için güvenlik, performans ve veri biçimlendirme gibi önemli bileşenleri içerir. JWT kimlik doğrulama, Laravel Resources ile veri biçimlendirme ve Redis önbellekleme ile yüksek performans, API'nin güvenliğini ve verimliliğini sağlar.


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


